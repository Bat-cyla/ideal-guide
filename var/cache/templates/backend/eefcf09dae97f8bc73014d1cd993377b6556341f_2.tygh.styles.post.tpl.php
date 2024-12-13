<?php
/* Smarty version 4.1.1, created on 2024-12-13 13:39:41
  from '/var/www/html/projects/cp_email_verification/design/backend/templates/addons/help_center/hooks/index/styles.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_675c0eed098552_66278131',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eefcf09dae97f8bc73014d1cd993377b6556341f' => 
    array (
      0 => '/var/www/html/projects/cp_email_verification/design/backend/templates/addons/help_center/hooks/index/styles.post.tpl',
      1 => 1734079224,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675c0eed098552_66278131 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/projects/cp_email_verification/app/functions/smarty_plugins/function.style.php','function'=>'smarty_function_style',),));
if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "admin") {?>
    <?php echo smarty_function_style(array('src'=>"addons/help_center/styles.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"addons/help_center/manage.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"addons/help_center/help_center_popup.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"addons/help_center/help_center_popup_btn_mobile.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"addons/help_center/templates/help_center_block.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"addons/help_center/templates/help_center_nav_chapter.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"addons/help_center/templates/help_center_nav_item.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"addons/help_center/templates/help_center_section.less"),$_smarty_tpl);?>

<?php }
}
}
