<?php 
  include 'include/header.php';


  $insertUser=0 ;
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo "I am mad";
    if(isset($_POST['post'])){
      $firstName = mysqli_real_escape_string($db->link, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($db->link, $_POST['lastName']);
    $userEmail = mysqli_real_escape_string($db->link, $_POST['userEmail']);
    $userMobile = mysqli_real_escape_string($db->link, $_POST['userMobile']);
    $userLocation = mysqli_real_escape_string($db->link, $_POST['userLocation']);
   $userPassword = mysqli_real_escape_string($db->link, $_POST['userPassword']);
   $userConfirmPassword = mysqli_real_escape_string($db->link, $_POST['userConfirmPassword']);
    if($userPassword!=$userConfirmPassword){
        ?>
        <script> alert("Password and Confirm Password doesnot match! Thanks");</script>
      <?php

    }else{
      $insertUser = $ur->userRegistration($firstName, $lastName, $userEmail, $userMobile, $userLocation, $userPassword);

    }

    }
    if(isset($_POST['login'])){
      echo "I am mad";
      $userEmail = mysqli_real_escape_string($db->link, $_POST['userEmail']);
			$userPassword = mysqli_real_escape_string($db->link, $_POST['userPassword']);
			$userLogedin = $ur->userLogin($userEmail, $userPassword); 
    }

    
   	
    

  

}

?>

<div class="content-wrapper">
<div class="container" style="margin-top:60px;">
<div class="row" >
<div class="col-md-4">
<div class="login-box">

  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="login.php" method="POST" enctype="multipart/form-data" >
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="userEmail" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="userPassword" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
          <input type="submit" name="login" class= "btn btn-primary btn-block" value ="Submit" />
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
</div>
  <div class="col-md-8">
  <div class="card" >
    <div class="card-body">
    <?php 
 
    if($insertUser){
      echo "<p class='text-success text-center' >".$insertUser."</p>";
    }

    ?>
    <form  action="login.php" method="POST" enctype="multipart/form-data" >
				<div class="form-group">
							<div class="form-row">
							  <div class="col-md-6">
								<div class="form-label-group">
								<label for="firstName">First name</label>
								  <input type="text" name="firstName"  class="form-control" placeholder="First name"  autofocus="autofocus">
								  
								</div>
							  </div>
							  <div class="col-md-6">
								<div class="form-label-group">
								 <label for="lastName">Last name</label>
								  <input type="text" name="lastName"  class="form-control" placeholder="Last name" >
								 
								</div>
							  </div>
							</div>
						  </div>			
							<div class="form-group">
							<div class="form-row">
							  <div class="col-md-6">
								<div class="form-label-group">
								<label for="userMobile">Mobile No.</label>
								  <input type="text" name="userMobile" class="form-control" placeholder="Mobile no.."  autofocus="autofocus">
								  
								</div>
							  </div>
							  <div class="col-md-6">
								<div class="form-group">
			<label>E-mail:</label>
				<input name="userEmail" type="email" class="form-control" placeholder="Write your email"required="">
			</div>
							  </div>
							</div>
						  </div>			
			<div class="form-group">
							<div class="form-row">
							  <div class="col-md-6">
								<div class="form-label-group">
								<label for="firstName">Location</label>
                <select name="userLocation"  class="form-control" >
								<option placeholder="none">Select</option>
								<option placeholder="Bashundhara">Agent</option>
								<option placeholder="Bashundhara">Customer</option>
					</select>
								</div>
							  </div>
							  <div class="col-md-6">
                <div class="form-label-group">
		
                  <div class="form-label-group">
                    
				</div>
                </div>
              </div>
							</div>
						  </div>	
              <div class="form-group">
							<div class="form-row">
							  <div class="col-md-6">
								<div class="form-label-group">
								<label for="firstName">Password</label>
                <input name="userPassword" type="password" class="form-control" placeholder="Write your password"required="">
								</div>
							  </div>
							  <div class="col-md-6">
                <div class="form-label-group">
				<label >Confirm Password</label>
                  <div class="form-label-group">
                  <input name="userConfirmPassword" type="password" class="form-control" placeholder="Write your confirm password"required="">
				</div>
                </div>
              </div>
							</div>
						  </div>	
              <input type="submit" name="post" class= "btn btn-primary btn-block" value ="Submit" />
</form>
</div>
</div>
  </div>
</div>  
</div>
</div>

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>

</body>
</html>
