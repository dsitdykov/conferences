require('./bootstrap');

// $(function () {
//     $(document).on('click', '#logout-btn', function (e) {
//         e.preventDefault();
//         $('#logout-form').trigger('submit');
//     });
// });
// jQuery('#datetimepicker').datetimepicker();

$(function () {
    $('body').find('#datetimepicker').each(function () {
        $(this).datetimepicker({
            showClose: true,
            debug: true,
        });
    });
});
