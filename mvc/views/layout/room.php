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
      <div class="page-title gradient-overlay op5" style="background: url(<?php echo URL ."mvc/Assets/images/breadcrumb.jpg"?>); background-repeat: no-repeat;
      background-size: cover;">
        <div class="container">
          <div class="inner">
            <h1>SINGLE ROOM</h1>
            <div class="room-details-price">
              $89 / NIGHT
            </div>
            <ol class="breadcrumb">
              <li>
                <a href="<?php echo URL?>">Home</a>
              </li>
              <li>
                <a href="<?php echo URL_Layout."roomlist"?>">Rooms</a>
              </li>
              <li>Single Room</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- ========== MAIN ========== -->
      <main class="room">
        <div class="container">
          <div class="row">
            <div class="col-lg-9 col-12">
              <!-- ROOM SLIDER -->
              <div class="room-slider">
                <div id="room-main-image" class="owl-carousel image-gallery">
                  <!-- ITEM -->
                  <div class="item">
                    <figure class="gradient-overlay-hover image-icon">
                      <a href="<?php echo URL ."mvc/Assets/images/rooms/single/single1.jpg"?>">
                        <img class="img-fluid" src="<?php echo URL ."mvc/Assets/images/rooms/single/single1.jpg"?>" alt="Image">
                      </a>
                    </figure>
                  </div>
                  <!-- ITEM -->
                  <div class="item">
                    <figure class="gradient-overlay-hover image-icon">
                      <a href="<?php echo URL ."mvc/Assets/images/rooms/single/single2.jpg"?>">
                        <img class="img-fluid" src="<?php echo URL ."mvc/Assets/images/rooms/single/single2.jpg"?>" alt="Image">
                      </a>
                    </figure>
                  </div>
                  <!-- ITEM -->
                  <div class="item">
                    <figure class="gradient-overlay-hover image-icon">
                      <a href="<?php echo URL ."mvc/Assets/images/rooms/single/single3.jpg"?>">
                        <img class="img-fluid" src="<?php echo URL ."mvc/Assets/images/rooms/single/single3.jpg"?>" alt="Image">
                      </a>
                    </figure>
                  </div>
                  <!-- ITEM -->
                  <div class="item">
                    <figure class="gradient-overlay-hover image-icon">
                      <a href="<?php echo URL ."mvc/Assets/images/rooms/single/single4.jpg"?>">
                        <img class="img-fluid" src="<?php echo URL ."mvc/Assets/images/rooms/single/single4.jpg"?>" alt="Image">
                      </a>
                    </figure>
                  </div>
                  <!-- ITEM -->
                  <div class="item">
                    <figure class="gradient-overlay-hover image-icon">
                      <a href="<?php echo URL ."mvc/Assets/images/rooms/single/single5.jpg"?>">
                        <img class="img-fluid" src="<?php echo URL ."mvc/Assets/images/rooms/single/single5.jpg"?>" alt="Image">
                      </a>
                    </figure>
                  </div>
                  <!-- ITEM -->
                  <div class="item">
                    <figure class="gradient-overlay-hover image-icon">
                      <a href="<?php echo URL ."mvc/Assets/images/rooms/single/single6jpg"?>">
                        <img class="img-fluid" src="<?php echo URL ."mvc/Assets/images/rooms/single/single6.jpg"?>" alt="Image">
                      </a>
                    </figure>
                  </div>
                  <!-- ITEM -->
                  <div class="item">
                    <figure class="gradient-overlay-hover image-icon">
                      <a href="<?php echo URL ."mvc/Assets/images/rooms/single/single7.jpg"?>">
                        <img class="img-fluid" src="<?php echo URL ."mvc/Assets/images/rooms/single/single7.jpg"?>" alt="Image">
                      </a>
                    </figure>
                  </div>
                  <!-- ITEM -->
                  <div class="item">
                    <figure class="gradient-overlay-hover image-icon">
                      <a href="<?php echo URL ."mvc/Assets/images/rooms/single/single8.jpg"?>">
                        <img class="img-fluid" src="<?php echo URL ."mvc/Assets/images/rooms/single/single8.jpg"?>" alt="Image">
                      </a>
                    </figure>
                  </div>
                </div>
                <div id="room-thumbs" class="room-thumbs owl-carousel">
                  <!-- ITEM -->
                  <div class="item"><img class="img-fluid" src="<?php echo URL ."mvc/Assets/images/rooms/single/single1.jpg"?>" alt="Image"></div>
                  <!-- ITEM -->
                  <div class="item"><img class="img-fluid" src="<?php echo URL ."mvc/Assets/images/rooms/single/single2.jpg"?>" alt="Image"></div>
                  <!-- ITEM -->
                  <div class="item"><img class="img-fluid" src="<?php echo URL ."mvc/Assets/images/rooms/single/single3.jpg"?>" alt="Image"></div>
                  <!-- ITEM -->
                  <div class="item"><img class="img-fluid" src="<?php echo URL ."mvc/Assets/images/rooms/single/single4.jpg"?>" alt="Image"></div>
                  <!-- ITEM -->
                  <div class="item"><img class="img-fluid" src="<?php echo URL ."mvc/Assets/images/rooms/single/single5.jpg"?>" alt="Image"></div>
                  <!-- ITEM -->
                  <div class="item"><img class="img-fluid" src="<?php echo URL ."mvc/Assets/images/rooms/single/single6.jpg"?>" alt="Image"></div>
                  <!-- ITEM -->
                  <div class="item"><img class="img-fluid" src="<?php echo URL ."mvc/Assets/images/rooms/single/single7.jpg"?>" alt="Image"></div>
                  <!-- ITEM -->
                  <div class="item"><img class="img-fluid" src="<?php echo URL ."mvc/Assets/images/rooms/single/single8.jpg"?>" alt="Image"></div>
                </div>
              </div>
              <p class="dropcap">You can relax and feel at home as all our single rooms are fitted with a spacious semi double bed. Some are also fitted with a desk
                <u>commodo consequat.</u>
                Television, electric hot water pot, refrigerator, dryer, table lamp, humidifier, bath, toilet, broadband connection (free), air conditioning....</p>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam ut, asperiores voluptatibus quo rem iusto laborum, laudantium corrupti ea esse officia placeat beatae! Ducimus quasi nisi odio architecto repudiandae illo sunt nulla quia obcaecati
                blanditiis? Doloremque commodi deserunt corporis, maiores, quam ipsam voluptates beatae necessitatibus, sapiente impedit sunt cupiditate odio, officiis quo debitis distinctio! Tenetur quibusdam modi adipisci vel ullam cum ratione itaque laborum
                molestias nesciunt. Qui itaque saepe obcaecati quo tempora natus laudantium quidem, inventore totam. Nobis incidunt est doloribus qui vero expedita a fugit necessitatibus minus sapiente illo, commodi laudantium minima quo deserunt odio repellat
                placeat quas, perferendis, voluptates! Omnis corporis nostrum optio reprehenderit aspernatur consequuntur, nisi rerum. Architecto provident alias voluptatem aliquam tenetur eius eos. Iure, earum. Asperiores consectetur, dolorem animi pariatur. Magni
                necessitatibus non hic odit nesciunt voluptatum distinctio provident, repellendus quae dolores, assumenda delectus quisquam fuga velit natus cumque. Odio sint deserunt ex dolorem, culpa, sit accusantium nesciunt. Dicta, nulla aperiam expedita nihil
                at laborum! Minima ducimus, nobis quasi minus totam ab quo, quia labore nihil praesentium doloremque recusandae! Voluptas delectus distinctio architecto aliquid eligendi nostrum odio a culpa modi cumque mollitia id, consequuntur, labore, ut minima
                illum. Repellendus cumque veniam quae odit enim.
              </p>
              <div class="section-title sm">
                <h4>ROOM SERVICES</h4>
                <p class="section-subtitle">Single Room Includes</p>
              </div>
              <div class="room-services-list">
                <div class="row">
                  <div class="col-sm-4">
                    <ul class="list-unstyled">
                      <li>
                        <i class="fa fa-check"></i>Double Bed</li>
                      <li>
                        <i class="fa fa-check"></i>80 Sq mt</li>
                      <li>
                        <i class="fa fa-check"></i>3 Persons</li>
                      <li>
                        <i class="fa fa-check"></i>Free Internet</li>
                    </ul>
                  </div>
                  <div class="col-sm-4">
                    <ul class="list-unstyled">
                      <li>
                        <i class="fa fa-check"></i>Free Wi-Fi</li>
                      <li>
                        <i class="fa fa-check"></i>Breakfast Include</li>
                      <li>
                        <i class="fa fa-check"></i>Private Balcony</li>
                      <li class="no">
                        <i class="fa fa-times"></i>Free Newspaper</li>
                    </ul>
                  </div>
                  <div class="col-sm-4">
                    <ul class="list-unstyled">
                      <li class="no">
                        <i class="fa fa-times"></i>Flat Screen Tv</li>
                      <li>
                        <i class="fa fa-check"></i>Full Ac</li>
                      <li class="no">
                        <i class="fa fa-times"></i>Beach View</li>
                      <li>
                        <i class="fa fa-check"></i>Room Service</li>
                    </ul>
                  </div>
                </div>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                ex ea
                <u>commodo consequat.</u>
                Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit...</p>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                ex ea
                <u>commodo consequat.</u>
                Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit...</p>
              <div class="similar-rooms">
                <div class="section-title sm">
                  <h4>SIMILAR ROOMS</h4>
                  <p class="section-subtitle">Leave your review</p>
                </div>
                <div class="row">
                  <!-- ITEM -->
                  <div class="col-lg-4">
                    <div class="room-grid-item">
                      <figure class="gradient-overlay-hover link-icon">
                        <a href="room.html">
                          <img src="<?php echo URL ."mvc/Assets/images/rooms/single/single1.jpg"?>" class="img-fluid" alt="Image">
                        </a>
                        <div class="room-services">
                          <i class="fa fa-coffee" aria-hidden="true" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i>
                          <i class="fa fa-wifi" aria-hidden="true" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Free WiFi" data-original-title="WiFi"></i>
                          <i class="fa fa-television" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Plasma TV with cable channels" data-original-title="TV"></i>
                        </div>
                        <div class="room-price">€89 / night</div>
                      </figure>
                      <div class="room-info">
                        <h2 class="room-title">
                          <a href="room.html">Single Room</a>
                        </h2>
                        <p>Enjoy our single room</p>
                      </div>
                    </div>
                  </div>
                  <!-- ITEM -->
                  <div class="col-lg-4">
                    <div class="room-grid-item">
                      <figure class="gradient-overlay-hover link-icon">
                        <a href="room.html">
                          <img src="<?php echo URL ."mvc/Assets/images/rooms/double/double.jpg"?>" class="img-fluid" alt="Image">
                        </a>
                        <div class="room-services">
                          <i class="fa fa-coffee" aria-hidden="true" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i>
                          <i class="fa fa-wifi" aria-hidden="true" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Free WiFi" data-original-title="WiFi"></i>
                          <i class="fa fa-television" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Plasma TV with cable channels" data-original-title="TV"></i>
                        </div>
                        <div class="room-price">€129 / night</div>
                      </figure>
                      <div class="room-info">
                        <h2 class="room-title">
                          <a href="room.html">Double Room</a>
                        </h2>
                        <p>Enjoy our double room</p>
                      </div>
                    </div>
                  </div>
                  <!-- ITEM -->
                  <div class="col-lg-4">
                    <div class="room-grid-item">
                      <figure class="gradient-overlay-hover link-icon">
                        <a href="room.html">
                          <img src="<?php echo URL ."mvc/Assets/images/rooms/deluxe/deluxe.jpg"?>" class="img-fluid" alt="Image">
                        </a>
                        <div class="room-services">
                          <i class="fa fa-coffee" aria-hidden="true" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Breakfast Included" data-original-title="Breakfast"></i>
                          <i class="fa fa-bath" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="2 Bathrooms" data-original-title="Bathroom"></i>
                          <i class="fa fa-wifi" aria-hidden="true" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Free WiFi" data-original-title="WiFi"></i>
                          <i class="fa fa-television" data-toggle="popover" data-placement="right" data-trigger="hover" data-content="Plasma TV with cable channels" data-original-title="TV"></i>
                        </div>
                        <div class="room-price">€189 / night</div>
                      </figure>
                      <div class="room-info">
                        <h2 class="room-title">
                          <a href="room.html">Deluxe Room</a>
                        </h2>
                        <p>Enjoy our delux room</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- SIDEBAR -->
            <div class="col-lg-3 col-12">
              <div class="sidebar">
                <!-- WIDGET -->
                <aside class="widget noborder">
                  <div class="vertical-booking-form">
                    <div id="booking-notification" class="notification"></div>
                    <h3 class="form-title">BOOK YOUR ROOM</h3>
                    <div class="inner">
                      <form id="booking-form">
                        <!-- EMAIL -->
                        <div class="form-group">
                          <input class="form-control" name="booking-email" type="email" placeholder="Your Email Address">
                        </div>
                        <!-- ROOM TYPE -->
                        <div class="form-group">
                          <select class="form-control" name="booking-roomtype" title="Select Room Type" data-header="Room Type" disabled="disabled">
                            <option value="Single" selected="selected">Single Room</option>
                            <option value="Double">Double Room</option>
                            <option value="Deluxe">Deluxe Room</option>
                          </select>
                        </div>
                        <!-- DATE -->
                        <div class="form-group">
                          <div class="form_date">
                            <input type="text" class="datepicker form-control" name="booking-checkin" placeholder="Slect Arrival & Departure Date" readonly="readonly">
                          </div>
                        </div>
                        <!-- GUESTS -->
                        <div class="form-group">
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
                                  <input type="text" name="booking-adults" class="booking-guests" value="0">
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
                                  <input type="text" name="booking-children" class="booking-guests" value="0">
                                  <div class="plus"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- BOOKING BUTTON -->
                        <a href="<?php echo URL.'Booking'?>" class="btn btn-dark btn-fw mt20 mb20">BOOK A ROOM</a>
                      </form>
                    </div>
                  </div>
                </aside>
                <!-- WIDGET -->
                <aside class="widget widget-help">
                  <h4 class="widget-title">NEED HELP?</h4>
                  <div class="phone">
                    <a href="tel:18475555555">
                      076 922 0162
                    </a>
                  </div>
                  <div class="email">
                    <a href="mailto:contact@hotelquiteluxury.com">quiteluxury@gmail.com</a>
                  </div>
                </aside>
                <!-- WIDGET -->
                <aside class="widget">
                  <h4 class="widget-title">Latest Posts</h4>
                  <div class="latest-posts">
                    <!-- ITEM -->
                    <div class="latest-post-item">
                      <div class="row">
                        <div class="col-5">
                          <figure class="gradient-overlay-hover link-icon sm">
                            <a href="blog-post.html">
                              <img src="<?php echo URL ."mvc/Assets/images/blog/blog-post1.jpg"?>" class="img-fluid" alt="Image">
                            </a>
                          </figure>
                        </div>
                        <div class="col-7">
                          <div class="post-details">
                            <h6 class="post-title">
                              <a href="blog-post.html">10 Tips for Holiday Travel</a>
                            </h6>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- ITEM -->
                    <div class="latest-post-item">
                      <div class="row">
                        <div class="col-5">
                          <figure class="gradient-overlay-hover link-icon sm">
                            <a href="blog-post.html">
                              <img src="<?php echo URL ."mvc/Assets/images/blog/blog-post2.jpg"?>" class="img-fluid" alt="Image">
                            </a>
                          </figure>
                        </div>
                        <div class="col-7">
                          <div class="post-details">
                            <h6 class="post-title">
                              <a href="blog-post.html">Are you ready to enjoy your holidays</a>
                            </h6>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- ITEM -->
                    <div class="latest-post-item">
                      <div class="row">
                        <div class="col-5">
                          <figure class="gradient-overlay-hover link-icon sm">
                            <a href="blog-post.html">
                              <img src="<?php echo URL ."mvc/Assets/images/blog/blog-post3.jpg"?>" class="img-fluid" alt="Image">
                            </a>
                          </figure>
                        </div>
                        <div class="col-7">
                          <div class="post-details">
                            <h6 class="post-title">
                              <a href="blog-post.html">Honeymoon in Hotel Himara</a>
                            </h6>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- ITEM -->
                    <div class="latest-post-item">
                      <div class="row">
                        <div class="col-5">
                          <figure class="gradient-overlay-hover link-icon sm">
                            <a href="blog-post.html">
                              <img src="<?php echo URL ."mvc/Assets/images/blog/blog-post4.jpg"?>" class="img-fluid" alt="Image">
                            </a>
                          </figure>
                        </div>
                        <div class="col-7">
                          <div class="post-details">
                            <h6 class="post-title">
                              <a href="blog-post.html">Travel Gift Ideas for Every Type of Traveler</a>
                            </h6>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- ITEM -->
                    <div class="latest-post-item">
                      <div class="row">
                        <div class="col-5">
                          <figure class="gradient-overlay-hover link-icon sm">
                            <a href="blog-post.html">
                              <img src="<?php echo URL ."mvc/Assets/images/blog/blog-post5.jpg"?>" class="img-fluid" alt="Image">
                            </a>
                          </figure>
                        </div>
                        <div class="col-7">
                          <div class="post-details">
                            <h6 class="post-title">
                              <a href="blog-post.html">Breakfast with coffee and orange juic</a>
                            </h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </aside>
                <!-- WIDGET -->
                <aside class="widget noborder">
                  <img src="<?php echo URL ."mvc/Assets/images/banner.jpg"?>" class="img-fluid" alt="Image">
                </aside>
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
