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
      <?php $page = 'home'; include 'general/header.php';?>
      <!-- ========== REVOLUTION SLIDER ========== -->
      <?php
        require_once "general/slider.php";
      ?> 
      <!-- ========== ABOUT ========== -->
      <section class="about mt100">
        <?php
          require_once "general/about.php";
        ?> 
      </section>
      <!-- ========== ROOMS ========== -->
      <?php
        require_once "general/room.php";
      ?> 
      <!-- ========== SERVICES ========== -->
      <?php
        require_once "general/services.php";
      ?> 
      <!-- ========== GALLERY ========== -->
      <?php
        require_once "general/gallery.php";
      ?> 
      <!-- ========== RESTAURANT ========== -->
      <?php
        require_once "general/restaurant.php";
      ?> 
      <!-- ========== NEWS ==========-->
      <?php
        require_once "general/news.php";
      ?> 
      <!-- ========== VIDEO ========== -->
      <?php
        require_once "general/video.php";
      ?> 
      <!-- ========== EVENTS ========== -->
      <?php
        require_once "general/events.php";
      ?> 
      <!-- ========== CONTACT ========== -->
      <?php
        require_once "general/contact.php";
      ?> 
      <!-- ========== FOOTER ========== -->
      <?php
        require_once "general/footer.php";
      ?> 
    </div>
    <!-- ========== CONTACT NOTIFICATION ========== -->
    <div id="contact-notification" class="notification fixed"></div>
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
