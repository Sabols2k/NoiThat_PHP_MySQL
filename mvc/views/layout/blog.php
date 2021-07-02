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
      <?php $page = 'blog'; include 'general/header.php';?>
      <!-- ========== PAGE TITLE ========== -->
      <div class="page-title gradient-overlay op6" style="background: url(<?php echo URL ."mvc/Assets/images/breadcrumb.jpg"?>"); background-repeat: no-repeat;
      background-size: cover;">
        <div class="container">
          <div class="inner">
            <h1>Blog</h1>
            <ol class="breadcrumb">
              <li>
                <a href="<?php echo URL?>">Home</a>
              </li>
              <li>Blog</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- ========== MAIN ========== -->
      <main>
        <div class="container">
          <!-- POSTS -->
          <div class="blog-posts">
            <article class="post">
              <div class="row">
                <div class="col-md-4">
                  <div class="post-thumbnail">
                    <figure class="gradient-overlay-hover link-icon">
                      <a href="<?php echo URL_Layout."blogpost"?>">
                        <img src="<?php echo URL ."mvc/Assets/images/blog/blog-post1.jpg"?>" class="img-fluid" alt="Image">
                      </a>
                    </figure>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="post-details">
                    <h2 class="post-title">
                      <a href="<?php echo URL_Layout."blogpost"?>">10 Tips for Holiday Travel</a>
                    </h2>
                    <div class="post-meta">
                      <span class="author">
                        <a href="#"><img src="<?php echo URL ."mvc/Assets/images/users/admin.jpg"?>" width="16" alt="Image">JANE Doe</a>
                      </span>
                      <span class="date">
                        <a href="#">
                          <i class="fa fa-clock-o"></i>August 13, 2017</a>
                      </span>
                      <span class="comments">
                        <a href="#">
                          <i class="fa fa-commenting-o"></i>1 Comment</a>
                      </span>
                      <span class="category">
                        <i class="fa fa-folder-open-o"></i>IN
                        <a href="#">News</a>,
                        <a href="#">Events</a>
                      </span>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet reiciendis ducimus deserunt non dolorum, distinctio repellendus eaque, officiis dicta! Sit numquam qui tenetur tempore officia minus, a dignissimos ...</p>
                  </div>
                </div>
              </div>
            </article>
            <!-- POST -->
            <article class="post">
              <div class="row">
                <div class="col-md-4">
                  <div class="post-thumbnail">
                    <figure class="gradient-overlay-hover link-icon">
                      <a href="<?php echo URL_Layout."blogpost"?>">
                        <img src="<?php echo URL ."mvc/Assets/images/blog/blog-post2.jpg"?>" class="img-fluid" alt="Image">
                      </a>
                    </figure>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="post-details">
                    <h2 class="post-title">
                      <a href="<?php echo URL_Layout."blogpost"?>">Are you ready to enjoy your holidays</a>
                    </h2>
                    <div class="post-meta">
                      <span class="author">
                        <a href="#"><img src="<?php echo URL ."mvc/Assets/images/users/admin.jpg"?>" width="16" alt="Image">JANE Doe</a>
                      </spamd
                      <span class="date">
                        <a href="#">
                          <i class="fa fa-clock-o"></i>August 16, 2017</a>
                      </span>
                      <span class="comments">
                        <a href="#">
                          <i class="fa fa-commenting-o"></i>5 Comments</a>
                      </span>
                      <span class="category">
                        <i class="fa fa-folder-open-o"></i>IN
                        <a href="#">News</a>,
                        <a href="#">Events</a>
                      </span>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam impedit nihil est modi amet, sapiente sed hic quaerat suscipit sunt labore, ea quas ut cumque, cum nam accusantium molestiae ipsum ...</p>
                  </div>
                </div>
              </div>
            </article>
            <!-- POST -->
            <article class="post">
              <div class="row">
                <div class="col-md-4">
                  <div class="post-thumbnail">
                    <figure class="gradient-overlay-hover link-icon">
                      <a href="<?php echo URL_Layout."blogpost"?>">
                        <img src="<?php echo URL ."mvc/Assets/images/blog/blog-post3.jpg"?>" class="img-fluid" alt="Image">
                      </a>
                    </figure>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="post-details">
                    <h2 class="post-title">
                      <a href="<?php echo URL_Layout."blogpost"?>">Honeymoon in Hotel Himara</a>
                    </h2>
                    <div class="post-meta">
                      <span class="author">
                        <a href="#"><img src="<?php echo URL ."mvc/Assets/images/users/admin.jpg"?>" width="16" alt="Image">JANE Doe</a>
                      </span>
                      <span class="date">
                        <a href="#">
                          <i class="fa fa-clock-o"></i>January 03, 2018</a>
                      </span>
                      <span class="comments">
                        <a href="#">
                          <i class="fa fa-commenting-o"></i>3 Comments</a>
                      </span>
                      <span class="category">
                        <i class="fa fa-folder-open-o"></i>IN
                        <a href="#">News</a>,
                        <a href="#">Events</a>
                      </span>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci assumenda eius amet obcaecati hic soluta nisi fugiat minima, molestias nam consequatur rem cupiditate, consequuntur laborum harum enim, ratione vitae doloribus ...</p>
                  </div>
                </div>
              </div>
            </article>
            <!-- POST -->
            <article class="post">
              <div class="row">
                <div class="col-md-4">
                  <div class="post-thumbnail">
                    <figure class="gradient-overlay-hover link-icon">
                      <a href="<?php echo URL_Layout."blogpost"?>">
                        <img src="<?php echo URL ."mvc/Assets/images/blog/blog-post4.jpg"?>" class="img-fluid" alt="Image">
                      </a>
                    </figure>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="post-details">
                    <h2 class="post-title">
                      <a href="<?php echo URL_Layout."blogpost"?>">Travel Gift Ideas for Every Type of Traveler</a>
                    </h2>
                    <div class="post-meta">
                      <span class="author">
                        <a href="#"><img src="<?php echo URL ."mvc/Assets/images/users/admin.jpg"?>" width="16" alt="Image">JANE Doe</a>
                      </span>
                      <span class="date">
                        <a href="#">
                          <i class="fa fa-clock-o"></i>February 03, 2018</a>
                      </span>
                      <span class="comments">
                        <a href="#">
                          <i class="fa fa-commenting-o"></i>2 Comments</a>
                      </span>
                      <span class="category">
                        <i class="fa fa-folder-open-o"></i>IN
                        <a href="#">News</a>,
                        <a href="#">Events</a>
                      </span>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet reiciendis ducimus deserunt non dolorum, distinctio repellendus eaque, officiis dicta! Sit numquam qui tenetur tempore officia minus, a dignissimos ...</p>
                  </div>
                </div>
              </div>
            </article>
            <!-- POST -->
            <article class="post">
              <div class="row">
                <div class="col-md-4">
                  <div class="post-thumbnail">
                    <figure class="gradient-overlay-hover link-icon">
                      <a href="<?php echo URL_Layout."blogpost"?>">
                        <img src="<?php echo URL ."mvc/Assets/images/blog/blog-post5.jpg"?>" class="img-fluid" alt="Image">
                      </a>
                    </figure>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="post-details">
                    <h2 class="post-title">
                      <a href="<?php echo URL_Layout."blogpost"?>">Breakfast with coffee and orange juice</a>
                    </h2>
                    <div class="post-meta">
                      <span class="author">
                        <a href="#"><img src="<?php echo URL ."mvc/Assets/images/users/admin.jpg"?>" width="16" alt="Image">JANE Doe</a>
                      </span>
                      <span class="date">
                        <a href="#">
                          <i class="fa fa-clock-o"></i>February 23, 2018</a>
                      </span>
                      <span class="comments">
                        <a href="#">
                          <i class="fa fa-commenting-o"></i>7 Comments</a>
                      </span>
                      <span class="category">
                        <i class="fa fa-folder-open-o"></i>IN
                        <a href="#">News</a>,
                        <a href="#">Events</a>
                      </span>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet reiciendis ducimus deserunt non dolorum, distinctio repellendus eaque, officiis dicta! Sit numquam qui tenetur tempore officia minus, a dignissimos ...</p>
                  </div>
                </div>
              </div>
            </article>
            <!-- POST -->
            <article class="post">
              <div class="row">
                <div class="col-md-4">
                  <div class="post-thumbnail">
                    <figure class="gradient-overlay-hover link-icon">
                      <a href="<?php echo URL_Layout."blogpost"?>">
                        <img src="<?php echo URL ."mvc/Assets/images/blog/blog-post6.jpg"?>" class="img-fluid" alt="Image">
                      </a>
                    </figure>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="post-details">
                    <h2 class="post-title">
                      <a href="<?php echo URL_Layout."blogpost"?>">Running On Sand</a>
                    </h2>
                    <div class="post-meta">
                      <span class="author">
                        <a href="#"><img src="<?php echo URL ."mvc/Assets/images/users/admin.jpg"?>" width="16" alt="Image">JANE Doe</a>
                      </span>
                      <span class="date">
                        <a href="#">
                          <i class="fa fa-clock-o"></i>March 04, 2018</a>
                      </span>
                      <span class="comments">
                        <a href="#">
                          <i class="fa fa-commenting-o"></i>0 Comments</a>
                      </span>
                      <span class="category">
                        <i class="fa fa-folder-open-o"></i>IN
                        <a href="#">News</a>,
                        <a href="#">Events</a>
                      </span>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet reiciendis ducimus deserunt non dolorum, distinctio repellendus eaque, officiis dicta! Sit numquam qui tenetur tempore officia minus, a dignissimos ...</p>
                  </div>
                </div>
              </div>
            </article>
          </div>
          <!-- ========== PAGINATION ========== -->
          <nav class="pagination">
            <ul>
              <li class="prev-pagination">
                <a href="#">
                  &nbsp;<i class="fa fa-angle-left"></i>
                  Previous &nbsp;</a>
              </li>
              <li class="active">
                <a href="#">1</a>
              </li>
              <li>
                <a href="#">2</a>
              </li>
              <li>
                <a href="#">3</a>
              </li>
              <li>
                <a href="#">4</a>
              </li>
              <li>
                <a href="#">5</a>
              </li>
              <li>...</li>
              <li>
                <a href="#">18</a>
              </li>
              <li>
                <a href="#">19</a>
              </li>
              <li>
                <a href="#">20</a>
              </li>
              <li class="next_pagination">
                <a href="#">
                  &nbsp; Next
                  <i class="fa fa-angle-right"></i>
                  &nbsp;
                </a>
              </li>
            </ul>
          </nav>
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
