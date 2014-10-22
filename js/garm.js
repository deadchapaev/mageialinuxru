/**
 * Created by кев on 22.10.14.
 */
$(document).ready(function () {
//гармошка ивентов
    $('.garmcontent1').hide();
    $('.garmcontent2').hide();
    $('.garm1').click(function () {
            $(this).siblings('.garmcontent1').toggle('fast');

    });
    $('.garm2').click(function () {
        $(this).siblings('.garmcontent2').toggle('fast');

    });


});