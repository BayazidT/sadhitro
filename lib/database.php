<?php
	class Database{
		public $host = DB_HOST;
		public $user = DB_USER;
		public $pass = DB_PASS;
		public $dbname = DB_NAME;
		
		
		public $link;
		public $error;
		
		public function __construct(){
			$this->connectDB();
		}
		
		private function connectDB(){
			
			$this->link = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
			if(!$this->link){
				$this->error = "Connection failed".$this->link->connect_error;
				return false;
				
			}
		}
		
		public function select($query){
			$result= $this->link->query($query) or die($this->link->error.__LINE__);
			
			if($result->num_rows > 0){
				return $result;
				exit();
			}else{
				return false;
			}
		}
		public function insert($query){
			$insert_row = $this->link->query($query) or die($this->link->error.__LINE__);
			
			if($insert_row){
				return $insert_row;
				exit();
			}else{
				 die("Error!!(".$this->link->errno.")".$this->link->error);
			}
		
		}
		public function insertCart($query){
			$insert_row = $this->link->query($query) or die($this->link->error.__LINE__);
			
			if($insert_row){
				return $insert_row;
				exit();
			}else{
				 die("Error!!(".$this->link->errno.")".$this->link->error);
			}
		
		}
		
		public function update($query){
			$update_row = $this->link->query($query) or die($this->link->error.__LINE__);
			
			if($update_row){
				//header("Location: profile.php?msg=".urlencode('Data updated successfully.'));
				return $update_row;
				exit();
			}else{
				 die("Error!!(".$this->link->errno.")".$this->link->error);
			}
		
		}
		public function delete($query){
			$deleteData = $this->link->query($query) or die($this->link->error.__LINE__);
			
			if($deleteData){
				return $deleteData;
				
				exit();
			}else{
				 die("Error!!(".$this->link->errno.")".$this->link->error);
			}
		
		}
		public function insertUser($query){
			$insert_row = $this->link->query($query) or die($this->link->error.__LINE__);
			
			if($insert_row){
				return $insert_row;
			}else{
				$insert_row = false;
				return $insert_row;
			}
		
		}
	
	}

?>