$(document).ready(function () {
    $('#user_feedback_form input, #user_feedback_form textarea').each(function () {
        $(this).attr('data-original-placeholder', $(this).attr('placeholder'));
    });

    $('#user_feedback_form').on('submit', function (event) {
        event.preventDefault();

        var formData = $(this).serialize();
        console.log(formData);
        var submitBtn = $('#submitBtn');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: '/Healwave/user/feedback',
            method: 'POST',
            data: formData,
            beforeSend: function () {
                submitBtn.text('Sending...');
            },
            success: function (response) {
                console.log('success' + response); 
                $('.success-message')
                    .removeClass('alert alert-danger')
                    .html('')
                    .addClass('alert alert-success')
                    .text(response.message)
                    .show();
                setTimeout(function () {
                    $('.success-message').fadeOut();
                }, 3000);

                $('#user_feedback_form input, #user_feedback_form textarea').val('').each(function () {
                    $(this).attr('placeholder', $(this).attr('data-original-placeholder'));
                });
                $('#user_feedback_form input, #user_feedback_form textarea').removeClass('is-invalid');
            },
            error: function (xhr, status, error) {
                console.log('error' + error);
                $('.success-message')
                    .removeClass('alert alert-success')
                    .addClass('alert alert-danger')
                    .text('There was an error sending your message.')
                    .show();
                setTimeout(function () {
                    $('.success-message').fadeOut();
                }, 3000);

                if (xhr.responseJSON && xhr.responseJSON.errors) {
                    var errors = xhr.responseJSON.errors;
                    displayErrors(errors);
                } else {
                    console.log("Unexpected error format:", xhr.responseText);
                }
            },
            complete: function () {
                submitBtn.text('Send Message');
            }
        })
        function displayErrors(errors) {
            $('#user_feedback_form input, #user_feedback_form textarea').each(function () {
                $(this).removeClass('is-invalid');
                $(this).attr('placeholder', '');
            });

            if (errors.fullname) {
                $('#name').addClass('is-invalid');
                $('#name').attr('placeholder', errors.fullname[0]);
            }

            if (errors.email) {
                $('#email').addClass('is-invalid');
                $('#email').attr('placeholder', errors.email[0]);
            }

            if (errors.subject) {
                $('#subject').addClass('is-invalid');
                $('#subject').attr('placeholder', errors.subject[0]);
            }

            if (errors.message) {
                $('textarea[name="message"]').addClass('is-invalid');
                $('textarea[name="message"]').attr('placeholder', errors.message[0]);
            }
        }
    });
})