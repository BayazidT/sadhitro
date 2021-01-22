<?php

    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath."/../lib/database.php");
    include_once ($filepath."/../lib/session.php");

    class userPost{

        private $db;
           

        public function __construct(){
            $this->db= new Database();
         

        }
        public function deleteProdductDef($pId){
            $deleteQuery = "DELETE FROM user_post WHERE pId= $pId ";
            $deleteQueryResult = $this->db->delete($deleteQuery);
            if($deleteQueryResult){
              $deleteMessage = "Product deleted successfully!";
              return $deleteMessage;
              
            }
        }

        public function deleteTuitionDef($tId){
            $deleteQuery = "DELETE FROM s_tutor WHERE tid= $tId ";
            $deleteQueryResult = $this->db->delete($deleteQuery);
            if($deleteQueryResult){
              $deleteMessage = "Tuition offer deleted successfully!";
              return $deleteMessage;
              
            }
        }
        


    }