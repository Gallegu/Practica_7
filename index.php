<?php 
    ini_set('display_errors','on');
 
    /*define('DS',DIRECTORY_SEPARATOR);
    define('ROOT',realpath(dirname(__FILE__)).DS);
    define('APP',ROOT.'app'.DS);
    define('APP_W',basename($_SERVER['SCRIPT_NAME']));*/
   	
   	
    require 'sys/Core.php';
    include 'constants.php';
     require 'sys/Config.php';

    Core::init();
 ?>