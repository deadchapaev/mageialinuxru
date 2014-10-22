<?php get_header(); ?>

    <div id="content" class="grid_12 alpha omega">
        <div class="titleline1"><p>Продукты и описание</p></div>
        <div class="clear"></div>
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
        <div id="monitor" class="grid_6 push_2">
            <div id="monitorpic"></div>
        </div>
    </div>
    <div class="clear"></div>

    <div class="titleline1"><p>Последние новости</p></div>

    <div id="newsblock" class="grid_12">


        <div id="leftarrow"> &lt; </div>
        <div id="rightarrow"> &gt; </div>
        <?php if (have_posts()) :
            $i = 0;
            while (have_posts()) : the_post(); ?>
                <div class="grid_3 news">
                    <div class="newsdetails">
                        <br><?php the_time('F jS, Y'); ?>
                    </div>
                    <a href="<?php the_permalink(); ?>">
                        <H4>
                            <?php
                            trimAndPrint(get_the_title(), 30, "...");
                            ?>
                        </H4>
                    </a>

                    <p>
                        <?php
                        trimAndPrint(get_the_content(), 100, "...");
                        ?>
                    </p>
                </div>
                <?php if (++$i >= 6) break;
            endwhile;
        endif; ?>
    </div>
    <div class="clear"></div>

<?php get_footer(); ?>


<?php
	/**
	* Обрезает текст, если он больше указанной длинны $len
    * и добавляет в конец указанную строку $endstr
	*/
	function trimAndPrint($string, $len, $endstr) {
        if (iconv_strlen($string, "utf-8") > $len) 
            print(mb_substr(strip_tags($string), 0, $len) . $endstr);
        else 
            print($string);
        
	}
?>