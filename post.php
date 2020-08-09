<?php
    include "include/header.php";


		 if($_SERVER["REQUEST_METHOD"]=="POST"){
			
			
			
		    $userEmail = mysqli_real_escape_string($db->link, $_POST['userEmail']);
			$userPassword = mysqli_real_escape_string($db->link, $_POST['userPassword']);
			
		  
			   $query= "SELECT * FROM s_user where userEmail ='$userEmail' AND userPassword = '$userPassword'";
				$find = $db->select($query);
				if($find){
					?>
					<script>window.location.href = 'index.php';</script>
					<?php
				}else{
					echo "No result";
				}
				
				
		   
		   }
		?>