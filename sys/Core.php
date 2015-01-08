<?php


class Core{ 
  static private $conf;

	static function init(){
         
		/*echo 'Core en funcionament';
			echo var_dump(Request::retrieve());
			echo"</br>";
            echo('Controller: ');
            print_r(Request::getCount()); 
            echo"</br>";
            echo('Parms: ');
            print_r(Request::getParams());
			echo"</br>";
            echo('Action: ');
            print_r(Request::getAction());*/

            $conf=Config::getIns();

            Config::set('moto','honda');

            echo "<strong>Una dada introduida anteriorment</strong><br/>";

            if(Config::set('moto','honda') == true){
                  echo "S'ha guardat satisfactoriament<br/>";
            }else{
                  echo "El registre ya esta <br/>";

            }


            echo "<b>Recuperar una dada del array, inexistent dins</b><br/>";

            if(Config::get("moto") != null){

                  echo Config::get("moto");
            }else{

                  echo "Registre indexistente";
            }




	}
}