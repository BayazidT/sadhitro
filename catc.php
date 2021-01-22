<?php 
  include 'include/header.php';

  if(isset($_GET['cat'])){
    $catName = $_GET['cat'];
  }

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
         <a href="?cat='<?php echo $result['cname'];?>' " style="color:#187F7F;"><li class="list-group-item"><?php echo $result['cname'];?>
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
                      <li><a href="#">Home  </a></li>
                     
              </div>
              <!-- /.div -->
                  
                  <!-- /.col -->
                <?php
                $query = "SELECT * FROM circular  WHERE category = $catName order by cId DESC";
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
                    <div class="card">
                      
                      <div class="card-body">
                        <div style="float: left;height: 100px;width: 110px;">
                          <img src="ace.jpg" style="height: 100px;width: 105px; border:1px solid #444;" alt="none">
                        </div>
                    
                      <div style="padding: 4px;padding: 10;">  
                        <p style="font-size: 18px;line-height: 14px;">Hello world! welcome to my website!</p> 
                        <hr>
                        <p style="font-size: 14px;line-height: 4px;">Category</p> 
                        <p style="font-size: 12px;line-height: 4px;">Price : 00$</p> 
                       
                       
                        
                        
                      
                      </div>
                     
                      </div>
                      <p style="text-align: end;line-height: 2px;padding-right: 10px;">Time and date</p>
                  </div>
                  <!-- Ends single product-->
                  <div class="card">
                      
                    <div class="card-body">
                      <div style="float: left;height: 100px;width: 110px;">
                        <img src="ace.jpg" style="height: 100px;width: 105px; border:1px solid #444;" alt="none">
                      </div>
                  
                    <div style="padding: 4px;padding: 10;">  
                      <p style="font-size: 18px;line-height: 14px;">Hello world! welcome to my website!</p> 
                      <hr>
                      <p style="font-size: 14px;line-height: 4px;">Category</p> 
                      <p style="font-size: 12px;line-height: 4px;">Price : 00$</p> 
                     
                     
                      
                      
                    
                    </div>
                   
                    </div>
                    <p style="text-align: end;line-height: 2px;padding-right: 10px;">Time and date</p>
                </div>
                <div class="card">
                      
                  <div class="card-body">
                    <div style="float: left;height: 100px;width: 110px;">
                      <img src="ace.jpg" style="height: 100px;width: 105px; border:1px solid #444;" alt="none">
                    </div>
                
                  <div style="padding: 4px;padding: 10;">  
                    <p style="font-size: 18px;line-height: 14px;">Hello world! welcome to my website!</p> 
                    <hr>
                    <p style="font-size: 14px;line-height: 4px;">Category</p> 
                    <p style="font-size: 12px;line-height: 4px;">Price : 00$</p> 
                   
                   
                    
                    
                  
                  </div>
                 
                  </div>
                  <p style="text-align: end;line-height: 2px;padding-right: 10px;">Time and date</p>
              </div>
              <div class="card">
                      
                <div class="card-body">
                  <div style="float: left;height: 100px;width: 110px;">
                    <img src="ace.jpg" style="height: 100px;width: 105px; border:1px solid #444;" alt="none">
                  </div>
              
                <div style="padding: 4px;padding: 10;">  
                  <p style="font-size: 18px;line-height: 14px;">Hello world! welcome to my website!</p> 
                  <hr>
                  <p style="font-size: 14px;line-height: 4px;">Category</p> 
                  <p style="font-size: 12px;line-height: 4px;">Price : 00$</p> 
                 
                 
                  
                  
                
                </div>
               
                </div>
                <p style="text-align: end;line-height: 2px;padding-right: 10px;">Time and date</p>
            </div>
            <div class="card">
                      
              <div class="card-body">
                <div style="float: left;height: 100px;width: 110px;">
                  <img src="ace.jpg" style="height: 100px;width: 105px; border:1px solid #444;" alt="none">
                </div>
            
              <div style="padding: 4px;padding: 10;">  
                <p style="font-size: 18px;line-height: 14px;">Hello world! welcome to my website!</p> 
                <hr>
                <p style="font-size: 14px;line-height: 4px;">Category</p> 
                <p style="font-size: 12px;line-height: 4px;">Price : 00$</p> 
               
               
                
                
              
              </div>
             
              </div>
              <p style="text-align: end;line-height: 2px;padding-right: 10px;">Time and date</p>
          </div>
          <div class="card">
                      
            <div class="card-body">
              <div style="float: left;height: 100px;width: 110px;">
                <img src="ace.jpg" style="height: 100px;width: 105px; border:1px solid #444;" alt="none">
              </div>
          
            <div style="padding: 4px;padding: 10;">  
              <p style="font-size: 18px;line-height: 14px;">Hello world! welcome to my website!</p> 
              <hr>
              <p style="font-size: 14px;line-height: 4px;">Category</p> 
              <p style="font-size: 12px;line-height: 4px;">Price : 00$</p> 
             
             
              
              
            
            </div>
           
            </div>
            <p style="text-align: end;line-height: 2px;padding-right: 10px;">Time and date</p>
        </div>
            
          </div>
          <!-- /.col -->
          <div class="col-md-3">
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