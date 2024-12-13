<?php
/* Smarty version 4.1.1, created on 2024-12-13 13:39:41
  from '/var/www/html/projects/cp_email_verification/design/backend/templates/addons/vendor_panel_configurator/hooks/index/styles.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_675c0eed0e56f7_67060311',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7db74ebf5b929a9a334aad77a154c51d8350d971' => 
    array (
      0 => '/var/www/html/projects/cp_email_verification/design/backend/templates/addons/vendor_panel_configurator/hooks/index/styles.post.tpl',
      1 => 1734079224,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/vendor_panel_configurator/config.tpl' => 1,
  ),
),false)) {
function content_675c0eed0e56f7_67060311 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/projects/cp_email_verification/app/functions/smarty_plugins/function.style.php','function'=>'smarty_function_style',),));
echo smarty_function_style(array('src'=>"addons/vendor_panel_configurator/styles.less"),$_smarty_tpl);?>


<?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "vendor") {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/vendor_panel_configurator/config.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo smarty_function_style(array('src'=>"addons/vendor_panel_configurator/simple_vendor_panel/index.less"),$_smarty_tpl);?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "styles", null, null);?>
        <?php $_smarty_tpl->_assignInScope('calculatedSaturation', $_smarty_tpl->tpl_vars['isGrayMainColor']->value ? "0%" : "100%");?>

        @mainColor: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['mainColor']->value, ENT_QUOTES, 'UTF-8');?>
;
        @tableBackgroundHover: spin(hsl(hue(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['mainColor']->value, ENT_QUOTES, 'UTF-8');?>
), <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['calculatedSaturation']->value, ENT_QUOTES, 'UTF-8');?>
, 98%), 5);
        @wellBackground: spin(hsl(hue(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['mainColor']->value, ENT_QUOTES, 'UTF-8');?>
), <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['calculatedSaturation']->value, ENT_QUOTES, 'UTF-8');?>
, 98%), 5);
        @menuSidebarColor: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['menuSidebarColor']->value, ENT_QUOTES, 'UTF-8');?>
;
        @menuSidebarColorActive: spin(hsla(hue(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['mainColor']->value, ENT_QUOTES, 'UTF-8');?>
), <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['calculatedSaturation']->value, ENT_QUOTES, 'UTF-8');?>
, 40%, 0.1), 5);
        @menuSidebarBg: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['menuSidebarBg']->value, ENT_QUOTES, 'UTF-8');?>
;
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php echo smarty_function_style(array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'styles'),'type'=>"less"),$_smarty_tpl);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['theme_editor']) {?>
    <?php echo smarty_function_style(array('src'=>"addons/vendor_panel_configurator/theme_editor.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"../../themes/responsive/css/tygh/theme_editor.css"),$_smarty_tpl);?>

<?php }
}
}
