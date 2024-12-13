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

use Tygh\Enum\UserTypes;
use Tygh\Notifications\DataValue;
use Tygh\Notifications\Transports\Mail\MailTransport;
use Tygh\Notifications\Transports\Mail\MailMessageSchema;
use Tygh\Enum\Addons\CpEmailVerification\NotificationsEnum;
use Tygh\Addons\CpEmailVerification\Notifications\DataProviders\CpEmailVerificationDataProvider;
use Tygh\Enum\SiteArea;

if (!defined('BOOTSTRAP')) {
    die('Access denied');
}
$schema[NotificationsEnum::EMAIL_NOTIFICATIONS_USER] = [
    'id' => 'cp_email_verification.send_user_mail',
    'group' => NotificationsEnum::CP_EMAIL_VERIFICATION,
    'name' => [
        'template' => NotificationsEnum::EMAIL_NOTIFICATIONS_USER_EVENT_NAME,
        'params' => [],
    ],
    'data_provider' => [CpEmailVerificationDataProvider::class, 'factory'],
    'receivers' => [
        UserTypes::CUSTOMER => [
            MailTransport::getId() => MailMessageSchema::create([
                'area' => SiteArea::STOREFRONT,
                'from' => 'company_site_administrator',
                'to' => DataValue::create('email'),
                'template_code' => NotificationsEnum::EMAIL_NOTIFICATIONS_USER_T_C,
                'legacy_template' => NotificationsEnum::EMAIL_NOTIFICATIONS_USER_L_T,
                'language_code' => DataValue::create('lang_code', CART_LANGUAGE),
            ])
        ],
    ],
];

$schema[NotificationsEnum::EMAIL_NOTIFICATIONS_GUEST] = [
    'id' => 'cp_email_verification.send_guest_mail',
    'group' => NotificationsEnum::CP_EMAIL_VERIFICATION,
    'name' => [
        'template' => NotificationsEnum::EMAIL_NOTIFICATIONS_GUEST_EVENT_NAME,
        'params' => [],
    ],
    'data_provider' => [CpEmailVerificationDataProvider::class, 'factory'],
    'receivers' => [
        UserTypes::CUSTOMER => [
            MailTransport::getId() => MailMessageSchema::create([
                'area' => SiteArea::STOREFRONT,
                'from' => 'company_site_administrator',
                'to' => DataValue::create('email'),
                'template_code' => NotificationsEnum::EMAIL_NOTIFICATIONS_GUEST_T_C,
                'legacy_template' => NotificationsEnum::EMAIL_NOTIFICATIONS_GUEST_L_T,
                'language_code' => DataValue::create('lang_code', CART_LANGUAGE),
            ])
        ],
    ],
];

return $schema;