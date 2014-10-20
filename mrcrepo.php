<?php
/*
Template Name: Репозиторий
*/
?>
<?php
    get_header(); ?>


    <div id="repocontainer" class="grid_12" xmlns="http://www.w3.org/1999/html">
		<h3>Репозиторий</h3>
		
		<br>
		<ul>	
			<li>
				Подключение репозитория Mageia Russian Community "в один клик"
				<ul>
					<li><a href="#OneClick">OneClick URPMI</a></li>
					<li><a href="#easyurpmi">Easy urpmi</a></li> 
				</ul>
			</li>
			<li>
				Подключение репозитория Mageia Russian Community через консоль
				<ul>
					<li><a href="#mageia2">Mageia 2</a></li>
					<li><a href="#mageia3">Mageia 3</a></li>
					<li><a href="#mageia4">Mageia 4</a></li>
				</ul>
			</li>
		</ul>
		
		
		<h4 id="OneClick">Подключение репозитория Mageia Russian Community "в один клик"</h4>
		
		<h5>OneClick URPMI</h5>
		<ol>
			<li><p>Для подключения репозитория Mageia Russian Community "в один клик" можно использовать веб-утилиту
				<a href="http://urpmi.mageialinux.ru/">OneClick URPMI</a>. Это свободная утилита (лицензия GNU GPL v3, исходный код доступен
				<a href="https://bitbucket.org/xxblx/oneclick-urpmi">на bitbucket.org</a>), созданная специально для Mageia.
				</p>
			</li>
		
			<li>
				<p>Откройте в веб-браузере <b>Firefox</b> страницу: <a href="http://urpmi.mageialinux.ru/">http://urpmi.mageialinux.ru/</a> или <a href="http://xxblx.bitbucket.org/urpmi/">http://xxblx.bitbucket.org/urpmi/</a></p>
				<br><img src="<?php bloginfo('stylesheet_directory'); ?>/images/pages/mrsrepo/ey4f2tad.bmp" width="40%" height="40%"/>
			</li>
		
			<li>
				<p>Выберите версию (релиз) и архитектуру Mageia</p>
				<br><img src="<?php bloginfo('stylesheet_directory'); ?>/images/pages/mrsrepo/g0b8ract.bmp" width="40%" height="40%"/>
			</li>
			
			<li>
				<p>Нажмите кнопку "Добавить" в форме "Репозиторий MRC"</p>
				<br><img src="<?php bloginfo('stylesheet_directory'); ?>/images/pages/mrsrepo/fg1y76bc.bmp" width="40%" height="40%"/>
			</li>
		
			<li>
				<p>Открыть в - Добавить источник urpmi - ОК</p>
				<br><img src="<?php bloginfo('stylesheet_directory'); ?>/images/pages/mrsrepo/6o1jmadn.bmp" width="40%" height="40%"/>
			</li>
			
			<li>
				<p>Введите root-пароль - Аутентификация</p>
				<br><img src="<?php bloginfo('stylesheet_directory'); ?>/images/pages/mrsrepo/hfg730bv.bmp" width="40%" height="40%"/>
			</li>
			
			<li>
				<p>Нажмите "Да"</p>
				<br><img src="<?php bloginfo('stylesheet_directory'); ?>/images/pages/mrsrepo/4gwta3mr.bmp" width="40%" height="40%"/>
			</li>
		
		</ol>

		<h5 id="easyurpmi">Easy urpmi</h5>

		<p>Так же вы можете воспользоваться easy urpmi. Необходимо зайти по любой из ссылок:

			<br><a href="http://easyurpmi.mageialinux.ru/">http://easyurpmi.mageialinux.ru/</a>
			<br><a href="http://linux.mageia.tk/easyurpmi/">http://linux.mageia.tk/easyurpmi/</a>
			<br><a href="http://urpmi.mageia.tk/">http://urpmi.mageia.tk/</a>
			<br><a href="http://easyurpmi.mageia.tk/">http://easyurpmi.mageia.tk/</a>
			<br>Выбрать версию, архитектуру, выбрать нужный источник, нажать кнопку на добавление источника и затем в новом окне нажать Открыть.
		</p>



		<h4>Подключение репозитория Mageia Russian Community через консоль</h4>

		<p>Репозиторий Mageia Russian Community (MRC) доступен для 32-битных и 64-битных версий Mageia 2 и 3.
		Для подключения репозитория нужно ввести в терминал от root
		</p>
		
		<h5 id="mageia2">Mageia 2</h5>
		<p>для 32-битной (i586) <b>Mageia 2</b>:</p>
		<pre>urpmi.addmedia  --wget --distrib MageiaLinux.ru-i586- <a href="http://packages.mageialinux.ru/mageia2/i586/">http://packages.mageialinux.ru/mageia2/i586/</a></pre>

		<p>для 64-битной (x86_64) <b>Mageia 2</b>:</p>
		<pre>urpmi.addmedia  --wget --distrib MageiaLinux.ru-x86_64- <a href="http://packages.mageialinux.ru/mageia2/x86_64/">http://packages.mageialinux.ru/mageia2/x86_64/</a></pre>

		<h5 id="mageia3">Mageia 3</h5>
		<p>для 32-битной (i586) <b>Mageia 3</b>:</p>
		<pre>urpmi.addmedia  --wget --distrib MageiaLinux.ru-i586- <a href="http://packages.mageialinux.ru/mageia3/i586/">http://packages.mageialinux.ru/mageia3/i586/</a></pre>
		
		<p>для 64-битной (x86_64) <b>Mageia 3</b>:</p>
		<pre>urpmi.addmedia  --wget --distrib MageiaLinux.ru-x86_64- <a href="http://packages.mageialinux.ru/mageia3/x86_64/">http://packages.mageialinux.ru/mageia3/x86_64/</a></pre>
		
		<h5 id="mageia4">Mageia 4</h5>
		<p>для 32-битной (i586) <b>Mageia 4</b>:</p>
		<pre>urpmi.addmedia  --wget --distrib MageiaLinux.ru-i586- <a href="http://packages.mageialinux.ru/mageia4/i586/">http://packages.mageialinux.ru/mageia4/i586/</a></pre>
		
		<p>для 64-битной (x86_64) <b>Mageia 4</b>:</p>
		<pre>urpmi.addmedia  --wget --distrib MageiaLinux.ru-x86_64- <a href="http://packages.mageialinux.ru/mageia4/x86_64/">http://packages.mageialinux.ru/mageia4/x86_64/</a></pre>

        <a href="javascript:javascript:history.go(-1)">
            <div id="button">Назад</div>
        </a>

        <div class="clear"></div>
        <hr>

    </div>


<?php get_footer(); ?>
