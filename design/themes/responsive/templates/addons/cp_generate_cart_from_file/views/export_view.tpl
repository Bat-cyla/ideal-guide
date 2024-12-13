<div id="cp_export_cart_modal">
    <form action="{""|fn_url}" method="post" name="cp_unload_file_form" class="form-horizontal " enctype="multipart/form-data">
        <div class="cp-row">
            <div class="cp-row-item-main">
                {if $export_format == 'pdf_csv'}
                <div class="cp-input">
                    <input type="radio" name="format" id="formatChoice1" value="csv_table" checked />
                    <label for="formatChoice1">{__("cp_generate_cart_from_file.cp_csv_table")}</label>
                </div>
                <div class="cp-input">
                    <input type="radio" name="format" id="formatChoice2" value="pdf_cp" />
                    <label for="formatChoice2">{__("cp_generate_cart_from_file.cp_pdf_commercial_proposal")}</label>
                </div>
                {else}
                    <input type="hidden" name="format" value="{$export_format}">
                {/if}
                <div class="cp-message">
                    {__("cp_generate_cart_from_file.cp_export_view_message")}
                </div>

                {if $addons.cp_honeypot_captcha}
                    {include file= "addons/cp_honeypot_captcha/components/honeypot_field.tpl" page_type='E'}
                {/if}
                {include file="common/image_verification.tpl" option="cp_export"}
                <div class="buttons-container ty-cart-content__bottom-buttons clearfix">
                    {include file="buttons/button.tpl"
                    but_role="submit"
                    but_text=__("download")
                    but_name="dispatch[cp_generate_cart_export_file.generate]"
                    but_meta="ty-btn__primary cm-process-items cm-dialog-closer"
                    but_target_form="cp_unload_file_form"}

                    <input type="email" id="emailField" name="email" class="cp-email-field">
                    <label for="emailField"></label>

                    {include file="buttons/button.tpl"
                    but_role="submit"
                    but_name="dispatch[cp_generate_cart_export_file.send_mail]"
                    but_text=__("send")
                    but_id="cp-send-mail-button"
                    but_meta="ty-btn__primary cm-process-items cm-dialog-closer"}
                </div>
            </div>
        </div>
    </form>
    <!--cp_export_cart_modal--></div>