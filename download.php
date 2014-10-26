<?php
/*
Template Name: Загрузки
*/
?>
<?php
get_header(); ?>

    <div class="titleline1"><p>Загрузить Mageia</p></div>
    <div id="downloadcontainer" class="grid_12">
        <br>

        <p>
            Mageia доступна для скачивания в нескольких сборках: DVD, Dual Arch CD, LiveCD и образ для установки по
            сети.
            По мимо этого сборки делятся регионально, то есть по наличию локализаций на: Europe 1 – America; Europe 2;
            Africa, India; Asia.
            Русская и украинские локализации находятся на издании Europe 2.
        </p>

        <table class="grid_10 push_1">
            <tr>
                <td colspan="2" rowspan="2" class="headrow">Версия ОС</td>
                <td rowspan="2" class="headrow">GUI</td>
                <td rowspan="2" class="headrow">ver(bit)</td>
                <td colspan="2" class="headrow">скачать</td>
            </tr>

            <tr>
                <td class="headrow">http</td>
                <td class="headrow">torrent</td>
            </tr>


            <tr>
                <td colspan="6" class="osname">MAGEIA 4.1</td>
            </tr>

            <tr>
                <td rowspan="2">DVD</td>
                <td rowspan="2"  class="info">
                    DVD включает в себя несколько графических окружений и большое количество программ.
                    На DVD собрано исключительно свободное программное обеспечение.
                    Проприетарные драйвера в сборку не включены, их установку можно провести после установки системы.
                    DVD доступен для архитектур 32 и 64 бит.
                </td>
                <td rowspan="2" class="gui">
                    GNOME, KDE, XFCE, Mate, Cinnamon, LXDE
                </td>
                <td class="ver">32</td>
                <td class="download"><a
                        href="http://www.mageia.org/ru/downloads/get/?q=Mageia-4.1-i586-DVD.iso">скачать</a>
                </td>
                <td class="download"><a
                        href="http://www.mageia.org/ru/downloads/get/?q=Mageia-4.1-i586-DVD.iso&amp;torrent=1">скачать</a>
                </td>
            </tr>

            <tr>
                <td class="ver">64</td>
                <td class="download"><a
                        href="http://www.mageia.org/ru/downloads/get/?q=Mageia-4.1-i586-DVD.iso">скачать</a></td>
                <td class="download"><a
                        href="http://www.mageia.org/ru/downloads/get/?q=Mageia-4.1-x86_64-DVD.iso&amp;torrent=1">скачать</a>
                </td>
            </tr>

            <tr>
                <td rowspan="4">liveDVD</td>
                <td rowspan="4" class="info">
                    LiveCD подходит для тех, кто хочет познакомиться с ситемой без ее установкий на жесткий диск.
                    По мимо прочего, в LiveCD образы включены несвободные драйвера и кодеки, необходимые, например,
                    если при установке потребуется подключение к интернету по средствам Wi-Fi и т.д.
                    LiveCD доступны в сборках с KDE и GNOME.
                </td>
                <td rowspan="2" class="gui">KDE</td>
                <td class="ver">32</td>
                <td class="download"><a
                        href="http://www.mageia.org/ru/downloads/get/?q=Mageia-4.1-LiveDVD-KDE4-i586-DVD.iso">скачать</a>
                </td>
                <td class="download"><a
                        href="http://www.mageia.org/ru/downloads/get/?q=Mageia-4.1-LiveDVD-KDE4-i586-DVD.iso&amp;torrent=1">скачать</a>
                </td>
            </tr>
            <tr>
                <td class="ver">64</td>
                <td class="download"><a
                        href="http://www.mageia.org/ru/downloads/get/?q=Mageia-4.1-LiveDVD-KDE4-x86_64-DVD.iso">скачать</a>
                </td>
                <td class="download"><a
                        href="http://www.mageia.org/ru/downloads/get/?q=Mageia-4.1-LiveDVD-KDE4-x86_64-DVD.iso&amp;torrent=1">скачать</a>
                </td>
            </tr>
            <tr>
                <td rowspan="2" class="gui">GNOME</td>
                <td class="ver">32</td>
                <td class="download"><a
                        href="http://www.mageia.org/ru/downloads/get/?q=Mageia-4.1-LiveDVD-GNOME-i586-DVD.iso">скачать</a>
                </td>
                <td class="download"><a
                        href="http://www.mageia.org/ru/downloads/get/?q=Mageia-4.1-LiveDVD-GNOME-i586-DVD.iso&amp;torrent=1">скачать</a>
                </td>
            </tr>
            <tr>
                <td class="ver">64</td>
                <td class="download"><a
                        href="http://www.mageia.org/ru/downloads/get/?q=Mageia-4.1-LiveDVD-GNOME-x86_64-DVD.iso">скачать</a>
                </td>
                <td class="download"><a
                        href="http://www.mageia.org/ru/downloads/get/?q=Mageia-4.1-LiveDVD-GNOME-x86_64-DVD.iso&amp;torrent=1">скачать</a>
                </td>
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

        <div id="button" class="button"><a href="javascript:javascript:history.go(-1)">Назад</a></div>


        <div class="clear"></div>

    </div>


<?php get_footer(); ?>