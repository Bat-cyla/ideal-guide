<?php
/* Smarty version 4.1.1, created on 2024-12-13 13:39:41
  from '/var/www/html/projects/cp_email_verification/design/backend/templates/common/mainbox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_675c0eede06b98_51106810',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c61f84944f253a7fdcaacfdfdee6ae1dbba83515' => 
    array (
      0 => '/var/www/html/projects/cp_email_verification/design/backend/templates/common/mainbox.tpl',
      1 => 1734079224,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/sidebox.tpl' => 1,
    'tygh:common/last_viewed_items.tpl' => 1,
    'tygh:common/select_object.tpl' => 2,
    'tygh:views/storefronts/components/picker/presets.tpl' => 1,
    'tygh:common/tools.tpl' => 1,
  ),
),false)) {
function content_675c0eede06b98_51106810 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/projects/cp_email_verification/app/functions/smarty_plugins/block.inline_script.php','function'=>'smarty_block_inline_script',),1=>array('file'=>'/var/www/html/projects/cp_email_verification/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'/var/www/html/projects/cp_email_verification/app/functions/smarty_plugins/block.notes.php','function'=>'smarty_block_notes',),3=>array('file'=>'/var/www/html/projects/cp_email_verification/app/functions/smarty_plugins/function.include_ext.php','function'=>'smarty_function_include_ext',),4=>array('file'=>'/var/www/html/projects/cp_email_verification/app/functions/smarty_plugins/modifier.sanitize_html.php','function'=>'smarty_modifier_sanitize_html',),5=>array('file'=>'/var/www/html/projects/cp_email_verification/app/functions/smarty_plugins/modifier.sizeof.php','function'=>'smarty_modifier_sizeof',),6=>array('file'=>'/var/www/html/projects/cp_email_verification/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('notes','admin_search_field','all_vendors','choose_action','sidebar','language','sidebar'));
if (!$_smarty_tpl->tpl_vars['sidebar_position']->value) {?>
    <?php $_smarty_tpl->_assignInScope('sidebar_position', "right");
}?>

<?php if (!$_smarty_tpl->tpl_vars['sidebar_icon']->value) {?>
    <?php $_smarty_tpl->_assignInScope('sidebar_icon', "icon-chevron-left");
}?>

<?php if (!(isset($_smarty_tpl->tpl_vars['select_storefront']->value))) {?>
    <?php if ((fn_allowed_for('MULTIVENDOR:ULTIMATE'))) {?>
        <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['is_multiple_storefronts']) {?>
            <?php $_smarty_tpl->_assignInScope('select_storefront', false);?>
        <?php }?>
        <?php $_smarty_tpl->_assignInScope('selected_storefront_id', (($tmp = $_smarty_tpl->tpl_vars['selected_storefront_id']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['app']->value["storefront"]->storefront_id ?? null : $tmp));?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('select_storefront', $_smarty_tpl->tpl_vars['runtime']->value['is_multiple_storefronts']);?>
    <?php }
}?>

<?php if ($_smarty_tpl->tpl_vars['anchor']->value) {?>
<a name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['anchor']->value, ENT_QUOTES, 'UTF-8');?>
"></a>
<?php }?>

<?php if (defined("THEMES_PANEL")) {?>
    <?php $_smarty_tpl->_assignInScope('sticky_padding_on_actions_panel', 80);?>
    <?php $_smarty_tpl->_assignInScope('sticky_top_on_actions_panel', 80);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('sticky_padding_on_actions_panel', 45);?>
    <?php $_smarty_tpl->_assignInScope('sticky_top_on_actions_panel', 45);
}?>

<?php $_smarty_tpl->_assignInScope('enable_sticky_scroll', (($tmp = $_smarty_tpl->tpl_vars['enable_sticky_scroll']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('navigation_accordion', (($tmp = $_smarty_tpl->tpl_vars['navigation_accordion']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
// Init ajax callback (rebuild)
var menu_content = <?php echo htmlspecialchars_decode((($tmp = $_smarty_tpl->tpl_vars['convertible_data']->value ?? null)===null||$tmp==='' ? "''" ?? null : $tmp), ENT_QUOTES);?>
;
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sidebar_content", "sidebar_content", null);?>
    <?php if ($_smarty_tpl->tpl_vars['navigation']->value && $_smarty_tpl->tpl_vars['navigation']->value['dynamic']['sections']) {?>
        <div class="sidebar-row">
            <ul class="nav nav-list">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['navigation']->value['dynamic']['sections'], 'm', false, 's_id', 'first_level', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['m']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['s_id']->value => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_first_level']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_first_level']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_first_level']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_first_level']->value['total'];
?>
                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:dynamic_menu_item"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:dynamic_menu_item"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php if ($_smarty_tpl->tpl_vars['m']->value['type'] == "divider") {?>
                            <li class="divider"></li>
                            <?php } else { ?>
                                <?php ob_start();
echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['method']->value ?? null)===null||$tmp==='' ? "GET" ?? null : $tmp), ENT_QUOTES, 'UTF-8');
$_prefixVariable24 = ob_get_clean();
if (fn_check_view_permissions($_smarty_tpl->tpl_vars['m']->value['href'],$_prefixVariable24)) {?>
                                    <li class="<?php if ($_smarty_tpl->tpl_vars['m']->value['js'] == true) {?>cm-js<?php }
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_first_level']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_first_level']->value['last'] : null)) {?> last-item<?php }
if ($_smarty_tpl->tpl_vars['navigation']->value['dynamic']['active_section'] == $_smarty_tpl->tpl_vars['s_id']->value) {?> active<?php }?>"><a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['m']->value['href']), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['m']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a></li>
                                <?php }?>
                        <?php }?>
                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:dynamic_menu_item"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
    <hr>
    <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['sidebar']->value;?>


    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('notes', array('assign'=>"notes"));
$_block_repeat=true;
echo smarty_block_notes(array('assign'=>"notes"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_notes(array('assign'=>"notes"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php if ($_smarty_tpl->tpl_vars['notes']->value) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notes']->value, 'note', false, 'sidebox_title');
$_smarty_tpl->tpl_vars['note']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sidebox_title']->value => $_smarty_tpl->tpl_vars['note']->value) {
$_smarty_tpl->tpl_vars['note']->do_else = false;
?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "note_title", null, null);?>
                <?php if ($_smarty_tpl->tpl_vars['title']->value == "_note_") {
echo $_smarty_tpl->__("notes");
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');
}?>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/sidebox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->tpl_vars['note']->value,'title'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'note_title')), 0, true);
?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<!-- Actions -->
<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:actions_wrapper"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:actions_wrapper"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <div class="actions nav__actions <?php if ($_smarty_tpl->tpl_vars['enable_sticky_scroll']->value) {?>cm-sticky-scroll<?php }?>"
        data-ca-stick-on-screens="sm-large,md,md-large,lg,uhd"
        data-ca-top="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sticky_top_on_actions_panel']->value, ENT_QUOTES, 'UTF-8');?>
"
        data-ca-padding="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sticky_padding_on_actions_panel']->value, ENT_QUOTES, 'UTF-8');?>
"
        id="actions_panel">
        <div class="actions__wrapper <?php if ($_smarty_tpl->tpl_vars['runtime']->value['is_current_storefront_closed'] || $_smarty_tpl->tpl_vars['runtime']->value['are_all_storefronts_closed']) {?>navbar-inner--disabled<?php }?>">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:actions"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:actions"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <div class="btn-bar-left nav__actions-back mobile-hidden">
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/last_viewed_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        <div class="btn-bar-left overlay-navbar-open-container mobile-visible">
            <a role="button" class="btn mobile-visible mobile-menu-toggler" data-ca-mobile-menu-is-convert-dropdown="true">
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon icon-align-justify mobile-visible-inline overlay-navbar-open"),$_smarty_tpl);?>

                <span class="cc-notify-marker-container" data-ca-notifications-mark></span>
            </a>
        </div>
        <div class="title nav__actions-title <?php if ($_smarty_tpl->tpl_vars['select_storefront']->value) {?>title--storefronts<?php }?>">
            <?php if ((isset($_smarty_tpl->tpl_vars['title_start']->value)) && (isset($_smarty_tpl->tpl_vars['title_end']->value))) {?>
                <h2 class="title__heading <?php if ($_smarty_tpl->tpl_vars['select_storefront']->value) {?>title__heading--storefronts<?php }?>"
                    title="<?php echo htmlspecialchars((string) html_entity_decode(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', (($tmp = $_smarty_tpl->tpl_vars['title_alt']->value ?? null)===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['title_start']->value)." ".((string)$_smarty_tpl->tpl_vars['title_end']->value) ?? null : $tmp)))), ENT_QUOTES, 'UTF-8');?>
"
                >
                    <span class="title__part-start mobile-hidden"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title_start']->value, ENT_QUOTES, 'UTF-8');?>
: </span>
                    <span class="title__part-end"><?php echo htmlspecialchars((string) html_entity_decode(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['title_end']->value)), ENT_QUOTES, 'UTF-8');?>
</span>
                </h2>
            <?php } else { ?>
                <h2 class="title__heading <?php if ($_smarty_tpl->tpl_vars['select_storefront']->value) {?>title__heading--storefronts<?php }?>" title="<?php echo htmlspecialchars((string) html_entity_decode(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', (($tmp = $_smarty_tpl->tpl_vars['title_alt']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['title']->value ?? null : $tmp)))), ENT_QUOTES, 'UTF-8');?>
"><?php echo smarty_modifier_sanitize_html((($tmp = $_smarty_tpl->tpl_vars['title']->value ?? null)===null||$tmp==='' ? "&nbsp;" ?? null : $tmp));?>
</h2>
            <?php }?>

            <!--mobile quick search-->
            <div class="mobile-visible pull-right search-mobile-group cm-search-mobile-group"
                data-ca-search-mobile-back="#search_mobile_back"
                data-ca-search-mobile-btn="#search_mobile_btn"
                data-ca-search-mobile-block="#search_mobile_block"
                data-ca-search-mobile-input="#gs_text_mobile"
            >
                <button class="btn search-mobile-btn" id="search_mobile_btn"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-search search-mobile-icon"),$_smarty_tpl);?>
</button>
                <div class="search search-mobile-block cm-search-mobile-search hidden" id="search_mobile_block">
                    <button class="search-mobile-back" type="button" id="search_mobile_back"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-remove"),$_smarty_tpl);?>
</button>
                    <button class="search_button search-mobile-button" type="submit" id="search_button_mobile" form="global_search"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-search"),$_smarty_tpl);?>
</button>
                    <label for="gs_text_mobile" class="search-mobile-label"><input type="text" class="cm-autocomplete-off search-mobile-input" id="gs_text_mobile" name="q" value="<?php echo htmlspecialchars((string) $_REQUEST['q'], ENT_QUOTES, 'UTF-8');?>
" form="global_search" placeholder="<?php echo $_smarty_tpl->__("admin_search_field");?>
" disabled /></label>
                </div>
            </div>
            <!--mobile end quick search-->

            <?php if (smarty_modifier_sizeof($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
            <!--language-->
            <span class="title__lang-selector mobile-visible">
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('style'=>"dropdown",'link_tpl'=>fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"sl="),'link_suffix'=>"descr_sl=",'items'=>$_smarty_tpl->tpl_vars['languages']->value,'selected_id'=>(defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null),'display_icons'=>true,'key_name'=>"name",'key_selected'=>"lang_code",'class'=>"languages btn",'disable_dropdown_processing'=>true), 0, false);
?>
            </span>
            <!--end language-->
            <?php }?>

            </div>

            <?php if ($_smarty_tpl->tpl_vars['select_storefront']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/storefronts/components/picker/presets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>$_smarty_tpl->tpl_vars['storefronts_picker_name']->value,'item_ids'=>array($_smarty_tpl->tpl_vars['runtime']->value['company_data']['company_id']),'show_empty_variant'=>$_smarty_tpl->tpl_vars['show_empty_variant']->value,'empty_variant_text'=>$_smarty_tpl->__("all_vendors"),'select_storefront'=>$_smarty_tpl->tpl_vars['select_storefront']->value,'show_all_storefront'=>$_smarty_tpl->tpl_vars['show_all_storefront']->value), 0, false);
?>
            <?php }?>

            <div class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['main_buttons_meta']->value, ENT_QUOTES, 'UTF-8');?>
 btn-bar btn-toolbar nav__actions-bar dropleft" <?php if ($_smarty_tpl->tpl_vars['content_id']->value) {?>id="tools_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['content_id']->value, ENT_QUOTES, 'UTF-8');?>
_buttons"<?php }?>>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:toolbar"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:toolbar"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:toolbar"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

                <?php if ($_smarty_tpl->tpl_vars['navigation']->value['dynamic']['actions']) {?>
                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['navigation']->value['dynamic']['actions'], 'm', false, 'title', 'actions', array (
));
$_smarty_tpl->tpl_vars['m']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['title']->value => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->do_else = false;
?>
                            <li><a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['m']->value['href']), ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['m']->value['meta'], ENT_QUOTES, 'UTF-8');?>
" target="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['m']->value['target'], ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['title']->value);?>
</a></li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hide_actions'=>true,'tools_list'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list'),'link_text'=>$_smarty_tpl->__("choose_action")), 0, false);
?>
                <?php }?>

                <?php echo $_smarty_tpl->tpl_vars['buttons']->value;?>


                <?php if ($_smarty_tpl->tpl_vars['adv_buttons']->value) {?>
                <div class="nav__actions-adv-buttons adv-buttons" <?php if ($_smarty_tpl->tpl_vars['content_id']->value) {?>id="tools_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['content_id']->value, ENT_QUOTES, 'UTF-8');?>
_adv_buttons"<?php }?>>
                <?php echo $_smarty_tpl->tpl_vars['adv_buttons']->value;?>

                <?php if ($_smarty_tpl->tpl_vars['content_id']->value) {?><!--tools_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['content_id']->value, ENT_QUOTES, 'UTF-8');?>
_adv_buttons--><?php }?></div>
                <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['content_id']->value) {?><!--tools_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['content_id']->value, ENT_QUOTES, 'UTF-8');?>
_buttons--><?php }?></div>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:actions"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </div>
    <!--actions_panel--></div>
<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:actions_wrapper"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<div class="admin-content-wrapper <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['mainbox_content_wrapper_class']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">

<!-- Sidebar left -->
<?php if (!$_smarty_tpl->tpl_vars['no_sidebar']->value && trim($_smarty_tpl->tpl_vars['sidebar_content']->value) != '' && $_smarty_tpl->tpl_vars['sidebar_position']->value == "left") {?>
<div class="sidebar sidebar-left cm-sidebar <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_meta']->value, ENT_QUOTES, 'UTF-8');?>
" id="elm_sidebar">
    <div class="sidebar-toggle">
        <span class="sidebar-text"><?php echo $_smarty_tpl->__("sidebar");?>
</span>
        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>((string)$_smarty_tpl->tpl_vars['sidebar_icon']->value)." sidebar-icon"),$_smarty_tpl);?>

    </div>
    <div class="sidebar-wrapper">
    <?php echo $_smarty_tpl->tpl_vars['sidebar_content']->value;?>

    </div>
<!--elm_sidebar--></div>
<?php }?>

<!--Content-->
<div class="content page-content <?php if ($_smarty_tpl->tpl_vars['no_sidebar']->value) {?> content-no-sidebar<?php }
if (trim($_smarty_tpl->tpl_vars['sidebar_content']->value) == '') {?> no-sidebar<?php }?> <?php if (fn_allowed_for("ULTIMATE")) {?>ufa<?php }?>" <?php if ($_smarty_tpl->tpl_vars['box_id']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['box_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
    <div class="content-wrap">
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:content_top"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:content_top"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php if ($_smarty_tpl->tpl_vars['select_languages']->value && smarty_modifier_sizeof($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
            <div class="content-variant-wrap content-variant-wrap--language language-wrap">
                <h6 class="muted"><?php echo $_smarty_tpl->__("language");?>
:</h6>
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('style'=>"graphic",'link_tpl'=>fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"descr_sl="),'items'=>$_smarty_tpl->tpl_vars['languages']->value,'selected_id'=>(defined('DESCR_SL') ? constant('DESCR_SL') : null),'key_name'=>"name",'suffix'=>"content",'display_icons'=>true), 0, true);
?>
            </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['tools']->value) {
echo $_smarty_tpl->tpl_vars['tools']->value;
}?>

        <?php if ($_smarty_tpl->tpl_vars['title_extra']->value) {?><div class="title">-&nbsp;</div>
            <?php echo $_smarty_tpl->tpl_vars['title_extra']->value;?>

        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['extra_tools']->value && trim($_smarty_tpl->tpl_vars['extra_tools']->value)) {?>
            <div class="extra-tools">
                <?php echo $_smarty_tpl->tpl_vars['extra_tools']->value;?>

            </div>
        <?php }?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:content_top"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <?php if ($_smarty_tpl->tpl_vars['content_id']->value) {?><div id="content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['content_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php }?>
        <?php echo (($tmp = $_smarty_tpl->tpl_vars['content']->value ?? null)===null||$tmp==='' ? "&nbsp;" ?? null : $tmp);?>

    <?php if ($_smarty_tpl->tpl_vars['content_id']->value) {?><!--content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['content_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div><?php }?>

    <?php if ($_smarty_tpl->tpl_vars['box_id']->value) {?><!--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['box_id']->value, ENT_QUOTES, 'UTF-8');?>
--><?php }?></div>
</div>
<!--/Content-->


<!-- Sidebar -->
<?php if (!$_smarty_tpl->tpl_vars['no_sidebar']->value && trim($_smarty_tpl->tpl_vars['sidebar_content']->value) != '' && $_smarty_tpl->tpl_vars['sidebar_position']->value == "right") {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:right_sidebar"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:right_sidebar"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->_assignInScope('is_open_state_sidebar_save', (($tmp = $_smarty_tpl->tpl_vars['is_open_state_sidebar_save']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));?>

<div class="sidebar cm-sidebar<?php if ($_smarty_tpl->tpl_vars['is_open_state_sidebar_save']->value) {?> cm-sidebar-open-state-save<?php }?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_meta']->value, ENT_QUOTES, 'UTF-8');?>
" id="elm_sidebar">
    <div class="sidebar-toggle">
        <span class="sidebar-text"><?php echo $_smarty_tpl->__("sidebar");?>
</span>
        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>((string)$_smarty_tpl->tpl_vars['sidebar_icon']->value)." sidebar-icon"),$_smarty_tpl);?>

    </div>
    <div class="sidebar-wrapper">
    <?php echo $_smarty_tpl->tpl_vars['sidebar_content']->value;?>

    </div>
<!--elm_sidebar--></div>
<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:right_sidebar"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

</div>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
    var ajax_callback_data = menu_content;
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
echo smarty_function_script(array('src'=>"js/tygh/sidebar.js"),$_smarty_tpl);?>

<?php }
}
