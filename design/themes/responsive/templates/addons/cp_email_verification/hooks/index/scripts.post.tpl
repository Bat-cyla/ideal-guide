{if $runtime.controller == "checkout" && $runtime.mode == "checkout"}
{$c_url = $config.current_url|escape:url}
    {$link_timer=$addons.cp_email_verification.link_verification_timer}

<script type="text/javascript">
    (function (_, $) {
        _.tr('cp_email_verification.checkout.guest_verification.popup.title',
            '{__("cp_email_verification.checkout.guest_verification.popup.title")|escape:"javascript"}');
        _.cp_verified = '{$cp_verified}';
        _.link_timer = '{$link_timer}'

    }(Tygh, Tygh.$));
</script>

{/if}
{script src="js/addons/cp_email_verification/func.js"}