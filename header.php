<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/960px.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css"/>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.10.2.js"
            charset="utf-8"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/mrc.js" charset="utf-8"></script>

    <script src="http://www.google.com/jsapi"></script>
    <script>google.load("jquery", "1");</script>
    <!-- jQuery Image Scale Carousel CSS & JS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lib.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jQuery.isc.css" type="text/css"/>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-image-scale-carousel.js" type="text/javascript"
            charset="utf-8"></script>
    <title>mageialinux.ru</title>

    <script>
        var carousel_images = [
            "https://pp.vk.me/c617827/v617827464/123d/mVQxikpdwO8.jpg",
            "https://pp.vk.me/c617827/v617827464/1192/mZZb5hgjT2Q.jpg",
            "https://pp.vk.me/c617827/v617827464/11b6/A8044TgWYDk.jpg",
            "https://pp.vk.me/c617827/v617827464/11d1/XMuESudvNI4.jpg",
            "https://pp.vk.me/c617827/v617827464/11fe/d5ohGlcKxmw.jpg",
            "https://pp.vk.me/c617827/v617827464/1210/-n1jOFZLtHM.jpg"
        ];

        // Example without autoplay
        /*$(window).load(function () {
         $("#photo_container").isc({
         imgArray: carousel_images
         });
         });*/

        // Example with autoplay
        $(window).load(function () {
            $("#photo_container").isc({
                imgArray: carousel_images,
                autoplay: true,
                autoplayTimer: 5000 // 5 seconds.
            });
        });
    </script>
</head>

<body>
<div id="container" class="container_12">
    <div id="navbar" class="grid_12">
        <div id="logo"><a href="/"></a></div>
        <div id="uppermenu">
            <ul>
                <li><a href="/arch">Архив</a></li>
                <li><a href="/mrc-feed">mrc-feed</a></li>
            </ul>
        </div>

        <div id="menu">
            <ul>
                <li><a href="/">Главная</a></li>
                <li><a href="/download">Загрузки</a></li>
                <li>
                    <a href="/mrcrepo">Репозиторий</a>
                </li>
                <li><a href="http://forum.mageialinux.ru/">Форум</a></li>
                <li id="liborder">
                    <a href="http://wiki.mageialinux.ru/index.php?title=%D0%97%D0%B0%D0%B3%D0%BB%D0%B0%D0%B2%D0%BD%D0%B0%D1%8F_%D1%81%D1%82%D1%80%D0%B0%D0%BD%D0%B8%D1%86%D0%B0">Вики</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="clear"></div>