<?php
/* Smarty version 4.1.1, created on 2024-12-13 13:39:41
  from '/var/www/html/projects/cp_email_verification/design/backend/templates/addons/vendor_panel_configurator/hooks/index/actions.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_675c0eede4d4d5_03499185',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '535668d4d0fa7d7e28fa68e7da4d0d99844d49e0' => 
    array (
      0 => '/var/www/html/projects/cp_email_verification/design/backend/templates/addons/vendor_panel_configurator/hooks/index/actions.pre.tpl',
      1 => 1734079224,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/vendor_panel_configurator/config.tpl' => 1,
  ),
),false)) {
function content_675c0eede4d4d5_03499185 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/projects/cp_email_verification/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
if (fn_allowed_for("MULTIVENDOR") && !$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate'] && $_smarty_tpl->tpl_vars['auth']->value['user_type'] == smarty_modifier_enum("UserTypes::VENDOR")) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_panel_configurator/config.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->_assignInScope('navigation_accordion', $_smarty_tpl->tpl_vars['navigation_accordion']->value ,false ,2);?>
    <?php $_smarty_tpl->_assignInScope('show_last_viewed_items', $_smarty_tpl->tpl_vars['show_last_viewed_items']->value ,false ,2);
}
}
}
