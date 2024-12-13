<?php
/*****************************************************************************
 *                                                        © 2013 Cart-Power   *
 *           __   ______           __        ____                             *
 *          / /  / ____/___ ______/ /_      / __ \____ _      _____  _____    *
 *      __ / /  / /   / __ `/ ___/ __/_____/ /_/ / __ \ | /| / / _ \/ ___/    *
 *     / // /  / /___/ /_/ / /  / /_/_____/ ____/ /_/ / |/ |/ /  __/ /        *
 *    /_//_/   \____/\__,_/_/   \__/     /_/    \____/|__/|__/\___/_/         *
 *                                                                            *
 *                                                                            *
 * -------------------------------------------------------------------------- *
 * This is commercial software, only users who have purchased a valid license *
 * and  accept to the terms of the License Agreement can install and use this *
 * program.                                                                   *
 * -------------------------------------------------------------------------- *
 * website: https://store.cart-power.com                                      *
 * email:   sales@cart-power.com                                              *
 ******************************************************************************/

use Tygh\Enum\YesNo;
use Tygh\Enum\Addons\CpVerificationStatus\StatusTypes;
use Tygh\Registry;
use Tygh\Tygh;
use Tygh\Enum\NotificationSeverity;
use Tygh\Enum\Addons\CpEmailVerification\NotificationsEnum;
use Tygh\Enum\Addons\CpEmailVerification\UserTypes;

defined('BOOTSTRAP') or die('Access denied');

/**
 * Creates 'cp_email_verification' table and alters 'cp_email_verified' field to '?:users' if not exists
 *
 * @return void
 */
function fn_cp_email_verification_install(): void
{
    db_query(
        "CREATE TABLE IF NOT EXISTS ?:cp_email_verification (
                token varchar(15),
                email varchar(128) NOT NULL DEFAULT '',
                is_verified_guest INT(1) DEFAULT ?i,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                last_send_email TIMESTAMP, 
                CONSTRAINT unique_token UNIQUE(token, email),
                PRIMARY KEY (token)
            ) Engine=MyISAM DEFAULT CHARSET UTF8;"
        , StatusTypes::NOT_VERIFIED);


    if (!fn_cp_email_verification_if_column_exist('?:users', 'cp_email_verified')) {
        db_query("ALTER TABLE ?:users ADD COLUMN cp_email_verified INT(1) DEFAULT ?i", StatusTypes::EXISTED);
    }
}

/**
 * Deletes users verification data during deleting addon
 *
 * @return void
 */
function fn_cp_email_verification_uninstall(): void
{
    $delete_verification_data = Registry::get('addons.cp_email_verification.delete_users_verification_data');

    db_query("DROP TABLE IF EXISTS ?:cp_email_verification");

    if ($delete_verification_data == YesNo::YES) {
        db_query("ALTER TABLE ?:users DROP COLUMN cp_email_verified");
    }
}

/* Hooks */

function fn_cp_email_verification_login_user_pre(&$user_id, $udata, $auth, $condition)
{
    //Connecting to hook 'login_user_pre' for implementation of 'аuthorization_without_verification' setting logic
    //Assign addon settings to variable
    $cp_addon_settings = Registry::get('addons.cp_email_verification');
    //Checking if setting 'аuthorization_without_verification' off
    if (($cp_addon_settings['аuthorization_without_verification'] == YesNo::NO)
        && (!empty($auth['act_as_area']))
        //Checking user type to interact with customers
        && ($auth['act_as_area'] == UserTypes::CUSTOMER)) {
        //Assign 'verified_old_accounts' setting to variable
        $cp_verification_setting = $cp_addon_settings['verified_old_accounts'];
        //Receive user email verification status
        $cp_verification_status = db_get_field('SELECT cp_email_verified FROM ?:users WHERE user_id=?s', $user_id);
        //Checking if user email verified in accordance with 'verified_old_accounts' setting
        if (!fn_cp_email_verification_check_verification_setting($cp_verification_status, $cp_verification_setting)) {
            //If 'аuthorization_without_verification' setting off and user email is not verified, logging stop
            $user_id = 0;
        }
    }
}


function fn_cp_email_verification_update_profile($action, $user_data, $current_user_data)
{
    if ($action === 'add' && $user_data['user_type'] == UserTypes::CUSTOMER) {
        $user_id = $user_data['user_id'];
        $data = [
            'cp_email_verified' => StatusTypes::NOT_VERIFIED,
        ];
        db_query('UPDATE ?:users SET cp_email_verified=?u WHERE user_id=?i', $data, $user_id);
        fn_set_notification(NotificationSeverity::WARNING, __('important'), __('cp_email_verification.after_success_registration'));
        $link = fn_cp_email_verification_create_verification_link($user_data['email']);
        fn_cp_email_verification_send_email_notifications($user_data['email'], $link, $user_data['user_type']);
    }
}

function fn_cp_email_verification_place_order($order_id, $action, $order_status, $cart, $auth)
{
    if ($auth['user_id'] == 0 && Registry::get('addons.cp_email_verification.verification_guest_orders') == YesNo::YES) {
        $link = fn_cp_email_verification_create_verification_link($cart['user_data']['email']);
        fn_cp_email_verification_send_email_notifications($cart['user_data']['email'], $link, UserTypes::GUEST);
    }
}

/* Functions */


/**
 * Checks whether the column exists or not
 *
 * @param string $table Table name
 * @param string $column Column name
 *
 * @return bool
 */
function fn_cp_email_verification_if_column_exist($table, $column): bool
{
    $db_name = Registry::get('config.db_name');

    $result = db_get_field("SELECT * FROM information_schema.COLUMNS
                                    WHERE TABLE_SCHEMA = ?s
                                    AND TABLE_NAME = '$table'
                                    AND COLUMN_NAME = ?s", $db_name, $column);

    if (empty($result)) {
        return false;
    }
    return true;
}

/**
 * Creates a verification link
 *
 * @param string $email User email
 *
 * @return string
 */
function fn_cp_email_verification_create_verification_link($email): string
{
    $token_info = fn_cp_email_verification_get_token_info($email);
    $link_verification = fn_url('cp_email_verification.check&token=' . $token_info['token']);
    return $link_verification;
}

/**
 * Creates a verification token
 *
 * @param integer $length Token length
 *
 * @return string
 */
function fn_cp_email_verification_generate_token(int $length = TOKEN_LENGTH): string
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $characters_length = strlen($characters);
    $token = '';
    for ($i = 0; $i < $length; $i++) {
        $token .= $characters[random_int(0, $characters_length - 1)];
    }

    if (db_get_field('SELECT COUNT(*) FROM ?:cp_email_verification WHERE token = ?s', $token)) {
        $token = fn_cp_email_verification_generate_token();
    }

    return $token;
}

/**
 * Updates time of verification
 *
 * @param string $email User email
 *
 * @return void
 */
function fn_cp_email_verification_update_link_timestamp($email): void
{
    db_query('UPDATE ?:cp_email_verification SET created_at = CURRENT_TIMESTAMP WHERE email = ?s', $email);
}

/**
 * Gets email by params
 *
 * @param array $params Params
 *
 * @return string
 */
function fn_cp_email_verification_get_email(array $params = []): string
{
    $conditions = '';
    if (!empty($params['token'])) {
        $conditions .= db_quote(' AND token = ?s AND created_at > ?s', $params['token'], date('Y-m-d H:i:s', strtotime('-' . Registry::get('addons.cp_email_verification.link_verification_lifetime') . 'hours')));
    }
    if (!empty($params['user_login'])) {
        $conditions .= db_quote(' AND email = ?s AND created_at < ?s', $params['user_login'], date('Y-m-d H:i:s', strtotime('-' . Registry::get('addons.cp_email_verification.link_verification_timer') . 'seconds')));
    }
    $email = db_get_field('SELECT email FROM ?:cp_email_verification WHERE 1 ?p', $conditions);

    return $email;
}

/**
 * Updates user email verification status to verified
 *
 * @param string $email User email
 *
 * @return void
 */
function fn_cp_email_verification_user_verified(string $email): void
{

    db_query('UPDATE ?:users SET cp_email_verified = ?s WHERE email = ?s', StatusTypes::VERIFIED, $email);

}

/**
 * Updates user email verification status to not verified
 *
 * @param string $email User email
 *
 * @return void
 */
function fn_cp_email_verification_user_not_verified(string $email): void
{
    db_query('UPDATE ?:users SET cp_email_verified = ?s WHERE email = ?s', StatusTypes::NOT_VERIFIED, $email);
}

/**
 * Updates email verification status to verified during guest order
 *
 * @param string $email User email
 *
 * @return void
 */
function fn_cp_email_verification_guest_verified(string $email): void
{
    db_query('UPDATE ?:cp_email_verification SET is_verified_guest = ?s WHERE email = ?s', StatusTypes::VERIFIED, $email);
}

/**
 * Gets user id by email
 *
 * @param string $email User email
 *
 * @return string
 */
function fn_cp_email_verification_get_user_id(string $email): string
{
    return db_get_field('SELECT user_id FROM ?:users WHERE email = ?s', $email);
}

/**
 * Sends email notification
 *
 * @param string $email User email
 * @param string $link_verification Verification link
 * @param string $type User type
 *
 * @return void
 */
function fn_cp_email_verification_send_email_notifications(string $email, string $link_verification, string $type): void
{
    $last_send_email = db_get_field('SELECT last_send_email FROM ?:cp_email_verification WHERE email = ?s', $email);


    /** @var \Tygh\Notifications\EventDispatcher $event_dispatcher */

    if (!(fn_cp_email_verification_check_verification_status($email)) &&
        ((empty($last_send_email) || ($last_send_email < date("Y-m-d H:i:s", strtotime('-' . Registry::get('addons.cp_email_verification.link_verification_timer') . 'seconds')))))
    ) {

        $event_dispatcher = Tygh::$app['event.dispatcher'];

        $notification = [
            'email' => $email,
            'link_verification' => $link_verification,
            'url_storefront' => fn_url(),
        ];
        if ($type == UserTypes::CUSTOMER) {
            $template = NotificationsEnum::EMAIL_NOTIFICATIONS_USER;
        } elseif ($type == UserTypes::GUEST) {
            $template = NotificationsEnum::EMAIL_NOTIFICATIONS_GUEST;
        }

        $event_dispatcher->dispatch($template, $notification);
        db_query('UPDATE ?:cp_email_verification SET last_send_email = CURRENT_TIMESTAMP WHERE email = ?s', $email);
    }
}

/**
 * Gets token info
 *
 * @param string $email User email
 *
 * @return array
 */
function fn_cp_email_verification_get_token_info(string $email): array
{
    $token_info = db_get_row('SELECT token, last_send_email FROM ?:cp_email_verification WHERE email = ?s AND created_at > ?s',
        $email, date('Y-m-d H:i:s', strtotime('-' . Registry::get('addons.cp_email_verification.link_verification_lifetime') . 'hours')));

    if (empty($token_info['token'])) {
        $token = fn_cp_email_verification_generate_token();
        $token_info = array(
            'email' => $email,
            'token' => $token
        );
        db_query('INSERT INTO ?:cp_email_verification (email, token) VALUES(?s, ?s) ON DUPLICATE KEY UPDATE token = ?s', $token_info['email'], $token_info['token'], $token);
    }
    return $token_info;
}

/**
 * Checks verification status by email
 *
 * @param string $email User email
 *
 * @return bool
 */
function fn_cp_email_verification_check_verification_status(string $email): bool
{
    $cp_verification_setting = Registry::get('addons.cp_email_verification.verified_old_accounts');

    $user_id = fn_cp_email_verification_get_user_id($email);

    if (!empty($user_id)) {
        $data = [
            'user_id' => $user_id,
            'email' => $email,
        ];
        $cp_verification_status = db_get_field('SELECT cp_email_verified FROM ?:users WHERE ?w', $data);
        return fn_cp_email_verification_check_verification_setting($cp_verification_status, $cp_verification_setting);
    } else {
        $cp_verification_status = db_get_field('SELECT is_verified_guest FROM ?:cp_email_verification WHERE email = ?s', $email);
        if ($cp_verification_status == StatusTypes::VERIFIED) {
            return true;
        }
    }
    return false;
}

/**
 * Checks verification status depending on 'verified_old_accounts' setting
 *
 * @param string $cp_verification_setting Value of 'verified_old_accounts' setting
 * @param int $cp_verification_status Verification status
 *
 * @return bool
 */
function fn_cp_email_verification_check_verification_setting(int $cp_verification_status, string $cp_verification_setting): bool
{
    switch ($cp_verification_setting) {
        case YesNo::YES:
            if ($cp_verification_status == StatusTypes::VERIFIED || $cp_verification_status == StatusTypes::EXISTED) {
                return true;
            }
            return false;
        case YesNo::NO:
            if ($cp_verification_status === StatusTypes::VERIFIED) {
                return true;
            }
            return false;
    }
    return false;
}

/**
 * Deletes not verified users
 *
 * @param array $addon_settings Array of addon settings
 *
 * @return void
 */
function fn_cp_email_verification_delete_not_verified_users(array $addon_settings): void
{
    $current_date = time();
    $cp_user_timeout = $current_date - (integer)$addon_settings['delete_after_time'] * SECONDS_IN_DAY;
    $join = db_quote(' LEFT JOIN ?:orders ON ?:users.user_id= ?:orders.user_id ');
    $condition = db_quote(' AND ?:users.timestamp<?i', $cp_user_timeout);
    if ($addon_settings['verified_old_accounts'] == YesNo::NO) {
        $data = [
            StatusTypes::NOT_VERIFIED,
            StatusTypes::EXISTED,
        ];
        $condition .= db_quote(' AND ?:users.cp_email_verified IN (?a)', $data);
    } else {
        $condition .= db_quote(' AND ?:users.cp_email_verified=?i', StatusTypes::NOT_VERIFIED);
    }
    $user_ids = db_get_fields('
                            SELECT ?:users.user_id 
                            FROM ?:users ?p
                            WHERE ?:users.user_id NOT IN 
                            (SELECT ?:orders.user_id FROM ?:orders) ?p', $join, $condition);
    db_query('DELETE FROM ?:users WHERE user_id IN (?a)', $user_ids);
}
























