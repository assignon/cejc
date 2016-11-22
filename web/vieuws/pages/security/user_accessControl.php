<?php

  session_start();
  require "../web/vieuws/template/template-class/header.class.php";
  require "../web/models/user_home.model.php";
  $userHome = new user_home_model();
  if(isset($_GET['id']) AND $_GET['id'] > 0){


    $getID = intval($_GET['id']);

    $prepare = $userHome->controle_acces()->prepare("SELECT*FROM group_signup WHERE id=?");
    $prepare->execute(array($getID));
    $prepare_fetch = $prepare->fetch();

 if(  $_SESSION['id'] === $prepare_fetch['id']){

        header("Location: user_public_home?id=".$_SESSION['id']);

      }else if($_SESSION['id'] !==$prepare_fetch['id']){

         header("Location: user_private_home?id=".$_GET['id']);

      }
    }else{

        echo  "cet id n existe pas";
    }


 ?>
