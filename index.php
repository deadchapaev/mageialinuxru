<?php get_header(); ?>

    <div id="content" class="grid_12 alpha omega">
        <!--Описание дистра-->
        <div class="grid_4 about">
            <div class="info">
                <b>Mageia</b> - это стабильная и безопасная, свободная операционная система для персональных компьютеров
                и
                серверов, основанная на GNU/Linux.
            </div>
            <div class="detail">
                Тысячи людей и десятки организаций по всему миру выбирают Mageia для повседневного использования дома и
                в офисе.
            </div>
            <a href="/download">Загрузите прямо сейчас</a>
        </div>

        <!--Монитор-->
        <div id="monitor" class="grid_6 push_1">
            <div id="monitorpic"></div>
        </div>
    </div>
    <div class="clear"></div>

    <div id="social" class="grid_4 alpha">
        <p>
            Вы можете связаться с нами:
        </p>

        <div id="socicons">
            <ul>
                <li id="ok"><a href="/"></a></li>
                <li id="g"><a href="/"></a></li>
                <li id="tw"><a href="/"></a></li>
                <li id="mail"><a href="/"></a></li>
                <li id="vk"><a href="/"></a></li>
            </ul>
        </div>
        <div id="otherinfo">
            <p>
                <b>Поддержка</b><br><br>
                <b>icq:</b> 12345678910 <br>
                <b>skype</b>: mageialinuxru
            </p>
        </div>
    </div>

    <div class="clear"></div>


    <div id="newsblock" class="grid_8 omega">
        <!--        <a href="arch"><H3>Последние новости</H3></a>-->


        <?php if (have_posts()) :
            $i = 0;
            while (have_posts()) : the_post(); ?>
                <div class="grid_4 news">
                    <div class="newsdetails">
                        <br><?php the_time('F jS, Y'); ?>
                    </div>

                    <a href="<?php the_permalink(); ?>">
                        <H4>
                            <?php
                            $post_title_len = 20;
                            if (iconv_strlen(get_the_title(), "utf-8") > $post_title_len) {
                                print(mb_substr(strip_tags(get_the_title()), 0, $post_title_len) . "...");
                            } else {
                                print(get_the_title());
                            }
                            ?>
                        </H4>
                    </a>


                    <p>
                        <?php
                        $post_len = 100;
                        if (iconv_strlen(get_the_content(), "utf-8") > $post_len) {
                            print(mb_substr(strip_tags(get_the_content()), 0, $post_len) . "...");
                        } else {
                            print(get_the_content());
                        }
                        ?>
                    </p>


                </div>
                <?php if (++$i >= 3) break;

            endwhile;
        endif; ?>
    </div>



<?php get_footer(); ?>