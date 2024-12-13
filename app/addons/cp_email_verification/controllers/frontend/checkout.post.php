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
use Tygh\Tygh;
use Tygh\Enum\YesNo;
use Tygh\Enum\NotificationSeverity;
use Tygh\Enum\Addons\CpEmailVerification\UserTypes;


if (!defined('BOOTSTRAP')) {
    die('Access denied');
}

$guest_verification = Registry::get('addons.cp_email_verification.verification_guest_orders');
$guest_order_setting = Registry::get('settings.Checkout.disable_anonymous_checkout');
$view = Tygh::$app['view'];

if ($mode == 'cp_email_verification') {
    if (defined('AJAX_REQUEST')) {
        $email = $_REQUEST['email'];
        if (fn_cp_email_verification_check_verification_status($email)) {
            $view->assign('cp_verified', YesNo::YES);
            return [CONTROLLER_STATUS_REDIRECT, 'checkout.place_order'];
        } else {
            $view->assign('cp_verified', YesNo::NO);
        }
        $type = UserTypes::GUEST;
        $link = fn_cp_email_verification_create_verification_link($email);
        fn_cp_email_verification_send_email_notifications($email, $link, $type);
        $view->display('addons/cp_email_verification/views/guest_verification.tpl');
    } else {
        fn_set_notification(NotificationSeverity::WARNING, __('important'), __('cp_email_verification.token_is_invalid'));
        return [CONTROLLER_STATUS_REDIRECT, 'checkout.checkout'];
    }
}

if ($mode == 'cp_resend_email') {
    if (defined('AJAX_REQUEST')) {
        $email = $_REQUEST['email'];
        $type = UserTypes::GUEST;
        $link = fn_cp_email_verification_create_verification_link($email);
        fn_cp_email_verification_send_email_notifications($email, $link, $type);
        Tygh::$app['ajax']->assign('done', true);
    }
}

if ($mode === 'checkout') {
    if (defined('AJAX_REQUEST')) {
        $email = $_REQUEST['email'];
        if (fn_cp_email_verification_check_verification_status($email)) {
            Tygh::$app['ajax']->assign('all_done', YesNo::YES);
        } else {
            Tygh::$app['ajax']->assign('all_done', YesNo::NO);
        }
    } else {
        $user_data = $view->getTemplateVars('user_data');
        $email = $user_data['email'];
        if (fn_cp_email_verification_check_verification_status($email)) {
            $view->assign('cp_verified', YesNo::YES);
        } else {
            $view->assign('cp_verified', YesNo::NO);
        }
    }

}
