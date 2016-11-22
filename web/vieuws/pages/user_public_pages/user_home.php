<?php

  session_start();
  require "../web/vieuws/template/template-class/header.class.php";
  //require "../web/models/user_home.model.php";
  $userHome = new user_home_model();
 if(isset($_GET['id']) AND $_GET['id'] > 0){


    $getID = intval($_GET['id']);

      $user_data = $userHome->get_users_data($getID);

   if(  $_SESSION['id'] !=   $user_data['id']){

        //header("Location: user_private_home?id=".$_SESSION['id']);


 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8" />
 		<meta name="keywords" content=""/>
 		<meta name="description" content=""/>
 		<meta name="author" content="Yanick 007"/>
 		<meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../../public/css/home.css"/>
     <link rel="stylesheet" href="../../public/css/all_pages.css"/>
     <script src="../../public/js/all_pages.js"></script>
     <script src="../../public/js/home.js"></script>
     <title>CEYconnect</title>
   </head>
   <body>
     <header>
       <?php head::user_header();?>
       <h1>c est lui</h1>

     </header>


     <footer>



     </footer>
   </body>
</html>
<?php

   }else{

     header("Location: user_private_home?id=".$_SESSION['id']);
   }

 }else{

   echo "cet id n existe pas.";
 }

 ?>
