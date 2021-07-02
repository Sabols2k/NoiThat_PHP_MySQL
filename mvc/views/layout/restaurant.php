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
      <?php $page = 'service'; include 'general/header.php';?>
      <!-- ========== REVOLUTION SLIDER ========== -->
      <div id="rev-slider-restaurant" class="rev_slider gradient-slider" data-version="5.4.5">
        <ul>
          <!-- SLIDE -->
          <li data-transition="fade">
            <!-- MAIN IMAGE -->
            <img src="<?php echo URL ."mvc/Assets/images/restaurant/restaurant.jpg"?>" alt="Image" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina="data-no-retina">
            <!-- LAYER NR. 1 -->
            <div
              class="tp-caption"
              data-x="['center','center','center','center']"
              data-hoffset=""
              data-y="['middle','middle','middle','middle']"
              data-voffset=""
              data-responsive_offset="on"
              data-fontsize="['40','32','28','22']"
              data-lineheight="['40','32','28','22']"
              data-whitespace="nowrap"
              data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
              style="color: #fff; font-weight: 700; font-family: 'Raleway', sans-serif;">WELCOME TO QUIET LUXURY RESTAURANT
            </div>
          </li>
        </ul>
      </div>
      <!-- ========== MAIN ========== -->
      <main class="restaurant">
        <div class="container">
          <div class="entry">
            <p>
              This is one of those finds, when you are traveling, that will make for a most wonderful memory. We made reservations, because of all the great reviews on tripadvisor, for our last dinner in Venice and are so glad that we did. The atmosphere is cool, with high beamed ceilings and eclectic decor. The tables are close, but the wine crate stacks help to keep a little privacy. It is difficult to describe all the great flavors of everything we had, so I will post some pics to drool over. The service was almost perfect, up until the end when we think they forgot about us. The excellent tiramisu made up for that service glitch, though. This is a must place to dine when in Venice. Watching the waiters flame the crepes and cut the prosciutto, on some unique slicer in the middle of the dining room, added to this great experience. I hope to return to Quite Luxury soon, and will definitely dine at restaurant again!
            </p>
            <h4 class="text-uppercase mt40 mb20" style="color: #B6ADAD;">MENU</h4>
            <div class="row">
              <!-- ITEM -->
              <div class="col-md-6 col-sm-6">
                <div class="restaurant-menu-item mb30">
                  <div class="row">
                    <div class="col-lg-4 col-md-6">
                      <figure>
                        <img src="<?php echo URL ."mvc/Assets/images/restaurant/restaurant1.jpg"?>" class="img-fluid " alt="Image">
                      </figure>
                    </div>
                    <div class="col-lg-8 col-md-6">
                      <div class="info">
                        <div class="title">
                          <span class="name">Salat</span>
                          <span class="price">
                            <span class="amount">$16.99</span>
                          </span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, elit, sed diam nonummy nibh euismod tincidunt ut laoreet...
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ITEM -->
              <div class="col-md-6 col-sm-6">
                <div class="restaurant-menu-item mb30">
                  <div class="row">
                    <div class="col-lg-4 col-md-6">
                      <figure>
                        <img src="<?php echo URL ."mvc/Assets/images/restaurant/restaurant2.jpg"?>" class="img-fluid" alt="Image">
                      </figure>
                    </div>
                    <div class="col-lg-8 col-md-6">
                      <div class="info">
                        <div class="title">
                          <span class="name">Croquettes</span>
                          <span class="price">
                            <span class="amount">$9.99</span>
                          </span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, elit, sed diam nonummy nibh euismod tincidunt ut laoreet...
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ITEM -->
              <div class="col-md-6 col-sm-6">
                <div class="restaurant-menu-item mb30">
                  <div class="row">
                    <div class="col-lg-4 col-md-6">
                      <figure>
                        <img src="<?php echo URL ."mvc/Assets/images/restaurant/restaurant3.jpg"?>" class="img-fluid " alt="Image">
                      </figure>
                    </div>
                    <div class="col-lg-8 col-md-6">
                      <div class="info">
                        <div class="title">
                          <span class="name">Pizza</span>
                          <span class="price">
                            <span class="amount">$11.99</span>
                          </span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, elit, sed diam nonummy nibh euismod tincidunt ut laoreet...
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ITEM -->
              <div class="col-md-6 col-sm-6">
                <div class="restaurant-menu-item mb30">
                  <div class="row">
                    <div class="col-lg-4 col-md-6">
                      <figure>
                        <img src="<?php echo URL ."mvc/Assets/images/restaurant/restaurant4.jpg"?>" class="img-fluid " alt="Image">
                      </figure>
                    </div>
                    <div class="col-lg-8 col-md-6">
                      <div class="info">
                        <div class="title">
                          <span class="name">Spaghetti</span>
                          <span class="price">
                            <span class="amount">$6.99</span>
                          </span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, elit, sed diam nonummy nibh euismod tincidunt ut laoreet...
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ITEM -->
              <div class="col-md-6 col-sm-6">
                <div class="restaurant-menu-item mb30">
                  <div class="row">
                    <div class="col-lg-4 col-md-6">
                      <figure>
                        <img src="<?php echo URL ."mvc/Assets/images/restaurant/restaurant5.jpg"?>" class="img-fluid " alt="Image">
                      </figure>
                    </div>
                    <div class="col-lg-8 col-md-6">
                      <div class="info">
                        <div class="title">
                          <span class="name">Chicken</span>
                          <span class="price">
                            <span class="amount">$18.99</span>
                          </span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, elit, sed diam nonummy nibh euismod tincidunt ut laoreet...
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ITEM -->
              <div class="col-md-6 col-sm-6">
                <div class="restaurant-menu-item mb30">
                  <div class="row">
                    <div class="col-lg-4 col-md-6">
                      <figure>
                        <img src="<?php echo URL ."mvc/Assets/images/restaurant/restaurant6.jpg"?>" class="img-fluid " alt="Image">
                      </figure>
                    </div>
                    <div class="col-lg-8 col-md-6">
                      <div class="info">
                        <div class="title">
                          <span class="name">Meat</span>
                          <span class="price">
                            <span class="amount">$16.99</span>
                          </span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, elit, sed diam nonummy nibh euismod tincidunt ut laoreet...
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quia itaque accusantium voluptatibus esse animi tenetur adipisci! Iure cumque aliquam tempore quam, asperiores obcaecati architecto earum vitae a commodi ratione velit nesciunt
              animi at dolore illo fugit magnam labore totam eveniet aut sapiente sequi nam doloremque impedit. Corrupti at, maxime, facere quibusdam consequatur aperiam sapiente eveniet ducimus veniam fugit recusandae commodi id placeat! Delectus ullam, sed ea
              laborum tempore velit vitae, quae suscipit mollitia enim nostrum cupiditate temporibus molestias repellat dignissimos eveniet quam dicta. Illo maiores aspernatur, temporibus! Accusantium fuga omnis sapiente non. At nostrum, tenetur similique adipisci
              voluptatem mollitia, cum neque autem labore sapiente dolore accusantium et excepturi odit iusto corporis, facere inventore obcaecati incidunt, est quam. Maiores aliquid cupiditate tenetur aut fugit! Quis deleniti nesciunt at officiis! Iusto
              recusandae numquam ratione excepturi perspiciatis cumque nisi, explicabo dolorum alias ipsum voluptates non, possimus! Voluptatem adipisci dolor quos tenetur placeat?</p>
            <div class="row image-gallery">
              <!-- ITEM -->
              <div class="col-md-3">
                <figure class="gradient-overlay-hover image-icon">
                  <a href="<?php echo URL ."mvc/Assets/images/restaurant/restaurant7.jpg"?>">
                    <img src="<?php echo URL ."mvc/Assets/images/restaurant/restaurant7.jpg"?>" class="img-fluid" alt="Image">
                  </a>
                </figure>
              </div>
              <!-- ITEM -->
              <div class="col-md-3">
                <figure class="gradient-overlay-hover image-icon">
                  <a href="<?php echo URL ."mvc/Assets/images/restaurant/restaurant8.jpg"?>">
                    <img src="<?php echo URL ."mvc/Assets/images/restaurant/restaurant8.jpg"?>" class="img-fluid" alt="Image">
                  </a>
                </figure>
              </div>
              <!-- ITEM -->
              <div class="col-md-3">
                <figure class="gradient-overlay-hover image-icon">
                  <a href="<?php echo URL ."mvc/Assets/images/restaurant/restaurant9.jpg"?>">
                    <img src="<?php echo URL ."mvc/Assets/images/restaurant/restaurant9.jpg"?>" class="img-fluid" alt="Image">
                  </a>
                </figure>
              </div>
              <!-- ITEM -->
              <div class="col-md-3">
                <figure class="gradient-overlay-hover image-icon">
                  <a href="<?php echo URL ."mvc/Assets/images/restaurant/restaurant10.jpg"?>">
                    <img src="<?php echo URL ."mvc/Assets/images/restaurant/restaurant10.jpg"?>" class="img-fluid" alt="Image">
                  </a>
                </figure>
              </div>
              <!-- ITEM -->
              <div class="col-md-3">
                <figure class="gradient-overlay-hover image-icon">
                  <a href="<?php echo URL ."mvc/Assets/images/restaurant/restaurant11.jpg"?>">
                    <img src="<?php echo URL ."mvc/Assets/images/restaurant/restaurant11.jpg"?>" class="img-fluid" alt="Image">
                  </a>
                </figure>
              </div>
              <!-- ITEM -->
              <div class="col-md-3">
                <figure class="gradient-overlay-hover image-icon">
                  <a href="<?php echo URL ."mvc/Assets/images/restaurant/restaurant12.jpg"?>">
                    <img src="<?php echo URL ."mvc/Assets/images/restaurant/restaurant12.jpg"?>" class="img-fluid" alt="Image">
                  </a>
                </figure>
              </div>
              <!-- ITEM -->
              <div class="col-md-3">
                <figure class="gradient-overlay-hover image-icon">
                  <a href="<?php echo URL ."mvc/Assets/images/restaurant/restaurant13.jpg"?>">
                    <img src="<?php echo URL ."mvc/Assets/images/restaurant/restaurant13.jpg"?>" class="img-fluid" alt="Image">
                  </a>
                </figure>
              </div>
              <!-- ITEM -->
              <div class="col-md-3">
                <figure class="gradient-overlay-hover image-icon">
                  <a href="<?php echo URL ."mvc/Assets/images/restaurant/restaurant14.jpg"?>">
                    <img src="<?php echo URL ."mvc/Assets/images/restaurant/restaurant14.jpg"?>" class="img-fluid" alt="Image">
                  </a>
                </figure>
              </div>
            </div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum quis autem natus dicta, possimus necessitatibus cum, et doloribus facilis fugit molestias! Delectus quo doloribus pariatur dolor sint, ad officiis totam similique quaerat nesciunt quod
              fugit libero voluptates deserunt laboriosam hic quia? Ex iusto maiores ipsum ab quis provident, molestiae veritatis, consequuntur nostrum aliquid quos. Eligendi enim fugiat fuga aperiam odio accusamus, architecto et, sequi ullam facere, quidem fugit
              ut. Praesentium vel quos recusandae perferendis, dolore voluptatibus nesciunt provident quod ab laborum quisquam alias quaerat optio. Temporibus, saepe, atque, ea inventore excepturi explicabo tenetur similique, rerum tempora doloremque at nemo
              alias.
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
