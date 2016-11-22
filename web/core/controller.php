<?php

   class controllers{

     public function __construct(){

        require "vieuw.php";
        require "model.php";


     }

      public function vieuw($vieuw_class){

         //require "vieuw.php";
         return new $vieuw_class;

      }

      public function model($model_class){

          //require "model.php";
          return new $model_class;
      }

   }

 ?>
