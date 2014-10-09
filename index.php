<?php get_header(); ?>

    <div id="content" class="grid_12">
        <!--Описание дистра-->
        <div class="grid_5 about">
            <div class="info">
                Mageia - это стабильная и безопасная, свободная операционная система для персональных компьютеров и
                серверов, основанная на GNU/Linux.
            </div>
            <div class="detail">
                Тысячи людей и десятки организаций по всему миру выбирают Mageia для повседневного использования дома и
                в офисе.
            </div>
            <div class="button">Загрузите прямо сейчас</div>
        </div>

        <!--Монитор-->
        <div id="monitor" class="grid_6 push_1">
            <div id="monitorpic"></div>
        </div>
    </div>
    <div class="clear"></div>

    <hr>

    <!--Новости-->
    <div class="grid_12">
        <a href="arch"><H3>Последние новости</H3></a>
		
    </div>
    <div class="clear"></div>
    <div class="grid_12">
        <?php if (have_posts()) :
            $i = 0;
            while (have_posts()) : the_post(); ?>
                <div class="news">
                    <H4><?php the_title(); ?></H4>

                    <div class="newsdetails">
                        <br><?php the_time('F jS, Y'); ?>
                        <?php $category = get_the_category(); ?>
                        <br>Категория: <?php echo $category[0]->cat_name; ?>
                        <br> Разместил: <?php the_author(); ?>
                    </div>

                    <p>
                        <?php
                        print(mb_substr(strip_tags(get_the_content()), 0, 100));
                        print('...');
                        ?>
                    </p>

                    <div class="button_read"><a href="<?php the_permalink(); ?>">читать</a></div>
                </div>
            <?php if (++$i >= 6) break;
              
              endwhile;
        endif; ?>

    </div>
    <div class="clear"></div>
    <hr>

<?php get_footer(); ?>