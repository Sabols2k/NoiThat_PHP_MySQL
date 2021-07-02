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
      <!-- BLOG POST COVER -->
      <div class="blog-post-cover gradient-overlay op5" data-src="<?php echo URL ."mvc/Assets/images/blog/post/blog-full.jpg"?>" data-parallax="scroll" data-speed="0.3" data-mirror-selector=".wrapper" data-z-index="0">
        <div class="container inner">
          <h2 class="blog-post-title">10 TIPS FOR HOLIDAY TRAVEL</h2>
          <div class="blog-post-info">
            <img src="<?php echo URL ."mvc/Assets/images/blog/users/user1.jpg"?>" class="avatar avatar-234 photo" height="234" width="234">
            <p>by
              <span>
                <a href="#">Deigo</a></span></p>
            <p>on
              <time datetime="2017-09-27T06:52:20+00:00">September 27, 2017</time>
            </p>
          </div>
        </div>
      </div>
      <!-- ========== MAIN ========== -->
      <main class="blog-post">
        <div class="container">
          <!-- ENTRY -->
          <article class="entry">
            <div class="details">
              <p class="dropcap">Horem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis
                nisl ut aliquip ex ea
                <u>commodo consequat.</u>
                Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit...</p>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                <a href="#">aliquam</a>
                erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore
                eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit...</p>
              <blockquote>
                <p class="quote-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit
                  <a href="#" data-toggle="tooltip" data-placement="top" data-trigger="hover" data-original-title="Marius Doe">Mauris
                  </a>non laoreet dui, Morbi lacus massa, euismod ut turpis molestie, tristique sodales est There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
              </blockquote>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit
                dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit...</p>
              <figure>
                <img src="<?php echo URL ."mvc/Assets/images/blog/post/blog-post1.jpg"?>" class="img-fluid">
                <figcaption>Image Caption
                  <span class="source">
                    <a href="#">
                      <i class="fa fa-link" aria-hidden="true"></i>
                      pexeles.com</a></span></figcaption>
              </figure>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit
                augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum
                claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram,
                anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
              <div class="row image-gallery">
                <div class="col-md-3">
                  <figure>
                    <div class="gradient-overlay-hover image-icon sm">
                      <a href="images/blog/post/blog-post2.jpg">
                        <img src="<?php echo URL ."mvc/Assets/images/blog/post/blog-post2.jpg"?>" class="img-fluid">
                      </a>
                    </div>
                    <figcaption>Image Caption</figcaption>
                  </figure>
                </div>
                <div class="col-md-3">
                  <figure>
                    <div class="gradient-overlay-hover image-icon sm">
                      <a href="images/blog/post/blog-post3.jpg">
                        <img src="<?php echo URL ."mvc/Assets/images/blog/post/blog-post3.jpg"?>" class="img-fluid">
                      </a>
                    </div>
                    <figcaption>Image Caption</figcaption>
                  </figure>
                </div>
                <div class="col-md-3">
                  <figure>
                    <div class="gradient-overlay-hover image-icon sm">
                      <a href="images/blog/post/blog-post4.jpg">
                        <img src="<?php echo URL ."mvc/Assets/images/blog/post/blog-post4.jpg"?>" class="img-fluid">
                      </a>
                    </div>
                    <figcaption>Image Caption</figcaption>
                  </figure>
                </div>
                <div class="col-md-3">
                  <figure>
                    <div class="gradient-overlay-hover image-icon sm">
                      <a href="images/blog/post/blog-post5.jpg">
                        <img src="<?php echo URL ."mvc/Assets/images/blog/post/blog-post5.jpg"?>" class="img-fluid">
                      </a>
                    </div>
                    <figcaption>Image Caption</figcaption>
                  </figure>
                </div>
              </div>
              <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt
                lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis
                per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
              <div class="meta-post">
                <div class="tags">
                  <span>
                    <i class="fa fa-tags"></i>
                    TAGS</span>
                  <a href="#" rel="tag">Quite Luxury</a>
                  <a href="#" rel="tag">Holiday</a>
                  <a href="#" rel="tag">Summer</a>
                </div>
                <div class="share">
                  <span>
                    <i class="fa fa-share-alt"></i>
                    SHARE</span>
                  <div class="social-media">
                    <a class="facebook" href="#" data-toggle="tooltip" data-original-title="Facebook">
                      <i class="fa fa-facebook"></i>
                    </a>
                    <a class="twitter" href="#" data-toggle="tooltip" data-original-title="Twitter">
                      <i class="fa fa-twitter"></i>
                    </a>
                    <a class="googleplus" href="#" data-toggle="tooltip" data-original-title="Google Plus">
                      <i class="fa fa-google-plus"></i>
                    </a>
                    <a class="pinterest" href="#" data-toggle="tooltip" data-original-title="Pinterest">
                      <i class="fa fa-pinterest"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </article>
        </div>
      </main>
      <!-- END BLOG LIST -->
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
