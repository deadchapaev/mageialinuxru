<?php
/*
Template Name: mrc-feed
*/
?>
<?php get_header(); ?>
<div class="titleline1"><p>Mrc-feed</p></div>
<div id="mrcfeed" class="grid_12">
	
	<form>
		<label class="groupname">Версия ОС:</label>
		<label><input type="checkbox" name="m2" value="m2"/>Mageia 2</label>
		<label><input type="checkbox" name="m3" value="m3"/>Mageia 3</label>
		<label><input type="checkbox" name="m4" value="m4"/>Mageia 4</label> 
		
		<label class="groupname">Архитектура:</label>
		<label><input type="checkbox" name="x32" value="x32"/>x32</label>
		<label><input type="checkbox" name="x64" value="x64"/>x64</label>
		<label><input type="checkbox" name="noarch" value="noarch"/>noarch</label>
	</form>
	<div class="clear"></div>
	
	<div class="m4 x64">
		<?php
			if (file_exists(get_template_directory() . '/mrcfeed/m4_x64.php')) {
		?>
		<h5>Mageia 4 x64</h5>
		<?php 
				include 'mrcfeed/m4_x64.php';
			}
		?>
	</div>
	
	<div class="m4 x32">
		<?php
			if (file_exists(get_template_directory() . '/mrcfeed/m4_x32.php')) {
		?>
		<h5>Mageia 4 x32</h5>
		<?php 
				include 'mrcfeed/m4_x32.php';
			}
		?>
	</div>
	
	<div class="m4 noarch">
		<?php
			if (file_exists(get_template_directory() . '/mrcfeed/m4_noarch.php')) {
		?>
		<h5>Mageia 4 noarch</h5>
		<?php 
				include 'mrcfeed/m4_noarch.php';
			}
		?>
	</div>
	
	<div class="m3 x64">
		<?php
			if (file_exists(get_template_directory() . '/mrcfeed/m3_x64.php')) {
		?>
		<h5>Mageia 3 x64</h5>
		<?php 
				include 'mrcfeed/m3_x64.php';
			}
		?>
	</div>
	
	<div class="m3 x32">
		<?php
			if (file_exists(get_template_directory() . '/mrcfeed/m3_x32.php')) {
		?>
		<h5>Mageia 3 x32</h5>
		<?php 
				include 'mrcfeed/m3_x32.php';
			}
		?>
	</div>	
	
	<div class="m3 noarch">
		<?php
			if (file_exists(get_template_directory() . '/mrcfeed/m3_noarch.php')) {
		?>	
		<h5>Mageia 3 noarch</h5>
		<?php 
				include 'mrcfeed/m3_noarch.php';
			}
		?>
	</div>
	
	<div class="m2 x64">
		<?php
			if (file_exists(get_template_directory() . '/mrcfeed/m2_x64.php')) {
		?>	
		<h5>Mageia 2 x64</h5>
		<?php 
				include 'mrcfeed/m2_x64.php';
			}
		?>
	</div>
	
	<div class="m2 x32">
		<?php
			if (file_exists(get_template_directory() . '/mrcfeed/m2_x32.php')) {
		?>	
		<h5>Mageia 2 x32</h5>
		<?php 
				include 'mrcfeed/m2_x32.php';
			}
		?>
	</div>	
	
	<div class="m2 noarch">
		<?php
			if (file_exists(get_template_directory() . '/mrcfeed/m2_noarch.php')) {
		?>	
		<h5>Mageia 2 noarch</h5>
		<?php 
				include 'mrcfeed/m2_noarch.php';
			}
		?>
	</div>
	
	<div class="button"><a href="javascript:javascript:history.go(-1)">Назад</a></div>
</div>
<?php get_footer(); ?>