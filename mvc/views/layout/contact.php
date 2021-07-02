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
      <?php $page = 'contact'; include 'general/header.php';?>
      <!-- ========== PAGE TITLE ========== -->
      <div class="page-title gradient-overlay op6" style="background: url(<?php echo URL ."mvc/Assets/images/breadcrumb.jpg"?>); background-repeat: no-repeat;
      background-size: cover;">
        <div class="container">
          <div class="inner">
            <h1>CONTACT</h1>
            <ol class="breadcrumb">
              <li>
                <a href="<?php echo URL?>">Home</a>
              </li>
              <li>Contact</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- ========== MAIN ========== -->
      <main class="contact-page">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <div class="section-title">
                <h4>CONTACT US</h4>
                <p class="section-subtitle">Let’s Talk</p>
              </div>
              <p>You can still contact us right here - right now. Use this contact form to send an e-mail.</p>
              <!-- CONTACT FORM -->
              <form id="contact-form" class="contact-form">
                <div class="form-group">
                  <input class="form-control" name="name" placeholder="Name" type="text">
                </div>
                <div class="form-group">
                  <input class="form-control" name="email" placeholder="Email" type="email">
                </div>
                <div class="form-group">
                  <input class="form-control" name="phone" placeholder="Phone" type="text">
                </div>
                <div class="form-group">
                  <input class="form-control" name="subject" placeholder="Subject" type="text">
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" placeholder="Message"></textarea>
                </div>
                <div class="form-group">
                  <button class="btn mt30">SEND YOUR MESSAGE</button>
                </div>
              </form>
            </div>
            <div class="col-md-4">
              <div class="sidebar">
                <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d7836.199829878692!2d106.8108584!3d10.8800048!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1607076950712!5m2!1svi!2s" width="350" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                <div class="contact-details mt75">
                  <div class="contact-info">
                    <ul>
                      <li>
                        <a href="#">
                          <i class="fa fa-map-marker"></i>Lorem ipsum dolor, 25, Quite Luxury</a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-envelope"></i>hotelquiteluxury@gmail.com</a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-phone"></i>+1 888 123 4567</a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-fax"></i>+1 888 123 4567</a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-globe"></i>www.hotelquiteluxury.com</a>
                      </li>
                    </ul>
                  </div>
                  <div class="social-media mt50">
                    <a class="facebook" data-original-title="Facebook" data-toggle="tooltip" href="#">
                      <i class="fa fa-facebook"></i>
                    </a>
                    <a class="twitter" data-original-title="Twitter" data-toggle="tooltip" href="#">
                      <i class="fa fa-twitter"></i>
                    </a>
                    <a class="googleplus" data-original-title="Google Plus" data-toggle="tooltip" href="#">
                      <i class="fa fa-google-plus"></i>
                    </a>
                    <a class="pinterest" data-original-title="Pinterest" data-toggle="tooltip" href="#">
                      <i class="fa fa-pinterest"></i>
                    </a>
                    <a class="linkedin" data-original-title="Linkedin" data-toggle="tooltip" href="#">
                      <i class="fa fa-linkedin"></i>
                    </a>
                    <a class="youtube" data-original-title="Youtube" data-toggle="tooltip" href="#">
                      <i class="fa fa-youtube"></i>
                    </a>
                    <a class="tripadvisor" data-original-title="Tripadvisor" data-toggle="tooltip" href="#">
                      <i class="fa fa-tripadvisor"></i>
                    </a>
                  </div>
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
