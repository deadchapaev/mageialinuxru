<?php
/*
Template Name: mrc-feed
*/
?>
<?php get_header(); ?>
<div class="titleline1"><p>Mrc-feed</p></div>
<div id="mrcfeed" class="grid_12">
	
	<h4>Список пакетов для x32 и x64 версий Mageia 2, 3 и 4</h4>
	<form>
		<h5>Фильтры</h5>
		<input type="checkbox" name="m2" value="m2" /><label for="m2">Mageia 2</label>
		<input type="checkbox" name="m3" value="m3" /><label for="m2">Mageia 3</label>
		<input type="checkbox" name="m4" value="m4" /><label for="m2">Mageia 4</label>
		<input type="checkbox" name="x32" value="x32" /><label for="m2">x32</label>
		<input type="checkbox" name="x64" value="x64" /><label for="m2">x64</label>
	</form>
	<div class="clear"></div>
	
	<div class="m4 x64">
		<h5>Mageia 4 x64</h5>
		<?php 
			//include 'mrcfeed/MRC_Construct_i586.php';
		?>
	</div>
	
	<div class="m4 x32">
		<h5>Mageia 4 x32</h5>
		<?php 
			//include 'mrcfeed/MRC_Construct_i586.php';
		?>
	</div>
	
	<div class="m3 x64">
		<h5>Mageia 3 x64</h5>
		<?php 
			//include 'mrcfeed/MRC_Construct_i586.php';
		?>
	</div>
	
	<div class="m3 x32">
		<h5>Mageia 3 x32</h5>
		<?php 
			//include 'mrcfeed/MRC_Construct_i586.php';
		?>
	</div>	
	
	<div class="m2 x64">
		<h5>Mageia 2 x64</h5>
		<?php 
			//include 'mrcfeed/MRC_Construct_i586.php';
		?>
	</div>
	
	<div class="m2 x32">
		<h5>Mageia 2 x32</h5>
		<?php 
			//include 'mrcfeed/MRC_Construct_i586.php';
		?>
	</div>	

	
	<div class="button"><a href="javascript:javascript:history.go(-1)">Назад</a></div>
</div>
<?php get_footer(); ?>