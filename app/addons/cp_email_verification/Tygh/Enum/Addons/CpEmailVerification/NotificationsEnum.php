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

namespace Tygh\Enum\Addons\CpEmailVerification;
class NotificationsEnum
{
    /**
     * Notification group type
     *
     * @const string CP_EMAIL_VERIFICATION
     */
    const CP_EMAIL_VERIFICATION = 'cp_email_verification';
    /**
     * User Email notifications
     *
     * @const string EMAIL_NOTIFICATIONS_USER
     */
    const EMAIL_NOTIFICATIONS_USER = 'cp_email_verification.notifications.email_notifications_user';


    /**
     * User Email notifications event name
     *
     * @const string EMAIL_NOTIFICATIONS_EVENT_NAME
     */
    const EMAIL_NOTIFICATIONS_USER_EVENT_NAME = 'cp_email_verification.event.email_notifications_user.name';


    /**
     * User Email notifications notification template code
     *
     * @const string EMAIL_NOTIFICATIONS_T_C
     */
    const EMAIL_NOTIFICATIONS_USER_T_C = 'cp_email_verification.notifications.email_notifications_user_t_c';


    /**
     * User Email notifications notification legacy template
     *
     * @const string EMAIL_NOTIFICATIONS_L_T
     */
    const EMAIL_NOTIFICATIONS_USER_L_T = 'addons/cp_email_verification/email_notifications_user.tpl';


    /**
     * Guest Email notifications
     *
     * @const string EMAIL_NOTIFICATIONS_USER
     */
    const EMAIL_NOTIFICATIONS_GUEST = 'cp_email_verification.notifications.email_notifications_guest';


    /**
     * Guest Email notifications event name
     *
     * @const string EMAIL_NOTIFICATIONS_EVENT_NAME
     */
    const EMAIL_NOTIFICATIONS_GUEST_EVENT_NAME = 'cp_email_verification.event.email_notifications_guest.name';


    /**
     * Guest Email notifications notification template code
     *
     * @const string EMAIL_NOTIFICATIONS_T_C
     */
    const EMAIL_NOTIFICATIONS_GUEST_T_C = 'cp_email_verification.notifications.email_notifications_guest_t_c';


    /**
     * User Email notifications notification legacy template
     *
     * @const string EMAIL_NOTIFICATIONS_L_T
     */
    const EMAIL_NOTIFICATIONS_GUEST_L_T = 'addons/cp_email_verification/email_notifications_guest.tpl';
}
