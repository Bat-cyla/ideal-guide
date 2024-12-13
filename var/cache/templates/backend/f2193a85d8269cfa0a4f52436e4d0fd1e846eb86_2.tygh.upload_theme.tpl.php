<?php
/* Smarty version 4.1.1, created on 2024-12-13 13:39:41
  from '/var/www/html/projects/cp_email_verification/design/backend/templates/views/themes/components/upload_theme.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_675c0eedbf6e25_02307720',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2193a85d8269cfa0a4f52436e4d0fd1e846eb86' => 
    array (
      0 => '/var/www/html/projects/cp_email_verification/design/backend/templates/views/themes/components/upload_theme.tpl',
      1 => 1734079224,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/fileuploader.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 1,
  ),
),false)) {
function content_675c0eedbf6e25_02307720 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('install_theme_text','marketplace_find_more','upload'));
?>
<div class="install-addon" id="theme_upload_container">
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="addon_upload_form" class="form-horizontal cm-ajax" enctype="multipart/form-data">
        <input type="hidden" name="result_ids" value="theme_upload_container" />
        <div class="install-addon-wrapper">
            <img class="install-addon-banner" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/addon_box.png" width="151px" height="141px" />

            <p class="install-addon-text"><?php echo $_smarty_tpl->__("install_theme_text",array('[exts]'=>implode(',',$_smarty_tpl->tpl_vars['config']->value['allowed_pack_exts'])));?>
</p>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var_name'=>"theme_pack[0]"), 0, false);
?>

            <div class="marketplace">
                <p class="marketplace-link"> <?php echo $_smarty_tpl->__("marketplace_find_more",array("[href]"=>$_smarty_tpl->tpl_vars['config']->value['resources']['marketplace_url']));?>
 </p>
            </div>

        </div>

        <div class="buttons-container">
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[themes.upload]",'cancel_action'=>"close",'but_text'=>$_smarty_tpl->__("upload")), 0, false);
?>
        </div>
    </form>
<!--theme_upload_container--></div>
<?php }
}
