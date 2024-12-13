{script src="js/addons/cp_vendor_plan_periods/func.js"}
<ul class="ty-vendor-plans{if $as_info} ty-vendor-plans-info cm-vendor-plans-info{/if}">
    {foreach from=$plans item=plan}
        {$current_period_id = ''}
        {$first = true}
        {$hide = false}
        {if $as_info}
            {$hide = true}
            {if (!$plan_id && $plan.is_default) || $plan.plan_id == $plan_id}
                {$hide = false}
            {/if}
        {/if}
        <li class="ty-vendor-plans__item {if $plan.is_default} active{/if}{if $hide} hidden{/if}"
            data-ca-plan-id="{$plan.plan_id}">
            {if $plan.is_default}
                <div class="ty-vendor-plan-current-plan">
                    {__("vendor_plans.best_choice")}
                </div>
            {/if}
            <div class="ty-vendor-plan-content{if $plan.is_default} vendor-plan-current{/if}">

                <h3 class="ty-vendor-plan-header">{$plan.plan}</h3>
                
                {strip}
                    {foreach $plan->periods_data as $period}

                    {if $first}{$current_period_id = $period.cp_period_price_id}{/if}
                        <div class="cp_vendor_plan_periods_plan_selector" style="cursor: pointer;">
                                    <input name="cp_period_price_id{$plan.plan_id}" style="float:left;margin-top: 18px;"
                                {if $plan->periods_data|count <= 1}class="hidden"{/if}
                                    plan_id = "{$plan.plan_id}" value="{"companies.apply_for_vendor?cp_period_price_id=`$period.cp_period_price_id`"|fn_url}"
                                           type="radio"
                                        {if $first}{$first = false}checked{/if}>
                                <span class="ty-vendor-plan-price">
                            {if floatval($period.cp_plan_price)}
                                {include file="common/price.tpl" value=$period.cp_plan_price}
                            {else}
                                {__('free')}
                            {/if}
                        </span>
                        <br>
                        {if $period.period_type != 'O'}
                                    <span class="vendor-plan-price-period">/&nbsp;{$period.period_description}</span>
                                    <br>
                                {/if}
                            </div>
                    {/foreach}
                {/strip}

            {if !$as_info}
                <div class="ty-vendor-plan-link">
                    {include file="buttons/button.tpl" but_id="cp_vendor_plan_storefront_button`$plan.plan_id`" but_text=__("vendor_plans.choose") but_href="companies.apply_for_vendor?cp_period_price_id={$current_period_id}" but_role="text" but_meta="ty-btn__secondary"}
                </div>
            {/if}

            <div class="ty-vendor-plan-params">
                {hook name="vendor_plans:vendor_plan_params"}
                    <p>
                        {if $plan.products_limit}
                            {__("vendor_plans.products_limit_value", [$plan.products_limit]) nofilter}
                        {else}
                            {__("vendor_plans.products_limit_unlimited") nofilter}
                        {/if}
                    </p>
                    <p>
                        {if floatval($plan.revenue_limit)}
                            {capture name="revenue"}
                                {include file="common/price.tpl" value=$plan.revenue_limit}
                            {/capture}
                            {__("vendor_plans.revenue_up_to_value", ["[revenue]" => $smarty.capture.revenue]) nofilter}
                        {else}
                            {__("vendor_plans.revenue_up_to_unlimited") nofilter}
                        {/if}
                    </p>
                    <p>
                        {$commissionRound = $plan->commissionRound()}

                        {capture name="fee_value"}
                            {if $commissionRound > 0}
                                {$commissionRound}%
                            {/if}

                            {if $plan->fixed_commission > 0.0}
                                {if $commissionRound > 0} + {/if}
                                {include file="common/price.tpl" value=$plan->fixed_commission}
                            {/if}
                        {/capture}

                        {if ($plan->fixed_commission > 0.0) || ($commissionRound > 0)}
                            {__("vendor_plans.transaction_fee_value", [
                            "[value]" => "{$smarty.capture.fee_value nofilter}"
                            ]) nofilter}
                        {/if}
                    </p>
                {if $plan.vendor_store}
                    <p>{__("vendor_plans.vendor_store")}</p>
                {/if}
                {/hook}
            </div>

            {if $plan.description}
                <div class="ty-vendor-plan-descr">{$plan.description|default:"&nbsp;" nofilter}</div>
            {/if}

            </div>
        </li>
    {/foreach}
</ul>
