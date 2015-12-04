<?php

/* *
*
*
* Registry: stores navegation information
*
* @author: Elizabeth
*
*
* */

class Registry{

	private $data=array();
	static $instance;
	//converteix a tipus singleton evitar problemes de duplicitat
	public static function getInstance(){
		if(!(self::$instance instanceof self)){
				self::$instance = new self;
				return self::$instance;

		}else{

			return self::$instance;
		}
	}

	function __construct(){

		$this->data=array();
		$this->load_conf();
	}

	
	//methods __set  ($key,$value)

	 public function __set($key, $value){
    	if(!array_key_exists($key,$this->data))
    	{
    		$this->data[$key] = $value;
    	}   
    }

	//methods __get  ($key) retorna $value

    public function __get($key){

        if (array_key_exists($key, $this->data)) {
            return $this->data[$key];
        }else {return null;}
	}


	function load_conf(){

		$file= APP.'config.json';
		$json_str=file_get_contents($file);
		$array_json=json_decode($json_str);
		foreach ($array_json as $key => $value) {
			$this->data[$key]=$value;
		}	
	}



	function __unset($key=null){
		if($key!=null){
			if(array_key_exists($key,$this->data)){
				$idx=array_search($key,$this->data);
				unset($this->data[$key]);
			}else{unset($this->data);}
	}

}



}



