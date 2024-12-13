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
use Tygh\Enum\YesNo;
use Tygh\Registry;

if (!defined('BOOTSTRAP')) {
    die('Access denied');
}

$view = Tygh::$app['view'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($mode == 'update') {
        $user_data = $_REQUEST['user_data'];

        $user_email = $user_data['email'];
        if (empty($user_email)) {
            fn_set_notification('E', __('error'), __('error_email_not_found'));
        }
        if (isset($user_data['cp_email_verified'])) {
            fn_cp_email_verification_user_verified($user_email);

        }
        if (!isset($user_data['cp_email_verified'])) {
            fn_cp_email_verification_user_not_verified($user_email);
        }
    }
}

if ($mode === 'update') {
    $user_data = $view->getTemplateVars('user_data');
    $user_email = $user_data['email'];

    if (!empty($user_email && fn_cp_email_verification_check_verification_status($user_email))) {
        $cp_email_verified = true;
    } else {
        $cp_email_verified = false;
    }
    $user_data['cp_email_verified'] = $cp_email_verified;

    $view->assign('user_data', $user_data);
}