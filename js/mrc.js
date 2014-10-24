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
    $len = $("#newsblock .news").size();
	$last_block = $("#newsblock .news").eq($len - 1);
	$($last_block).hide()
	$($last_block).prependTo("#newsblock").animate({ width: 'show'}, 100);
}

function right_carusel() {
	$first_block = $("#newsblock .news").eq(0);
    $($first_block).animate({ width: 'hide' }, 100, function() {
		$($first_block).appendTo("#newsblock").show(); 
	}); 
}