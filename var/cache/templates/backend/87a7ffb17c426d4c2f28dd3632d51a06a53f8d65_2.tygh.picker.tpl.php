<?php
/* Smarty version 4.1.1, created on 2024-12-13 13:39:42
  from '/var/www/html/projects/cp_email_verification/design/backend/templates/views/companies/components/picker/picker.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_675c0eee20a197_70055660',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87a7ffb17c426d4c2f28dd3632d51a06a53f8d65' => 
    array (
      0 => '/var/www/html/projects/cp_email_verification/design/backend/templates/views/companies/components/picker/picker.tpl',
      1 => 1734079224,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/companies/components/picker/item.tpl' => 1,
  ),
),false)) {
function content_675c0eee20a197_70055660 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/projects/cp_email_verification/app/functions/smarty_plugins/modifier.to_json.php','function'=>'smarty_modifier_to_json',),));
\Tygh\Languages\Helper::preloadLangVars(array('type_to_search_or_click_button','none'));
?>

<?php $_smarty_tpl->_assignInScope('picker_id', (($tmp = $_smarty_tpl->tpl_vars['picker_id']->value ?? null)===null||$tmp==='' ? uniqid() ?? null : $tmp));
$_smarty_tpl->_assignInScope('picker_text_key', (($tmp = $_smarty_tpl->tpl_vars['picker_text_key']->value ?? null)===null||$tmp==='' ? "value" ?? null : $tmp));
$_smarty_tpl->_assignInScope('input_name', (($tmp = $_smarty_tpl->tpl_vars['input_name']->value ?? null)===null||$tmp==='' ? "object_picker_simple_".((string)$_smarty_tpl->tpl_vars['picker_id']->value) ?? null : $tmp));
$_smarty_tpl->_assignInScope('multiple', (($tmp = $_smarty_tpl->tpl_vars['multiple']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_advanced', (($tmp = $_smarty_tpl->tpl_vars['show_advanced']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('autofocus', (($tmp = $_smarty_tpl->tpl_vars['autofocus']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('autoopen', (($tmp = $_smarty_tpl->tpl_vars['autoopen']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('allow_clear', (($tmp = $_smarty_tpl->tpl_vars['allow_clear']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('item_ids', array_filter((($tmp = $_smarty_tpl->tpl_vars['item_ids']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp)));
$_smarty_tpl->_assignInScope('close_on_select', (($tmp = $_smarty_tpl->tpl_vars['close_on_select']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('select_id', (($tmp = $_smarty_tpl->tpl_vars['select_id']->value ?? null)===null||$tmp==='' ? "companies_add_".((string)$_smarty_tpl->tpl_vars['picker_id']->value) ?? null : $tmp));
$_smarty_tpl->_assignInScope('predefined_variants', (($tmp = $_smarty_tpl->tpl_vars['predefined_variants']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp));?>

<?php if ($_smarty_tpl->tpl_vars['multiple']->value && $_smarty_tpl->tpl_vars['show_advanced']->value) {?>
    <?php $_smarty_tpl->_assignInScope('empty_variant_text', (($tmp = $_smarty_tpl->tpl_vars['empty_variant_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("type_to_search_or_click_button") ?? null : $tmp));
} else { ?>
    <?php $_smarty_tpl->_assignInScope('empty_variant_text', (($tmp = $_smarty_tpl->tpl_vars['empty_variant_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("none") ?? null : $tmp));
}?>

<?php if ($_smarty_tpl->tpl_vars['show_empty_variant']->value) {?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['predefined_variants']) ? $_smarty_tpl->tpl_vars['predefined_variants']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["0"] = $_smarty_tpl->tpl_vars['empty_variant_text']->value;
$_smarty_tpl->_assignInScope('predefined_variants', $_tmp_array);
}?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['predefined_variants']->value, 'variant', false, 'id');
$_smarty_tpl->tpl_vars['variant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->do_else = false;
?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['predefined_variant_items']) ? $_smarty_tpl->tpl_vars['predefined_variant_items']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = array("id"=>$_smarty_tpl->tpl_vars['id']->value,"text"=>$_smarty_tpl->tpl_vars['variant']->value,"data"=>array("name"=>$_smarty_tpl->tpl_vars['variant']->value));
$_smarty_tpl->_assignInScope('predefined_variant_items', $_tmp_array);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<div class="object-picker <?php if ($_smarty_tpl->tpl_vars['view_mode']->value == "external") {?>object-picker--external<?php }?> object-picker--companies <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
" data-object-picker="object_picker_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="object-picker__select-group object-picker__select-group--companies <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['select_group_class']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div class="object-picker__simple <?php if ($_smarty_tpl->tpl_vars['type']->value == "list") {?>object-picker__simple--list<?php }?> <?php if ($_smarty_tpl->tpl_vars['show_advanced']->value) {?>object-picker__simple--advanced<?php }?> object-picker__simple--companies <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['simple_class']->value, ENT_QUOTES, 'UTF-8');?>
">
            <select <?php if ($_smarty_tpl->tpl_vars['multiple']->value) {?>multiple<?php }?>
                    id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['select_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
"
                    class="cm-object-picker object-picker__select object-picker__select--companies <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['select_class']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-object-type="company"
                    data-ca-object-picker-escape-html="false"
                    data-ca-object-picker-ajax-url="<?php echo htmlspecialchars((string) fn_url("companies.get_companies_list"), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-ajax-delay="250"
                    data-ca-object-picker-template-selection-selector="#object_picker_selection_template_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-template-selection-load-selector="#object_picker_selection_load_template_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-autofocus="<?php echo htmlspecialchars((string) smarty_modifier_to_json($_smarty_tpl->tpl_vars['autofocus']->value), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-close-on-select="<?php echo htmlspecialchars((string) smarty_modifier_to_json($_smarty_tpl->tpl_vars['close_on_select']->value), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-autoopen="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['autoopen']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-dispatch="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['submit_url']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-target-form="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['submit_form']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-placeholder="<?php echo htmlspecialchars((string) strtr((string)$_smarty_tpl->tpl_vars['empty_variant_text']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" )), ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-placeholder-value=""
                    data-ca-object-picker-width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['width']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-extended-picker-id="object_extended_picker_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    data-ca-object-picker-extended-picker-text-key="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_text_key']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php if ($_smarty_tpl->tpl_vars['view_mode']->value == "external") {?>
                        data-ca-object-picker-external-container-selector="#object_picker_external_seleceted_companies_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['dropdown_parent_selector']->value) {?>
                        data-ca-object-picker-dropdown-parent-selector="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dropdown_parent_selector']->value, ENT_QUOTES, 'UTF-8');?>
"
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['predefined_variant_items']->value) {?>
                        data-ca-object-picker-allow-clear="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['allow_clear']->value, ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-object-picker-predefined-variants="<?php echo htmlspecialchars((string) smarty_modifier_to_json($_smarty_tpl->tpl_vars['predefined_variant_items']->value), ENT_QUOTES, 'UTF-8');?>
"
                    <?php }?>
            >
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item_ids']->value, 'item_id');
$_smarty_tpl->tpl_vars['item_id']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item_id']->value) {
$_smarty_tpl->tpl_vars['item_id']->do_else = false;
?>
                    <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" selected="selected"></option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
 type="text/template" id="object_picker_selection_template_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
    <div class="cm-object-picker-object object-picker__selection <?php if ($_smarty_tpl->tpl_vars['type']->value == "list") {?>object-picker__selection--list<?php }?> object-picker__selection--companies">
        <?php ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['selection_title_pre']->value, ENT_QUOTES, 'UTF-8');
$_prefixVariable33 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['selection_title_post']->value, ENT_QUOTES, 'UTF-8');
$_prefixVariable34 = ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:views/companies/components/picker/item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"selection",'title_pre'=>$_prefixVariable33,'title_post'=>$_prefixVariable34), 0, false);
?>
    </div>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/template" id="object_picker_selection_load_template_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['picker_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-no-defer="true" data-no-execute="§">
    <div class="object-picker__skeleton object-picker__skeleton--companies">...
    </div>
<?php echo '</script'; ?>
><?php }
}
