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

use Tygh\Registry;
use Tygh\Enum\YesNo;
use Tygh\Enum\NotificationSeverity;

if (!defined('BOOTSTRAP')) {
    die('Access denied');
}


if ($mode == 'send_email') {
    $cp_addon_settings = Registry::get('addons.cp_email_verification');
    if (!empty($_REQUEST['cron_password']) && $_REQUEST['cron_password'] == $cp_addon_settings['cron_password']) {
        if ($cp_addon_settings['delete_not_verification_account'] == YesNo::YES) {
            fn_cp_email_verification_delete_not_verified_users($cp_addon_settings);
        } else {
            fn_set_notification(NotificationSeverity::WARNING, __('warning'), __('cp_email_verification.cp_unable_to_execute_command'));
        }
    }
}