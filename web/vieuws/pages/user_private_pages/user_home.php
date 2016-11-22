<?php

  session_start();
 require "../web/vieuws/template/template-class/header.class.php";
  //require "../web/models/user_home.model.php";
  $userHome = new user_home_model();
 if(isset($_GET['id']) AND $_GET['id'] > 0){


    $getID = intval($_GET['id']);

    $user_data = $userHome->get_users_data($getID,"alone_signup");

if(  $_SESSION['id'] == $user_data['id']){
     if(  $_SESSION['id'] == 3){}

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8" />
 		<meta name="keywords" content=""/>
 		<meta name="description" content=""/>
 		<meta name="author" content="Yanick 007"/>
 		<meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../../public/css/user_home_style/user_private_home.css"/>
     <link rel="stylesheet" href="../../public/css/all_pages.css"/>
     <script src="../../public/js/all_pages.js"></script>
     <script src="../../public/js/user_home_js/user_private_home.js"></script>

     <title>Users Home</title>
   </head>
   <body>
     <header>
       <?php
          head::user_header();
        ?>

       <div id="head">
           <aside>
              
               <div class="posts"></div>
               <div class="posts"></div>
               <div class="posts"></div>
               <div class="posts"></div>
               <div class="posts"></div>
               
           </aside>
           <div id="vieuw">
               
               <div class="vieuws" id="userSlider">
                   
                   
                   
               </div>
               
               <div class="vieuws" id="ministryMaterial">
                   
                   
                   
               </div>
               
               <div class="vieuws" id="group">
                   
                   <div id="groups"></div>
                   <div id="groupInvite"></div>
                   
               </div>
               
               <div class="vieuws" id="friend">
                   
                   <div id="friends"></div>
                   <div id="friendInvite"></div>
                   
               </div>
               
               <div class="vieuws" id="post">
                   
                   <div id="text"></div>
                   <div id="video"></div>
                   <div id="audio"></div>
                   
               </div>
               
           </div>
       </div>
         
       <div id="worldInfos">
           <div id="dashboard">
               
               <div id="info">
                   
                   <div class="boards">
                   
                      <img src="" alt="">
                   
                   </div>
                   
                   <div class="boards">
                   
                      <img src="" alt="">
                   
                   </div>
                   
                   <div class="boards">
                   
                      <img src="" alt="">
                   
                   </div>
                   
               </div>
               
               <div id="testimony">
                   
                   <div class="testimoni">
                   
                      <div class="imag">
                          
                          <img src="" alt="" class='icon'>
                          <img src="" alt="" class='type'>
                          
                      </div>
                   
                   </div>
                   
                   <div class="testimoni">
                   
                      <div class="imag">
                         
                         <img src="" alt="" class='icon'>
                         <img src="" alt="" class='type'>
                          
                      </div>
                   
                   </div>
                   
                   <div class="testimoni">
                   
                      <div class="imag">
                         
                         <img src="" alt="" class='icon'>
                         <img src="" alt="" class='type'>
                          
                      </div>
                   
                   </div>
                   
               </div>
               
               <div id="film">
                   
                   <div class="videos">
                   
                      <img src="" alt="">
                   
                   </div>
                   
                   <div class="videos">
                   
                      <img src="" alt="">
                   
                   </div>
                   
                   <div class="videos">
                   
                      <img src="" alt="">
                   
                   </div>
                   
               </div>
               
           </div>
           
           <aside>
               
               <div id="place">
                   
                   <h2></h2>
                   <h2></h2>
                   <h2></h2>
                   
               </div>
               
               <div id="connect">
                   
                   <div class="connected">
                       
                       
                       
                   </div>
                   
                   <div class="connected">
                       
                       
                       
                   </div>
                   
                   <div class="connected">
                       
                       
                       
                   </div>
                   
               </div>
               
           </aside>
       </div>


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

     echo  "cet id n existe pas";
 }
?>
