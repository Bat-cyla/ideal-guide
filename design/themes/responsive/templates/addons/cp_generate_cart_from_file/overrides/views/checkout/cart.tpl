{script src="js/tygh/exceptions.js"}
{script src="js/tygh/checkout.js"}
{script src="js/tygh/cart_content.js"}

<div id="cart_main">
    {if !$cart|fn_cart_is_empty}
        {include file="views/checkout/components/cart_content.tpl"}
    {else}
        <p class="ty-no-items">{__("text_cart_empty")}</p>

        <div class="buttons-container ty-cart-content__bottom-buttons clearfix">
            {include file="buttons/continue_shopping.tpl" but_href=$continue_url|fn_url but_role="submit"}
            {$import_href="cp_generate_cart_from_file.view"|fn_url}
            {include
            file="buttons/button.tpl"
            but_text=__("cp_generate_cart_from_file.load_template_file")
            but_meta="ty-btn__primary cm-process-items btn cm-dialog-opener cm-dialog-auto-size"
            but_target_form="cp_generate_cart_modal"
            but_href="$import_href"
            title="{__("cp_generate_cart_from_file.cp_generate_view")}"
            }
        </div>
    {/if}
    <!--cart_main--></div>
{include file='addons/cp_generate_cart_from_file/components/variations_dialog_opener.tpl'}