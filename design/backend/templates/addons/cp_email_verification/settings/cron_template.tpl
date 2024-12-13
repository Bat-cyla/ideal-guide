{$admin_ind = $config.admin_index}
{$cron_password = $addons.cp_email_verification.cron_password}
{$root_directory = $config.dir.root}
<div class="control-group setting-wide">
    <label class="control-label">
        {__("cp_email_verification.delete_unconfirmed_accounts_without_orders")}
    </label>
    <div class="controls">
        <p>
            <a class="btn btn-primary cm-ajax" href="{fn_url("cp_email_verification.send_email?cron_password={$cron_password}")}" data-ca-target-id="rating">
                {__("cp_email_verification.try_manually")}
            </a>
        </p><br />
    
        {include file="common/widget_copy.tpl"
            widget_copy_title=__("tip")
            widget_copy_text=__("cp_email_verification.cron_delete_unconfirmed_accounts_without_orders")
            widget_copy_code_text = fn_get_console_command("php `$root_directory`/", $config.admin_index, [
                "dispatch" => "cp_email_verification.send_email",
                "cron_password" => $cron_password
            ])
        }
        {include file="common/widget_copy.tpl"
            widget_copy_code_text = "curl "|cat:fn_url("cp_email_verification.send_email?cron_password=`$cron_password`")
        }
    </div>
</div>