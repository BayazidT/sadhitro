<?php

    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath."/../lib/database.php");
    include_once ($filepath."/../lib/session.php");

    class User{

        private $db;
           

        public function __construct(){
            $this->db= new Database();
         

        }

        public function userRegistration($firstName, $lastName, $userEmail, $userMobile, $userLocation, $userPassword){

			   $query= "INSERT INTO s_user(firstName,lastName,userEmail,userPhone,userLocation,userPassword) Values('$firstName', '$lastName', '$userEmail', '$userMobile', '$userLocation', '$userPassword')";
               $create = $this->db->insert($query);
               if($create){
                  $logMessage = "User Registration successful! you can log in now";
                  return $logMessage;
               }else{
                $errorMessage = "There are some issues, please try again!";
                return $errorMessage;
               }
        }

        public function userLogin($userEmail, $userPassword){

            $query= "SELECT * FROM s_user where userEmail ='$userEmail' AND userPassword = '$userPassword'";
            $result = $this->db->select($query);
            if($result != false){
                $value = $result->fetch_assoc();
                Session::init();
                Session::set("userLogin", true);
                Session::set("userId", $value['userId']);
                $_SESSION['userName'] = $value['firstName'];
                $_SESSION['userEmail'] = $value['userEmail'];

                ?>
                <script>window.location.href = 'index.php';</script>
                <?php
            }else{
                echo "No result";
            }
        }

       



    }