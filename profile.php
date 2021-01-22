<?php 
  include 'include/header.php';
  $sn::checkSession();

  $userId = $sn->get('userId');

  

?>
<?php
      if(isset($_GET['deletePId'])){
        $pid = $_GET['deletePId'];
        $deleteUserProduct = $urp->deleteProdductDef( $pid);

      }
      if(isset($_GET['deleteTId'])){
        $tId = $_GET['deleteTId'];
        $deleteUserProduct = $urp->deleteTuitionDef( $tId);

      }

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="margin-top:55px;">
        <!-- Content Header (Page header) -->

        <div class="container">
          <div class="col-md-12">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-info">
                <h3 class="widget-user-username"><?php echo $_SESSION['userName']; ?></h3>
                <h5 class="widget-user-desc">Welcome!</h5>
              </div>
              <div class="widget-user-image">
                <img
                  class="img-circle elevation-2"
                  style="height:100px;width:100px;"
                  src="images/default.jpg"
                  alt="User Avatar"
                />
              </div>
              <div class="card-footer">
               
                <hr />
                <p>Lives in: Dhaka , Bangladesh</p>
                <p>Home town: Brahmanbaria, Chittagoan, Bangladesh</p>
                <p>
                  Education: BSc in Computer Science and Engineering at North
                  South University
                  <!--<small>2017-2021</small> -->
                </p>
                <p>Hobby: Traveling & Writing Travel Stories</p>
                <hr />
                <p>Tutor Post</p>
                <?php

                  if(isset($deleteUserProduct)){
                    echo "<p style='text-align:center; color:green;'>".$deleteUserProduct."</p>";
                  }
                $query = "SELECT * FROM s_tutor WHERE userid = '$userId' order by tid DESC";
                $qResult = $db->select($query);
                if($qResult){
                  while($result = $qResult->fetch_assoc()){
                   ?>

                    <div class="card">
                      
                      <div class="card-body">
                        <div style="float: left;height: 100px;width: 110px;">
                          <img src="images/<?php echo $result['image']; ?>" style="height: 100px;width: 105px; border:1px solid #444;" alt="none">
                        </div>
                    
                      <div style="padding: 4px;padding: 10;">  
                      <a href="details.php?id=<?php echo $result['tid'];?>" ><p style="font-size: 18px;line-height: 10px;"><?php echo $result['name']; ?></p>  </a> 
            
            
                        <hr>
                  
                        <p style="font-size: 14px;line-height: 4px;"><?php echo $result['standard']; ?></p> 
                        <p style="font-size: 12px;line-height: 4px;">Subject : <?php echo $result['subject']; ?></p> 
                       
                       
                        
                        
                      
                      </div>
                      <a
                class="btn btn-secondary btn-sm mt-1 mb-1"
                href="update.php?tid=<?php echo $result['tid'];?>"
                >Update</a
              >
              <a onclick="return confirm('Are you sure to delete ?');" href="?deleteTId=<?php echo $result['tid'];?>"
                class="btn btn-danger btn-sm mt-1 mb-1"
            
                >Delete</a
              >
                      </div>
                      <p style="text-align: end;line-height: 2px;padding-right: 10px;"></p>
                  </div>
                  <!-- Ends single product-->


<?php
                  }
                }else{
                  echo "<p class='text-center danger'>You don't have any ads here!</p>";
                }


?>
                <hr />
                <p>Posts Details</p>
                <?php
                $query = "SELECT * FROM user_post WHERE userId = '$userId' order by pId DESC";
                $qResult = $db->select($query);
                if($qResult){
                  while($result = $qResult->fetch_assoc()){
                   ?>

                    <div class="card">
                      
                      <div class="card-body">
                        <div style="float: left;height: 100px;width: 110px;">
                          <img src="images/<?php echo $result['image']; ?>" style="height: 100px;width: 105px; border:1px solid #444;" alt="none">
                        </div>
                    
                      <div style="padding: 4px;padding: 10;">  
                      <a href="details.php?id=<?php echo $result['pId'];?>" ><p style="font-size: 18px;line-height: 10px;"><?php echo $result['title']; ?></p>  </a> 
            
            
                        <hr>
                  
                        <p style="font-size: 14px;line-height: 4px;"><?php echo $result['category']; ?></p> 
                        <p style="font-size: 12px;line-height: 4px;">Price : <?php echo $result['price']; ?></p> 
                       
                       
                        
                        
                      
                      </div>
                      <a
                class="btn btn-secondary btn-sm mt-1 mb-1"
                href="update.php?pid=<?php echo $result['pId'];?>"
                >Update</a
              >
              <a onclick="return confirm('Are you sure to delete ?');" href="?deletePId=<?php echo $result['pId'];?>"
                class="btn btn-danger btn-sm mt-1 mb-1"
            
                >Delete</a
              >
                      </div>
                      <p style="text-align: end;line-height: 2px;padding-right: 10px;"><?php echo $result['time']; ?></p>
                  </div>
                  <!-- Ends single product-->


<?php
                  }
                }else{
                  echo "<p class='text-center danger'>You don't have any ads here!</p>";
                }


?>
                <!--Project section ends-->
                <!--Research section starts-->
                <hr />
                <p>Research</p>

                <small>First research is in progress</small>

                <!-- Research section ends-->

                <!--Writting section starts-->
                <hr />
                <p>Writings</p>
                <ul>
                  <li>
                    <a
                      href="https://btnsu172.blogspot.com/2019/11/blog-post.html?m=1&fbclid=IwAR0IokjPc65RsfgCwHMHCn5TqDjCJ5Z6SG2lNPW60ije-tSrDaQG7QCya2A"
                      target="blank"
                      >মেইল ট্রেন</a
                    >
                  </li>
                  <li></li>
                  <li></li>
                  <li></li>
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
        </div>
        <!-- /.container-fluid -->

        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

<?php
 include 'include/footer.php';
?>