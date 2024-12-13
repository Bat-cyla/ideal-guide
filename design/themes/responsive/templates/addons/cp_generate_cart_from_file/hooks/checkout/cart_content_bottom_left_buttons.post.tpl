{$import_href="cp_generate_cart_from_file.view"|fn_url}
{include
file="buttons/button.tpl"
but_text=__("cp_generate_cart_from_file.load_template_file")
but_meta="ty-btn__primary cm-process-items btn cm-dialog-opener cm-dialog-auto-size cm-dialog-destroy-on-close"
but_target_form="cp_generate_cart_modal"
but_href="$import_href"
but_title="{__("cp_generate_cart_from_file.cp_generate_view")}"
}
{$export_href="cp_generate_cart_export_file.view"|fn_url}
{include
file="buttons/button.tpl"
but_text=__("cp_generate_cart_from_file.unload_template_file")
but_meta="ty-btn__primary cm-process-items btn cm-dialog-opener cm-dialog-auto-size {if $addons.cp_generate_cart_from_file.PDF_export==='N' & $addons.cp_generate_cart_from_file.CSV_export==="N"}hidden {/if}cm-dialog-destroy-on-close"
but_target_form="cp_export_cart_modal"
but_href="$export_href"
but_title="{__("cp_generate_cart_from_file.cp_export_view")}"
}
{include file='addons/cp_generate_cart_from_file/components/variations_dialog_opener.tpl'}