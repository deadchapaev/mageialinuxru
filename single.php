<?php get_header(); ?>

<div id="newscontent" class="grid_12">
<?php if (have_posts()) :
    while (have_posts()) : the_post(); ?>

        <H3><?php the_title(); ?></H3>

        <div class="singlenewsdetails">
            <br><?php the_time('F jS, Y'); ?>
            <?php $category = get_the_category(); ?>
            <br>Категория: <?php echo $category[0]->cat_name; ?>
            <br> Разместил: <?php the_author(); ?>
        </div>

        <?php the_content(','); ?>
        
        <div id="buttonforum"><a href="http://forum.mageialinux.ru/">Обсудить новость на форуме</a></div>
        <div id="buttonback"><a href="javascript:javascript:history.go(-1)">Назад</a></div>

        <div class="clear"></div>
    <?php endwhile;
endif; ?>

    <hr>
</div>
<?php get_footer(); ?>