
<?php 
  include 'include/header.php';

  if(!isset($_GET['id'])|| $_GET['id']==NULL){
    echo "<script>window.location = index.php;</script>";
  }else{
  $cId= preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['id']) ;

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
          <div class="col-md-8">
          <?php
               
                
                $query = "SELECT * FROM circular where cId= '$cId' ";
                $qResult = $db->select($query);
                if($qResult){
                  while($result = $qResult->fetch_assoc()){
                   ?>

          <div class="detailsHead" >
          <h3 style="text-align:center;"> <?php echo $result['title']; ?></h3>
          <p><?php echo $result['description']; ?></p>
          </div>
          <div class="d-flex justify-content-center">
          
         <img src="Admin/pages/forms/image/<?php echo $result['image']; ?>" style="height:250px; width:70%;margin:10px;">
         </div>
         <p> <?php echo $result['specification']; ?></p>

         <?php 
         $pdfFile = $result['pdf'];
         if($pdfFile){
           ?>
          <iframe src="Admin/pages/forms/files/<?php echo $pdfFile ?>"  width="100%" height="700px" >
    </iframe>
    <a href="files/bt.pdf" download="moricika.com">Download PDF</a><br>
           <?php
         }
         ?>

          
    <a href="http://www.facebook.com" target="blank">Apply Link </a>
    <?php
                  }
                }
                ?>
</div>
<div class="col-md-4">
          Hello!Ads. I don't know what I will do in the long run.Hello!Ads. I don't know what I will do in the long run.
          Hello!Ads. I don't know what I will do in the long run.Hello!Ads. I don't know what I will do in the long run.
          Hello!Ads. I don't know what I will do in the long run
</div>


</div>
<div class="mt-2" >
<h3> Related Circular</h3>

</div>
<div class="row mt-2">
<?php
               
                
               $query = "SELECT * FROM circular where cId != '$cId' LIMIT 12";
               $qResult = $db->select($query);
               if($qResult){
                 while($result = $qResult->fetch_assoc()){
                  ?>

<div class="col-md-3">
<a href="circularDetails.php?id='<?php echo $result['cId']; ?>'"><img src="Admin/pages/forms/image/<?php echo $result['image']; ?>" style="width:100%;height:150px;"/></a>
</div>


<?php
}
               }
               ?>
<div class="col-md-3">
One
</div>
<div class="col-md-3">
One
</div>
<div class="col-md-3">
One
</div>
<div class="col-md-3">
One
</div>
<div class="col-md-3">
One
</div>
<div class="col-md-3">
One
</div>
<div class="col-md-3">
One
</div>
<div class="col-md-3">
One
</div>
<div class="col-md-3">
One
</div>
<div class="col-md-3">
One
</div>
<div class="col-md-3">
One
</div>

</div>
    
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
   
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!--Footer -->
<?php 

include 'include/footer.php';
?>