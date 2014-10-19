<?php
	/**
	* Обрезает текст, если он больше указанной длинны $len
    * и добавляет в конец указанную строку $endstr
	*/
	function trimAndPrint($string, $len, $endstr) {
        if (iconv_strlen($string, "utf-8") > $len) {
            print(mb_substr(strip_tags($string), 0, $len) . $endstr);
        } else {
            print($string);
        }
	}
