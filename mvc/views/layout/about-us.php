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
      <!-- ========== PAGE TITLE ========== -->
      <div class="page-title gradient-overlay op6" style="background: url(<?php echo URL ."mvc/Assets/images/breadcrumb.jpg"?>); background-repeat: no-repeat;
      background-size: cover;">
        <div class="container">
          <div class="inner">
            <h1>ABOUT QUIET LUXURY HOTEL</h1>
            <ol class="breadcrumb">
              <li>
                <a href="<?php echo URL?>">Home</a>
              </li>
              <li>About us</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- ========== MAIN ========== -->
      <main class="contact-page">
        <div class="container">
          <div class="entry">
            <?php
              require_once "general/about.php";
            ?> 
            <h4 class="text-uppercase mt40 mb20" style="color: #B6ADAD;">Features</h4>
            <div class="row">
              <!-- ITEM -->
              <div class="col-md-3 col-6">
                <div class="countup-box box-shadow-005">
                  <i class="flaticon-hotel"></i>
                  <span class="number">50</span>
                  <div class="text">Rooms</div>
                </div>
              </div>
              <!-- ITEM -->
              <div class="col-md-3 col-6">
                <div class="countup-box box-shadow-005">
                  <i class="flaticon-tray"></i>
                  <span class="number">2</span>
                  <div class="text">Restaurants</div>
                </div>
              </div>
              <!-- ITEM -->
              <div class="col-md-3 col-6">
                <div class="countup-box box-shadow-005">
                  <i class="flaticon-bell-boy"></i>
                  <span class="number">38</span>
                  <div class="text">Staffs</div>
                </div>
              </div>
              <!-- ITEM -->
              <div class="col-md-3 col-6">
                <div class="countup-box box-shadow-005">
                  <i class="flaticon-sports"></i>
                  <span class="number">2</span>
                  <div class="text">Swim. Pools</div>
                </div>
              </div>
              <!-- ITEM -->
              <div class="col-md-3 col-6">
                <div class="countup-box box-shadow-005">
                  <i class="flaticon-screen"></i>
                  <span class="number">10</span>
                  <div class="text">Conf. Rooms</div>
                </div>
              </div>
              <!-- ITEM -->
              <div class="col-md-3 col-6">
                <div class="countup-box box-shadow-005">
                  <i class="flaticon-slider"></i>
                  <span class="number">2</span>
                  <div class="text">Playgrounds</div>
                </div>
              </div>
              <!-- ITEM -->
              <div class="col-md-3 col-6">
                <div class="countup-box box-shadow-005">
                  <i class="flaticon-slider"></i>
                  <span class="number">2</span>
                  <div class="text">Playgrounds</div>
                </div>
              </div>
              <!-- ITEM -->
              <div class="col-md-3 col-6">
                <div class="countup-box box-shadow-005">
                  <i class="flaticon-slider"></i>
                  <span class="number">2</span>
                  <div class="text">Playgrounds</div>
                </div>
              </div>
            </div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. In optio magni aspernatur quia atque, laboriosam obcaecati esse dolor ut debitis sapiente ipsam, incidunt maxime fugiat nulla qui. Quos voluptates aperiam, laboriosam eos atque eius optio?
              Dolores unde ut amet et rerum minus aliquam doloremque obcaecati assumenda, quod autem optio dignissimos qui, cum minima, voluptas nostrum mollitia, perferendis similique asperiores fuga earum accusantium? Alias nesciunt recusandae autem quae quo
              consectetur laboriosam reprehenderit numquam. Nesciunt quae, eius aut rerum impedit, suscipit ducimus! Nam, aperiam officia ipsum illum ut fugit perspiciatis. Quis cumque ea nulla quaerat, debitis adipisci provident maxime odio odit atque.
            </p>
            <h4 class="text-uppercase mt40 mb20" style="color: #B6ADAD;">Services</h4>
            <div class="image-gallery">
              <div class="row">
                <!-- ITEM -->
                <div class="col-md-3">
                  <figure class="gradient-overlay-hover image-icon">
                    <a href="<?php echo URL ."mvc/Assets/images/services/restaurant.jpg"?>"><img src="<?php echo URL ."mvc/Assets/images/services/restaurant.jpg"?>" alt="Image" class="img-fluid"></a>
                  </figure>
                </div>
                <!-- ITEM -->
                <div class="col-md-3">
                  <figure class="gradient-overlay-hover image-icon">
                    <a href="<?php echo URL ."mvc/Assets/images/services/gym.jpg"?>"><img src="<?php echo URL ."mvc/Assets/images/services/gym.jpg"?>" alt="Image" class="img-fluid"></a>
                  </figure>
                </div>
                <!-- ITEM -->
                <div class="col-md-3">
                  <figure class="gradient-overlay-hover image-icon">
                    <a href="<?php echo URL ."mvc/Assets/images/services/spa.jpg"?>"><img src="<?php echo URL ."mvc/Assets/images/services/spa.jpg"?>" alt="Image" class="img-fluid"></a>
                  </figure>
                </div>
                <!-- ITEM -->
                <div class="col-md-3">
                  <figure class="gradient-overlay-hover image-icon">
                    <a href="<?php echo URL ."mvc/Assets/images/services/bar.jpg"?>"><img src="<?php echo URL ."mvc/Assets/images/services/bar.jpg"?>" alt="Image" class="img-fluid"></a>
                  </figure>
                </div>
              </div>
            </div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, pariatur, excepturi modi rem debitis officiis vero quaerat vitae eum maiores perferendis doloribus blanditiis aliquid id praesentium provident animi dolore est libero et. Consequuntur
              voluptate omnis magnam velit deleniti saepe alias, nesciunt, odit labore soluta nihil dignissimos debitis tenetur doloremque tempore eaque quae suscipit aspernatur molestias voluptas vitae. Quisquam ipsum odit veritatis, laboriosam pariatur similique
              quidem et, omnis maxime neque illo nobis explicabo adipisci. Cum excepturi a, itaque fugiat, iste sed explicabo necessitatibus est odit labore porro suscipit voluptates incidunt mollitia ullam dolores, ab. Quidem laboriosam aperiam veniam iusto
              perspiciatis impedit cum deserunt officiis, consectetur error architecto vero amet quos suscipit nam voluptates ea at. Optio at asperiores culpa, officiis commodi qui eveniet, debitis deleniti atque, saepe quis quas blanditiis. Itaque placeat ab non
              qui ut commodi sed vitae, dicta mollitia beatae enim nobis architecto consectetur? Dolorum delectus voluptate est exercitationem.
            </p>
            <h4 class="text-uppercase mt40 mb20" style="color: #B6ADAD;">Awards</h4>
            <div class="row mb40">
              <!-- ITEM -->
              <div class="col-md-4">
                <div class="award-item">
                  <figure>
                    <img src="<?php echo URL ."mvc/Assets/images/award1.svg"?>" class="img-fluid" alt="Image">
                    <figcaption>
                      #1 Global Choice
                    </figcaption>
                  </figure>
                </div>
              </div>
              <!-- ITEM -->
              <div class="col-md-4">
                <div class="award-item">
                  <figure>
                    <img src="<?php echo URL ."mvc/Assets/images/award2.svg"?>" class="img-fluid" alt="Image">
                    <figcaption>
                      #2 Top Quality
                    </figcaption>
                  </figure>
                </div>
              </div>
              <!-- ITEM -->
              <div class="col-md-4">
                <div class="award-item">
                  <figure>
                    <img src="<?php echo URL ."mvc/Assets/images/award3.svg"?>" class="img-fluid" alt="Image">
                    <figcaption>
                      #1 Genuine Quality
                    </figcaption>
                  </figure>
                </div>
              </div>
            </div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta cumque nobis fugit voluptatibus maiores, amet nemo distinctio cupiditate totam porro animi pariatur ipsa nihil debitis, officia perferendis at natus dolorem similique. Consequatur id
              eius ipsa ut debitis adipisci praesentium architecto facilis, dignissimos quibusdam iste tenetur beatae ab accusamus, omnis ullam cum assumenda distinctio accusantium perferendis nostrum fugiat sapiente blanditiis mollitia! Incidunt ea aliquid aut,
              hic esse, dolor veniam, magnam quam dolorem ipsa aspernatur fugit maiores ipsum omnis impedit consectetur. Delectus officia ullam numquam voluptatum necessitatibus quos alias nihil doloribus labore. Illo vero quam placeat, natus numquam officiis
              facere, libero quae.
            </p>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem fugiat earum doloribus eum atque nesciunt ut consequatur distinctio, ipsum ex, laudantium voluptatum modi alias! Est explicabo id, quo distinctio. Repudiandae, consequuntur veniam
              provident. Voluptates quidem doloremque repudiandae accusantium molestiae animi optio quisquam vitae veniam hic eos fuga, sit id beatae, necessitatibus eligendi maxime eaque ea nostrum. Debitis, suscipit, totam iste perspiciatis, nostrum similique
              incidunt enim culpa fugiat esse quae. Alias iste porro veniam, eius, sit velit dignissimos asperiores ipsam magni aut deserunt ullam quod aspernatur assumenda a illo eum cum expedita, maiores vero consequatur obcaecati tempora impedit architecto
              sequi! Nobis tempore, fuga id expedita possimus, accusantium doloremque atque fugit repellat laudantium quibusdam officiis quisquam praesentium facere? Voluptatibus commodi tempore quae modi sint reiciendis eum sapiente minus, accusantium quasi
              ratione aliquam blanditiis mollitia id rerum fuga sunt animi odio distinctio voluptatem maiores et dicta corporis! Esse atque harum voluptatem quo, error.
            </p>
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
