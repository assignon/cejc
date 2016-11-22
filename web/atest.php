<?php


class test {

   //protected $scan_dir;
    public function __construct(){


    }

    public function file(){

      $scan_dir = scandir(__DIR__);

         array_shift($scan_dir);
        array_shift($scan_dir);
        array_shift($scan_dir);
         foreach ($scan_dir as $dir) {
           return $dir;
         }

        //var_dump($scan_dir);

    }
}


 ?>
