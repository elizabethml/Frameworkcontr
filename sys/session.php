<?php

/* *
*
*
* Session: stores navegation information
*
* @author: Elizabeth
*
*
* */

class Session{

	static function ini_session(){

		session_start();
		$_SESSION['instante']   = time();
		echo '<br/><br/>Benvingut a la pagina!';
		echo '<br/>ID:'.session_id();
		echo '<br/>Connexió:'.date('d/m/Y   H:i:s', $_SESSION['instante']).'<br/><br/>';
		
	}

	static function set($key,$value){
		$_SESSION[$key]=$value;
	}

	static function get($key,$value){
		if(self::if_exist($key)){
			return $_SESSION[$key];
		}else{return null;}
	}

	static function if_exist($key){
		if(array_key_exists($key,$_SESSION)){
			return true;
		}else{return false;}

	}


	static function destroy(){
		session_destroy();
	}


}