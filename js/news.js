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


/*

function left_carusel() {
    $a = $("#newsblock .news").size();
	$curblock = $("#newsblock .news");
    $curblock.fadeOut(100, 
		function(){
			$($curblock).eq($a - 1).prependTo("#newsblock");
			$($curblock).fadeIn(100);						
	});
}

function right_carusel() {
	$curblock = $("#newsblock .news");
    $curblock.fadeOut(100, 
		function(){
			$($curblock).eq(0).appendTo("#newsblock");
			$($curblock).fadeIn(100);
	});
}
*/


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