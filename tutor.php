<?php 
  include 'include/header.php';

?>
<!-- /.navbar -->
<?php
				$per_page = 4;
				if(isset($_GET["page"])){
					$page=$_GET["page"];
					
				}else{
					$page = 1;
					
				}
				$start_form = ($page-1) * $per_page;
		?> 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
      <div class="container">
        
        <div class="col-md-12 " style="margin-top:55px;">
          <div style="background-color: cadetblue;text-align: center;padding: 20px;">
            <h3>Welcome To Sadhitro !!</h3>
          </div>
    </div>
      <div class="row mt-3">
      <div class="col-md-3">
            <div>
              <a href="#" class="list-group-item " style="background:cadetblue;color:#fff;text-align:center;">Location
                  </a>
                  <ul class="list-group">
                  <?php

                  $cQuery = "SELECT * FROM location";
                  $qResult = $db->select($cQuery);
                  if($qResult){
                    while($result = $qResult->fetch_assoc()){
                      ?>
         <a href="cattr.php?cat='<?php echo $result['name'];?>' " style="color:#187F7F;"><li class="list-group-item"><?php echo $result['name'];?>
                      <span class="label label-primary pull-right">*</span>
                                        </li></a>
                      <?php
                    }
                  }

                  ?>
                
                    
                  
                     
                  </ul>
                 


              </div>
              <!-- /.div -->
            
          </div><!-- /.col-->
      <div class="col-md-6">
      <div>
                  <ol class="breadcrumb">
                      <li><a href="#">TUTOR  </a></li>
                </ol>
                     
              </div>
              <?php

            $cQuery = "SELECT * FROM s_tutor limit $start_form, $per_page";
            $qResult = $db->select($cQuery);
            if($qResult){
              while($result = $qResult->fetch_assoc()){
                ?>
           <div class="card">
                      
                      <div class="card-body">
                        <div style="float: left;height: 100px;width: 110px;">
                          <img src="images/<?php echo $result['image']; ?>" style="height: 100px;width: 105px; border:1px solid #444;" alt="none">
                        </div>
                    
                      <div style="padding: 4px;padding: 10;">  
                        <p style="font-size: 18px;line-height: 14px;"><?php echo $result['name']; ?></p> 
                        <hr>
                        <p style="font-size: 14px;line-height: 4px;"><?php echo $result['standard']; ?></p> 
                        <p style="font-size: 12px;line-height: 4px;"><?php echo $result['subject']; ?></p> 
                        <a href="tutorDetails.php?id=<?php echo $result['tid'];?>" class="stretched-link"></a>
                       
                        
                        
                      
                      </div>
                     
                      </div>
                     
                  </div>
                <?php
              }
            }

?>
              <div class="card">
                      
                      <div class="card-body">
                        <div style="float: left;height: 100px;width: 110px;">
                          <img src="ace.jpg" style="height: 100px;width: 105px; border:1px solid #444;" alt="none">
                        </div>
                    
                      <div style="padding: 4px;padding: 10;">  
                        <p style="font-size: 18px;line-height: 14px;">Bayazid Talukder</p> 
                        <hr>
                        <p style="font-size: 14px;line-height: 4px;">University Level</p> 
                        <p style="font-size: 12px;line-height: 4px;">Price : 00$</p> 
                       
                       
                        
                        
                      
                      </div>
                     
                      </div>
                      <p style="text-align: end;line-height: 2px;padding-right: 10px;">Time and date</p>
                  </div>
<!-- /.card -->
<?php
				$query= "select * from s_tutor";
				$result=$db->select($query);
				$total_rows=mysqli_num_rows($result);
				$total_page=ceil($total_rows/$per_page);
				
				
		?>
<ul class="pagination">

  <li class="page-item"><?php
			   echo "<a class='page-link' href='?page=1'>".'First Page'."</a>";
			   ?></li>
         <?php
			   for( $i=1;$i<=$total_page;$i++){   
			?>
  <li class="page-item"><?php  
			  echo "<a class='page-link' href='?page=".$i."'>".$i."</a>";?></li>
              <?php } ?></li>
  <li class="page-item"><?php 
			echo "<a class='page-link' href='?page=$total_page'>".'Last Page'."</a>";
			?></li>
  
</ul>
      </div><!-- /.col-->
      <div class="col-md-3">
      <div class="bg-secondary mb-3" style="border-radius:5px;height:48px;">
         
          <form method="POST" action="tutorSearch.php" class="form-inline ml-0 ml-md-4 ">
        <div class="input-group input-group-sm">
          <input class="form-control mt-1" style="height:40px;min-width:210px" name="search" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fas fa-search" ></i>
            </button>
          </div>
        </div>
      </form>
    

          </div>
      <div class="card">
        <div class="card-body">
      <!--  <h3 style="text-align:center;margin:2px;border-bottom:2px solid cadetblue;">LOST&FOUND LOCATION</h3>
          -->
          <h3 style="text-align:center;margin:2px;border-bottom:2px solid cadetblue;">Education</h3>
          Upcomming...
          <br>

       


     </div>
        </div><!-- /.card -->
      </div><!-- /.col-->
      </div><!-- /.row -->
      </div><!-- /.container-fluid -->
   
  
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 

<!--Footer -->
<?php 

include 'include/footer.php';
?>