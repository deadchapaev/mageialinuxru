<?php get_header(); ?>

<div id="newscontent" class="grid_12">
    <?php if (have_posts()) :
        while (have_posts()) : the_post(); ?>

            <H3><?php the_title(); ?></H3>

            <div class="newsdetails">
                <br><?php the_time('F jS, Y'); ?>
                <?php $category = get_the_category(); ?>
                <br>Категория: <?php echo $category[0]->cat_name; ?>
                <br> Разместил: <?php the_author(); ?>
            </div>

            <p><?php the_content(','); ?></p>

            <div id="buttonforum">Обсудить новость на форуме</div>
            <div id="buttonback">Назад</div>

            <div class="clear"></div>
        <?php endwhile;
    endif; ?>

    <hr>

<?php get_footer(); ?>