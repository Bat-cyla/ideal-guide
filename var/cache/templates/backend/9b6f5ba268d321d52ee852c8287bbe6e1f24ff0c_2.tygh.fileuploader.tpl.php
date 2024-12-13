<?php
/* Smarty version 4.1.1, created on 2024-12-13 13:39:41
  from '/var/www/html/projects/cp_email_verification/design/backend/templates/common/fileuploader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_675c0eedc22b41_08943783',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b6f5ba268d321d52ee852c8287bbe6e1f24ff0c' => 
    array (
      0 => '/var/www/html/projects/cp_email_verification/design/backend/templates/common/fileuploader.tpl',
      1 => 1734079224,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675c0eedc22b41_08943783 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/projects/cp_email_verification/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),1=>array('file'=>'/var/www/html/projects/cp_email_verification/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),2=>array('file'=>'/var/www/html/projects/cp_email_verification/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),3=>array('file'=>'/var/www/html/projects/cp_email_verification/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),4=>array('file'=>'/var/www/html/projects/cp_email_verification/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),5=>array('file'=>'/var/www/html/projects/cp_email_verification/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('file_is_too_large','files_are_too_large','remove_this_item','remove_this_item','text_select_file','upload_another_file','local','server','url','text_allowed_to_upload_file_extension'));
$_smarty_tpl->_assignInScope('post_max_size', $_smarty_tpl->tpl_vars['server_env']->value->getIniVar("post_max_size"));
$_smarty_tpl->_assignInScope('upload_max_filesize', $_smarty_tpl->tpl_vars['server_env']->value->getIniVar("upload_max_filesize"));?>

<?php if ($_smarty_tpl->tpl_vars['max_upload_filesize']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['post_max_size']->value > $_smarty_tpl->tpl_vars['max_upload_filesize']->value) {?>
        <?php $_smarty_tpl->_assignInScope('post_max_size', $_smarty_tpl->tpl_vars['max_upload_filesize']->value);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['upload_max_filesize']->value > $_smarty_tpl->tpl_vars['max_upload_filesize']->value) {?>
        <?php $_smarty_tpl->_assignInScope('upload_max_filesize', $_smarty_tpl->tpl_vars['max_upload_filesize']->value);?>
    <?php }
}?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
(function(_, $) {
    $.extend(_, {
        post_max_size_bytes: '<?php echo htmlspecialchars((string) fn_return_bytes($_smarty_tpl->tpl_vars['post_max_size']->value), ENT_QUOTES, 'UTF-8');?>
',
        files_upload_max_size_bytes: '<?php echo htmlspecialchars((string) fn_return_bytes($_smarty_tpl->tpl_vars['upload_max_filesize']->value), ENT_QUOTES, 'UTF-8');?>
',

        post_max_size_mbytes: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post_max_size']->value, ENT_QUOTES, 'UTF-8');?>
',
        files_upload_max_size_mbytes: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['upload_max_filesize']->value, ENT_QUOTES, 'UTF-8');?>
',
        allowed_file_path: '<?php echo htmlspecialchars((string) fn_get_http_files_dir_path(), ENT_QUOTES, 'UTF-8');?>
'
    });

    _.tr({
        file_is_too_large: '<?php echo strtr((string)$_smarty_tpl->__("file_is_too_large"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        files_are_too_large: '<?php echo strtr((string)$_smarty_tpl->__("files_are_too_large"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
'
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/fileuploader_scripts.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/node_cloning.js"),$_smarty_tpl);?>


<?php ob_start();
echo htmlspecialchars((string) md5($_smarty_tpl->tpl_vars['var_name']->value), ENT_QUOTES, 'UTF-8');
$_prefixVariable20=ob_get_clean();
$_smarty_tpl->_assignInScope('id_var_name', ((string)$_smarty_tpl->tpl_vars['prefix']->value).$_prefixVariable20);?>

<div class="fileuploader cm-fileuploader cm-field-container" <?php if ($_smarty_tpl->tpl_vars['disabled_param']->value) {?>hidden disabled<?php }?>>
<input type="hidden" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['label_id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php if ($_smarty_tpl->tpl_vars['images']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');
}?>" />

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image', false, 'image_id');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image_id']->value => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
    <div class="upload-file-section cm-uploaded-image" id="message_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['file'], ENT_QUOTES, 'UTF-8');?>
" title="">
        <p class="cm-fu-file">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"fileuploader:links"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"fileuploader:links"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php if ($_smarty_tpl->tpl_vars['image']->value['location'] == "cart") {?>
                    <?php $_smarty_tpl->_assignInScope('delete_link', ((string)$_smarty_tpl->tpl_vars['runtime']->value['controller']).".delete_file?cart_id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&option_id=".((string)$_smarty_tpl->tpl_vars['po']->value['option_id'])."&file=".((string)$_smarty_tpl->tpl_vars['image_id']->value)."&redirect_mode=cart");?>
                    <?php $_smarty_tpl->_assignInScope('download_link', ((string)$_smarty_tpl->tpl_vars['runtime']->value['controller']).".get_custom_file?cart_id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&option_id=".((string)$_smarty_tpl->tpl_vars['po']->value['option_id'])."&file=".((string)$_smarty_tpl->tpl_vars['image_id']->value));?>
                <?php }?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"fileuploader:links"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php if ($_smarty_tpl->tpl_vars['image']->value['is_image']) {?>
                <a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['image']->value['detailed']), ENT_QUOTES, 'UTF-8');?>
"><img src="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['image']->value['thumbnail']), ENT_QUOTES, 'UTF-8');?>
" border="0" /></a><br />
            <?php }?>

            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"fileuploader:uploaded_files"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"fileuploader:uploaded_files"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php if ($_smarty_tpl->tpl_vars['delete_link']->value) {?><a class="cm-ajax cm-post" href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['delete_link']->value), ENT_QUOTES, 'UTF-8');?>
"><?php }
if (!($_smarty_tpl->tpl_vars['po']->value['required'] === smarty_modifier_enum("YesNo::YES") && smarty_modifier_count($_smarty_tpl->tpl_vars['images']->value) == 1)) {
ob_start();
if ($_smarty_tpl->tpl_vars['multiupload']->value !== 'Y') {
echo "Tygh.fileuploader.toggle_links('";
echo (string)$_smarty_tpl->tpl_vars['id_var_name']->value;
echo "', 'show');";
}
$_prefixVariable21=ob_get_clean();
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-remove-sign cm-tooltip hand",'id'=>"clean_selection_".((string)$_smarty_tpl->tpl_vars['id_var_name']->value)."_".((string)$_smarty_tpl->tpl_vars['image']->value['file']),'title'=>$_smarty_tpl->__("remove_this_item"),'data'=>array("onclick"=>"Tygh.fileuploader.clean_selection(this.id); ".$_prefixVariable21." Tygh.fileuploader.check_required_field('".((string)$_smarty_tpl->tpl_vars['id_var_name']->value)."', '".((string)$_smarty_tpl->tpl_vars['label_id']->value)."');"),'icon_text'=>''),$_smarty_tpl);?>
&nbsp;<?php }
if ($_smarty_tpl->tpl_vars['delete_link']->value) {?></a><?php }?><span class="upload-filename"><?php if ($_smarty_tpl->tpl_vars['download_link']->value) {?><a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['download_link']->value), ENT_QUOTES, 'UTF-8');?>
"><?php }
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['name'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['download_link']->value) {?></a><?php }?></span>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"fileuploader:uploaded_files"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </p>
    </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"fileuploader:uploader"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"fileuploader:uploader"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
<div id="file_uploader_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="upload-file-section" id="message_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" title="">
        <p class="cm-fu-file hidden"><?php ob_start();
if ($_smarty_tpl->tpl_vars['multiupload']->value !== 'Y') {
echo "Tygh.fileuploader.toggle_links(this.id, 'show');";
}
$_prefixVariable22=ob_get_clean();
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-remove-sign cm-tooltip hand",'id'=>"clean_selection_".((string)$_smarty_tpl->tpl_vars['id_var_name']->value),'title'=>$_smarty_tpl->__("remove_this_item"),'data'=>array("onclick"=>"Tygh.fileuploader.clean_selection(this.id); ".$_prefixVariable22." Tygh.fileuploader.check_required_field('".((string)$_smarty_tpl->tpl_vars['id_var_name']->value)."', '".((string)$_smarty_tpl->tpl_vars['label_id']->value)."');"),'icon_text'=>''),$_smarty_tpl);?>
&nbsp;<span class="upload-filename"></span></p>
        <?php if ($_smarty_tpl->tpl_vars['multiupload']->value !== "Y") {?><p class="cm-fu-no-file <?php if ($_smarty_tpl->tpl_vars['images']->value) {?>hidden<?php }?>"><?php echo $_smarty_tpl->__("text_select_file");?>
</p><?php }?>
    </div>

    <input type="hidden" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
name="file_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
value="<?php if ($_smarty_tpl->tpl_vars['image_name']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_name']->value, ENT_QUOTES, 'UTF-8');
}?>" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
id="file_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
class="cm-fileuploader-field <?php if ($_smarty_tpl->tpl_vars['is_image']->value) {?>cm-image-field<?php }?>"<?php if ($_smarty_tpl->tpl_vars['disabled_param']->value) {
echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
 disabled<?php }
if ($_smarty_tpl->tpl_vars['target_form']->value) {
echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
 form="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['target_form']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>/><input type="hidden" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
name="type_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
value="<?php if ($_smarty_tpl->tpl_vars['image_name']->value) {?>local<?php }?>" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
id="type_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
class="cm-fileuploader-field <?php if ($_smarty_tpl->tpl_vars['is_image']->value) {?>cm-image-field<?php }?>"<?php if ($_smarty_tpl->tpl_vars['disabled_param']->value) {
echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
 disabled<?php }
if ($_smarty_tpl->tpl_vars['target_form']->value) {
echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
 form="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['target_form']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>/><div class="btn-group <?php if ($_smarty_tpl->tpl_vars['multiupload']->value != "Y" && $_smarty_tpl->tpl_vars['images']->value) {?>hidden<?php }?>" id="link_container_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
"><div class="upload-file-local"><a class="btn"><span data-ca-multi="Y" <?php if (!$_smarty_tpl->tpl_vars['images']->value) {?>class="hidden"<?php }?>><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['upload_another_file_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("upload_another_file") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</span><span data-ca-multi="N" <?php if ($_smarty_tpl->tpl_vars['images']->value) {?>class="hidden"<?php }?>><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['upload_file_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("local") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</span></a><div class="image-selector"><label for=""><input type="file" name="file_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
" id="local_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" onchange="Tygh.fileuploader.show_loader(this.id); <?php if ($_smarty_tpl->tpl_vars['multiupload']->value == "Y") {?>Tygh.fileuploader.check_image(this.id);<?php }?> Tygh.fileuploader.check_required_field('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['label_id']->value, ENT_QUOTES, 'UTF-8');?>
');" class="file<?php if ($_smarty_tpl->tpl_vars['is_image']->value) {?> cm-image-field<?php }?>" data-ca-empty-file="" onclick="Tygh.$(this).removeAttr('data-ca-empty-file');"></label></div></div><?php if (!$_smarty_tpl->tpl_vars['hide_server']->value) {?><a class="btn" onclick="Tygh.fileuploader.show_loader(this.id);" id="server_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("server");?>
</a><?php }?><a class="btn" onclick="Tygh.fileuploader.show_loader(this.id);" id="url_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("url");?>
</a><?php if ($_smarty_tpl->tpl_vars['hidden_name']->value) {?><input type="hidden" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['hidden_name']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
id="hidden_input_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_var_name']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['hidden_value']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['target_form']->value) {
echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
 form="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['target_form']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>/><?php }?></div><?php if ($_smarty_tpl->tpl_vars['allowed_ext']->value) {?><p class="mute micro-note"><?php echo $_smarty_tpl->__("text_allowed_to_upload_file_extension",array("[ext]"=>$_smarty_tpl->tpl_vars['allowed_ext']->value));?>
</p><?php }?>
</div>
<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"fileuploader:uploader"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

</div><!--fileuploader-->
<?php }
}
