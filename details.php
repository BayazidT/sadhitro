
<?php 
  include 'include/header.php';

  if(!isset($_GET['id'])|| $_GET['id']==NULL){
    echo "<script>window.location = index.php;</script>";
  }else{
  $pid= preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['id']) ;

  }

?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>E-commerce</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">E-commerce</li>
          </ol>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="card card-solid">
      <div class="card-body">
        <div class="row">
          <div class="col-12 col-sm-6">
          
            <div id="demo" class="carousel slide" data-ride="carousel">
            <?php
               
                
                $query = "SELECT * FROM user_post where pId= '$pid' ";
                $qResult = $db->select($query);
                if($qResult){
                  while($result = $qResult->fetch_assoc()){
                   ?>


            <div class="col-12">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                  <li data-target="#demo" data-slide-to="0" class="active"></li>
                  <li data-target="#demo" data-slide-to="1"></li>
                  <li data-target="#demo" data-slide-to="2"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner" style="max-height:400px;">
                  <div class="carousel-item active">
                    <img src="images/<?php echo $result['image']; ?>" style="max-width:450px;" alt="product">
                  </div>
                  <div class="carousel-item">
                    <img src="images/<?php echo $result['image']; ?>" style="max-width:450px;" alt="product">
                  </div>
                  <div class="carousel-item">
                    <img src="images/<?php echo $result['image']; ?>" style="max-width:450px;" alt="product">
                  </div>
                </div>

                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>

              </div>
           
            <div class="col-12 product-image-thumbs">
              <div class="product-image-thumb ">
                <img src="images/<?php echo $result['image']; ?>" alt="Product Image" />
              </div>
              <div class="product-image-thumb">
                <img src="images/<?php echo $result['image']; ?>" alt="Product Image" />
              </div>
              <div class="product-image-thumb">
                <img src="images/<?php echo $result['image']; ?>" alt="Product Image" />
              </div>
              <div class="product-image-thumb">
                <img src="images/<?php echo $result['image']; ?>" alt="Product Image" />
              </div>
              <div class="product-image-thumb">
                <img src="images/<?php echo $result['image']; ?>" alt="Product Image" />
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <h3 class="my-3">
            <?php  echo $result['title']; ?>
            </h3>
          

            <hr />
           
            
            <h4 class="mt-3"><?php  echo $result['category']; ?></h4>
            <h4 class="mt-3"><?php  echo $result['pcondition']; ?> </h4>
            <h4 class="mt-3">Uploaded Time: <?php  echo $result['time']; ?> </h4>
          

            <div class=" py-2 px-3 mt-4" style="background-color: cadetblue;">
              <h2 class="mb-0">
              Price : <?php  echo $result['price']; ?> ৳
              </h2>
              <h4 class="mt-0">
                <small> <?php  echo $result['nagotiation']; ?></small>
              </h4>
            </div>

            <div class="mt-4">
              <a href="messenger.php?pid=<?php echo $result['pId'];   ?>" class="btn btn-primary btn-lg btn-flat">
                <i class="fas fa-envelope fa-lg mr-2"></i>
               Send A Message
              </a>

              <div class="btn btn-default btn-lg btn-flat">
                <i class="fas fa-phone fa-lg mr-2"></i>
                +8801932493534
              </div>
            </div>

            <div class="mt-4 product-share">
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
            </div>
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
              <!--
              <a
                class="nav-item nav-link"
                id="product-comments-tab"
                data-toggle="tab"
                href="#product-comments"
                role="tab"
                aria-controls="product-comments"
                aria-selected="false"
                >Comments</a
              >
              <a
                class="nav-item nav-link"
                id="product-rating-tab"
                data-toggle="tab"
                href="#product-rating"
                role="tab"
                aria-controls="product-rating"
                aria-selected="false"
                >Rating</a
              >   -->
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
            <!--
            <div
              class="tab-pane fade"
              id="product-comments"
              role="tabpanel"
              aria-labelledby="product-comments-tab"
            >
              Vivamus rhoncus nisl sed venenatis luctus. Sed condimentum risus
              ut tortor feugiat laoreet. Suspendisse potenti. Donec et finibus
              sem, ut commodo lectus. Cras eget neque dignissim, placerat orci
              interdum, venenatis odio. Nulla turpis elit, consequat eu eros ac,
              consectetur fringilla urna. Duis gravida ex pulvinar mauris
              ornare, eget porttitor enim vulputate. Mauris hendrerit, massa nec
              aliquam cursus, ex elit euismod lorem, vehicula rhoncus nisl dui
              sit amet eros. Nulla turpis lorem, dignissim a sapien eget,
              ultrices venenatis dolor. Curabitur vel turpis at magna elementum
              hendrerit vel id dui. Curabitur a ex ullamcorper, ornare velit
              vel, tincidunt ipsum.
            </div>
            <div
              class="tab-pane fade"
              id="product-rating"
              role="tabpanel"
              aria-labelledby="product-rating-tab"
            >
              Cras ut ipsum ornare, aliquam ipsum non, posuere elit. In hac
              habitasse platea dictumst. Aenean elementum leo augue, id
              fermentum risus efficitur vel. Nulla iaculis malesuada
              scelerisque. Praesent vel ipsum felis. Ut molestie, purus aliquam
              placerat sollicitudin, mi ligula euismod neque, non bibendum nibh
              neque et erat. Etiam dignissim aliquam ligula, aliquet feugiat
              nibh rhoncus ut. Aliquam efficitur lacinia lacinia. Morbi ac
              molestie lectus, vitae hendrerit nisl. Nullam metus odio,
              malesuada in vehicula at, consectetur nec justo. Quisque suscipit
              odio velit, at accumsan urna vestibulum a. Proin dictum, urna ut
              varius consectetur, sapien justo porta lectus, at mollis nisi orci
              et nulla. Donec pellentesque tortor vel nisl commodo ullamcorper.
              Donec varius massa at semper posuere. Integer finibus orci vitae
              vehicula placerat.
            </div>  -->
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