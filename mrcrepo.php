<?php
/*
Template Name: Репозиторий
*/
?>
<?php
    get_header(); ?>
	<div class="titleline1"><p>Репозиторий</p></div>
	<div id="repocontainer" class="grid_12">
	
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
				Откройте в веб-браузере <b>Firefox</b> страницу: <a href="http://urpmi.mageialinux.ru/">http://urpmi.mageialinux.ru/</a> или <a href="http://xxblx.bitbucket.org/urpmi/">http://xxblx.bitbucket.org/urpmi/</a>
				<div  class="spoiler-wrap">
					<div class="spoiler-head folded">скриншот</div>
					<div class="spoiler-body"><br><div class= "text"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/pages/mrsrepo/ey4f2tad.bmp" alt="mainform"/></div></div>
				</div>
			</li>
		
			<li>
				Выберите версию (релиз) и архитектуру Mageia
				<div class="spoiler-wrap">
					<div class="spoiler-head folded">скриншот</div>
					<div class="spoiler-body"><br><div class= "text"><br><img src="<?php bloginfo('stylesheet_directory'); ?>/images/pages/mrsrepo/g0b8ract.bmp" alt="changearch"/></div></div>
				</div>
			</li>
			
			<li>
				Нажмите кнопку "Добавить" в форме "Репозиторий MRC"				
				<div class="spoiler-wrap">
					<div class="spoiler-head folded">скриншот</div>
					<div class="spoiler-body"><br><div class= "text"><br><img src="<?php bloginfo('stylesheet_directory'); ?>/images/pages/mrsrepo/fg1y76bc.bmp" alt="add"/></div></div>
				</div>
			</li>
		
			<li>
				Открыть в - Добавить источник urpmi - ОК
				<div class="spoiler-wrap">
					<div class="spoiler-head folded">скриншот</div>
					<div class="spoiler-body"><br><div class= "text"><br><img src="<?php bloginfo('stylesheet_directory'); ?>/images/pages/mrsrepo/6o1jmadn.bmp" alt="addsrc"/></div></div>
				</div>				
			</li>
			
			<li>
				Введите root-пароль - Аутентификация
				<div class="spoiler-wrap">
					<div class="spoiler-head folded">скриншот</div>
					<div class="spoiler-body"><br><div class= "text"><br><img src="<?php bloginfo('stylesheet_directory'); ?>/images/pages/mrsrepo/hfg730bv.bmp" alt="rootpass"/></div></div>
				</div>				
			</li>
			
			<li>
				Нажмите "Да"
				<div class="spoiler-wrap">
					<div class="spoiler-head folded">скриншот</div>
					<div class="spoiler-body"><br><div class= "text"><br><img src="<?php bloginfo('stylesheet_directory'); ?>/images/pages/mrsrepo/4gwta3mr.bmp" alt="ok"/></div></div>
				</div>				
			</li>		
		</ol>

		<h5 id="easyurpmi">Easy urpmi</h5>

		<p>Так же вы можете воспользоваться easy urpmi. Необходимо зайти по любой из ссылок:
		</p>		
		<ul>
				<li><a href="http://easyurpmi.mageialinux.ru/">http://easyurpmi.mageialinux.ru/</a></li>
				<li><a href="http://linux.mageia.tk/easyurpmi/">http://linux.mageia.tk/easyurpmi/</a></li>
				<li><a href="http://urpmi.mageia.tk/">http://urpmi.mageia.tk/</a></li>
				<li><a href="http://easyurpmi.mageia.tk/">http://easyurpmi.mageia.tk/</a></li>
			</ul>
		<p>
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

        
        <div id="button" class="button"><a href="javascript:javascript:history.go(-1)">Назад</a></div>        

        <div class="clear"></div>

    </div>


<?php get_footer(); ?>
