<?php
	
	class Config{
		private static $instancia;
		private static $data=array();

		
		
		private function __construct(){


		}

		public static function getIns(){
				
				if(self::$instancia != null){
					
					self::$instancia = new Config();
				}
				return self::$instancia;

		}

		public function set($name,$value){
				if(!array_key_exists($name, self::$data)){
				self::$data[$name] = $value;
				return true;
			}else{
				return false;
	
			}
		}

		public function get($name){
			if(!array_key_exists($name,self::$data)){
				return self::$data[$name];
			}else{
			return null;
			}				
		}

		public static function clearing(){

			self::$data=array();

		}

	}




