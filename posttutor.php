<?php 
  include 'include/header.php';
  $sn::checkSession();

  $userId = $sn::get('userId');


		         if($_SERVER["REQUEST_METHOD"]=="POST"){
             $permited = array('jpg', 'jpeg', 'png', 'gif', 'pdf');
            $file_name    = $_FILES['image']['name'];
            $file_size    = $_FILES['image']['size'];
            $file_tmpname = $_FILES['image']['tmp_name'];

            $div = explode('.',$file_name);
            $file_ext = strtolower(end($div));
            $unique_image = substr(md5(time()),0, 10).'.'.$file_ext;
            $uploaded_image = $unique_image;
            if (empty($file_name)) {
               echo "<span class='error'>Please Select any Image !</span>";
              }elseif (in_array($file_ext, $permited) == false) {
               echo "<span class='error'>You can upload only:-"
               .implode(', ', $permited)."</span>";
              } else{
           move_uploaded_file($file_tmpname,"images/".$uploaded_image);
         
              }
			
		}
		?>
		<?php
		if(isset($_POST['post'])){
			
			        $name = mysqli_real_escape_string($db->link, $_POST['name']);
              $description = mysqli_real_escape_string($db->link, $_POST['description']);
              $institute = mysqli_real_escape_string($db->link, $_POST['institute']);
              $location = mysqli_real_escape_string($db->link, $_POST['location']); 
              $major = mysqli_real_escape_string($db->link, $_POST['major']);
              $standard = mysqli_real_escape_string($db->link, $_POST['standard']);
              $subject = mysqli_real_escape_string($db->link, $_POST['subject']);
              $mobile = mysqli_real_escape_string($db->link, $_POST['mobile']);
		      
	

		   if($name==''|| $institute==''|| $description==''|| $major==''|| $mobile==''){
			   $error = "Field must not be empty";
		   }
		        
		   else{
			   $query= "INSERT INTO s_tutor(name, institute, subject, standard, description, location, mobile, image, major, userid) Values('$name', '$institute', '$subject', '$standard', '$description', '$location','$mobile', '$uploaded_image', '$major','$userId')";
				$create = $db->insert($query);
				
		   
		   }
		   
		   }
		 function validate($data){
		   $data = trim($data);
		   $data = stripcslashes($data);
		   $data = htmlspecialchars($data);  
			return $data;
	   }
		
		?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="margin-top:55px;">
        <!-- Content Header (Page header) -->

        <div class="container">
          <div class="col-md-12">
              <div class="card mt-1">
                  <div class="card-body">
                  <form action="posttutor.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
		  <label for="inputTitle">Name</label>
            
              <input type="text"  class="form-control" name="name" required="required">
            
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
			  <label >Current Institute </label>
                <div class="form-label-group">
                  
                <input type="text"  class="form-control" name="institute" required="required">
                </div>
              </div>
              <div class="col-md-6">
			  <label >Major / Group</label>
                <div class="form-label-group ">
                <input type="text"  class="form-control" name="major" required="required">
                </div>
              </div>
            </div>
          </div>
	
          <div class="form-group">
		   <label>Description</label>
       <textarea class="form-control" name="description" required="required"></textarea>
               
          </div>
         
          <div class="form-group">
            <div class="form-row">
            <div class="col-md-6">
			  <label >Prefered Subject</label>
                <div class="form-label-group ">
                <input type="text" class="form-control" name="standard" required="required">
                </div>
              </div>
              <div class="col-md-6">
			  <label >Prefered Subject</label>
                <div class="form-label-group ">
                <input type="text" class="form-control" name="subject" required="required">
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
			            <label >Location</label>
                <div class="form-label-group">
                 <select name="location"  class="form-control" >
                 <option >Select</option>
                 <?php

                  $cQuery = "SELECT * FROM location";
                  $qResult = $db->select($cQuery);
                  if($qResult){
                    while($result = $qResult->fetch_assoc()){
    ?>


                         
                          <option ><?php echo $result['name']; ?></option>
                         
                      <?php
                    }
                  }

                  ?>
               
						</select> 
                </div>
              </div>
              <div class="col-md-6">
              <label >Mobile No.</label>
                <div class="form-label-group ">
                <input type="text" class="form-control" name="mobile" required="required">
			     
                </div>
              </div>
            </div>
          </div>
		   
         
		  <div class="form-group">
				<label for="picture">Upload your picture.</label><br>
				<input type="file" name="image"  />
			</div>
          
          <button type="submit" name="post" class= "btn btn-primary btn-block">Submit</button>
          
        </form>  

    </div>
    </div>
           
           
          </div>
        </div>
        <!-- /.container-fluid -->

        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
       


      

<?php
 include 'include/footer.php';
?>

 




  