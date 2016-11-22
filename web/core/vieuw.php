<?php
  class vieuw{

     public function __construct(){


     }

     public function render($path){

       require "../web/vieuws/pages/".$path.".php";

     }

  }

 ?>
