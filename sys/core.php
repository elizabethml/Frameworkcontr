<?php

require 'sys/request.php';
	
	class Core{
		static private $controller;
		static private $action;
		
		static function init(){
			echo $_SERVER['REQUEST_URI'];
			Request::retrieve();
			$controller=Request::getCont();
			self::$controller=$controller;
			//Code::code($controller);

			echo $controller."<br>";
			$action=Request::getAct();
			Coder::code($action);
			$params=Request::getparams();
			Coder::code($params);
			self::router(); //funcio statica 
		}

		static function router(){
					
			//if exists controller the
			//make an instance of controller
			$contr_call=(self::$controller!="")?self::$controller:'home';
			$action_call=(self::$action!="")?self::$action:'home';
			$filename=$contr_call.'php';
			$filecontroller=APP.'controllers'.DS.$filename;
			Coder::code($filecontroller);

			if(is_readable($filecontroller)){

				//$cont=new action_controller (self::$params);
				//call_user_func(OBJ,function);
				
				$cont= new $contr_call();
				if(is_callable(array($cont,$action_call))){

					call_user_func(array($cont,$action_call));
					
				}
				//Coder::codear($cont);
				else{

					echo 'NO action!';
				}
			}
		      else{

		      	echo 'NO controller!';
		      }
			

		}
	}