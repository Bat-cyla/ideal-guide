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


use Tygh\Tygh;
use Tygh\Enum\NotificationSeverity;
use Tygh\Enum\YesNo;

if (!defined('BOOTSTRAP')) {
    die('Access denied');
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($mode == 'is_verified') {
        if (defined('AJAX_REQUEST')) {
            $email = $_REQUEST['email'];
            /** @var \Tygh\Ajax $ajax */
            $is_verified = db_get_field('SELECT is_verified_guest FROM ?:cp_email_verification WHERE email = ?s', $email);
            if ($is_verified == YesNo::YES) {
                $result = true;
            } else {
                $result = false;
            }
            Tygh::$app['ajax']->assign('is_verified', $result);
        }
    }
}

if ($mode == 'check') {

    $token = $_REQUEST['token'];
    $email = fn_cp_email_verification_get_email($_REQUEST);
    if (empty($token) || empty($email)) {
        fn_set_notification(NotificationSeverity::WARNING, __('important'), __('cp_email_verification.token_is_invalid'));
        return [CONTROLLER_STATUS_REDIRECT, 'auth.login_form'];
    }
    $user_id = fn_cp_email_verification_get_user_id($email);
    if ($user_id) {
        fn_cp_email_verification_user_verified($email);
        fn_login_user($user_id, true);
        fn_set_notification(NotificationSeverity::NOTICE, __('notice'), __('cp_email_verification.after_success_verification'));
        return [CONTROLLER_STATUS_REDIRECT, 'profiles.update'];
    }
    if (empty($user_id)) {
        fn_cp_email_verification_guest_verified($email);
        fn_set_notification(NotificationSeverity::NOTICE, __('notice'), __('cp_email_verification.after_success_verification'));
        return [CONTROLLER_STATUS_REDIRECT, 'checkout.checkout'];
    }
}
























