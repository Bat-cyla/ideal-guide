<?php
/* Smarty version 4.1.1, created on 2024-12-13 13:39:42
  from '/var/www/html/projects/cp_email_verification/design/backend/templates/common/select_object.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_675c0eee1071c3_84530611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd8dd19a2f3279589bb3e2379fbfeb60542806e6' => 
    array (
      0 => '/var/www/html/projects/cp_email_verification/design/backend/templates/common/select_object.tpl',
      1 => 1734079224,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675c0eee1071c3_84530611 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/projects/cp_email_verification/app/functions/smarty_plugins/modifier.sizeof.php','function'=>'smarty_modifier_sizeof',),1=>array('file'=>'/var/www/html/projects/cp_email_verification/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
if (smarty_modifier_sizeof($_smarty_tpl->tpl_vars['items']->value) > 1) {
$_smarty_tpl->_assignInScope('is_submenu', (($tmp = $_smarty_tpl->tpl_vars['is_submenu']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('button_style', $_smarty_tpl->tpl_vars['button_style']->value === false ? '' : (($tmp = $_smarty_tpl->tpl_vars['button_style']->value ?? null)===null||$tmp==='' ? "btn-text" ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_button_text', (($tmp = $_smarty_tpl->tpl_vars['show_button_text']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_button_symbol', (($tmp = $_smarty_tpl->tpl_vars['show_button_symbol']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
if ($_smarty_tpl->tpl_vars['style']->value == "graphic") {?><div class="btn-group <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['select_container_id']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['select_container_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
    <a class="btn dropdown-toggle <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['button_style']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['button_class']->value, ENT_QUOTES, 'UTF-8');?>
" id="sw_select_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['selected_id']->value, ENT_QUOTES, 'UTF-8');?>
_wrap_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
" data-toggle="dropdown">
        <?php if ($_smarty_tpl->tpl_vars['display_icons']->value) {?>
            <?php ob_start();
echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['selected_id']->value]['country_code'], 'UTF-8'), ENT_QUOTES, 'UTF-8');
$_prefixVariable29=ob_get_clean();
$_smarty_tpl->_assignInScope('icon_class', (($tmp = $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['selected_id']->value]['icon_class'] ?? null)===null||$tmp==='' ? "flag flag-".$_prefixVariable29 ?? null : $tmp));?>
            <?php if ($_smarty_tpl->tpl_vars['icon_class']->value) {?>
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->tpl_vars['icon_class']->value,'data'=>array("data-ca-target-id"=>"sw_select_".((string)$_smarty_tpl->tpl_vars['selected_id']->value)."_wrap_".((string)$_smarty_tpl->tpl_vars['suffix']->value))),$_smarty_tpl);?>

            <?php }?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['show_button_text']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['selected_id']->value][$_smarty_tpl->tpl_vars['key_name']->value], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['show_button_symbol']->value && $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['selected_id']->value]['symbol']) {?>&nbsp;(<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['selected_id']->value]['symbol'];?>
)<?php }?>
        <span class="caret"></span>
    </a>
        <?php if ($_smarty_tpl->tpl_vars['key_name']->value == "company") {?>
            <input id="filter" class="input-text cm-filter" type="text" style="width: 85%"/>
        <?php }?>
        <ul class="dropdown-menu cm-select-list <?php if ($_smarty_tpl->tpl_vars['display_icons']->value) {?>popup-icons<?php }?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dropdown_menu_class']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item', false, 'id');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <li class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dropdown_menu_item_class']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <a name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
                       href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['link_tpl']->value).((string)$_smarty_tpl->tpl_vars['id']->value)), ENT_QUOTES, 'UTF-8');?>
"
                       class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dropdown_menu_item_link_class']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['target_id']->value) {?>cm-ajax<?php }?>"
                       <?php if ($_smarty_tpl->tpl_vars['target_id']->value) {?>
                           data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['target_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                       <?php }?>
                       <?php if ($_smarty_tpl->tpl_vars['item']->value['symbol']) {?>
                           data-ca-list-item-symbol="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['symbol'], ENT_QUOTES, 'UTF-8');?>
"
                       <?php }?>
                    >
                        <?php if ($_smarty_tpl->tpl_vars['display_icons']->value) {?>
                            <?php ob_start();
echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['item']->value['country_code'], 'UTF-8'), ENT_QUOTES, 'UTF-8');
$_prefixVariable30=ob_get_clean();
$_smarty_tpl->_assignInScope('icon_class', (($tmp = $_smarty_tpl->tpl_vars['item']->value['icon_class'] ?? null)===null||$tmp==='' ? "flag flag-".$_prefixVariable30 ?? null : $tmp));?>
                            <?php if ($_smarty_tpl->tpl_vars['icon_class']->value) {?>
                                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->tpl_vars['icon_class']->value),$_smarty_tpl);?>

                            <?php }?>
                        <?php }?>
                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['key_name']->value], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['item']->value['symbol']) {?>&nbsp;(<?php echo $_smarty_tpl->tpl_vars['item']->value['symbol'];?>
)<?php }?>
                    </a>
                </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php if ($_smarty_tpl->tpl_vars['extra']->value) {
echo $_smarty_tpl->tpl_vars['extra']->value;
}?>
        </ul>
</div><?php } elseif ($_smarty_tpl->tpl_vars['style']->value == "dropdown") {?>
    <li class="<?php if ($_smarty_tpl->tpl_vars['is_submenu']->value) {?>dropdown-submenu<?php } else { ?>dropdown dropdown-top-menu-item<?php }?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['select_container_id']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['select_container_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
        <a class="<?php if ($_smarty_tpl->tpl_vars['is_submenu']->value) {?>dropdown-submenu__link<?php } else { ?>dropdown-toggle<?php }?> cm-combination <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['button_class']->value, ENT_QUOTES, 'UTF-8');?>
"
           data-toggle="dropdown"
           id="sw_select_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['selected_id']->value, ENT_QUOTES, 'UTF-8');?>
_wrap_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
           <?php if ($_smarty_tpl->tpl_vars['disable_dropdown_processing']->value) {?>data-disable-dropdown-processing="true"<?php }?>
        >
            <?php if ($_smarty_tpl->tpl_vars['plain_name']->value) {?>
                <?php echo $_smarty_tpl->tpl_vars['plain_name']->value;?>

            <?php } else { ?>
                <?php if ($_smarty_tpl->tpl_vars['key_selected']->value) {?>
                    <?php if ($_smarty_tpl->tpl_vars['is_submenu']->value) {?>
                        <?php if ($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['selected_id']->value]['name']) {?>
                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['selected_id']->value]['name'], ENT_QUOTES, 'UTF-8');?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['selected_id']->value]['description']) {?>
                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['selected_id']->value]['description'], ENT_QUOTES, 'UTF-8');?>

                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['selected_id']->value]['symbol']) {?>&nbsp;(<?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['selected_id']->value]['symbol'];?>
)<?php }?>
                    <?php } else { ?>
                        <?php if ($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['selected_id']->value]['symbol']) {?>
                            <?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['selected_id']->value]['symbol'];?>

                        <?php } else { ?>
                            <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['selected_id']->value][$_smarty_tpl->tpl_vars['key_selected']->value], 'UTF-8');?>

                        <?php }?>
                    <?php }?>
                <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['selected_id']->value][$_smarty_tpl->tpl_vars['key_name']->value];?>

                <?php }?>
            <?php }?>

            <?php if (!$_smarty_tpl->tpl_vars['is_submenu']->value) {?>
                <b class="caret"></b>
            <?php }?>
        </a>
        <ul class="dropdown-menu cm-select-list pull-right <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dropdown_menu_class']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item', false, 'id');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>

                                <?php $_smarty_tpl->_assignInScope('link', fn_url(((string)$_smarty_tpl->tpl_vars['link_tpl']->value).((string)$_smarty_tpl->tpl_vars['id']->value)));?>
                <?php if ($_smarty_tpl->tpl_vars['link_suffix']->value) {?>
                    <?php $_smarty_tpl->_assignInScope('link', fn_link_attach($_smarty_tpl->tpl_vars['link']->value,((string)$_smarty_tpl->tpl_vars['link_suffix']->value).((string)$_smarty_tpl->tpl_vars['id']->value)));?>
                <?php }?>

                <li class="<?php if ($_smarty_tpl->tpl_vars['id']->value == $_smarty_tpl->tpl_vars['selected_id']->value) {?>active<?php }?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dropdown_menu_item_class']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <a name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dropdown_menu_item_link_class']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <?php if ($_smarty_tpl->tpl_vars['display_icons']->value) {?>
                            <?php ob_start();
echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['item']->value['country_code'], 'UTF-8'), ENT_QUOTES, 'UTF-8');
$_prefixVariable31=ob_get_clean();
$_smarty_tpl->_assignInScope('icon_class', (($tmp = $_smarty_tpl->tpl_vars['item']->value['icon_class'] ?? null)===null||$tmp==='' ? "flag flag-".$_prefixVariable31 ?? null : $tmp));?>
                            <?php if ($_smarty_tpl->tpl_vars['icon_class']->value) {?>
                                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->tpl_vars['icon_class']->value),$_smarty_tpl);?>

                            <?php }?>
                        <?php }?>
                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['key_name']->value], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['item']->value['symbol']) {?>&nbsp;(<?php echo $_smarty_tpl->tpl_vars['item']->value['symbol'];?>
)<?php }?>
                    </a>
                </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </li>
<?php } elseif ($_smarty_tpl->tpl_vars['style']->value == "field") {?>
<div class="cm-popup-box btn-group <?php if ($_smarty_tpl->tpl_vars['class']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');
}?>">
    <?php if (!$_smarty_tpl->tpl_vars['selected_key']->value) {?>
        <?php $_smarty_tpl->_assignInScope('selected_key', key($_smarty_tpl->tpl_vars['items']->value));?>
    <?php }?>
    <?php if (!$_smarty_tpl->tpl_vars['selected_name']->value) {?>
        <?php $_smarty_tpl->_assignInScope('selected_name', $_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['selected_key']->value]);?>
    <?php }?>
    <input type="hidden"
           name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['select_container_name']->value, ENT_QUOTES, 'UTF-8');?>
"
           <?php if ($_smarty_tpl->tpl_vars['select_container_id']->value) {?>
               id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['select_container_id']->value, ENT_QUOTES, 'UTF-8');?>
"
           <?php }?>
           value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['selected_key']->value, ENT_QUOTES, 'UTF-8');?>
"
    />
    <a id="sw_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['select_container_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="dropdown-toggle btn <?php if ($_smarty_tpl->tpl_vars['text_wrap']->value) {?>dropdown-toggle--text-wrap<?php }?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['button_style']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['button_class']->value, ENT_QUOTES, 'UTF-8');?>
" data-toggle="dropdown">
    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['selected_name']->value, ENT_QUOTES, 'UTF-8');?>

        <span class="caret"></span>
    </a>
    <ul class="dropdown-menu cm-select <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dropdown_menu_class']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
            <li class="<?php if ($_smarty_tpl->tpl_vars['selected_key']->value == $_smarty_tpl->tpl_vars['key']->value) {?>disabled<?php }?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dropdown_menu_item_class']->value, ENT_QUOTES, 'UTF-8');?>
">
                <a class="<?php if ($_smarty_tpl->tpl_vars['selected_key']->value == $_smarty_tpl->tpl_vars['key']->value) {?>active<?php }?> cm-select-option <?php if ($_smarty_tpl->tpl_vars['text_wrap']->value) {?>dropdown--text-wrap<?php }?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dropdown_menu_item_link_class']->value, ENT_QUOTES, 'UTF-8');?>
"
                   data-ca-list-item="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
                ><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</a></li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['style']->value === "accordion") {
$_smarty_tpl->_assignInScope('is_active_menu_class', $_smarty_tpl->tpl_vars['plain_name']->value === $_smarty_tpl->tpl_vars['selected_tab']->value ? "active" : '');?>

<li class="accordion-group  nav__header-main-menu-item <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['is_active_menu_class']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
">
    <a href="#<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['plain_name']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
" 
        class="nav__menu-item nav__menu-item--accordion nav__header-main-menu-item <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['is_active_menu_class']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['button_class']->value, ENT_QUOTES, 'UTF-8');?>
"
        data-toggle="collapse"  
    >
        <?php echo $_smarty_tpl->tpl_vars['plain_name']->value;?>

    </a>
    <ul class="collapse nav__header-main-menu-submenu <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['is_active_menu_class']->value, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['is_active_menu_class']->value === 'active') {?> in<?php }?>"
        id="<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['plain_name']->value, 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
"
    >
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item', false, 'id');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <?php $_smarty_tpl->_assignInScope('is_active_submenu_class', $_smarty_tpl->tpl_vars['id']->value === $_smarty_tpl->tpl_vars['selected_id']->value ? "active" : '');?>

            <?php $_smarty_tpl->_assignInScope('link', fn_url(((string)$_smarty_tpl->tpl_vars['link_tpl']->value).((string)$_smarty_tpl->tpl_vars['id']->value)));?>
            <?php $_smarty_tpl->_assignInScope('link', $_smarty_tpl->tpl_vars['link_suffix']->value ? (fn_link_attach($_smarty_tpl->tpl_vars['link']->value,((string)$_smarty_tpl->tpl_vars['link_suffix']->value).((string)$_smarty_tpl->tpl_vars['id']->value))) : $_smarty_tpl->tpl_vars['link']->value);?>

            <li class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
 accordion-group nav__header-main-menu-subitem <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['is_active_submenu_class']->value, ENT_QUOTES, 'UTF-8');?>
">
                <a class="nav__menu-subitem <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['is_active_submenu_class']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php if ($_smarty_tpl->tpl_vars['display_icons']->value) {?>
                        <?php ob_start();
echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['item']->value['country_code'], 'UTF-8'), ENT_QUOTES, 'UTF-8');
$_prefixVariable32=ob_get_clean();
$_smarty_tpl->_assignInScope('icon_class', (($tmp = $_smarty_tpl->tpl_vars['item']->value['icon_class'] ?? null)===null||$tmp==='' ? "flag flag-".$_prefixVariable32 ?? null : $tmp));?>
                        <?php if ($_smarty_tpl->tpl_vars['icon_class']->value) {?>
                            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->tpl_vars['icon_class']->value),$_smarty_tpl);?>

                        <?php }?>
                    <?php }?>
                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['key_name']->value], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['item']->value['symbol']) {?>&nbsp;(<?php echo $_smarty_tpl->tpl_vars['item']->value['symbol'];?>
)<?php }?>
                </a>
            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</li>
<?php }
}
}
}
