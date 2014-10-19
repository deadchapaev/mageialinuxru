<?php
/*
Template Name: Репозиторий
*/
?>
<?php
get_header(); ?>


    <div id="downloadcontainer" class="grid_12" xmlns="http://www.w3.org/1999/html">
        <h3>Репозиторий</h3>
		<hr>
		<ul>
			<li>Подключение репозитория Mageia Russian Community "в один клик"
				<ul>
					<li>OneClick URPMI</li>
					<li>Easy urpmi</li>
				</ul>
			</li>
			<li>
				Подключение репозитория Mageia Russian Community через консоль
				<ul>
					<li>Mageia 2</li>
					<li>Mageia 3</li>
					<li>Mageia 4</li>
				</ul>
			</li>
		</ul>
		
		
		<h2>Подключение репозитория Mageia Russian Community "в один клик"</h2>
		
		
		<h3>OneClick URPMI</h3>
		<p>Для подключения репозитория Mageia Russian Community "в один клик" можно использовать веб-утилиту 
			<a href="http://urpmi.mageialinux.ru/">OneClick URPMI</a>. Это свободная утилита (лицензия GNU GPL v3, исходный код доступен 
			<a href="https://bitbucket.org/xxblx/oneclick-urpmi">на bitbucket.org</a>), созданная специально для Mageia. 
			
		</p>
		
		<ul>
			<li>
				Откройте в веб-браузере <b>Firefox</b> страницу: <a rel="nofollow" class="external free" href="http://urpmi.mageialinux.ru/">http://urpmi.mageialinux.ru/</a> или <a rel="nofollow" class="external free" href="http://xxblx.bitbucket.org/urpmi/">http://xxblx.bitbucket.org/urpmi/</a>
				<br><img src="<?php bloginfo('stylesheet_directory'); ?>/images/pages/mrsrepo/ey4f2tad.bmp" width="300" height="248"/>

			</li>

			<li> 
				Выберите версию (релиз) и архитектуру Mageia 
				<br><img src="<?php bloginfo('stylesheet_directory'); ?>/images/pages/mrsrepo/g0b8ract.bmp" width="300" height="248"/>
			</li>
			
			<li> 
				Нажмите кнопку "Добавить" в форме "Репозиторий MRC"
				<br><img src="<?php bloginfo('stylesheet_directory'); ?>/images/pages/mrsrepo/fg1y76bc.bmp" width="300" height="248"/>
			</li>
			<li> 
				Открыть в - Добавить источник urpmi - ОК
				<br><img src="<?php bloginfo('stylesheet_directory'); ?>/images/pages/mrsrepo/6o1jmadn.bmp" width="300" height="248"/>
			</li> 
			
			<li> 
				Введите root-пароль - Аутентификация
				<br><img src="<?php bloginfo('stylesheet_directory'); ?>/images/pages/mrsrepo/hfg730bv.bmp" width="300" height="248"/>
			</li> 
			<li> 
				Нажмите "Да"
				<br><img src="<?php bloginfo('stylesheet_directory'); ?>/images/pages/mrsrepo/4gwta3mr.bmp" width="400" height="148"/>
			</li> 
			
		</ul>


		<h3>Easy urpmi</h3>
		
		<p>Так же вы можете воспользоваться easy urpmi. Необходимо зайти по любой из ссылок:
		
			<br><a href="http://easyurpmi.mageialinux.ru/">http://easyurpmi.mageialinux.ru/</a>
			<br><a href="http://linux.mageia.tk/easyurpmi/">http://linux.mageia.tk/easyurpmi/</a>
			<br><a href="http://urpmi.mageia.tk/">http://urpmi.mageia.tk/</a>
			<br><a href="http://easyurpmi.mageia.tk/">http://easyurpmi.mageia.tk/</a>
			<br>Выбрать версию, архитектуру, выбрать нужный источник, нажать кнопку на добавление источника и затем в новом окне нажать Открыть.
		</p>
		
		<br>
		
		<h2>Подключение репозитория Mageia Russian Community через консоль</h2>
		
		<p>Репозиторий Mageia Russian Community (MRC) доступен для 32-битных и 64-битных версий Mageia 2 и 3.
		Для подключения репозитория нужно ввести в терминал от root
		</p>
		<h3>Mageia 2</h3>
		для 32-битной (i586) <b>Mageia 2</b>:
		<pre>urpmi.addmedia  --wget --distrib MageiaLinux.ru-i586- <a href="http://packages.mageialinux.ru/mageia2/i586/">http://packages.mageialinux.ru/mageia2/i586/</a></pre>
		
		для 64-битной (x86_64) <b>Mageia 2</b>:
		
		<pre>urpmi.addmedia  --wget --distrib MageiaLinux.ru-x86_64- <a href="http://packages.mageialinux.ru/mageia2/x86_64/">http://packages.mageialinux.ru/mageia2/x86_64/</a></pre>
		
		<h3>Mageia 3</h3>
		<p>для 32-битной (i586) <b>Mageia 3</b>:
		</p>
		<pre>urpmi.addmedia  --wget --distrib MageiaLinux.ru-i586- <a href="http://packages.mageialinux.ru/mageia3/i586/">http://packages.mageialinux.ru/mageia3/i586/</a></pre>
		<p>для 64-битной (x86_64) <b>Mageia 3</b>:
		</p>
		<pre>urpmi.addmedia  --wget --distrib MageiaLinux.ru-x86_64- <a href="http://packages.mageialinux.ru/mageia3/x86_64/">http://packages.mageialinux.ru/mageia3/x86_64/</a></pre>
		<h3>Mageia 4</h3>
		<p>для 32-битной (i586) <b>Mageia 4</b>:
		</p>
		<pre>urpmi.addmedia  --wget --distrib MageiaLinux.ru-i586- <a href="http://packages.mageialinux.ru/mageia4/i586/">http://packages.mageialinux.ru/mageia4/i586/</a></pre>
		<p>для 64-битной (x86_64) <b>Mageia 4</b>:
		</p>
		<pre>urpmi.addmedia  --wget --distrib MageiaLinux.ru-x86_64- <a href="http://packages.mageialinux.ru/mageia4/x86_64/">http://packages.mageialinux.ru/mageia4/x86_64/</a></pre>
		
		
		
		
        

        <a href="javascript:javascript:history.go(-1)">
            <div id="button">Назад</div>
        </a>

        <div class="clear"></div>
        <hr>

    </div>


<?php get_footer(); ?>