<?php 
  include 'include/header.php';

?>
<?php
				$per_page = 4;
				if(isset($_GET["page"])){
					$page=$_GET["page"];
					
				}else{
					$page = 1;
					
				}
				$start_form = ($page-1) * $per_page;
		?> 
<!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
      <div class="container">
        <div class="row">
        <div class="col-md-12 " style="margin-top:55px;">
          <div style="background-color: cadetblue;text-align: center;padding: 20px;">
            <h3>Welcome To Sadhitro !!</h3>
          </div>
    </div>
          <!-- /.col -->
          
         
      </div>
        <div class="row" style="margin-top:10px;">
          <div class="col-md-3">
            <div>
              <a href="#" class="list-group-item " style="background:#187F7F;color:#fff;text-align:center;">Category
                  </a>
                  <ul class="list-group">
                  <?php

                  $cQuery = "SELECT * FROM circularCategory";
                  $qResult = $db->select($cQuery);
                  if($qResult){
                    while($result = $qResult->fetch_assoc()){
                      ?>
         <a href="catc.php?cat='<?php echo $result['cname'];?>' " style="color:#187F7F;"><li class="list-group-item"><?php echo $result['cname'];?>
                      <span class="label label-primary pull-right">*</span>
                                        </li></a>
                      <?php
                    }
                  }

                  ?>
                
                    
                  
                     
                  </ul>
                 


              </div>
              <!-- /.div -->
            
          </div>
          <!-- /.col -->
          <div class="col-md-6">
              <div>
                  <ol class="breadcrumb">
                      <li><a href="#">CIRCULAR  </a></li>
                </ol>
                     
              </div>
              <!-- /.div -->
                  
                  <!-- /.col -->
                <?php
                $query = "SELECT * FROM circular order by cId DESC limit $start_form, $per_page";
                $qResult = $db->select($query);
                if($qResult){
                  while($result = $qResult->fetch_assoc()){
                   ?>

                    <div class="card">
                      
                      <div class="card-body">
                        <div style="float: left;height: 100px;width: 110px;">
                          <img src="Admin/pages/forms/image/<?php echo $result['image']; ?>" style="height: 100px;width: 105px; border:1px solid #444;" alt="none">
                        </div>
                    
                      <div style="padding: 4px;padding: 10;">  
                        <p style="font-size: 18px;"><?php echo $result['title']; ?></p> 
                        <hr>
                        <p style="font-size: 14px;line-height: 4px;">Category</p> 
                        <p style="font-size: 12px;line-height: 4px;">Price : <?php echo $result['category']; ?></p> 
                        <a href="circularDetails.php?id=<?php echo $result['cId'];?>" class="stretched-link"></a>
                       
                        
                        
                      
                      </div>
                     
                      </div>
                      <p style="text-align: end;line-height: 2px;padding-right: 10px;"><?php echo $result['time']; ?></p>
                  </div>
                  <!-- Ends single product-->


<?php
                  }
                }


?>
<?php
				$query= "select * from circular";
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
             
          </div>
          <!-- /.col -->
          <div class="col-md-3">
          <div class="bg-secondary mb-3" style="border-radius:5px;height:48px;">
         
          <form method="POST" action="circularSearch.php" class="form-inline ml-0 ml-md-4 ">
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
     
          <h3 style="text-align:center;margin:2px;border-bottom:2px solid cadetblue;">Education</h3>
          Upcomming...
          <br>

       


     </div>
        </div><!-- /.card -->
                  <div class="card">
                    <div class="card-body">
                      Hello world! welcome to my website!Here you can sell your used product and also you can buy used product from here.
                      Hello world! welcome to my website!Here you can sell your used product and also you can buy used product from here
                      Hello world! welcome to my website!Here you can sell your used product and also you can buy used product from here
                      Hello world! welcome to my website!Here you can sell your used product and also you can buy used product from here
                      Hello world! welcome to my website!Here you can sell your used product and also you can buy used product from here
                    </div>
                </div>
      </div>
      </div><!-- /.container-fluid -->
   
  
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

 

<!--Footer -->
<?php 

include 'include/footer.php';
?>