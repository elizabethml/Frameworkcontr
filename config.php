	
<?php


	define('DS', DIRECTORY_SEPARATOR);

	define('ROOT', realpath(dirname(__FILE__)).DS);

	define('APP', ROOT.'app'.DS);

	//acces to links
	define('APP_W', basename(dirname($_SERVER['SCRIPT_NAME'])));