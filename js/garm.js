/**
 * Created by кев on 22.10.14.
 */
$(document).ready(function () {
//гармошка ивентов
    $('.garmcontent1').hide();
    $('.garmcontent2').hide();
    $('.garmcontent3').hide();
    $('.garmcontent4').hide();
    $('.garmcontent5').hide();

    $('.garm1').click(function () {
            $(this).siblings('.garmcontent1').toggle('fast');

    });
    $('.garm2').click(function () {
        $(this).siblings('.garmcontent2').toggle('fast');

    });
    $('.garm3').click(function () {
        $(this).siblings('.garmcontent3').toggle('fast');

    });
    $('.garm4').click(function () {
        $(this).siblings('.garmcontent4').toggle('fast');

    });
    $('.garm5').click(function () {
        $(this).siblings('.garmcontent5').toggle('fast');

    });

});