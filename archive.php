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
            $myposts = get_posts('numberposts=-1');
            foreach ($myposts as $post) :
                ?>
                <li>
                    <a href="<?php the_permalink(); ?>"><?php the_time('d.m.y') ?>  |  <?php the_title() ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
        <a href="javascript:javascript:history.go(-1)">
            <div id="buttonback">Назад</div>
        </a>
    </div>

    <div class="clear"></div>
    <hr>

<?php get_footer(); ?>