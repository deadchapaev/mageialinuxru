<?php
/*
Template Name: Загрузки
*/
?>
<?php
get_header(); ?>


    <div id="downloadcontainer" class="grid_12" xmlns="http://www.w3.org/1999/html">
        <h3>Загрузить Mageia</h3>

        <br>

        <p>
            Mageia доступна для скачивания в нескольких сборках: DVD, Dual Arch CD, LiveCD и образ для установки по
            сети.
            По мимо этого сборки делятся регионально, то есть по наличию локализаций на: Europe 1 – America; Europe 2;
            Africa, India; Asia.
            Русская и украинские локализации находятся на издании Europe 2.
        </p>

        <table class="grid_10 push_1" border="0"  cellspacing="0" >
		<tr>
			<td colspan="2" rowspan="2">Версия ОС</td> 
			<td rowspan="2">GUI</td> 
			<td rowspan="2">ver(bit)</td> 
			<td colspan="2">скачать</td>
		</tr>
		
		<tr>
			<td>torrent</td>
			<td>http</td>
		</tr>
		
		
		
		<tr>
			<td colspan="6">MAGEIA 4.1</td>
		</tr>
		
		<tr>
			<td rowspan="2">DVD</td>
			<td rowspan="2">
				DVD включает в себя несколько графических окружений и большое количество программ. 
				На DVD собрано исключительно свободное программное обеспечение. 
				Проприетарные драйвера в сборку не включены, их установку можно провести после установки системы. 
				DVD доступен для архитектур 32 и 64 бит. 
			</td>
			<td rowspan="2">
				GNOME, KDE, XFCE, Mate, Cinnamon, LXDE
			</td>
			<td>32</td>
			<td>скачать</td>
			<td>скачать</td>
		</tr>
		
		<tr>
			<td>64</td>
			<td>скачать</td>
			<td>скачать</td>
		</tr>
		
		<tr>
			<td rowspan="4">liveCD</td>
			<td rowspan="4">
				LiveCD подходит для тех, кто хочет познакомиться с ситемой без ее установкий на жесткий диск. 
				По мимо прочего, в LiveCD образы включены несвободные драйвера и кодеки, необходимые, например,
				если при установке потребуется подключение к интернету по средствам Wi-Fi и т.д. 
				LiveCD доступны в сборках с KDE и GNOME. </td>
			<td rowspan="2">KDE</td>
			<td>32</td>
			<td>скачать</td>
			<td>скачать</td>
		</tr>
		<tr>
			<td>64</td>
			<td>скачать</td>
			<td>скачать</td>
		</tr>
		<tr>
			<td rowspan="2">GNOME</td>
			<td>32</td>			
			<td>скачать</td>
			<td>скачать</td>
		</tr>
		<tr>
			<td>64</td>
			<td>скачать</td>
			<td>скачать</td>
		</tr>
        </table>
        <div class="clear"></div>

        <div id="aftertable" class="grid_12">

            <p>
                LiveCD образ можно записать на usb-флеш-накопитель и после использовать "флешку" для загрузки системы в
                Live-режиме или установки. Подробней можно прочитать <a
                    href="http://mageialinux.ru/forum/viewtopic.php?id=37">здесь</a>.
                <br><br>
                Полный список вариантов загрузки Mageia смотри на <a href="http://www.mageia.org/ru/downloads/">официальном
                    сайте в секции downloads</a>.
                <br><br>
                Если Вы выбираете образ для первого знакомства с Mageia и, возможно, первого знакомства с Linux,
                рекомендуем
                Вам воспользоваться LiveCD с KDE.<br><br>
                Если Вы не знаете версию для какой архитектуры выбрать, то отталкивайтесь от количества оперативной
                памяти
                вашего компьютера: менее 4 Гбайт - 32 бит, 4 и более - 64 бит.
            </p>

        </div>
        <div class="clear"></div>

        <a href="javascript:javascript:history.go(-1)">
            <div id="button">Назад</div>
        </a>

        <div class="clear"></div>
        <hr>

    </div>


<?php get_footer(); ?>