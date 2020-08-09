<?php 
  include 'include/header.php';
  $sn::checkSession();

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
                <p>Projects</p>
                <ul>
                  <li>Moricika</li>

                  <li>AlpoSholpo</li>
                  <li>e-Library System</li>
                  <li>Work Confirmation(IoT)</li>
                  <li>Aqu_Fish_feeder</li>
                  <li>e-Toolsbd</li>
                  <li>Dream Travler</li>
                  <li>Digital Security System</li>

                  <li>e-Shop</li>
                  <li>Tuition Assistance</li>
                  <li>Little School</li>
                </ul>
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