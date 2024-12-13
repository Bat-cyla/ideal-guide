<?php
/* Smarty version 4.1.1, created on 2024-12-13 13:39:42
  from '/var/www/html/projects/cp_email_verification/design/backend/templates/addons/help_center/component/help_center_popup_btn_mobile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_675c0eee307e47_19760720',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5219e4d9ba9e1ab1e4ef5a45c90f564e4577669' => 
    array (
      0 => '/var/www/html/projects/cp_email_verification/design/backend/templates/addons/help_center/component/help_center_popup_btn_mobile.tpl',
      1 => 1734079223,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675c0eee307e47_19760720 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('help_center.growth_center'));
$_smarty_tpl->_assignInScope('help_center_counter', (($tmp = $_smarty_tpl->tpl_vars['help_center_counter']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));?>

<button type="button"
    class="help-center-popup-btn-mobile"
    data-ca-help-center="popupBtnMobile"
    data-ca-help-center-counter="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['help_center_counter']->value, ENT_QUOTES, 'UTF-8');?>
"
><?php echo $_smarty_tpl->__("help_center.growth_center");?>
</button>
<?php }
}
