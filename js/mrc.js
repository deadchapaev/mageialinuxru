/**
 * Спойлер
 */
$(document).ready(function(){
	$('.spoiler-body').hide();
	$('.spoiler-head').click(function(){
		$(this).toggleClass("closed").toggleClass("open").next().toggle();
	})
});

/**
 * Гармонь основной страницы
 */
$(document).ready(function () {
    $('.garmcontent').hide();
	$('.garm').click(function(){
		$(this).toggleClass("closed").toggleClass("open").next().toggle('fast');
	})
});

/**
  * Листалка новостей
  */  
$(document).on('click', '#rightarrow', function () {
    right_carusel();
});

$(document).on('click', '#leftarrow', function () {
    left_carusel();
});

function left_carusel() {
    $a = $("#newsblock .news").size();
	$curblock = $("#newsblock .news").eq($a - 1);
	$curblock.hide()
	$($curblock).prependTo("#newsblock").animate({ width: 'show'}, 100);
}

function right_carusel() {
	$curblock = $("#newsblock .news").eq(0);
    $($curblock).animate({ width: 'hide' }, 100, function() {
		$($curblock).appendTo("#newsblock").show(); 
	}); 
}