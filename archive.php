<?php
/*
Template Name: Архив новостей
*/
?>
<?php
get_header(); ?>
<div class="titleline1"><p>Архив новостей</p></div>
    <div id="newsarchcontent" class="grid_12">
        <ul>
            <?php
            $myposts = get_posts('numberposts=-1');
            foreach ($myposts as $post) :
                ?>
                <li>
                    <a href="<?php the_permalink(); ?>"><?php the_time('d.m.y') ?>  |  <?php the_title() ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
        
        <div class="button"><a href="javascript:javascript:history.go(-1)">Назад</a></div>
        
    </div>

    <div class="clear"></div>

<?php get_footer(); ?>