(function (_, $) {
    $.ceEvent('on', 'ce.commoninit', function (context) {
        let cp_verified = _.cp_verified
        if (cp_verified === 'N') {
            $.ceEvent('on', 'ce.formpost_litecheckout_payments_form', function (form, elm) {
                let email = $('#litecheckout_email').val();
                let main_container = form[0];
                $('#email_verification').remove();
                let container = $('<div id="email_verification"></div>').appendTo(main_container);
                $(container).ceDialog('open', {
                    'href': fn_url('checkout.cp_email_verification?email=' + email),
                    'title': _.tr('cp_email_verification.checkout.guest_verification.popup.title'),
                    'width': 'auto',
                    'height': 'auto',
                    onClose: function () {
                        $('#email_verification').remove()
                    }
                });
                return false;
            });
        }

        let popup = $('#email_verification')
        if (popup.length) {
            let timer = $('#timer_button');
            let link_timer = Number(_.link_timer)

            $(context).ready(function () {
                $('#countdown').remove();
                fn_timer(timer, link_timer)
            });
            $(context).on('click', '#timer_button', function () {
                if ($(context).find('#countdown').length === 0) {
                    $('#countdown').remove();
                    fn_timer(timer, link_timer)
                    let email = $('#litecheckout_email').val()
                    $.ceAjax('request', fn_url('checkout.cp_resend_email?email=' + email, {
                        method: 'GET',
                        caching: false,
                        hidden: false,
                    }));
                }
            })
            $(document).ready(function () {
                $(document).on('click', '.cm-dialog-closer', function () {
                    let elem = document.getElementById('litecheckout_email');
                    setTimeout(() => elem.focus(), 100);
                });
            });


            $('.all_done_btn').on('click', function () {
                let email = $('#litecheckout_email').val();
                $.ceAjax('request', fn_url('checkout.checkout?email=' + email), {
                    method: 'GET',
                    hidden: false,
                    callback: function (response_data) {
                        if (response_data.all_done === 'N') {
                            $('.ty-product-notification__body').removeClass('hidden');
                        } else {
                            window.location.reload();
                        }
                    }
                });
            });
        }
    });

    function fn_timer(timer, link_timer) {
        //Create a <div> container for timer
        let countdown = $('<div id="countdown"></div>').appendTo(timer);
        $('<span class="seconds"></span>').appendTo(countdown);
        //Disable a 'Resend an email' button
        timer.addClass('disabled')
        //Check if timer already launched
        if (sessionStorage.getItem('sec') == 0) {
            //Timer dont launched
            fn_cp_email_verification_timer(link_timer, timer, countdown)
        } else {
            //Timer already launched
            let timer_remain = sessionStorage.getItem('sec')
            fn_cp_email_verification_timer(timer_remain, timer, countdown)
        }
    }

    function fn_cp_email_verification_timer(seconds, timer, countdown) {
        //Setting an interval 1 second long
        let timerID = setInterval(function () {
            seconds--
            sessionStorage.setItem('sec', seconds)
            if (seconds > 0) {
                $("#countdown .seconds").text(sessionStorage.getItem('sec'));
            } else {
                //Set a timer to 0
                sessionStorage.setItem('sec', 0);
                //Enable a 'Resend an email' button
                timer.removeClass('disabled');
                //Remove a <div> container with timer
                countdown.remove();
            }
        }, 1000);
        //clearing interval after
        setTimeout(() => {
            clearInterval(timerID);
        }, seconds * 1000);
    }
})(Tygh, Tygh.$);
