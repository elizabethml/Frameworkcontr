<?php

	ini_set('display_errors','on');

	//informe d'errores
	error_reporting(E_ALL);

	include 'config.php';
	require 'sys/helper.php';

	//Session::ini_session();

	$conf=Registry::getInstance();
	$conf->Welcome = 'Hola';//set
	$msg=$conf->Welcome;//get
	unset($conf->Welcome);
	//Coder::codear($conf);
	template::load('home');
	Core::init();



	//crear class registry per tenir acces
	//a traves fr sigleton
	//a la configuració de l'aplicació
	//al fitxer config.json en app