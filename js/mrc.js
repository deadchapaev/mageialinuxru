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
		$(this).toggleClass("closed").toggleClass("open").next().toggle(100);
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


/**
 * mrc-feed
 */
$(document).ready(function () {

	$('#mrcfeed form input[type="checkbox"]').each(
		function() {
			$(this).prop('checked', true);
			$(this).attr('checked', true);
		}
	);
	
	$('#mrcfeed form input[type="checkbox"][name="m2"]').click(function(){
		showHideVer(this, '.m2');
	})
	
	$('#mrcfeed form input[type="checkbox"][name="m3"]').click(function(){
		showHideVer(this, '.m3');
	})
	
	$('#mrcfeed form input[type="checkbox"][name="m4"]').click(function(){
		showHideVer(this, '.m4');
	})

	$('#mrcfeed form input[type="checkbox"][name="x32"]').click(function(){
		showHideArch(this, '.x32');
	})
	
	$('#mrcfeed form input[type="checkbox"][name="x64"]').click(function(){
		showHideArch(this, '.x64');
	})
	
	$('#mrcfeed form input[type="checkbox"][name="noarch"]').click(function(){
		showHideArch(this, '.noarch');
	})
	
	
	
	/**
	 * показывает/скрывает архитектуру
	 */
	function showHideArch(checkbox, arch){
		if ($(checkbox).attr('checked')) {
			$(checkbox).attr('checked', false); // Unchecks it
			$('#mrcfeed > ' + arch).hide();
		} else {
			$(checkbox).attr('checked', true); // Checks it
			if (ism2checked()) {
				$('#mrcfeed > .m2' + arch).show();
			}
			if (ism3checked()) {
				$('#mrcfeed > .m3' + arch).show();
			}
			if (ism4checked()) {
				$('#mrcfeed > .m4' + arch).show();
			}			
		}
	}	
	/**
	 * показывает/скрывает версию
	 */
	function showHideVer(checkbox, sysver){
		if ($(checkbox).attr('checked')) {
			$(checkbox).attr('checked', false); // Unchecks it
			$('#mrcfeed > ' + sysver).hide();
		} else {
			$(checkbox).attr('checked', true); // Checks it
			if (isx32checked()) {
				$('#mrcfeed > .x32' + sysver).show();
			}
			if (isx64checked()) {
				$('#mrcfeed > .x64' + sysver).show();
			}	
			if (noarchchecked()) {
				$('#mrcfeed > .noarch' + sysver).show();
			}							
		}
	}

	
	/**
	 * чеккеры
	 */
	function ism2checked() {
		return Boolean($('#mrcfeed form input[type="checkbox"][name="m2"]').attr('checked'));
	}
	
	function ism3checked() {
		return Boolean($('#mrcfeed form input[type="checkbox"][name="m3"]').attr('checked'));
	}
	
	function ism4checked() {
		return Boolean($('#mrcfeed form input[type="checkbox"][name="m4"]').attr('checked'));
	}
	
	function isx32checked() {
		return Boolean($('#mrcfeed form input[type="checkbox"][name="x32"]').attr('checked'));
	}
	
	function isx64checked() {
		return Boolean($('#mrcfeed form input[type="checkbox"][name="x64"]').attr('checked'));
	}
	
	function noarchchecked() {
		return Boolean($('#mrcfeed form input[type="checkbox"][name="noarch"]').attr('checked'));
	}
		
	
});