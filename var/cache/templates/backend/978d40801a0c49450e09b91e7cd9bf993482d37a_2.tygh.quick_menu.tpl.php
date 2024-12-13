<?php
/* Smarty version 4.1.1, created on 2024-12-13 13:39:42
  from '/var/www/html/projects/cp_email_verification/design/backend/templates/common/quick_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_675c0eee2597a9_48738397',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '978d40801a0c49450e09b91e7cd9bf993482d37a' => 
    array (
      0 => '/var/www/html/projects/cp_email_verification/design/backend/templates/common/quick_menu.tpl',
      1 => 1734079224,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/select_object.tpl' => 1,
    'tygh:buttons/save_cancel.tpl' => 1,
  ),
),false)) {
function content_675c0eee2597a9_48738397 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/projects/cp_email_verification/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),1=>array('file'=>'/var/www/html/projects/cp_email_verification/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('editing_quick_menu_section','new_section','editing_quick_menu_link','new_link','quick_menu','remove_this_item','remove_this_item','add_link','add_section','done','edit','name','link','position','use_current_link'));
if (fn_check_view_permissions("tools.show_quick_menu")) {?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
    Tygh.tr('editing_quick_menu_section', '<?php echo strtr((string)$_smarty_tpl->__("editing_quick_menu_section"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
');
    Tygh.tr('new_section', '<?php echo strtr((string)$_smarty_tpl->__("new_section"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
');
    Tygh.tr('editing_quick_menu_link', '<?php echo strtr((string)$_smarty_tpl->__("editing_quick_menu_link"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
');
    Tygh.tr('new_link', '<?php echo strtr((string)$_smarty_tpl->__("new_link"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
');
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<div class="quick-menu-container" id="quick_menu">
    <div class="quick-menu quick-menu-show-on-hover">
        <a id="sw_quick_menu_content" class="quick-menu-link <?php if ($_smarty_tpl->tpl_vars['edit_quick_menu']->value || $_smarty_tpl->tpl_vars['expand_quick_menu']->value) {?>open<?php }?> cm-combination btn">
            <span class="quick-menu-link__text"><?php echo $_smarty_tpl->__("quick_menu");?>
 <b class="caret"></b></span>
            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-ellipsis-vertical quick-menu-link__icon"),$_smarty_tpl);?>

        </a>

        <div id="quick_menu_content" class="quick-menu-content cm-popup-box<?php if (!$_smarty_tpl->tpl_vars['edit_quick_menu']->value && !$_smarty_tpl->tpl_vars['expand_quick_menu']->value) {?> hidden<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['edit_quick_menu']->value) {?>
            <div class="menu-container">
                <div class="table-wrapper">
                    <table width="100%">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['quick_menu']->value, 'sect', false, 'sect_id');
$_smarty_tpl->tpl_vars['sect']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sect_id']->value => $_smarty_tpl->tpl_vars['sect']->value) {
$_smarty_tpl->tpl_vars['sect']->do_else = false;
?>
                            <tr data-ca-qm-item="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sect_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-qm-parent-id="0"
                                data-ca-qm-position="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sect']->value['section']['position'], ENT_QUOTES, 'UTF-8');?>
">
                                <td class="nowrap section-header">
                                    <strong class="cm-qm-name"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sect']->value['section']['name'], ENT_QUOTES, 'UTF-8');?>
</strong>
                                </td>
                                <td class="hidden-tools nowrap right">
                                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-trash hand valign cm-delete-section",'title'=>$_smarty_tpl->__("remove_this_item")),$_smarty_tpl);?>

                                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-edit hand cm-update-item"),$_smarty_tpl);?>

                                </td>
                            </tr>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sect']->value['subsection'], 'subsect');
$_smarty_tpl->tpl_vars['subsect']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subsect']->value) {
$_smarty_tpl->tpl_vars['subsect']->do_else = false;
?>
                                <tr data-ca-qm-item="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subsect']->value['menu_id'], ENT_QUOTES, 'UTF-8');?>
" data-ca-qm-parent-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subsect']->value['parent_id'], ENT_QUOTES, 'UTF-8');?>
"
                                    data-ca-qm-position="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subsect']->value['position'], ENT_QUOTES, 'UTF-8');?>
">
                                    <td class="nowrap">
                                        <a class="cm-qm-name" href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['subsect']->value['url']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subsect']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
                                    </td>
                                    <td class="hidden-tools nowrap right">
                                        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-trash hand valign cm-delete-section",'title'=>$_smarty_tpl->__("remove_this_item")),$_smarty_tpl);?>

                                        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-edit hand cm-update-item"),$_smarty_tpl);?>

                                    </td>
                                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <tr data-ca-qm-item="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sect_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-qm-parent-id="0"
                                data-ca-qm-position="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sect']->value['section']['position'], ENT_QUOTES, 'UTF-8');?>
">
                                <td colspan="2" class="cm-add-link"><a class="edit cm-add-link"><?php echo $_smarty_tpl->__("add_link");?>
</a></td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </table>
                </div>
            </div>
            <div class="table-wrapper">
            <table width="100%" class="quick-menu-edit">
                <tr>
                    <td class="nowrap top">
                        <a class="edit cm-add-section"><?php echo $_smarty_tpl->__("add_section");?>
</a>
                        <a class="pull-right edit cm-ajax" data-ca-target-id="quick_menu"
                           href="<?php echo htmlspecialchars((string) fn_url("tools.show_quick_menu"), ENT_QUOTES, 'UTF-8');?>
"
                           data-ca-event="ce.quick_menu_content_switch_callback"><?php echo $_smarty_tpl->__("done");?>
</a>
                    </td>
                </tr>
            </table>
            </div>
        <?php } else { ?>
            <?php if ($_smarty_tpl->tpl_vars['quick_menu']->value) {?>
                <div class="menu-container">
                    <ul class="unstyled">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['quick_menu']->value, 'sect');
$_smarty_tpl->tpl_vars['sect']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sect']->value) {
$_smarty_tpl->tpl_vars['sect']->do_else = false;
?>
                            <li><span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sect']->value['section']['name'], ENT_QUOTES, 'UTF-8');?>
</span></li>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sect']->value['subsection'], 'subsect');
$_smarty_tpl->tpl_vars['subsect']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subsect']->value) {
$_smarty_tpl->tpl_vars['subsect']->do_else = false;
?>
                                <li><a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['subsect']->value['url']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subsect']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </div>
            <?php }?>
            <div class="quick-menu-actions right">
                <a class="edit cm-ajax" href="<?php echo htmlspecialchars((string) fn_url("tools.show_quick_menu.edit"), ENT_QUOTES, 'UTF-8');?>
" data-ca-target-id="quick_menu"
                   data-ca-event="ce.quick_menu_content_switch_callback" title="<?php echo $_smarty_tpl->__("edit");?>
"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-edit hand"),$_smarty_tpl);?>
</a>
            </div>
        <?php }?>
    </div>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['show_quick_popup']->value) {?>
        <div id="quick_box" class="hidden quick-menu-popup cm-dialog-auto-size" data-ca-target-id="quick_box">

            <div id="quick_menu_language_selector">
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('style'=>"graphic",'link_tpl'=>fn_link_attach("tools.get_quick_menu_variant","descr_sl="),'items'=>$_smarty_tpl->tpl_vars['languages']->value,'selected_id'=>(defined('DESCR_SL') ? constant('DESCR_SL') : null),'key_name'=>"name",'suffix'=>"quick_menu",'display_icons'=>true,'select_container_id'=>"quick_menu_language_selector"), 0, false);
?>
            </div>

            <form class="cm-ajax form-horizontal form-edit" name="quick_menu_form" action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post">
                <input id="qm_item_id" type="hidden" name="item[id]" value=""/>
                <input id="qm_item_parent" type="hidden" name="item[parent_id]" value="0"/>
                <input id="qm_descr_sl" type="hidden" name="descr_sl" value=""/>
                <input type="hidden" name="result_ids" value="quick_menu"/>

                <div class="control-group">
                    <label class="cm-required control-label" for="qm_item_name"><?php echo $_smarty_tpl->__("name");?>
:</label>

                    <div class="controls">
                        <input id="qm_item_name" name="item[name]" type="text" value="" size="40"/>
                    </div>
                </div>

                <div class="control-group">
                    <label class="cm-required control-label" for="qm_item_link"><?php echo $_smarty_tpl->__("link");?>
:</label>

                    <div class="controls">
                        <input id="qm_item_link" name="item[url]" class="input-text-large" type="text" value=""
                               size="40"/>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="qm_item_position"><?php echo $_smarty_tpl->__("position");?>
:</label>

                    <div class="controls">
                        <input id="qm_item_position" name="item[position]" type="text" value="" size="6"/>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <a id="qm_current_link"><?php echo $_smarty_tpl->__("use_current_link");?>
</a>
                    </div>
                </div>

                <div class="buttons-container">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[tools.update_quick_menu_item.edit]",'cancel_action'=>"close",'save'=>true), 0, false);
?>
                </div>

            </form>
        </div>
    <?php }?>
    <!--quick_menu--></div>
<?php }
}
}
