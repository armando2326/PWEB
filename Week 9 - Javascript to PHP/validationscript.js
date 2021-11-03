//Reset button
$(document).ready(function () {
    $("#resetbutton").click(function () {
        $("#factorial")[0].reset()
    });
});

//Warning & Validation
$(document).ready(function () {
    $.validator.setDefaults({
        errorClass: 'help-block',
        highlight: function (element) {
            $(element)
                .closest('.form-control')
                .addClass('has-error');
        },
        unhighlight: function (element) {
            $(element)
                .closest('.form-control')
                .removeClass('has-error');
        },
        errorPlacement: function (error, element) {
            if (element.prop('type') === 'number') {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }
    });

    $.validator.addMethod("positiveinteger", function (value, element) {
        return this.optional(element) || /^[0-9]+$/i.test(value);
    }, "");

    $('#factorial').validate({
        rules: {
            xNumber: {
                required: true,
                positiveinteger: true
            }
        },
        messages: {
            xNumber: {
                required: 'Please fill this field!',
                positiveinteger: 'Must not be a negative number!'

            }
        }
    });
});
