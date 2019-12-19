$(function() {
    const
        siteTemplatePath = '/local/templates/main',
        headerInner = $('.h-inner'),
        menuToggle = $('.menu-toggle button');

    menuToggle.on('click', function() {
        headerInner.toggleClass('active');
    });

    $('[data-type=js-form]').on('submit', function(e) {
        e.preventDefault();
        let
            form = $(this),
            sessid = form.find('input[name=sessid]'),
            name = form.find('input[name=name]'),
            phone = form.find('input[name=phone]'),
            email = form.find('input[name=email]'),
            text = form.find('textarea[name=text]'),
            mist = 0;

        if (!$.trim(name.val())) {
            mist++;
            name.parents('.ui-input').addClass('error');
        } else {
            name.parents('.ui-input').removeClass('error');
        }
        if (!$.trim(phone.val())) {
            mist++;
            phone.parents('.ui-input').addClass('error');
        } else {
            phone.parents('.ui-input').removeClass('error');
        }
        if (!$.trim(email.val())) {
            mist++;
            email.parents('.ui-input').addClass('error');
        } else {
            email.parents('.ui-input').removeClass('error');
        }
        if (!$.trim(text.val())) {
            mist++;
            text.parents('.ui-textarea').addClass('error');
        } else {
            text.parents('.ui-textarea').removeClass('error');
        }

        if (mist == 0) {
            $.ajax({
                type: "POST",
                url: siteTemplatePath + '/include/ajax/form.php',
                data: ({
                    "sessid": sessid.val(),
                    "name": name.val(),
                    "phone": phone.val(),
                    "email": email.val(),
                    "text": text.val(),
                }),
                dataType: 'json',
                success: function(a) {
                    if (a.error) {
                        console.log(a)
                    } else {
                        alert('Спасибо');
                        name.val('');
                        phone.val('');
                        email.val('');
                        text.val('');
                    }
                }
            });
        }
    });
})