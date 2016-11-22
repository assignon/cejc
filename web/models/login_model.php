<?php

    class login_model extends model{

     /*alone sign up variabels*/
          private $username;
          private $email;
          private $emailConf;
          private $birth;
          private $church;
          private $pass;
          private $passConf;
     /*group sign up variabels*/
          private $Gusername;
          private $Gemail;
          private $GemailConf;
          private $Ggroup;
          private $Gchurch;
          private $Gpass;
          private $GpassConf;

          /*sign in variabels*/

          private $user_signin;
          private $password;

          private $Guser_signin;
          private $Gpassword;


        public function __construct(){



        }


        public function check_alone_registration($submit,$username,$email,$emailConf,$birth,$church,$pass,$passConf){

           if(isset($_POST[$submit])){

               $this->username = htmlspecialchars($_POST[$username]);
               $this->email = htmlspecialchars($_POST[$email]);
               $this->emailConf= htmlspecialchars($_POST[$emailConf]);
               $this->birth = $_POST[$birth];
               //$this->kind_group = $_POST[$kind_group];
               $this->church = $_POST[$church];
               $this->pass = sha1($_POST[$pass]);
               $this->passConf = sha1($_POST[$passConf]);

               if(!empty($this->username) AND !empty($this->email) AND !empty($this->emailConf) AND !empty($this->birth) AND !empty($this->church) AND !empty($_POST[$pass]) AND !empty($_POST[$passConf]))
                 {

                    $username_len = strlen($this->username);
                    if($username_len <= 15){
                         $username_request = $this->getPDO()->prepare("SELECT*FROM alone_signup WHERE username=?");
                         $username_request->execute(array($this->username));
                         $username_rowcount = $username_request->rowCount();
                         if($username_rowcount == 0){

                             if(filter_var($this->email, FILTER_VALIDATE_EMAIL)){

                                if($this->email == $this->emailConf){

                                  $email_request = $this->getPDO()->prepare("SELECT*FROM alone_signup WHERE email=?");
                                  $email_request->execute(array($this->email));
                                  $email_rowcount = $email_request->rowCount();

                                   if($email_rowcount == 0){

                                     $pass_len = strlen($_POST[$pass]);
                                     $passConf_len = strlen($_POST[$passConf]);

                                     if($pass_len > 7 AND $passConf_len > 7){

                                       if($this->pass == $this->passConf){

                                           if($_POST[$pass] != $this->username AND $_POST[$passConf] != $this->username){

                                              $this->prepare("INSERT INTO alone_signup(username,email,birth_day,ce_church,password) VALUES(?,?,?,?,?)",[$this->username,$this->email,$this->birth,$this->church,$this->pass]);


                                         }else{

                                         $this->error("Your password must be different from your name");

                                       }

                                       }else{

                                        $this->error("Both your passwords do not match");

                                       }

                                     }else{

                                       $this->error("Your passwords should not be lesse than 7 characters");

                                    }

                                   }else{

                                     $this->error("This email already exists! choose another");

                                   }

                                }else{

                                  $this->error("Both your emails do not match");


                                }

                             }else{

                              $this->error("Email not valide");

                             }

                         }else{

                            $this->error("This name already exists! choose another");

                         }

                    }else{

                        $this->error("Your name should not exceed 15 characters");

                    }

                 }else{

                    $this->error("You must fill in all fields!");

                 }

           }

        }


        public function check_group_registration($Gsubmit,$Ggroup_name,$Gemail,$GemailConf,$Ggroup,$Gchurch,$Gpass,$GpassConf){

           if(isset($_POST[$Gsubmit])){

               $this->Gusername = htmlspecialchars($_POST[$Ggroup_name]);
               $this->Gemail = htmlspecialchars($_POST[$Gemail]);
               $this->GemailConf= htmlspecialchars($_POST[$GemailConf]);
               $this->Ggroup = $_POST[$Ggroup];
               $this->Gchurch = $_POST[$Gchurch];
               $this->Gpass = sha1($_POST[$Gpass]);
               $this->GpassConf = sha1($_POST[$GpassConf]);

               if(!empty($this->Gusername) AND !empty($this->Gemail) AND !empty($this->GemailConf) AND !empty($this->Ggroup) AND !empty($this->Gchurch) AND !empty($_POST[$Gpass]) AND !empty($_POST[$GpassConf]))
                 {

                    $username_len = strlen($this->Gusername);
                    if($username_len <= 15){
                         $username_request = $this->getPDO()->prepare("SELECT*FROM group_signup WHERE group_name=?");
                         $username_request->execute(array($this->Gusername));
                         $username_rowcount = $username_request->rowCount();
                         if($username_rowcount == 0){

                             if(filter_var($this->Gemail, FILTER_VALIDATE_EMAIL)){

                                if($this->Gemail == $this->GemailConf){

                                  $email_request = $this->getPDO()->prepare("SELECT*FROM group_signup WHERE email=?");
                                  $email_request->execute(array($this->Gemail));
                                  $email_rowcount = $email_request->rowCount();


                                   if($email_rowcount == 0){

                                     $pass_len = strlen($_POST[$Gpass]);
                                     $passConf_len = strlen($_POST[$GpassConf]);

                                     if($pass_len > 7 AND $passConf_len > 7){

                                       if($this->Gpass == $this->GpassConf){

                                           if($_POST[$Gpass] != $this->Gusername AND $_POST[$GpassConf] != $this->Gusername){

                                              $this->prepare("INSERT INTO group_signup(group_name,email,kind_group,ce_church,password) VALUES(?,?,?,?,?)",[$this->Gusername,$this->Gemail,$this->Ggroup,$this->Gchurch,$this->Gpass]);

                                         }else{

                                         $this->error("Your password must be different from your name");

                                       }

                                       }else{

                                        $this->error("Both your passwords do not match");

                                       }

                                     }else{

                                       $this->error("Your passwords should not be lesse than 7 characters");

                                    }

                                   }else{

                                     $this->error("This email already exists! choose another");

                                   }

                                }else{

                                  $this->error("Both your emails do not match");


                                }

                             }else{

                              $this->error("Email not valide");

                             }

                         }else{

                            $this->error("This name already exists! choose another");

                         }

                    }else{

                        $this->error("Your name should not exceed 15 characters");

                    }

                 }else{

                    $this->error("You must fill in all fields!");

                 }

           }

        }


        public function signInAlone($submit,$username,$password){

          if(isset($_POST[$submit])){

              $this->user_signin = $_POST[$username];
              $this->password = sha1($_POST[$password]);

              if(!empty($this->user_signin) AND !empty($this->password)){

                  $user_data = $this->getPDO()->prepare("SELECT*FROM alone_signup WHERE username=? AND password=?");
                  $user_data->execute(array($this->user_signin,$this->password));
                  $user_data_row = $user_data->rowCount();
                  if($user_data_row == 1){

                     $user_data_fetch = $user_data->fetch();
                     $_SESSION['id'] = $user_data_fetch['id'];
                     $_SESSION['username'] = $user_data_fetch['username'];
                     $_SESSION['password'] = $user_data_fetch['password'];
                     $url = $_GET['url'];
                     $urlParse =  $url[0].$url[1].$url[2].$url[3].$url[4].$url[5];
                     $urlParse = "user_home";
                     header("Location: user_private_home?id=".$_SESSION['id']);

                  }else{

                    $this->signin_err("Username of password don't existe!");

                  }

              }else{

                  $this->signin_err("You must fill in all fields!");

              }

          }

        }


        public function signInGroup($submit,$username,$password){

          if(isset($_POST[$submit])){

              $this->Guser_signin = $_POST[$username];
              $this->Gpassword = sha1($_POST[$password]);

              if(!empty($this->Guser_signin) AND !empty($this->Gpassword)){

                  $user_data = $this->getPDO()->prepare("SELECT*FROM group_signup WHERE group_name=? AND password=?");
                  $user_data->execute(array($this->Guser_signin,$this->Gpassword));
                  $user_data_row = $user_data->rowCount();
                  if($user_data_row == 1){

                     $user_data_fetch = $user_data->fetch();
                     $_SESSION['id'] = $user_data_fetch['id'];
                     $_SESSION['group_name'] = $user_data_fetch['group_name'];
                     $_SESSION['password'] = $user_data_fetch['password'];

                     header("Location: users_private_home?id=".$_SESSION['id']);

                  }else{

                    $this->signin_err("Username of password don't existe!");

                  }

              }else{

                  $this->signin_err("You must fill in all fields!");

              }

          }

        }


        public function aloneControle_access(){

          /* if(isset($_GET[$id]) AND $_GET[$id] > 0){

            return header("Location user_public_home?id=".$_SESSION['id']);

          }else if(isset($_GET[$id]) AND $_GET[$id] == $_SESSION[$id]){

            return header("Location user_private_home?id=".$_SESSION['id']);

          }*/
          return $this->getPDO();

        }


        public function groupControle_access($id){

           if(isset($_GET[$id]) AND $_GET[$id] > 0){

            header("Location users_public_home?id=".$_SESSION['id']);

          }else if(isset($_GET[$id]) AND $_GET[$id] == $_SESSION[$id]){

            header("Location users_private_home?id=".$_SESSION['id']);

          }

        }


  }

 ?>
