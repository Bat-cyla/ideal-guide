<?php
/* Smarty version 4.1.1, created on 2024-12-13 13:39:41
  from '/var/www/html/projects/cp_email_verification/design/backend/templates/views/storefronts/components/picker/presets.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_675c0eede9d100_61373878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '642bc57c767735adb1b3fdb83c178dfaa7449444' => 
    array (
      0 => '/var/www/html/projects/cp_email_verification/design/backend/templates/views/storefronts/components/picker/presets.tpl',
      1 => 1734079224,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
    'tygh:views/storefronts/components/picker/picker.tpl' => 1,
  ),
),false)) {
function content_675c0eede9d100_61373878 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('show_all_storefronts','all_storefronts_short','all_storefronts_short','select_storefront','show_all_storefronts_with_count','all_storefronts_short','all_storefronts_short','all_storefronts'));
$_smarty_tpl->_assignInScope('is_enabled', $_smarty_tpl->tpl_vars['app']->value["storefront.switcher.is_enabled"]);
$_smarty_tpl->_assignInScope('is_available_for_disaptch', $_smarty_tpl->tpl_vars['app']->value['storefront.switcher.is_available_for_dispatch']);?>

<?php if ($_smarty_tpl->tpl_vars['is_enabled']->value && $_smarty_tpl->tpl_vars['is_available_for_disaptch']->value) {?>
    <?php if ((fn_allowed_for("MULTIVENDOR:ULTIMATE"))) {?>
        <?php $_smarty_tpl->_assignInScope('selected_storefront_id', (($tmp = $_smarty_tpl->tpl_vars['selected_storefront_id']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['app']->value["storefront.switcher.selected_storefront_id"] ?? null : $tmp));?>
        <?php $_smarty_tpl->_assignInScope('storefront_switcher_param_name', (($tmp = $_smarty_tpl->tpl_vars['storefront_switcher_param_name']->value ?? null)===null||$tmp==='' ? "s_storefront" ?? null : $tmp));?>
        <?php $_smarty_tpl->_assignInScope('storefront_switcher_data_name', "storefront_id");?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('selected_storefront_id', $_smarty_tpl->tpl_vars['app']->value["storefront.switcher.selected_storefront_id"]);?>
        <?php $_smarty_tpl->_assignInScope('storefront_switcher_param_name', "switch_company_id");?>
        <?php $_smarty_tpl->_assignInScope('storefront_switcher_data_name', "company_id");?>
    <?php }?>

    <?php $_smarty_tpl->_assignInScope('show_all_storefront', (($tmp = $_smarty_tpl->tpl_vars['show_all_storefront']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>

    <?php $_smarty_tpl->_assignInScope('preset_data', call_user_func($_smarty_tpl->tpl_vars['app']->value["storefront.switcher.preset_data.factory"],$_smarty_tpl->tpl_vars['selected_storefront_id']->value));?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "storefronts_list", null, null);?>
        <?php if ($_smarty_tpl->tpl_vars['show_all_storefront']->value) {?>
            <a href="<?php echo htmlspecialchars((string) fn_url(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],((string)$_smarty_tpl->tpl_vars['storefront_switcher_param_name']->value)."=0".((string)$_smarty_tpl->tpl_vars['storefront_picker_link_suffix']->value))), ENT_QUOTES, 'UTF-8');?>
"
                class="storefront__picker-logo-link"
                title="<?php echo $_smarty_tpl->__("show_all_storefronts");?>
">

                <div class="storefront__picker-logo-wrapper
                    <?php if (!$_smarty_tpl->tpl_vars['selected_storefront_id']->value) {?>
                        storefront__picker-logo-wrapper--active
                    <?php }?>">
                    <div class="storefront__picker-logo-text
                        <?php if (preg_match_all('/[^\s]/u',$_smarty_tpl->__("all_storefronts_short"), $tmp) > 3) {?>storefront__picker-logo-text--small<?php }?>
                        <?php if (!$_smarty_tpl->tpl_vars['selected_storefront_id']->value) {?>storefront__picker-logo-text--active<?php }?>">
                        <?php echo $_smarty_tpl->__("all_storefronts_short");?>

                    </div>
                </div>
            </a>
        <?php }?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['preset_data']->value['storefronts'], 'storefront');
$_smarty_tpl->tpl_vars['storefront']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['storefront']->value) {
$_smarty_tpl->tpl_vars['storefront']->do_else = false;
?>
            <?php $_smarty_tpl->_assignInScope('_storefront_picker_logo_img_class', $_smarty_tpl->tpl_vars['storefront_picker_logo_img_class']->value);?>
            <?php if ($_smarty_tpl->tpl_vars['storefront']->value['is_selected']) {?>
                <?php $_smarty_tpl->_assignInScope('storefront_picker_logo_img_class', "storefront__picker-logo-img--active ".((string)$_smarty_tpl->tpl_vars['_storefront_picker_logo_img_class']->value));?>
            <?php }?>

            <a href="<?php echo htmlspecialchars((string) fn_url(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],((string)$_smarty_tpl->tpl_vars['storefront_switcher_param_name']->value)."=".((string)$_smarty_tpl->tpl_vars['storefront']->value[$_smarty_tpl->tpl_vars['storefront_switcher_data_name']->value]).((string)$_smarty_tpl->tpl_vars['storefront_picker_link_suffix']->value))), ENT_QUOTES, 'UTF-8');?>
"
                class="storefront__picker-logo-link <?php if ($_smarty_tpl->tpl_vars['storefront']->value['is_selected']) {?>storefront__picker-logo-link--active<?php }?>"
                title="<?php echo $_smarty_tpl->__("select_storefront",array("[store]"=>$_smarty_tpl->tpl_vars['storefront']->value['name']));?>
">

                <div class="storefront__picker-logo-wrapper
                    <?php if ($_smarty_tpl->tpl_vars['storefront']->value['is_selected']) {?>storefront__picker-logo-wrapper--active<?php }?>">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image'=>$_smarty_tpl->tpl_vars['storefront']->value['images'],'image_height'=>"64",'image_css_class'=>"storefront__picker-logo-img storefront__picker-logo-img--inactive ".((string)$_smarty_tpl->tpl_vars['storefront_picker_logo_img_class']->value),'show_detailed_link'=>false), 0, true);
?>
                </div>
            </a>
            <?php if ($_smarty_tpl->tpl_vars['storefront']->value['is_selected']) {?>
                <?php $_smarty_tpl->_assignInScope('storefront_picker_logo_img_class', $_smarty_tpl->tpl_vars['_storefront_picker_logo_img_class']->value);?>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['is_multiple_storefronts']) {?>
        <div class="storefront__picker-logo-list js-storefront-switcher"
            data-ca-switcher-param-name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['storefront_switcher_param_name']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-switcher-data-name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['storefront_switcher_data_name']->value, ENT_QUOTES, 'UTF-8');?>
">

            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'storefronts_list');?>

            <div class="dropdown storefront__picker-dropdown <?php if ($_smarty_tpl->tpl_vars['runtime']->value['storefronts_count'] > $_smarty_tpl->tpl_vars['preset_data']->value['threshold']) {?>storefront__picker-dropdown--threshold<?php }?>">
                <a class="dropdown-toggle storefront__picker-logo-link storefront__picker-logo-link--dropdown-toggle"
                    data-toggle="dropdown"
                    data-ca-dropdown-object-picker-autoopen=".object-picker__select--storefronts"
                    title="<?php echo $_smarty_tpl->__("show_all_storefronts_with_count",array("[count]"=>$_smarty_tpl->tpl_vars['runtime']->value['storefronts_count']));?>
">
                    <?php if ($_smarty_tpl->tpl_vars['selected_storefront_id']->value) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['preset_data']->value['storefronts'], 'storefront');
$_smarty_tpl->tpl_vars['storefront']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['storefront']->value) {
$_smarty_tpl->tpl_vars['storefront']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['storefront']->value['is_selected']) {?>
                                <div class="storefront__picker-logo-wrapper storefront__picker-logo-wrapper--mobile">
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image'=>$_smarty_tpl->tpl_vars['storefront']->value['images'],'image_height'=>"64",'image_css_class'=>"storefront__picker-logo-img ".((string)$_smarty_tpl->tpl_vars['storefront_picker_logo_img_class']->value),'show_detailed_link'=>false), 0, true);
?>
                                </div>
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php } else { ?>
                        <div class="storefront__picker-logo-wrapper storefront__picker-logo-wrapper--mobile">
                            <div class="storefront__picker-logo-text
                                <?php if (preg_match_all('/[^\s]/u',$_smarty_tpl->__("all_storefronts_short"), $tmp) > 3) {?>storefront__picker-logo-text--small<?php }?>">
                                <?php echo $_smarty_tpl->__("all_storefronts_short");?>

                            </div>
                        </div>
                    <?php }?>
                    <div class="storefront__picker-logo-wrapper storefront__picker-logo-wrapper--desktop">
                        <div class="storefront__picker-logo-text">
                            +<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['runtime']->value['storefronts_count']-$_smarty_tpl->tpl_vars['preset_data']->value['threshold']), ENT_QUOTES, 'UTF-8');?>

                        </div>
                    </div>
                </a>
                <ul class="dropdown-menu storefront__picker-dropdown-menu" id="storefront_picker_dropdown_menu">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/storefronts/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>'','item_ids'=>array($_smarty_tpl->tpl_vars['selected_storefront_id']->value),'show_empty_variant'=>$_smarty_tpl->tpl_vars['show_all_storefront']->value,'dropdown_parent_selector'=>"#storefront_picker_dropdown_menu",'empty_variant_text'=>$_smarty_tpl->__("all_storefronts"),'show_advanced'=>false,'dropdown_css_class'=>"storefront__picker-dropdown-picker"), 0, false);
?>
                </ul>
            </div>
        </div>
    <?php }
}
}
}
