<header class="horizontal-header sticky-header" data-menutoggle="991">
        <div class="container">
          <!-- BRAND -->
          <div class="brand">
            <div class="logo">
              <a href="<?php echo URL_Layout?>">
                <h1>Quite Luxury.</h1>
              </a>
            </div>
          </div>
          <!-- MOBILE MENU BUTTON -->
          <div id="toggle-menu-button" class="toggle-menu-button">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
          </div>
          <!-- MAIN MENU -->
          <nav id="main-menu" class="main-menu">
            <ul class="menu">
              <li class="menu-item dropdown <?php if($page=='home'){echo 'active';}?>">
                <a href="<?php echo URL_Layout?>">HOME</a>
              </li>
              <li class="menu-item <?php if($page=='aboutus'){echo 'active';}?>">
                <a href="<?php echo URL_Layout."AboutUs"?>">ABOUT US</a>
              </li>
              <li class="menu-item <?php if($page=='roomlist'){echo 'active';}?>">
                <a href="<?php echo URL_Layout."RoomList"?>">ROOMS</a>
              </li>
              <li class="menu-item dropdown <?php if($page=='service'){echo 'active';}?>">
                <a href="#">SERVICES</a>
                <ul class="submenu">
                  <li class="menu-item">
                    <a href="<?php echo URL_Layout."Restaurant"?>">Our Restaurant</a>
                  </li>
                </ul>
              </li>
              <li class="menu-item dropdown <?php if($page=='blog'){echo 'active';}?>">
                <a href="<?php echo URL_Layout."Blog"?>">BLOG</a>
              </li>
              <li class="menu-item <?php if($page=='contact'){echo 'active';}?>">
                <a href="<?php echo URL_Layout."Contact"?>">CONTACT US</a>
              </li>
              <li class="menu-item menu-btn">
                <a href="<?php echo URL.'Booking'?>" class="btn">
                  <i class="fa fa-calendar"></i>
                  BOOK ONLINE</a>
              </li>
            </ul>
          </nav>
        </div>
      </header>