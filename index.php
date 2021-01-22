<?php 
  include 'include/header.php';

?>
<!-- /.navbar -->

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
      <div class="col-md-4">
      <div class="card">
        <div class="card-body">
       BUY & SELL
       <a href="buysell.php" class="stretched-link"></a>
        </div>
        </div><!-- /.card -->
      </div><!-- /.col-->
      <div class="col-md-4">
      <div class="card">
        <div class="card-body">
        JOB CIRCULAR
        <a href="circular.php" class="stretched-link"></a>
        </div>
        </div><!-- /.card -->
      </div><!-- /.col-->
      <div class="col-md-4">
      <div class="card">
        <div class="card-body">
        Tutor
        <a href="tutor.php" class="stretched-link"></a>
        </div>
        </div><!-- /.card -->
      </div><!-- /.col-->
      </div><!-- /.row -->
      <div class="row mt-3">
      <div class="col-md-4">
      <div class="card">
        <div class="card-body">
        <h3 style="text-align:center;margin:2px;border-bottom:2px solid cadetblue;">BUY&SELL Category</h3>
          <div class="row mt-1 d-flex justify-content-center" >
          <?php

            $cQuery = "SELECT * FROM category WHERE ctype = 'buysell' ";
            $qResult = $db->select($cQuery);
            if($qResult){
              while($result = $qResult->fetch_assoc()){
                ?>
            <div class="card m-1" style="width:65px;">
                        <img src="Admin/pages/forms/image/<?php echo $result['cimage']; ?>" style="width:65px;">
                        <a class="stretched-link" href="catbs.php?cat='<?php echo $result['cname'];?>' "></a>
                      </div> 
                <?php
              }
            }

?>

          </div>
        </div>
        </div><!-- /.card -->
      </div><!-- /.col-->
      <div class="col-md-4">
      <div class="card">
        <div class="card-body">
        <h3 style="text-align:center;margin:2px;border-bottom:2px solid cadetblue;">CIRCULAR Category</h3>
          <div class="row mt-1 " >
          <div class="temp">
            <ul>
                <a href="#"><li>Govt.</li></a>
                <a href="#"><li>Private</li></a>
                <a href="#"><li>NGU</li></a>
            </ul>

          </div>
          <?php

              $cQuery = "SELECT * FROM category WHERE ctype = 'circular' ";
              $qResult = $db->select($cQuery);
              if($qResult){
                while($result = $qResult->fetch_assoc()){
    ?>
<div class="card m-1" style="width:65px;">
            
<img src="Admin/pages/forms/image/<?php echo $result['cimage']; ?>" style="width:65px;">
                        <a class="stretched-link" href="catbs.php?cat='<?php echo $result['cname'];?>' "></a>
            
          </div> 
    <?php
  }
}

?>

          </div>
        </div>
        </div><!-- /.card -->
      </div><!-- /.col-->
      <div class="col-md-4">
      <div class="card">
        <div class="card-body">
      <!--  <h3 style="text-align:center;margin:2px;border-bottom:2px solid cadetblue;">LOST&FOUND LOCATION</h3>
          -->
          <h3 style="text-align:center;margin:2px;border-bottom:2px solid cadetblue;">Education</h3>
          Upcomming...
          <br>

        <ul>
        <li>Offline Tutor</li>
        <li>Online Tutor</li>
        <li>Perticular Course Support</li>
        <li>Assignment Support</li>
        <li>Project Support</li>


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