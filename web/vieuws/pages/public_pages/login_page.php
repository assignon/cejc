<?php
    session_start();
    require "../web/models/login_model.php";
    $login = new login_model();

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8" />
 		<meta name="keywords" content=""/>
 		<meta name="description" content=""/>
 		<meta name="author" content="Yanick 007"/>
 		<meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../../public/css/login.css"/>
     <script src="../../public/js/login.js"></script>
     <title>CEYconnect</title>
   </head>
   <body>
     <header>

        <div id="menu">

          <a href="home"><img src="" alt="Logo" id="logo"/></a>
          <a href="password-recovery" id="forgot_pass"><img src="../../public/images/menu_icons/forgot_pass.png" alt="" /><p>password recovery</p></a>
          <p id="errs">

          </p>
          <form  action="" method="post">

            <table>
             <tr>
               <td><input type="text" name="username" placeholder="Username/Groupname"></td>
               <td><input type="password" name="user_pass" placeholder="Password"></td>
               <td><input type="submit" name="signin" value="Sign in"></td>
             </tr>

            </table>

          </form>

        </div>
        <?php
           $login->signInAlone("signin","username","user_pass");
           $login->signInGroup("signin","username","user_pass");
        ?>
        <div id="forms">

            <div class="msg" id="alone_msg">

              <img src="../images/menu_icons/alone_sign.png" alt="Alone sign" />
              <p id="alleen">
                ALONE SIGN UP...
              </p>

            </div>
            <form action="" method="post" id="alone_form">
                <table id="alone">
                  <tr>
                      <!--  A signifie alone donc Auser_signup = le user du formulaire d inscription d'id=alone-->
                      <td><input type="text" name="Auser_signup" placeholder="Username" value="<?php echo $login->getPOST("Auser_signup") ?>"></td>
                      <td><input type="email" name="Aemail_signup" placeholder="Email" value="<?php echo $login->getPOST("Aemail_signup") ?>"></td>
                      <td><input type="email" name="AemailConf_signup" placeholder="Email confirmation" value="<?php echo $login->getPOST("AemailConf_signup") ?>"></td>
                      <td><input type="date" name="birth" placeholder="Birth day" value="<?php echo $login->getPOST("birth") ?>"></td>
                      <td><select id="church_loc" name="Achurch" required>
                          <option value="">Your church</option>
                          <option value="amsterdam">Amsterdam</option>
                          <option value="paris">Paris</option>
                      </select></td>
                      <td><input type="password" name="Apass_signup" placeholder="Password"></td>
                      <td><input type="password" name="ApassConf_signup" placeholder="Password confirmation"></td>
                      <td><input type="submit" name="alone_signup" value=""></td>
                  </tr>
                </table>

                <div class="error">

                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>

                </div>
            </form>

            <?php $login->check_alone_registration("alone_signup","Auser_signup","Aemail_signup","AemailConf_signup","birth","Achurch","Apass_signup","ApassConf_signup"); ?>

            <div class="msg" id="group_msg">

              <img src="../images/menu_icons/group_sign.png" alt="Group sign" />
              <p>
                GROUP SIGN UP...
              </p>

            </div>

            <div id="more_info">

              <p>

                  Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                  nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                  reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                  deserunt mollit anim id est laborum.

              </p>

              <img src="../../public/images/back_images/login_background.jpg" alt="ce youth connect" />

           </div>

            <form action="" method="post" id="group_form">
                  <table id="group">
                    <tr>
                        <!--G signifie group donc Guser_signup = le user du formulaire d inscription d'id=group-->
                     <td><input type="text" name="Guser_signup" placeholder="Group name" value="<?php echo $login->getPOST("Guser_signup") ?>"></td>
                     <td><input type="email" name="Gemail_signup" placeholder="Email" value="<?php echo $login->getPOST("Gemail_signup") ?>"></td>
                     <td><input type="email" name="GemailConf_signup" placeholder="Email confirmation" value="<?php echo $login->getPOST("GemailConf_signup") ?>"></td>
                     <td><select id="kind_group" name="Kgroup" required>
                        <option value="">Kind of group</option>
                        <option value="sing">Sing</option>
                     </select></td>
                     <td><select id="church_loc" name="Gchurch" required>
                       <option value="">Your church</option>
                        <option value="amsterdam">Amsterdam</option>
                     </select></td>
                     <td><input type="password" name="Gpass_signup" placeholder="Password"></td>
                     <td><input type="password" name="GpassConf_signup" placeholder="Password confirmation"></td>
                     <td><input type="submit" name="group_signup" value=""></td>
                    </tr>
                  </table>

                  <div class="error" id="err_group">

                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>

                  </div>
             </form>
             <?php $login->check_group_registration("group_signup","Guser_signup","Gemail_signup","GemailConf_signup","Kgroup","Gchurch","Gpass_signup","GpassConf_signup"); ?>

        </div>



     </header>

     <footer>



     </footer>
  </body>
