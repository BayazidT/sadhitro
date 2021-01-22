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
			
			
			  $title = mysqli_real_escape_string($db->link, $_POST['title']);
              $description = mysqli_real_escape_string($db->link, $_POST['description']);
              $category = mysqli_real_escape_string($db->link, $_POST['category']);
              $condition = mysqli_real_escape_string($db->link, $_POST['condition']); 
              $price = mysqli_real_escape_string($db->link, $_POST['price']);
              $nagotiation = mysqli_real_escape_string($db->link, $_POST['nagotiation']);
		      
	

		   if($title==''|| $category==''|| $description==''|| $price==''|| $nagotiation==''){
			   $error = "Field must not be empty";
		   }
		        
		   else{
			   $query= "INSERT INTO user_post(title,description,category,pcondition,price,nagotiation,image, userid) Values('$title', '$description', '$category', '$condition', '$price', '$nagotiation', '$uploaded_image','$userId')";
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
              <div class="card" style="margin-top:40px;">
                  <div class="card-body">
                  <form action="postAds.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
		  <label for="inputTitle">Title</label>
            
              <input type="text" id="inputTitle" class="form-control" name="title" required="required">
            
          </div>
	
		   <div class="form-group">
		   <label>Description</label>
           <textarea name="description" class="form-control" >
               
               </textarea>
               
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
			  <label >Category</label>
                <div class="form-label-group">
                  
                     <select name="category"  class="form-control" >
								<option placeholder="none">Select</option>
								<option placeholder="Mobile">Mobile</option>
                                <option placeholder="Computer">Computer</option>
                                <option placeholder="Computer Accessories">Computer Accessories</option>
								<option placeholder="Electronics">Electronics</option>
                                <option placeholder="Car">Car</option>
                                <option placeholder="Motor Bike">Motor Bike</option>
                                <option placeholder="Cycle">Cycle</option>
								<option placeholder="Property">Property</option>
								<option placeholder="Furniture">Furniture</option>
							
								
						</select>
                </div>
              </div>
              <div class="col-md-6">
			  <label >Condition</label>
                <div class="form-label-group">
                  <input type="radio" name="condition" style="margin-left:20px" value="Used">Used
			      <input type="radio" name="condition" style="margin-left:20px" value="New">New
                </div>
              </div>
            </div>
          </div>
		   <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
			  <label >Price </label>
                <div class="form-label-group">
                  
                <input type="text" class="form-control" name="price" required="required">
                </div>
              </div>
              <div class="col-md-6">
			  <label >Nagotiation</label>
                <div class="form-label-group ">
                  <input type="radio" name="nagotiation" style="margin-left:20px" value="Fixed">Fixed
			      <input type="radio" name="nagotiation" style="margin-left:20px" value="Nagotiable">Nagotiatable
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

 




  