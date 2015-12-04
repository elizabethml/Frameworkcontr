<?php

class template{

	static function load($contents,$data=null){

		if(is_array($data)){
			extract($data);
		}

		include APP.'tpl'.DS.'head.php';
		include APP.'tpl'.DS.$contents.'.php';
		include APP.'tpl'.DS.'foot.php';
	}
}