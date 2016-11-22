<?php

  //namespace config\autoloading;
  /*class Autoloader{

      static function autoload($class){

       require "../web/core/".$class.".php";

      /* $files = __DIR__;
       $scan_dir = scandir($files);
       array_shift($scan_dir);
       array_shift($scan_dir);
       array_shift($scan_dir);
       foreach ($scan_dir as $dir) {
        require "/".$dir;

     }*/

  /*  }

      static function Register(){

         spl_autoload_register(array(__CLASS__,'autoload'));

      }

  }*/

 require ('../web/core/web.php');
  //require '../web/controllers/home.php';
  require ('../web/core/controller.php');
  //require ('../web/core/model.php');

 ?>
