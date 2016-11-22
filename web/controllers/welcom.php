<?php

  class welcom extends controllers{

      //private $new_model;
      //private $login_class_instance;
      public $example;

     public function __construct(){

       parent::__construct();
       $this->model('model')->model_require('user_home.model');
       

     }

     public function home(){

       //header ("Location ../public/welcom.php");
       //require "../public/welcom.php";
       $this->vieuw('vieuw')->render("public_pages/home");
     }



     public function login(){

        $this->vieuw("vieuw")->render("public_pages/login_page");
        $new_model =   $this->model("model");

      //  $new_model->model_require("login_model");
        /*$login_class_instance = $new_model->model_class("login_model");
        $login_class_instance->signUp();*/

     }



     public function user_public_home(){

       $this->vieuw("vieuw")->render("user_public_pages/user_home");

     }

     public function users_public_home(){

       $this->vieuw("vieuw")->render("user_public_pages/users_home");

     }


     public function user_private_home(){

       $this->vieuw("vieuw")->render("user_private_pages/user_home");
      // $user_data = $this->get_users_data($)
       //$this->model('model')->model_require('user_home.model');
       //$this->model('model')->model_class('user_home_model');
       //$userHome->exp();

     }

     public function users_private_home(){

       $this->vieuw("vieuw")->render("user_private_pages/users_home");

     }

    /* public function users_private_controlAccess(){

       $this->vieuw("vieuw")->render("security/users_AccessControl");

     }

     public function user_private_controlAccess(){

       $this->vieuw("vieuw")->render("security/user_accessControl");

     }*/


     public function events(){

        $this->vieuw('vieuw')->render("public_pages/event.page");

     }




  }


 ?>
