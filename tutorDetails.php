
<?php 
  include 'include/header.php';

  if(!isset($_GET['id'])|| $_GET['id']==NULL){
    echo "<script>window.location = index.php;</script>";
  }else{
  $tid= preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['id']) ;

  }

?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="card card-solid mt-5">
      <div class="card-body">
        <div class="row">
          <div class="col-12 col-sm-6">
          
            <div id="demo" class="carousel slide" data-ride="carousel">
            <?php
               
                
                $query = "SELECT * FROM s_tutor where tid= '$tid' ";
                $qResult = $db->select($query);
                if($qResult){
                  while($result = $qResult->fetch_assoc()){
                   ?>


            <div class="col-12">
                <!-- The Image -->
                <div class="carousel-inner" style="max-height:500px;">
                  <div class="carousel-item active">
                    <img src="images/<?php echo $result['image']; ?>" style="max-width:100%;" alt="Image">
                  </div>
                
                </div>

                </div>


              </div>
          </div>
          <div class="col-12 col-sm-6" style="color:#444">
            <h3 class="my-3">
            <?php  echo $result['name']; ?>
            </h3>
          

            <hr/>
           
            <h4 class="mt-3">Current Institute :<?php  echo $result['institute']; ?></h4>
            <h4 class="mt-3">Major :<?php  echo $result['major']; ?></h4>
           
            <h4 class="mt-3"> Prefered Class: <?php  echo $result['standard']; ?> </h4>
            <h4 class="mt-3">Prefered Subject: <?php  echo $result['subject']; ?> </h4>
            <h4 class="mt-3">Prefered Location :<?php  echo $result['location']; ?> Or Near By</h4>
          

            <div class=" py-2 px-3 mt-4" style="background-color: cadetblue;">
              <h2 class="mb-0">
            
              </h2>
              <h4 class="mt-0">
                <small> </small>
              </h4>
            </div>

            <div class="mt-4">
             <!-- <a href="messenger.php?pid=<?php //echo $result['tid'];   ?>" class="btn btn-primary btn-lg btn-flat">
                <i class="fas fa-envelope fa-lg mr-2"></i>
               Send A Message
              </a> -->

              <a href="tel:<?php echo $result['mobile'];   ?>">  <div class="btn btn-default btn-lg btn-flat">
              <i class="fas fa-phone fa-lg mr-2"></i>
                <?php echo $result['mobile'];   ?>
                
              </div></a>
            </div>

         <!--   <div class="mt-4 product-share">
              <a href="#" class="text-gray">
                <i class="fab fa-facebook-square fa-2x"></i>
              </a>
              <a href="#" class="text-gray">
                <i class="fab fa-twitter-square fa-2x"></i>
              </a>
              <a href="#" class="text-gray">
                <i class="fas fa-envelope-square fa-2x"></i>
              </a>
              <a href="#" class="text-gray">
                <i class="fas fa-rss-square fa-2x"></i>
              </a>
            </div> -->
          </div>
        </div>
        <div class="row mt-4">
          <nav class="w-100">
            <div class="nav nav-tabs" id="product-tab" role="tablist">
              <a
                class="nav-item nav-link active"
                id="product-desc-tab"
                data-toggle="tab"
                href="#product-desc"
                role="tab"
                aria-controls="product-desc"
                aria-selected="true"
                >Description</a
              >
          
            </div>
          </nav>
          <div class="tab-content p-3" id="nav-tabContent">
            <div
              class="tab-pane fade show active"
              id="product-desc"
              role="tabpanel"
              aria-labelledby="product-desc-tab"
            >
            <?php  echo $result['description']; ?>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
    <?php
                  }
                }


?>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!--Footer -->
<?php 

include 'include/footer.php';
?>