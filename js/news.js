$(document).on('click', '#rightarrow', function () {
    right_carusel();
});

$(document).on('click', '#leftarrow', function () {
    left_carusel();
});

function left_carusel() {
    $a = $("#newsblock .news").size();
	$curblock = $("#newsblock .news");
    $curblock.fadeOut(200, 
		function(){
			$($curblock).eq($a - 1).prependTo("#newsblock");
			$($curblock).eq($a).remove();
			$($curblock).fadeIn(200);						
	});
}

function right_carusel() {
	$curblock = $("#newsblock .news");
    $curblock.fadeOut(200, 
		function(){
			$($curblock).eq(0).appendTo("#newsblock");
			$($curblock).fadeIn(300);
	});
}



/*

$(document).on('click', '#rightarrow', function () {
    right_carusel();
});

$(document).on('click', '#leftarrow', function () {
    left_carusel();
});

function left_carusel() {
    $a = $("#newsblock .news").size();
    $("#newsblock .news").eq($a - 1).clone().prependTo("#newsblock");
    $("#newsblock .news").eq($a).remove();
}

function right_carusel() {
    $("#newsblock .news").eq(0).clone().appendTo("#newsblock");
    $("#newsblock .news").eq(0).hide(200, function () {$(this).remove();});

}*/