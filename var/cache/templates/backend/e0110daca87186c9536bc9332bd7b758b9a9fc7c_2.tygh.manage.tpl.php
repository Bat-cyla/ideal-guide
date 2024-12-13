<?php
/* Smarty version 4.1.1, created on 2024-12-13 13:39:41
  from '/var/www/html/projects/cp_email_verification/design/backend/templates/views/themes/manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_675c0eedbd9fe1_24037576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0110daca87186c9536bc9332bd7b758b9a9fc7c' => 
    array (
      0 => '/var/www/html/projects/cp_email_verification/design/backend/templates/views/themes/manage.tpl',
      1 => 1734079224,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/previewer.tpl' => 1,
    'tygh:views/themes/components/upload_theme.tpl' => 1,
    'tygh:common/check_items.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 1,
    'tygh:common/select_popup.tpl' => 1,
    'tygh:buttons/button.tpl' => 7,
    'tygh:views/themes/components/logos_list.tpl' => 1,
    'tygh:common/tabsbox.tpl' => 1,
    'tygh:common/popupbox.tpl' => 1,
    'tygh:buttons/save.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_675c0eedbd9fe1_24037576 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/projects/cp_email_verification/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'/var/www/html/projects/cp_email_verification/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),2=>array('file'=>'/var/www/html/projects/cp_email_verification/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),3=>array('file'=>'/var/www/html/projects/cp_email_verification/app/lib/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),4=>array('file'=>'/var/www/html/projects/cp_email_verification/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),5=>array('file'=>'/var/www/html/projects/cp_email_verification/app/functions/smarty_plugins/modifier.count.php','function'=>'smarty_modifier_count',),6=>array('file'=>'/var/www/html/projects/cp_email_verification/app/functions/smarty_plugins/function.split.php','function'=>'smarty_function_split',),7=>array('file'=>'/var/www/html/projects/cp_email_verification/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('settings_overwrite_title','settings_overwrite_text','current_setting_value','new_setting_value','cancel','overwrite_selected_settings','current_theme','general','directory','name','description','theme_styles_and_layouts','layout','theme_editor.style','layout','theme_editor.style','none','theme_no_styles_text','theme_editor','theme_editor_not_supported','theme_editor','edit_layout_on_site','edit_content_on_site','active','cannot_remove_theme_has_dependent_themes','remove_theme','layouts','theme_editor.styles','activate','use_this_style','currently_in_use','currently_in_use','activate','no_themes_available','install','preview','install','no_themes_available','clone_theme','rebuild_cache_automatically','rebuild_cache_automatically_tooltip','theme_information','name','directory','layouts','theme_editor.styles','developer','marketplace','marketplace_find_more','upload_theme','upload_theme','clone_theme','themes'));
echo smarty_function_script(array('src'=>"js/lib/bootstrap_switch/js/bootstrapSwitch.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->_subTemplateRender("tygh:common/previewer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "upload_theme", null, null);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/themes/components/upload_theme.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('theme', $_smarty_tpl->tpl_vars['available_themes']->value['current']);
$_smarty_tpl->_assignInScope('theme_name', $_smarty_tpl->tpl_vars['available_themes']->value['current']['theme_name']);?>

<?php if ((defined('AREA') ? constant('AREA') : null) === smarty_modifier_enum("SiteArea::ADMIN_PANEL")) {?>
    <?php $_smarty_tpl->_assignInScope('act_as_vendor', $_smarty_tpl->tpl_vars['auth']->value['user_type'] === smarty_modifier_enum("UserTypes::VENDOR") && $_smarty_tpl->tpl_vars['auth']->value['act_as_user']);
}?>

<?php if ($_smarty_tpl->tpl_vars['conflicts']->value) {?>
<div class="row-fluid">
    <div id="conflicts">
        <h4><?php echo $_smarty_tpl->__("settings_overwrite_title");?>
</h4>
        <p><?php echo $_smarty_tpl->__("settings_overwrite_text",array("[theme_name]"=>$_smarty_tpl->tpl_vars['requested_theme_name']->value));?>
:</p>
        <form method="post" action="<?php echo htmlspecialchars((string) fn_url("themes.set"), ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" name="theme_name" value="<?php echo htmlspecialchars((string) $_GET['theme_name'], ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" name="style" value="<?php echo htmlspecialchars((string) $_GET['style'], ENT_QUOTES, 'UTF-8');?>
">
            <div class="table-wrapper">
                <table class="table table-condensed table--relative">
                    <thead>
                        <tr>
                            <th width="1"><?php $_smarty_tpl->_subTemplateRender("tygh:common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></th>
                            <th></th>
                            <th width="20%"><?php echo $_smarty_tpl->__("current_setting_value");?>
</th>
                            <th width="20%"><?php echo $_smarty_tpl->__("new_setting_value");?>
</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['conflicts']->value, 'setting_section', false, 'section_name');
$_smarty_tpl->tpl_vars['setting_section']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['section_name']->value => $_smarty_tpl->tpl_vars['setting_section']->value) {
$_smarty_tpl->tpl_vars['setting_section']->do_else = false;
?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['setting_section']->value['settings'], 'setting', false, 'setting_name');
$_smarty_tpl->tpl_vars['setting']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['setting_name']->value => $_smarty_tpl->tpl_vars['setting']->value) {
$_smarty_tpl->tpl_vars['setting']->do_else = false;
?>
                            <tr>
                                <td>
                                    <input type="checkbox" name="settings_values[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['setting']->value['object_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['setting']->value['object_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item" checked="checked">
                                </td>
                                <td>
                                    <strong><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['setting_section']->value['name'], ENT_QUOTES, 'UTF-8');?>
</strong>: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['setting']->value['name'], ENT_QUOTES, 'UTF-8');?>

                                </td>
                                <td>
                                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['setting']->value['current_value_readable'], ENT_QUOTES, 'UTF-8');?>

                                </td>
                                <td>
                                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['setting']->value['new_value_readable'], ENT_QUOTES, 'UTF-8');?>

                                </td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            </div>
            <div class="clearfix right">
                <a class="btn" href="<?php echo htmlspecialchars((string) fn_url("themes.manage"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("cancel");?>
</a>
                <button class="btn btn-primary" type="submit" name="allow_overwrite" value="Y"><?php echo $_smarty_tpl->__("overwrite_selected_settings");?>
</button>
            </div>
        </form>
    </div>
</div>
<?php } else { ?>

<div class="themes" id="themes_list">

<div class="row-fluid">
    <div class="span12">
        <h4><?php echo $_smarty_tpl->__("current_theme");?>
</h4>
    </div>
</div>
<div class="row-fluid">
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "add_new_picker", null, null);?>
        <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="clone_theme_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
_form" class="cm-ajax cm-comet cm-form-dialog-closer form-horizontal form-edit cm-skip-check-items">
            <input type="hidden" name="theme_data[theme_src]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" name="result_ids" value="themes_list,elm_sidebar">

            <div class="add-new-object-group">
                <div class="tabs cm-j-tabs">
                    <ul class="nav nav-tabs">
                        <li id="tab_clone_theme_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-js active"><a><?php echo $_smarty_tpl->__("general");?>
</a></li>
                    </ul>
                </div>

                <div class="cm-tabs-content" id="content_tab_clone_theme_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label cm-required" for="elm_theme_dir_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("directory");?>
</label>
                            <div class="controls">
                                <input type="text" id="elm_theme_dir_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
" name="theme_data[theme_dest]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
_clone" />
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="elm_theme_title_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("name");?>
</label>
                            <div class="controls">
                                <input type="text" id="elm_theme_title_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
" name="theme_data[title]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['theme']->value['title'], ENT_QUOTES, 'UTF-8');?>
" />
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="elm_theme_desc_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("description");?>
</label>
                            <div class="controls">
                                <textarea name="theme_data[description]" id="elm_theme_desc_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
" cols="50" rows="4" class="span9"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['theme']->value['description'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                            </div>
                        </div>

                    </fieldset>
                </div>
            </div>

            <div class="buttons-container">
                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[themes.clone]",'cancel_action'=>"close",'save'=>true), 0, false);
?>
            </div>

        </form>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <div class="span12 section-headers">
        <h4 class="lead"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['theme']->value['title'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['layout']->value['style_name']) {?>: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['layout']->value['style_name'], ENT_QUOTES, 'UTF-8');
}?></h4>
        <span class="muted"><?php echo $_smarty_tpl->__("theme_styles_and_layouts");?>
</span>
    </div>
</div>
<div class="row-fluid">
    <?php if ($_smarty_tpl->tpl_vars['theme']->value['screenshot']) {?>
        <div id="theme_image" class="span4">
            <?php if ($_smarty_tpl->tpl_vars['theme']->value['styles'][$_smarty_tpl->tpl_vars['layout']->value['style_id']]['image']) {?>
                <img class="screenshot" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['theme']->value['styles'][$_smarty_tpl->tpl_vars['layout']->value['style_id']]['image'], ENT_QUOTES, 'UTF-8');?>
">
            <?php } else { ?>
                <img class="screenshot" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/user_styles.png" alt="">
            <?php }?>

        <!--theme_image--></div>
    <?php }?>
    <div class="span8 theme-description" id="theme_description_container">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"themes:current_theme_options"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"themes:current_theme_options"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <div class="table-responsive-wrapper">
                <table class="table table-middle table--relative table-responsive">
                    <thead>
                        <tr>
                            <th><?php echo $_smarty_tpl->__("layout");?>
</th>
                            <th><?php echo $_smarty_tpl->__("theme_editor.style");?>
</th>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"themes:list_extra_th"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"themes:list_extra_th"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"themes:list_extra_th"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $_smarty_tpl->_assignInScope('has_styles', !!$_smarty_tpl->tpl_vars['theme']->value['styles']);?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['theme']->value['layouts'], 'available_layout');
$_smarty_tpl->tpl_vars['available_layout']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['available_layout']->value) {
$_smarty_tpl->tpl_vars['available_layout']->do_else = false;
?>
                            <tr>
                                <td data-th="<?php echo $_smarty_tpl->__("layout");?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['available_layout']->value['name'], ENT_QUOTES, 'UTF-8');?>
</td>
                                <td data-th="<?php echo $_smarty_tpl->__("theme_editor.style");?>
">
                                    <?php $_smarty_tpl->_assignInScope('styles_descr', array());?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['available_themes']->value['current']['styles'], 'style');
$_smarty_tpl->tpl_vars['style']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['style']->value) {
$_smarty_tpl->tpl_vars['style']->do_else = false;
?>
                                        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['styles_descr']) ? $_smarty_tpl->tpl_vars['styles_descr']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['style']->value['style_id']] = $_smarty_tpl->tpl_vars['style']->value['name'];
$_smarty_tpl->_assignInScope('styles_descr', $_tmp_array);?>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                    <?php if ($_smarty_tpl->tpl_vars['has_styles']->value) {?>
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['available_layout']->value['layout_id'],'status'=>$_smarty_tpl->tpl_vars['available_layout']->value['style_id'],'items_status'=>$_smarty_tpl->tpl_vars['styles_descr']->value,'update_controller'=>"themes.styles",'status_target_id'=>"theme_description_container,themes_list",'statuses'=>$_smarty_tpl->tpl_vars['available_themes']->value['current']['styles'],'btn_meta'=>mb_strtolower("btn-text o-status-".((string)$_smarty_tpl->tpl_vars['o']->value['status']), 'UTF-8'),'default_status_text'=>$_smarty_tpl->__("none")), 0, true);
?>
                                    <?php } else { ?>
                                        <span class="muted"><?php echo $_smarty_tpl->__("theme_no_styles_text");?>
</span>
                                    <?php }?>
                                </td>
                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"themes:list_extra_td"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"themes:list_extra_td"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"themes:list_extra_td"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                <td class="right btn-toolbar btn-toolbar--theme-editor" data-th="&nbsp;">
                                    <?php if ($_smarty_tpl->tpl_vars['available_layout']->value['is_default']) {?>
                                        <?php $_smarty_tpl->_assignInScope('default_layout_name', $_smarty_tpl->tpl_vars['available_layout']->value['name']);?>
                                        <?php $_smarty_tpl->_assignInScope('but_meta', "btn-small btn-primary cm-post");?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->_assignInScope('but_meta', "btn-small cm-post");?>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['has_styles']->value) {?>
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"customization.update_mode?type=theme_editor&status=enable&s_layout=".((string)$_smarty_tpl->tpl_vars['available_layout']->value['layout_id'])."&s_storefront=".((string)$_smarty_tpl->tpl_vars['storefront']->value->storefront_id),'but_text'=>$_smarty_tpl->__("theme_editor"),'but_role'=>"action",'but_meta'=>$_smarty_tpl->tpl_vars['but_meta']->value,'but_target'=>"_blank"), 0, true);
?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("theme_editor_not_supported"),'but_text'=>$_smarty_tpl->__("theme_editor"),'but_role'=>"btn",'but_meta'=>"btn btn-small disabled cm-tooltip"), 0, true);
?>
                                    <?php }?>
                                    <?php if (!$_smarty_tpl->tpl_vars['act_as_vendor']->value) {?>
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"customization.update_mode?type=block_manager&status=enable&s_layout=".((string)$_smarty_tpl->tpl_vars['available_layout']->value['layout_id'])."&s_storefront=".((string)$_smarty_tpl->tpl_vars['storefront']->value->storefront_id),'but_text'=>$_smarty_tpl->__("edit_layout_on_site"),'but_role'=>"action",'but_meta'=>$_smarty_tpl->tpl_vars['but_meta']->value,'but_target'=>"_blank"), 0, true);
?>
                                    <?php }?>
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"customization.update_mode?type=live_editor&status=enable&s_layout=".((string)$_smarty_tpl->tpl_vars['available_layout']->value['layout_id'])."&s_storefront=".((string)$_smarty_tpl->tpl_vars['storefront']->value->storefront_id),'but_text'=>$_smarty_tpl->__("edit_content_on_site"),'but_role'=>"action",'but_meta'=>$_smarty_tpl->tpl_vars['but_meta']->value,'but_target'=>"_blank"), 0, true);
?>
                                </td>
                            <tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            </div>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"themes:current_theme_options"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <!--theme_description_container--></div>
</div>
<?php if ($_smarty_tpl->tpl_vars['theme_logos']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/themes/components/logos_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('logos'=>$_smarty_tpl->tpl_vars['theme_logos']->value,'company_id'=>$_smarty_tpl->tpl_vars['id']->value,'default_layout_name'=>(($tmp = $_smarty_tpl->tpl_vars['default_layout_name']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp)), 0, false);
}?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tabsbox", null, null);
if ($_smarty_tpl->tpl_vars['can_manage_themes']->value) {?>
<div id="content_installed_themes">
    <div id="themes_manage" class="themes-current clearfix">

    <div class="themes-available">
    <?php if ($_smarty_tpl->tpl_vars['available_themes']->value['installed']) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array_reverse($_smarty_tpl->tpl_vars['available_themes']->value['installed'],true), 'installed_theme', false, 'theme_id');
$_smarty_tpl->tpl_vars['installed_theme']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['theme_id']->value => $_smarty_tpl->tpl_vars['installed_theme']->value) {
$_smarty_tpl->tpl_vars['installed_theme']->do_else = false;
?>
        <div class="row-fluid">
        <?php if ($_smarty_tpl->tpl_vars['installed_theme']->value) {?>
            <div class="theme-subtitle clearfix">
                <h4 id="anchor_<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['installed_theme']->value['title']," ","_"), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['installed_theme']->value['title'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['theme_id']->value == $_smarty_tpl->tpl_vars['theme_name']->value) {?> <span class="label label-success"><?php echo $_smarty_tpl->__("active");?>
</span><?php }?></h4>
                <?php if ($_smarty_tpl->tpl_vars['installed_theme']->value['dependent_themes']) {?>
                    <?php $_smarty_tpl->_assignInScope('can_remove', false);?>
                    <?php $_smarty_tpl->_assignInScope('tooltip', $_smarty_tpl->__("cannot_remove_theme_has_dependent_themes",array("[dependent_themes]"=>implode(', ',$_smarty_tpl->tpl_vars['installed_theme']->value['dependent_themes']))));?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('can_remove', true);?>
                    <?php $_smarty_tpl->_assignInScope('tooltip', $_smarty_tpl->__("remove_theme"));?>
                <?php }?>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"themes:remove_theme"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"themes:remove_theme"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <a class="<?php if ($_smarty_tpl->tpl_vars['can_remove']->value) {?>cm-confirm cm-post <?php }?>cm-tooltip btn pull-right btn-small"<?php if (!$_smarty_tpl->tpl_vars['can_remove']->value) {?> disabled="disabled"<?php }?> data-ce-tooltip-position="top"<?php if ($_smarty_tpl->tpl_vars['can_remove']->value) {?> href="<?php echo htmlspecialchars((string) fn_url("themes.delete?theme_name=".((string)$_smarty_tpl->tpl_vars['theme_id']->value)), ENT_QUOTES, 'UTF-8');?>
"<?php }?> title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tooltip']->value, ENT_QUOTES, 'UTF-8');?>
"> <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-trash"),$_smarty_tpl);?>
</a>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"themes:remove_theme"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <span class="label pull-right"><?php echo htmlspecialchars((string) smarty_modifier_count($_smarty_tpl->tpl_vars['installed_theme']->value['layouts']), ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->__("layouts");?>
</span>
                <span class="label pull-right"><?php echo htmlspecialchars((string) smarty_modifier_count($_smarty_tpl->tpl_vars['installed_theme']->value['styles']), ENT_QUOTES, 'UTF-8');?>
 <?php echo $_smarty_tpl->__("theme_editor.styles");?>
</span>
            </div>
            <div class="themes-list">
            <?php if ($_smarty_tpl->tpl_vars['installed_theme']->value['styles']) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['installed_theme']->value['styles'], 'style');
$_smarty_tpl->tpl_vars['style']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['style']->value) {
$_smarty_tpl->tpl_vars['style']->do_else = false;
?>
                    <div class="span3">
                        <div class="theme <?php if ($_smarty_tpl->tpl_vars['style']->value['style_id'] == $_smarty_tpl->tpl_vars['layout']->value['style_id'] && $_smarty_tpl->tpl_vars['layout']->value['theme_name'] == $_smarty_tpl->tpl_vars['theme_id']->value) {?>theme-selected<?php }?>">
                            <div class="theme-title">
                               <span title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['installed_theme']->value['title'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['installed_theme']->value['title'], ENT_QUOTES, 'UTF-8');?>
: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['style']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['theme_id']->value != $_smarty_tpl->tpl_vars['runtime']->value['layout']['theme_name'] || $_smarty_tpl->tpl_vars['style']->value['style_id'] != $_smarty_tpl->tpl_vars['layout']->value['style_id']) {?>
                                <div class="theme-use">
                                    <?php if ($_smarty_tpl->tpl_vars['theme_id']->value != $_smarty_tpl->tpl_vars['runtime']->value['layout']['theme_name']) {?>
                                        <?php $_smarty_tpl->_assignInScope('but_text', $_smarty_tpl->__("activate"));?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->_assignInScope('but_text', $_smarty_tpl->__("use_this_style"));?>
                                    <?php }?>

                                    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"themes.set?theme_name=".((string)$_smarty_tpl->tpl_vars['theme_id']->value)."&amp;style=".((string)$_smarty_tpl->tpl_vars['style']->value['style_id']),'but_text'=>$_smarty_tpl->tpl_vars['but_text']->value,'but_role'=>"action",'but_meta'=>"btn-primary cm-post"), 0, true);
?>
                                </div>
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['style']->value['image']) {?>
                                <a id="image_img_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['theme_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['style']->value['style_id'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['style']->value['image'], ENT_QUOTES, 'UTF-8');?>
" data-ca-image-id="img_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['theme_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['style']->value['style_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-previewer">
                                    <?php if ($_smarty_tpl->tpl_vars['style']->value['style_id'] == $_smarty_tpl->tpl_vars['layout']->value['style_id'] && $_smarty_tpl->tpl_vars['layout']->value['theme_name'] == $_smarty_tpl->tpl_vars['theme_id']->value) {?>
                                        <span class="theme-in-use"><?php echo $_smarty_tpl->__("currently_in_use");?>
</span>
                                    <?php }?>
                                    <img class="screenshot" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['style']->value['image'], ENT_QUOTES, 'UTF-8');?>
" alt="">
                                </a>
                            <?php } else { ?>
                                <div>
                                    <?php if ($_smarty_tpl->tpl_vars['style']->value['style_id'] == $_smarty_tpl->tpl_vars['layout']->value['style_id'] && $_smarty_tpl->tpl_vars['layout']->value['theme_name'] == $_smarty_tpl->tpl_vars['theme_id']->value) {?>
                                        <span class="theme-in-use"><?php echo $_smarty_tpl->__("currently_in_use");?>
</span>
                                    <?php }?>
                                    <img class="screenshot" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
/user_styles.png" alt="">
                                </div>
                            <?php }?>
                        </div>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            <?php } else { ?>
                <div class="span3">
                    <div class="theme">
                        <div class="theme-title">
                           <span title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['theme']->value['title'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['installed_theme']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['theme_id']->value != $_smarty_tpl->tpl_vars['runtime']->value['layout']['theme_name']) {?>
                            <div class="theme-use">
                                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"themes.set?theme_name=".((string)$_smarty_tpl->tpl_vars['theme_id']->value),'but_text'=>$_smarty_tpl->__("activate"),'but_role'=>"action",'but_meta'=>"btn-primary cm-post"), 0, true);
?>
                            </div>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['installed_theme']->value['screenshot']) {?>
                            <a id="image_img_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['theme_id']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['installed_theme']->value['screenshot'], ENT_QUOTES, 'UTF-8');?>
" data-ca-image-id="img_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['theme_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-previewer"><img class="screenshot" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['installed_theme']->value['screenshot'], ENT_QUOTES, 'UTF-8');?>
" alt=""></a>
                        <?php }?>
                    </div>
                </div>
            <?php }?>
        </div>
        <?php }?>
        <!--/row--></div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php } else { ?>
        <div class="no-items">
            <?php echo $_smarty_tpl->__("no_themes_available");?>

        </div>
    <?php }?>
    </div>
</div>
</div>
<div id="content_browse_all_available_themes">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"themes:install_themes"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"themes:install_themes"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

    <?php echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['available_themes']->value['repo'],'size'=>3,'assign'=>"splitted_themes",'simple'=>true),$_smarty_tpl);?>

    <div class="themes-available">

    <?php if ($_smarty_tpl->tpl_vars['available_themes']->value['repo']) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['splitted_themes']->value, 'repo_themes');
$_smarty_tpl->tpl_vars['repo_themes']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['repo_themes']->value) {
$_smarty_tpl->tpl_vars['repo_themes']->do_else = false;
?>
    <div class="row-fluid">
        <div class="themes-list">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['repo_themes']->value, 'repo_theme', false, 'theme_id');
$_smarty_tpl->tpl_vars['repo_theme']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['theme_id']->value => $_smarty_tpl->tpl_vars['repo_theme']->value) {
$_smarty_tpl->tpl_vars['repo_theme']->do_else = false;
?>
            <?php if ($_smarty_tpl->tpl_vars['repo_theme']->value) {?>
                <div class="span3">
                    <div class="theme">

                        <div class="theme-title">
                        <span title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['theme']->value['title'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['repo_theme']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
                        </div>

                        <div class="theme-use">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"themes.install?theme_name=".((string)$_smarty_tpl->tpl_vars['theme_id']->value),'but_text'=>$_smarty_tpl->__("install"),'but_role'=>"action",'but_meta'=>"btn-primary cm-comet cm-ajax cm-post",'but_target_id'=>"themes_list"), 0, true);
?>
                        </div>

                        <?php if ($_smarty_tpl->tpl_vars['repo_theme']->value['screenshot']) {?>
                        <a id="image_img_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['theme_id']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['repo_theme']->value['screenshot'], ENT_QUOTES, 'UTF-8');?>
" data-ca-image-id="img_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['theme_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-previewer"><img class="screenshot" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['repo_theme']->value['screenshot'], ENT_QUOTES, 'UTF-8');?>
" alt="" width="250"></a>
                        <?php }?>

                        <div class="theme-actions">
                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>

                                <?php if ($_smarty_tpl->tpl_vars['repo_theme']->value['screenshot']) {?>
                                <li><a id="image_img_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['theme_id']->value, ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['repo_theme']->value['screenshot'], ENT_QUOTES, 'UTF-8');?>
" data-ca-image-id="img_button_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['theme_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-previewer"><?php echo $_smarty_tpl->__("preview");?>
</a></li>
                                <?php }?>

                                                                <li><a class="cm-comet cm-ajax cm-post" data-ca-target-id="themes_list" href="<?php echo htmlspecialchars((string) fn_url("themes.install?theme_name=".((string)$_smarty_tpl->tpl_vars['theme_id']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="themes_list"><?php echo $_smarty_tpl->__("install");?>
</a></li>
                            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list'),'placement'=>"right"), true);?>

                        </div>
                    </div>
                </div>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php } else { ?>
        <div class="no-items">
            <?php echo $_smarty_tpl->__("no_themes_available");?>

        </div>
    <?php }?>
    </div>
<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"themes:install_themes"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <?php $_smarty_tpl->_assignInScope('theme_name', $_smarty_tpl->tpl_vars['available_themes']->value['current']['theme_name']);?>
    <div class="hidden" id="content_elm_clone_theme_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['theme_name']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("clone_theme");?>
">
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_new_picker');?>

    </div>

</div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("tygh:common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabsbox'),'active_tab'=>$_REQUEST['selected_section']), 0, false);
?>
<!--themes_list--></div>
<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sidebar", null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['can_manage_themes']->value) {?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"themes:manage_sidebar"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"themes:manage_sidebar"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <div class="container themes-side">

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"themes:settings"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"themes:settings"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <div class="sidebar-row">
            <ul class="unstyled list-with-btns">
                <li>
                    <div class="list-description">
                        <?php echo $_smarty_tpl->__("rebuild_cache_automatically");?>
 <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"cm-tooltip icon-question-sign",'title'=>$_smarty_tpl->__("rebuild_cache_automatically_tooltip")),$_smarty_tpl);?>

                    </div>
                    <div class="switch switch-mini cm-switch-change list-btns" id="rebuild_cache_automatically">
                        <input type="checkbox" name="compile_check" value="1" <?php if ($_smarty_tpl->tpl_vars['dev_modes']->value['compile_check']) {?>checked="checked"<?php }?>/>
                    </div>
                </li>
            </ul>
        </div>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>

            (function (_, $) {
                $(_.doc).on('switch-change', '.cm-switch-change', function (e, data) {
                    var value = data.value;
                    $.ceAjax('request', fn_url("themes.update_dev_mode"), {
                        method: 'post',
                        data: {
                            dev_mode: data.el.prop('name'),
                            state: value ? 1 : 0
                        }
                    });
                });

                $.ceEvent('on', 'ce.ajaxdone', function(){
                    if ($('.switch .switch-mini').length == 0) {
                        $('.switch')['bootstrapSwitch']();
                    }
                });
            }(Tygh, Tygh.$));
        <?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <hr>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"themes:settings"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"themes:options"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"themes:options"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <div class="form-horizontal sidebar-row clearfix">
            <h6><?php echo $_smarty_tpl->__("theme_information");?>
</h6>
            <div class="control-group">
                <div class="control-label muted"><?php echo $_smarty_tpl->__("name");?>
</div>
                <div class="controls right"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['theme']->value['title'], ENT_QUOTES, 'UTF-8');?>
</div>
            </div>
            <div class="control-group">
                <div class="control-label muted" title="/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['storefront']->value->theme_name, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("directory");?>
</div>
                <div class="controls right"><a class="pull-right" href="<?php echo htmlspecialchars((string) fn_url("templates.manage?selected_path=".((string)$_smarty_tpl->tpl_vars['storefront']->value->theme_name)), ENT_QUOTES, 'UTF-8');?>
">/<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['storefront']->value->theme_name, ENT_QUOTES, 'UTF-8');?>
</a></div>
            </div>
            <div class="control-group">
                <div class="control-label muted"><?php echo $_smarty_tpl->__("layouts");?>
</div>
                <div class="controls right"><a href="<?php echo htmlspecialchars((string) fn_url("block_manager.manage"), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) smarty_modifier_count($_smarty_tpl->tpl_vars['theme']->value['layouts']), ENT_QUOTES, 'UTF-8');?>
</a></div>
            </div>
            <div class="control-group">
                <div class="control-label muted"><?php echo $_smarty_tpl->__("theme_editor.styles");?>
</div>
                <div class="controls right"><a href="#anchor_<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['theme']->value['title']," ","_"), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) smarty_modifier_count($_smarty_tpl->tpl_vars['theme']->value['styles']), ENT_QUOTES, 'UTF-8');?>
</a> </div>
            </div>
            <div class="control-group">
                <div class="control-label muted" ><?php echo $_smarty_tpl->__("developer");?>
</div>
                <div class="controls right"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['theme']->value['developer'], ENT_QUOTES, 'UTF-8');?>
</div>
            </div>
        </div>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"themes:options"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        <hr>
        <div class="sidebar-row marketplace">
            <h6><?php echo $_smarty_tpl->__("marketplace");?>
</h6>
            <p class="marketplace-link"><?php echo $_smarty_tpl->__("marketplace_find_more",array("[href]"=>$_smarty_tpl->tpl_vars['config']->value['resources']['marketplace_url']));?>
</p>
        </div>
    </div>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"themes:manage_sidebar"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "adv_buttons", null, null);?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"themes:adv_buttons"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"themes:adv_buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php if ((fn_allowed_for("ULTIMATE") && $_smarty_tpl->tpl_vars['runtime']->value['company_id']) || (fn_allowed_for("MULTIVENDOR") && !$_smarty_tpl->tpl_vars['runtime']->value['company_id'])) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"upload_theme",'text'=>$_smarty_tpl->__("upload_theme"),'title'=>$_smarty_tpl->__("upload_theme"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'upload_theme'),'act'=>"general",'link_class'=>"cm-dialog-auto-size",'icon'=>"icon-plus",'link_text'=>''), 0, false);
?>
    <?php }?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"themes:adv_buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['can_manage_themes']->value) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"themes:tools_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"themes:tools_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"dialog",'text'=>$_smarty_tpl->__("clone_theme"),'target_id'=>"content_elm_clone_theme_".((string)$_smarty_tpl->tpl_vars['theme_name']->value)), true);?>
</li>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"themes:tools_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list')), true);?>

    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['theme_logos']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[themes.update_logos]",'but_role'=>"action",'but_target_form'=>"update_logos_form",'but_meta'=>"cm-submit"), 0, false);
?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("themes"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'sidebar'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar'),'adv_buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'adv_buttons'),'buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'select_storefront'=>true,'show_all_storefront'=>false), 0, false);
}
}
