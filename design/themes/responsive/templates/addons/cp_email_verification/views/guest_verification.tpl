<div id="email_verification">
    <div class="cp_email_verification_main">
        <div class="cp_notification_block">
            <div class="ty-product-notification__body cm-notification-max-height">
                {__("cp_email_verification.checkout.guest_verification.popup.message", ["[email]" => $email]) nofilter}
            </div>
            <div class="ty-product-notification__body cm-notification-max-height hidden" id="notificationBlock">
                <div class="cp_warning_notification">{__("cp_email_verification.checkout.guest_verification.popup.warning")}</div>
            </div>
        </div>
        <div class="buttons-container">
            <div class="cp_but">
            {include file="buttons/button.tpl"
            but_text=__("checkout.email_exists.popup.cancel_btn")
            but_meta="cm-dialog-closer"
            }
            </div>
            <div class="cp_but">
            {include file='addons/cp_email_verification/buttons/button.tpl'
            }
            </div>

            {include file="buttons/button.tpl"
            but_meta="ty-btn__secondary all_done_btn"
            but_role="submit"
            but_text=__('cp_email_verification.checkout.guest_verification.popup.button.all_done')
            }
        </div>
    </div>
    <!--email_verification--></div>