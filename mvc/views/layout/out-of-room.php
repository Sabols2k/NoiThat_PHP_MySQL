<!doctype html>
<html lang="en">
<head>
    <?php
        require_once "general/meta.php";
        require_once "general/css.php";
    ?>
</head>
  <body>
    <!-- ========== MOBILE MENU ========== -->
    <nav id="mobile-menu"></nav>
    <!-- ========== WRAPPER ========== -->
    <div class="wrapper">
      <!-- ========== TOP MENU ========== -->
      <?php
        require_once "general/topbar.php";
      ?> 
      <!-- ========== HEADER ========== -->
      <?php $page = 'aboutus'; include 'general/header.php';?>
      <!-- ========== MAIN ========== -->
      <main>
        <div class="container">
          <div class="row">
            <div class="col-md-5">
              <div>
                <img src="<?php echo URL ."mvc/Assets/images/out-of-room.jpg"?>" width="100%">
              </div>
            </div>
            <div class="col-md-7">
              <div>
                <h1 class="text-uppercase" style="color: #B6ADAD;">
                  Out of Rooms!</h1>
                <p class="mt20">We apologize for this inconvenience. Please come back later. Thank you</p>
                <div class="mt40">
                  <a href="<?php echo URL."Home"?>" class="btn btn-sm">Home Page</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
      <!-- ========== FOOTER ========== -->
      <?php
        require_once "general/footer.php";
      ?> 
    </div>
    <div class="notification"></div>
    <!-- ========== BACK TO TOP ========== -->
    <div class="back-to-top">
      <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>
    <!-- ========== JAVASCRIPT ========== -->
    <?php 
        require_once('general/js.php');
    ?>
    </body>
</html>
