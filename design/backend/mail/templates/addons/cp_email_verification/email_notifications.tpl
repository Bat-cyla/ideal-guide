<!-- example template -->
<?xml version="1.0"?>
<email_templates scheme="1.0">
    <templates>
        <item>
            <code><![CDATA[cp_email_verification.notifications.email_notifications_t_c]]></code>
            <area><![CDATA[C]]></area>
            <status><![CDATA[A]]></status>
            <subject/>
            <default_subject><![CDATA[{{ __("cp_email_verification.email_notifications_subj") }}]]></default_subject>
            <template/>
            <default_template><![CDATA[{{ snippet("header") }}
{{ __("cp_email_verification.email_notifications_text") }}
<br />
{% for document_id,document_data in notifications %}
{% if document_data.reason == 'C' %}
    {{ __("cp_email_verification.document_notification_confirmed", {"[document]": document_data.filename, "[order_id]": document_data.order_id}) }}<br />
{% else %}
    {{ __("cp_email_verification.document_notification_decline", {"[document]": document.data.filename, "[order_id]": document_data.order_id, "[comments]": document_data.comments}) }}<br />
{% endif %}
{% endfor %}
{{ snippet("footer") }}]]></default_template>
            <params_schema/>
            <params/>
            <addon><![CDATA[cp_email_verification]]></addon>
        </item>
    </templates>    
    <snippets/>
</email_templates>
