<?php
/* Smarty version 4.1.1, created on 2024-12-13 13:39:42
  from '/var/www/html/projects/cp_email_verification/design/backend/templates/addons/vendor_panel_configurator/hooks/menu/second_level.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_675c0eee2a1134_24969323',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb1b255a1d15aa5bedea1ec8f98817725235bd70' => 
    array (
      0 => '/var/www/html/projects/cp_email_verification/design/backend/templates/addons/vendor_panel_configurator/hooks/menu/second_level.pre.tpl',
      1 => 1734079224,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675c0eee2a1134_24969323 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/projects/cp_email_verification/app/lib/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'/var/www/html/projects/cp_email_verification/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
$_smarty_tpl->_assignInScope('second_level_class', smarty_modifier_replace((($tmp = $_smarty_tpl->tpl_vars['second_level_class']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp),"nav__menu-subitem--hidden-by-permissions",'') ,false ,2);
if ($_smarty_tpl->tpl_vars['auth']->value['user_type'] == smarty_modifier_enum("UserTypes::VENDOR") && (defined('BLOCK_MANAGER_MODE') ? constant('BLOCK_MANAGER_MODE') : null) && $_smarty_tpl->tpl_vars['second_level']->value['hidden_by_permissions']) {?>
    <?php $_smarty_tpl->_assignInScope('second_level_class', ((string)$_smarty_tpl->tpl_vars['second_level_class']->value)." nav__menu-subitem--hidden-by-permissions" ,false ,2);
}
}
}
