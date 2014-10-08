<?php
/*
Template Name: Архив новостей
*/
?>
<?php
get_header(); ?>

    <div id="newsarchcontent" class="grid_12">
	    <H3>Архив новостей</H3>
            <ul id="archews">
				<?php
					$myposts = get_posts('');
					foreach($myposts as $post) :
				?>
					<li>
						<a  href="<?php the_permalink(); ?>"><?php the_time('d.m.y') ?>  |  <?php  the_title() ?></a>
					</li>
				<?php  endforeach;  ?>
		    </ul>
        <div id="buttonback"><a href="javascript:javascript:history.go(-1)">Назад</a></div>
    </div>

    <div class="clear"></div>
    <hr>

<?php get_footer(); ?>