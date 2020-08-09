<?php

    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath."/../lib/database.php");
    include_once ($filepath."/../lib/session.php");

    class userPost{

        private $db;
           

        public function __construct(){
            $this->db= new Database();
         

        }
        


    }