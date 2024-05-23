$(document).ready(function () {
    const $confirmButton = $('#confirm-appointment');
    const $radios = $('.hidden-radio');
    const $message = $('.select-schedule-message');

    $confirmButton.on('click', function (event) {
        let isSelected = false;

        $radios.each(function () {
            if ($(this).is(':checked')) {
                isSelected = true;
            }
        });

        if (!isSelected) {
            $message.show();
            event.preventDefault();
        } else {
            $message.hide();
            $form.submit();
        }
    });
});