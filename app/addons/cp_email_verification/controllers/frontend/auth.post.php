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
use Tygh\Enum\UserTypes;

if (!defined('BOOTSTRAP')) {
    die('Access denied');
}

if ($mode == 'login') {
    if (empty(Tygh::$app['session']['cart']['user_data']['user_id'])) {
        if (!empty(Tygh::$app['session']['notifications'])) {
            foreach (Tygh::$app['session']['notifications'] as $k => $v) {
                if ($v['message'] == __('successful_login')) {
                    unset(Tygh::$app['session']['notifications'][$k]);
                }
            }
        }
        if (!empty($_REQUEST['user_login']) && $auth['user_type'] == UserTypes::CUSTOMER) {
            $link = fn_cp_email_verification_create_verification_link($_REQUEST['user_login']);
            $type = Tygh::$app['session']['auth']['user_type'];

            fn_cp_email_verification_send_email_notifications($_REQUEST['user_login'], $link, $type);
        }
        fn_set_notification(NotificationSeverity::ERROR, __('error'), __('cp_email_verification.verify_for_authentication'));
    }
}
