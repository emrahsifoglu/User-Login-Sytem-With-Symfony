$( document ).ready(function() {
    var form = $('#contact-form');
    var submit = $('#_submit');
    var errors = []
    var email_pattern   = /^([a-z0-9_\.\+-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/
    var txt_pattern_str = "^[a-zA-Z0-9 _.öçşiğüÖÇŞİĞÜ-]{min,max}$";
    var patterns = {
        email   :  email_pattern,
        txt    :  txt_pattern_str
    };

    function updateMinMax(pattern_str, min, max){
        var mapObj = { min:min, max:max };
        return pattern_str.replace(/min|max/gi, function(matched){
            return mapObj[matched];
        });
    }

    function isEmailValid(email) {
        return email_pattern.test(email);
    }

    function isTextValid(txt, min, max) {
        return new RegExp(updateMinMax(patterns.txt, min, max)).test(txt);
    }

    function clear_form_elements(ele) {
        ele.find(':input').each(function() {
            switch(this.type) {
                case 'text':
                case 'email':
                case 'textarea':
                    $(this).val('');
                    break;
                case 'select-one':
                    $(this).prop("selectedIndex", 0);
                    break;
            }
        });
        submit.removeAttr("disabled");
    }

    submit.on('click', function(){

        errors = [];
        submit.attr("disabled","disabled");

        $("[data-required=true]").each(function() {
            var field = $(this);
            var data_type = field.attr('data-type');

            switch (data_type){
                case 'text' :
                    if (!isTextValid(field.val(), field.attr("data-min"), field.attr("data-max")))
                        errors.push(field.attr("data-error-valid"));
                    break;
                case 'email' :
                    if (!isEmailValid(field.val()))
                        errors.push(field.attr("data-error-valid"));
                    break;
                case 'select-one' :
                    if (field.val() == -1)
                        errors.push(field.attr("data-error-valid"));
                    break;
            }
        });

        if (errors.length > 0) {
            submit.removeAttr("disabled");
            console.log(errors.length  + ' error(s) found');
            errors.forEach(function(element){
                console.log(element);
            });
        } else {
            $.ajax({
                url: form.attr('action'),
                data: form.serialize(),
                type: (form.attr('method')),
                dataType: 'html',
                success: function(data) {
                    var result = $.parseJSON(data);
                    var success = result.success;
                    if (success == 1) {
                        console.log('Your message has been sent.');
                        clear_form_elements(form);
                    }
                    else {
                        console.log('Your message could not be sent!');
                    }
                }
            });
        }
    });

    clear_form_elements(form);
});