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
    $first_block = $("#newsblock .news").eq(0);
	$($first_block).hide(100, function() {
		$($first_block).appendTo("#newsblock").show(); 
	});
});

$(document).on('click', '#leftarrow', function () {
    $len = $("#newsblock .news").size();
	$last_block = $("#newsblock .news").eq($len - 1);
	$($last_block).hide(0, function() {
		$($last_block).prependTo("#newsblock").show(100);
	});
	
});

