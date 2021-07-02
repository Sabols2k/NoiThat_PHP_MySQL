<?php

 print_r($_SESSION['guest']) ?>
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
      <?php
        require_once "general/header.php";
      ?> 
      <!-- ========== PAGE TITLE ========== -->
      <div class="page-title gradient-overlay op6" style="background: url(<?php echo URL ."mvc/Assets/images/breadcrumb.jpg"?>); background-repeat: no-repeat;
      background-size: cover;">
        <div class="container">
          <div class="inner">
            <h1>Booking Form</h1>
            <ol class="breadcrumb">
              <li>
                <a href="<?php echo URL?>">Home</a>
              </li>
              <li>Booking Form</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- ========== MAIN ========== -->
      <main>
        <div class="container">
          <div class="row">
            <!-- CONTENT -->
            <div class="col-lg-9 col-12">
              <div class="section-title">
                <h4>BOOK YOUR STAY</h4>
                <p class="section-subtitle">Book your Room Now</p>
              </div>
              <p class="mb30">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia deleniti fuga recusandae perferendis modi voluptate, ad ratione saepe voluptas nam provident reiciendis velit nulla repellendus illo consequuntur amet similique hic.</p>
              <!-- BOOKING FORM -->
              <form  method="POST" class="booking-form-advanced" >
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Your Name</label>
                      <input name="bookingname" type="text" class="form-control" value="<?php if(isset($_SESSION['guest']['name'])){ echo $_SESSION['guest']['name'];}?>"placeholder="Your Name">
                      <span style="color: red" >
                           <?php echo  $data['booking']['NameError'] ?>
                      </span>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Email Address</label>
                      <input class="form-control" name="booking-email" value="<?php if(isset($_SESSION['guest']['mail'])){ echo $_SESSION['guest']['mail'];}?>" type="email" placeholder="Your Email Address">
                      <span style="color: red" >
                           <?php echo  $data['booking']['MailError'] ?>
                      </span>      
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Phone Number</label>
                      <input name="booking-phone" type="text" class="form-control" value="<?php if(isset($_SESSION['guest']['phone'])){ echo $_SESSION['guest']['phone'];}?>" placeholder="Your Phone Number">
                      <span style="color: red" >
                           <?php echo  $data['booking']['PhonenumberError'] ?>
                      </span>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Country</label>
                      <select name="booking-country" class="form-control" data-header="Select Your Country" data-live-search="true" data-size="5">
                        <option value="Australia">Australia</option>
                        <option value="Brazil">Brazil</option>
                        <option value="Cambodia">Cambodia</option>
                        <option value="Canada">Canada</option>
                        <option value="China">China</option>
                        <option value="France">France</option>
                        <option value="Germany">Germany</option>
                        <option value="Hong Kong">Hong Kong</option>
                        <option value="India">India</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Iran">Iran</option>
                        <option value="Iraq">Iraq</option>
                        <option value="Italy">Italy</option>
                        <option value="Japan">Japan</option>
                        <option value="Korea North">Korea North</option>
                        <option value="Korea Sout">Korea South</option>
                        <option value="Laos">Laos</option>
                        <option value="Mexico">Mexico</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Phillipines">Philippines</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Russia">Russia</option>
                        <option value="Singapore">Singapore</option>
                        <option value="South Africa">South Africa</option>
                        <option value="Spain">Spain</option>
                        <option value="Taiwan">Taiwan</option>
                        <option value="Thailand">Thailand</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="United States of America">United States of America</option>
                        <option value="Vietnam">Vietnam</option>
                      </select>
                      <span style="color: red" >
                           <?php echo  $data['booking']['CountryError'] ?>
                      </span>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>CHECK-IN/OUT
                        <a href="#" title="Check-In / Check-Out" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Please select check-in and check-out date <br>*Check In from 11:00am">
                          <i class="fa fa-info-circle"></i>
                        </a>
                      </label>
                      <input type="text" class="datepicker form-control " name="booking-date" readonly="readonly">
                      <span style="color: red" >
                           <?php echo  $data['booking']['DateCheckInOutError'] ?>
                      </span>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Guests
                        <a href="#" title="Guests" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Please Select Adults / Children">
                          <i class="fa fa-info-circle"></i>
                        </a>
                      </label>
                      <div class="panel-dropdown">
                        <div class="form-control guestspicker">Guests
                          <span class="gueststotal"></span></div>
                        <div class="panel-dropdown-content">
                          <div class="guests-buttons">
                            <label>Adults
                              <a href="#" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="18+ years" data-original-title="Adults">
                                <i class="fa fa-info-circle"></i>
                              </a>
                            </label>
                            <div class="guests-button">
                              <div class="minus"></div>
                              <input type="text" name="booking-adults" class="booking-guests" value="<?php if(isset($_SESSION['guest']['numberAdult'])){ echo $_SESSION['guest']['numberAdult'];}else{ echo "0";}?>">
                               
                              <div class="plus"></div>
                            </div>
                          </div>
                          <div class="guests-buttons">
                            <label>Cildren
                              <a href="#" title="" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Under 18 years" data-original-title="Children">
                                <i class="fa fa-info-circle"></i>
                              </a>
                            </label>
                            <div class="guests-button">
                              <div class="minus"></div>
                              <input type="text" name="booking-children" class="booking-guests" value="<?php if(isset($_SESSION['guest']['numberAdult'])){ echo $_SESSION['guest']['numberChildren'];}else{ echo "0";}?>">
                              <div class="plus"></div>
                            </div>
                          </div>
                        </div>
                        <span style="color: red" >
                           <?php echo  $data['booking']['NumberPeopleError'] ?>
                      </span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Room Type</label>
                      <select name="booking-roomtype" class="form-control" title="Select Room Type"  data-header="Select Room Type">
                        <option value="Single Room" data-subtext="<span class='badge badge-info'>$89 / night</span>">Single Room</option>
                        <option value="Double Room" data-subtext="<span class='badge badge-info'>$129 / night</span>">Double Room</option>
                        
                      </select>
                      <span style="color: red" >
                           <?php echo  $data['booking']['RoomTypeError'] ?>
                      </span>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Your Comments</label>
                      <textarea class="form-control" name="booking-comments" placeholder="Your Comments..."></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <button type="submit" name="bookingform" class="btn mt50 float-right" >
                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                        BOOK A ROOM NOW
                    </button>
                  </div>
                </div>
              </form>
            </div>
            <!-- SIDEBAR -->
            <div class="col-lg-3 col-12">
              <div class="sidebar">
                <div class="contact-details">
                  <div class="section-title">
                    <h4>OFFERS</h4>
                    <p class="section-subtitle">CHECK OUT OUR SPECIAL OFFERS</p>
                  </div>
                  <div class="offer-item sm mb50">
                    <figure class="gradient-overlay-hover link-icon">
                      <a href="#">
                        <img src="<?php echo URL ."mvc/Assets/images/offers/offer1.jpg"?>" class="img-fluid" alt="Image">
                      </a>
                    </figure>
                    <div class="ribbon">
                      <span>HOT OFFER</span></div>
                    <div class="offer-price uppercase">
                      5 nights for $1,875
                    </div>
                    <h3 class="offer-title">
                      <a href="#">All-Inclusive Honeymoon Package</a>
                    </h3>
                  </div>
                  <!-- ITEM -->
                  <div class="offer-item sm mb50">
                    <figure class="gradient-overlay-hover link">
                      <a href="#">
                        <img src="<?php echo URL ."mvc/Assets/images/offers/offer2.jpg"?>" class="img-fluid" alt="Image">
                      </a>
                    </figure>
                    <div class="ribbon">
                      <span>HOT OFFER</span></div>
                    <div class="offer-price">
                      8 nights for $2,000
                    </div>
                    <h3 class="offer-title">
                      <a href="#">All-Inclusive Family Package</a>
                    </h3>
                  </div>
                  <!-- ITEM -->
                  <div class="offer-item sm mb50">
                    <figure class="gradient-overlay-hover link">
                      <a href="#">
                        <img src="<?php echo URL ."mvc/Assets/images/offers/offer3.jpg"?>" class="img-fluid" alt="Image">
                      </a>
                    </figure>
                    <div class="ribbon">
                      <span>HOT OFFER</span></div>
                    <div class="offer-price">
                      3 nights for $268
                    </div>
                    <h3 class="offer-title">
                      <a href="#">Fly, Stay and Save Over 30%</a>
                    </h3>
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
    <!-- ========== NOTIFICATION ========== -->
    <div id="booking-notification" class="notification fixed"></div>
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

