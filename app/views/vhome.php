<?php

class vhome extends view{
	
	function __construct(){
		parent::__construct();
		//echo 'vista creada';
		$this->template = template::load('home');
	}
}