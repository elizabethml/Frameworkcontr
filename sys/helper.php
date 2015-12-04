<?php

	spl_autoload_register(null,false); //vacia tablas de autoloads
	spl_autoload_register('Mautoload::SysLoader');
	spl_autoload_register('Mautoload::ContLoader');
	spl_autoload_register('Mautoload::ModLoader');
	spl_autoload_register('Mautoload::ViewLoader');
	
	class Mautoload{

		static function SysLoader($class){//torna la osició dintre delsfitxers

				$filename=strtolower($class).'.php';
				$file=ROOT.'sys'.DS.$filename;
				if(!file_exists($file)){ //si exite
					return false;
				}
				require $file;
		}


		static function ContLoader($class){//torna la osició dintre delsfitxers

				$filename=strtolower($class).'.php';
				$file=ROOT.'controllers'.DS.$filename;
				if(!file_exists($file)){ //si exite
					return false;
				}
				require $file;
		}

			static function ModLoader($class){//torna la osició dintre delsfitxers

				$filename=strtolower($class).'.php';
				$file=ROOT.'models'.DS.$filename;
				if(!file_exists($file)){ //si exite
					return false;
				}
				require $file;
		}


			static function ViewLoader($class){//torna la osició dintre delsfitxers

				$filename=strtolower($class).'.php';
				$file=ROOT.'views'.DS.$filename;
				if(!file_exists($file)){ //si exite
					return false;
				}
				require $file;
		}

	}

	/**
	* code
	* make var_dump easy
	* @author Elizabeth
	*
	*
	**/

	class Coder{

		 static function code($var){

			echo '<pre>'.$var.'</pre>';
		}

		static function codear($var){

			echo '<pre>'.var_dump($var).'</pre>';
		}

	}

?>