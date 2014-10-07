<?php
get_header(); ?>

    <div id="newsarchcontent" class="grid_12">
        <H3>Архив новостей</H3>

        <?php if (have_posts()) : ?>
            <ul id="archews">

                <?php
                while (have_posts()) : the_post();?>
                    <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
                <?php
                endwhile;
                ?>
            </ul>
        <?php else : ?>
            <?php get_template_part('content', 'none'); ?>
        <?php endif; ?>

        <div id="buttonback">Назад</div>


    </div>

    <div class="clear"></div>
    <hr>






<?php get_footer(); ?>