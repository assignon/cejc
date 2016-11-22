<?php

   class user_home_model extends model{

       public function __construct(){

          //user_controle_acces('id')

       }

       public function get_users_data($id,$table_name){

          $req = $this->prepare_fetch("SELECT*FROM $table_name WHERE id=?",[$id]);
          return $req;


       }

       public function exp(){

         echo "ca fonctionne";
       }

       function change_url(){

         $url = $_GET['url'];
         //$urlParse =  $url[0].$url[1].$url[2].$url[3].$url[4].$url[5];
         $urlParse = array_shift($url);
         $urlAdd = array_unshift($urlParse,"user_home");


       }


   }

 ?>
