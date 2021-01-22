<?php 
  include 'include/header.php';
  $sn::checkSession();

   $userId1 = $sn::get('userId');
   $pId = $_GET['pid']; 

   $query = "SELECT * FROM user_post WHERE pId = $pId";
   $qResult = $db->select($query);
   if($qResult){
     $value = $qResult->fetch_assoc();
     $userId2 = $value['userid'];
   }
echo $userId2;


   if($_SERVER["REQUEST_METHOD"]=="POST"){
    $message = mysqli_real_escape_string($db->link, $_POST['message']);

    $mQuery = "INSERT INTO user_message(message, userId1, userId2, pId) VALUES ('$message', '$userId1','$userId2', '$pId')";
    $qResult = $db->insert($mQuery);

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
            
                <a
                  href="#"
                  class="list-group-item"
                  style="background: #187f7f; color: #fff; text-align: center;"
                  >Connections
                </a>
                <div style="max-height: 500px; overflow: auto;">
                <ul class="list-group">
                  <a href="category.php?com= " style="color: #187f7f;"
                    ><li class="list-group-item">
                      Mr bob
                      <span class="label label-primary pull-right">34</span>
                    </li></a
                  >
                  <a href="category.php?com= " style="color: #187f7f;"
                    ><li class="list-group-item">
                      Mr jhone
                      <span class="label label-primary pull-right">34</span>
                    </li></a
                  >
                  <a href="category.php?com= " style="color: #187f7f;"
                    ><li class="list-group-item">
                      Mrs Ivanka
                      <span class="label label-primary pull-right">34</span>
                    </li></a
                  >
                  <a href="category.php?com= " style="color: #187f7f;"
                    ><li class="list-group-item">
                      Mr bob
                      <span class="label label-primary pull-right">34</span>
                    </li></a
                  >
                  <a href="category.php?com= " style="color: #187f7f;"
                    ><li class="list-group-item">
                      Mr jhone
                      <span class="label label-primary pull-right">34</span>
                    </li></a
                  >
                  <a href="category.php?com= " style="color: #187f7f;"
                    ><li class="list-group-item">
                      Mrs Ivanka
                      <span class="label label-primary pull-right">34</span>
                    </li></a
                  >
                  <a href="category.php?com= " style="color: #187f7f;"
                    ><li class="list-group-item">
                      Mr bob
                      <span class="label label-primary pull-right">34</span>
                    </li></a
                  >
                  <a href="category.php?com= " style="color: #187f7f;"
                    ><li class="list-group-item">
                      Mr jhone
                      <span class="label label-primary pull-right">34</span>
                    </li></a
                  >
                  <a href="category.php?com= " style="color: #187f7f;"
                    ><li class="list-group-item">
                      Mrs Ivanka
                      <span class="label label-primary pull-right">34</span>
                    </li></a
                  >
                  <a href="category.php?com= " style="color: #187f7f;"
                    ><li class="list-group-item">
                      Mr bob
                      <span class="label label-primary pull-right">34</span>
                    </li></a
                  >
                  <a href="category.php?com= " style="color: #187f7f;"
                    ><li class="list-group-item">
                      Mr jhone
                      <span class="label label-primary pull-right">34</span>
                    </li></a
                  >
                  <a href="category.php?com= " style="color: #187f7f;"
                    ><li class="list-group-item">
                      Mrs Ivanka
                      <span class="label label-primary pull-right">34</span>
                    </li></a
                  >
                  <a href="category.php?com= " style="color: #187f7f;"
                    ><li class="list-group-item">
                      Mr bob
                      <span class="label label-primary pull-right">34</span>
                    </li></a
                  >
                </ul>
              </div>
              <!-- /.div -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <!-- DIRECT CHAT PRIMARY -->
              <div
                class="card card-prirary cardutline direct-chat direct-chat-primary"
                style="height: 550px;"
              >
                <div class="card-header">
                  <h3 class="card-title">Name of
                  <?php  echo $pId; ?></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                  <!-- Conversations are loaded here -->
                  <div class="direct-chat-messages" style="height: 450px;">

              
                    <!-- Message. Default to the left -->
                    <div class="direct-chat-msg">
                      <div class="direct-chat-infos clearfix">
                        <span class="direct-chat-name float-left"
                          >Ar Samir</span
                        >
                        <span class="direct-chat-timestamp float-right"
                          >23 Jan 2:00 pm</span
                        >
                      </div>
                      <?php
                $rtQuery = "SELECT * FROM user_message where userId = $userId AND pId = $pId ";
                $rQuery = $db->select($rtQuery);
                if($rQuery){
                  while($result = $rQuery->fetch_assoc()){
                    $message = $result['message'];
                ?>
                      <!-- /.direct-chat-infos -->
                      <img
                        class="direct-chat-img"
                        src="images/default.jpg"
                        alt="Message User Image"
                      />
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                      <?php echo $message; ?>
                      </div>
                      <!-- /.direct-chat-text -->
                      <?php
                  }
                }



?>
                    </div>
                    <!-- /.direct-chat-msg -->
      
                    <!-- Message to the right -->
                    <div class="direct-chat-msg right">
                      <div class="direct-chat-infos clearfix">
                        <span class="direct-chat-name float-right"
                          >Sakib</span
                        >
                        <span class="direct-chat-timestamp float-left"
                          >23 Jan 2:05 pm</span
                        >
                      </div>
                      <!-- /.direct-chat-infos -->
                      <?php
                $rtQuery = "SELECT * FROM user_reply where pId = $pId AND uId = $userId1";
                $rQuery = $db->select($rtQuery);
                if($rQuery){
                  while($result = $rQuery->fetch_assoc()){
                    $message = $result['message'];
                ?>
                      <img
                        class="direct-chat-img"
                        src="../dist/img/user3-128x128.jpg"
                        alt="Message User Image"
                      />
                      <!-- /.direct-chat-img -->
                      <div class="direct-chat-text">
                      <?php echo $message; ?>
                      </div>
                      <!-- /.direct-chat-text -->
                      <?php
                  }
                }



?>
                    </div>
                    <!-- /.direct-chat-msg -->
                    <!-- Message. Default to the left -->
                  </div>
                  <!--/.direct-chat-messages-->
                  <!-- Message to the right -->
                  

                  <!-- Contacts are loaded here -->
                  <div class="direct-chat-contacts">
                    <ul class="contacts-list">
                      <li>
                        <a href="#">
                          <img
                            class="contacts-list-img"
                            src="../dist/img/user1-128x128.jpg"
                            alt="User Avatar"
                          />

                          <div class="contacts-list-info">
                            <span class="contacts-list-name">
                              Count Dracula
                              <small class="contacts-list-date float-right"
                                >2/28/2015</small
                              >
                            </span>
                            <span class="contacts-list-msg"
                              >How have you been? I was...</span
                            >
                          </div>
                          <!-- /.contacts-list-info -->
                        </a>
                      </li>
                      <!-- End Contact Item -->
                    </ul>
                    <!-- /.contatcts-list -->
                  </div>
                  <!-- /.direct-chat-pane -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <form action="messenger.php?pid=<?php echo $pId; ?>" method="post">
                    <div class="input-group">
                      <input
                        type="text"
                        name="message"
                        placeholder="Type Message ..."
                        class="form-control"
                      />
                      <span class="input-group-append">
                        <button type="submit" class="btn btn-primary">
                          Send
                        </button>
                      </span>
                    </div>
                  </form>
                </div>
                <!-- /.card-footer-->
              </div>
              <!--/.direct-chat -->
            </div>
            <div class="col-md-3">
              <div class="card">
                <div class="card-body">
                  Hello world! welcome to my website!Here you can sell your used
                  product and also you can buy used product from here. Hello
                  world! welcome to my website!Here you can sell your used
                  product and also you can buy used product from here Hello
                  world! welcome to my website!Here you can sell your used
                  product and also you can buy used product from here Hello
                  world! welcome to my website!Here you can sell your used
                  product and also you can buy used product from here Hello
                  world! welcome to my website!Here you can sell your used
                  product and also you can buy used product from here
                </div>
              </div>
            </div>
          </div>

          <!-- /.col -->
        </div>
        <!-- /.container-fluid -->

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