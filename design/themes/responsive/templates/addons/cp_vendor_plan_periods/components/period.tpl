<select name="plans_data[{$plan.plan_id}][cp_vendor_plan_period_id]" class="input-small input-hidden">
    {foreach from=$periods key=key item=period}
        <option value="{$period.period_id}"{if $period.period_id == $plan.cp_vendor_plan_period_id} selected="selected"{/if}>{$period.period_description}</option>
    {/foreach}
</select>