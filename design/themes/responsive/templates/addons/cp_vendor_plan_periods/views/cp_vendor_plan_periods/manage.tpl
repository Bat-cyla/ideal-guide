{** wallet section **}

{capture name="mainbox"}
    <form action="{""|fn_url}" method="post" id="wallet_form" name="period_update_form" enctype="multipart/form-data">
        <input type="hidden" name="fake" value="1"/>
        {$c_url=$config.current_url|fn_query_remove:"sort_by":"sort_order"}

        {$rev=$smarty.request.content_id|default:"pagination_contents_wallet"}
        {include_ext file="common/icon.tpl" class="icon-`$search.sort_order_rev`" assign=c_icon}
        {include_ext file="common/icon.tpl" class="icon-dummy" assign=c_dummy}
        {$wallet_statuses=""|fn_get_default_statuses:true}
        {$has_permission = fn_check_permissions("wallet", "update_status", "admin", "POST")}
        {capture name="vendor_periods"}
            {$usergroups=["type"=>"C", "status"=>["A", "H"]]|fn_get_usergroups}
            <div id="content_qty_discounts">
                <div class="table-responsive-wrapper">
                    <table class="table table-middle table--relative table-responsive" width="100%">
                        <thead class="cm-first-sibling">
                        <tr>
                            <th width="25%">{__("period")}</th>
                            <th width="25%">{__("type")}</th>
                            <th width="25%">{__("name")}</th>
                            <th width="15%">&nbsp;</th>
                        </tr>
                        </thead>
                        <tbody>
                        {foreach from=$periods item="period" key="_key" name="prod_prices"}
                            <tr class="cm-row-item">
                                <input type="hidden" name="vendor_periods[{$_key}][period_id]"
                                       value="{$period.period_id}">
                                <td width="25%" data-th="{__("value")}">
                                    <input type="text" name="vendor_periods[{$_key}][period_value]"
                                           value="{$period.period_value}"
                                           class="input-medium cm-value-decimal" data-a-sep/></td>
                                </td>
                                <td width="25%" data-th="{__("type")}">
                                    <div class="input-group {$input_append_if_shared_product}">
                                        <select name="vendor_periods[{$_key}][period_type]" class="input-long">
                                            {foreach $period_types as $key => $type}
                                                <option value="{$type}"
                                                        {if $period.period_type == $type}selected="selected"{/if}>{fn_cp_vendor_plan_period_add_prefix($type)}</option>
                                            {/foreach}
                                        </select>
                                    </div>
                                </td>
                                <td width="25%" data-th="{__("description")}">
                                    <input type="text" value="{$period.period_description}" name="vendor_periods[{$_key}][period_description]" class="input-medium"
                                           data-a-sep/></td>
                                </td>
                                <td width="15%" class="nowrap {$no_hide_input_if_shared_product} right">
                                    {if $period.plan_ids}
                                        &nbsp; <a href="{"vendor_plans.manage?period_id=`$period.period_id`"|fn_url}" class="underlined">{__('vendor_plans')}</a>
                                    {elseif $period.is_default == 'N'}
                                        {include file="buttons/clone_delete.tpl" dummy_href=true microformats="cm-delete-row" no_confirm=true}
                                    {/if}
                                    <input type="hidden" name="vendor_periods[{$_key}][is_default]" value="{$period.is_default}">
                                </td>
                            </tr>
                        {/foreach}
                        {math equation="x+1" x=$_key|default:0 assign="new_key"}
                        <tr class="{cycle values="table-row , " reset=1}{$no_hide_input_if_shared_product}"
                            id="box_add_qty_discount">
                            <td width="25%" data-th="{__("value")}">
                                <input type="text" name="vendor_periods[{$new_key}][period_value]" class="cm-value-decimal input-medium"
                                       data-a-sep/>
                            </td>
                            </td>
                            <td width="25%" data-th="{__("type")}">
                                <div class="input-group {$input_append_if_shared_product}">
                                    <select name="vendor_periods[{$new_key}][period_type]" class="input-long">
                                        {foreach $period_types as $key => $type}
                                            <option value="{$type}">{fn_cp_vendor_plan_period_add_prefix($type)}</option>
                                        {/foreach}
                                    </select>
                                    {include file="buttons/update_for_all.tpl"
                                    display=$show_update_for_all
                                    object_id="price_`$new_key`"
                                    name="update_all_vendors[prices][`$new_key`]"
                                    component="products.price_`$new_key`"
                                    hide_inputs=$hide_inputs_if_shared_product
                                    append=true
                                    }
                                </div>
                            </td>
                            <td width="25%" data-th="{__("description")}">
                                <input type="text" name="vendor_periods[{$new_key}][period_description]" class="input-medium"
                                       data-a-sep/></td>
                            </td>
                            <td width="15%" class="right">
                                {include file="buttons/multiple_buttons.tpl" item_id="add_qty_discount"}
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        {/capture}

        {include file="common/context_menu_wrapper.tpl"
        form="wallet_form"
        object="wallets"
        items=$smarty.capture.vendor_periods
        }


    </form>
{/capture}
{capture name="adv_buttons"}
    {include file="buttons/save_cancel.tpl" but_text=__('save') but_meta="cm-product-save-buttons" but_role="submit-link" but_name="dispatch[cp_vendor_plan_periods.update]" but_target_form="period_update_form"}

{/capture}
{capture name="buttons"}
{/capture}


{capture name="sidebar"}
    {include file="common/saved_search.tpl" dispatch="cp_wallet_system.manage" view_type="wallets"}
{/capture}
{hook name="wallet:manage_mainbox_params"}
{$page_title = __("cp_vendor_plan_periods.manage")}
{/hook}
{include file="common/mainbox.tpl" title=$page_title content=$smarty.capture.mainbox adv_buttons=$smarty.capture.adv_buttons select_lauages=$select_languages buttons=$smarty.capture.buttons sidebar=$smarty.capture.sidebar}

{** ad section **}
