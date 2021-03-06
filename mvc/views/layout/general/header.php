<!-- ========== HEADER ========== -->
<header class="header">
    <div class="evo-top-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 slogan">
                    <p>Siêu thị Nội thất & Trang trí Evo Nội Thất</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 evo-account">
                    <ul>
                        <?php
                        if (isset($_SESSION['user']['userid'])) {
                            $disabled = "display:none ";
                            $disabled1 = "display: inline-block";
                        } else {
                            $disabled1 = "display:none ";
                            $disabled = "display: inline-block";
                        }
                        ?>
                        <li style="<?php echo $disabled ?>" >
                            <a href="<?php echo URL_Layout . "login" ?>">
                                <i class="fas fa-sign-in-alt"></i>
                                Đăng nhập
                            </a>
                        </li>
                        
                        <li style="<?php echo $disabled ?>">
                            <a href="<?php echo URL_Layout . "register" ?>">
                                <i class="fas fa-user-plus"></i>
                                Đăng kí
                            </a>
                        </li>

                        <li style="<?php echo $disabled1 ?>; border-left: none">
                            <a href="<?php echo URL_Layout . "account" ?>">
                                <i class="fas fa-user"></i>   
                                Xin chào, <?php echo $_SESSION['user']['firstname']." ". $_SESSION['user']['lastname'] ?>
                            </a>
                        </li>
                        
                        <li style="<?php echo $disabled1 ?>">
                            <a href="<?php echo URL_Layout . "logout" ?>">
                            <i class="fas fa-sign-in-alt"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container evo-header-logo-search-cart">
        <div class="row">
            <!-- BRAND -->
            <div class="col-md-3 evo-header-mobile">
                <!-- MOBILE MENU BUTTON -->
                <label for="menu-mobile-input" class="toggle-menu-button">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </label>
                <a href="<?php echo URL . "home" ?>" class="logo">
                    <img src="<?php echo URL_Layout . "mvc/Assets/img/logo.png" ?>" alt="evo_logo">
                </a>
                <div class="evo-cart mini-cart d-none">
                    <a href="<?php echo URL_Layout . "cart" ?>">
                        <i class="fas fa-cart-plus"></i>
                        <span class="count_item mobile">0</span>
                    </a>
                </div>
            </div>
            <div class="col-md-5 evo-header-search">
                <form id="search-form" action="<?php echo URL . "search" ?>">
                    <div class="input-group">
                        <input type="text" name="query" class="form-control search-auto" placeholder="Bạn muốn tìm gì?">
                        <span class="input-group-btn">
                            <button class="_btn" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
            </div>
            <div class="col-md-4 evo-header-hotline-cart">
                <div class="hotline">
                    <a href="tel:0900123456">
                        <span class="evo-title">Liên hệ Hotline</span>
                        <span class="evo-hotline">0900 123 456</span>
                    </a>
                </div>
                <div class="hotline">
                    <a href="">
                        <span class="evo-title">Tìm địa chỉ</span>
                        <span class="evo-hotline">Cửa hàng</span>
                    </a>
                </div>
                <div class="evo-cart mini-cart">
                    <a href="<?php echo URL_Layout . "cart" ?>">
                        <i class="fas fa-cart-plus"></i>
                        <span class="count_item desktop">0</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="evo-main-nav">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-3">
                    <!--- MENU LEFT -->
                    <div id="intro-page" class="main-menu">
                        <span>
                            <i class="fas fa-bars"></i>
                            Tất cả sản phẩm
                            <i class="fas fa-angle-down"></i>
                        </span>
                        <div class="nav-cate">
                            <ul class="menu">
                                <li class="menu-item-count">
                                    <a href="/">
                                        <i class="fas fa-angle-right"></i>
                                        Nội thất gỗ
                                    </a>
                                </li>
                                <li class="menu-item-count">
                                    <a href="/">
                                        <i class="fas fa-angle-right"></i>
                                        Sofa, Ghế thư giãn & Nệm
                                    </a>
                                </li>
                                <li class="menu-item-count">
                                    <a href="/">
                                        <i class="fas fa-angle-right"></i>
                                        Đồ trang trí
                                    </a>
                                </li>
                                <li class="menu-item-count">
                                    <a href="/">
                                        <i class="fas fa-angle-right"></i>
                                        Đồ dùng vải
                                    </a>
                                </li>
                                <li class="menu-item-count">
                                    <a href="/">
                                        <i class="fas fa-angle-right"></i>
                                        Vật dụng bàn ăn
                                    </a>
                                </li>
                                <li class="menu-item-count">
                                    <a href="/">
                                        <i class="fas fa-angle-right"></i>
                                        Đồ dùng văn phòng
                                    </a>
                                </li>
                                <li class="menu-item-count">
                                    <a href="/">
                                        <i class="fas fa-angle-right"></i>
                                        Đèn
                                    </a>
                                </li>
                                <li class="menu-item-count">
                                    <a href="/">
                                        <i class="fas fa-angle-right"></i>
                                        <strong>Xem thêm ...</strong>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-9">
                    <!-- NAV PC -->
                    <nav>
                        <ul class="nav">
                            <li class="nav-item active">
                                <a href="<?php echo URL . "home" ?>" class="nav-link">Trang chủ</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo URL_Layout . "GioiThieu" ?>" class="nav-link">Giới thiệu</a>
                            </li>
                            <li class="nav-item open-mega-content">
                                <a href="<?php echo URL_Layout . "AllSanpham" ?>" class="nav-link">
                                    Sản phẩm
                                    <i class="fas fa-angle-down"></i>
                                </a>
                                <div class="mega-content">
                                    <ul class="level0">
                                        <li class="level1 item">
                                            <a href="" class="hmega">Nội thất gỗ</a>
                                            <ul class="level1">
                                                <li class="level2">
                                                    <a href="">Bàn</a>
                                                </li>
                                                <li class="level2">
                                                    <a href="">Bộ bàn ăn</a>
                                                </li>
                                                <li class="level2">
                                                    <a href="">Giường</a>
                                                </li>
                                                <li class="level2">
                                                    <a href="">Ghế</a>
                                                </li>
                                                <li class="level2">
                                                    <a href="">Tủ kệ</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="level1 item">
                                            <a href="" class="hmega">Sofa, ghế thư giãn & nệm</a>
                                            <ul class="level1">
                                                <li class="level2">
                                                    <a href="">Sofa</a>
                                                </li>
                                                <li class="level2">
                                                    <a href="">Ghế phòng khách</a>
                                                </li>
                                                <li class="level2">
                                                    <a href="">Nệm</a>
                                                </li>
                                                <li class="level2">
                                                    <a href="">Đôn mềm</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="level1 item">
                                            <a href="" class="hmega">Đồ trang trí</a>
                                            <ul class="level1">
                                                <li class="level2">
                                                    <a href="">Tinh dầu & Túi thơm</a>
                                                </li>
                                                <li class="level2">
                                                    <a href="">Cây & Hoa giả</a>
                                                </li>
                                                <li class="level2">
                                                    <a href="">Nến & Chân nến</a>
                                                </li>
                                                <li class="level2">
                                                    <a href="">Đồng hồ</a>
                                                </li>
                                                <li class="level2">
                                                    <a href="">Khung & Tranh ảnh</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="level1 item">
                                            <a href="" class="hmega">Đồ dùng vải</a>
                                        </li>
                                        <li class="level1 item">
                                            <a href="" class="hmega">Vật dụng bàn ăn</a>
                                        </li>
                                        <li class="level1 item">
                                            <a href="" class="hmega">Đồ dùng văn phòng</a>
                                        </li>
                                        <li class="level1 item">
                                            <a href="" class="hmega">Đèn</a>
                                        </li>
                                        <li class="level1 item">
                                            <a href="" class="hmega">Dụng cụ nhà bếp</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">Hàng mới về</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">Tin tức</a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo URL_Layout . "LienHe" ?>" class="nav-link">Liên hệ</a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
            <!-- NAV INPUT CHECK -->
            <input type="checkbox" hidden id="menu-mobile-input" class="nav-input">
            <!-- NAV OVERLAY -->
            <label for="menu-mobile-input" class="nav-overlay"></label>
            <!-- MOBILE MENU LEFT -->
            <nav class="nav-mobile">
                <div class="logo-mobile">
                    <label for="menu-mobile-input" class="close-nav">
                        <i class="fas fa-arrow-left"></i>
                    </label>
                    <img src="<?php echo URL_Layout . "mvc/Assets/img/logo.png" ?>" alt="">
                </div>
                <div class="account-mobile">
                    <a href="login">Đăng nhập</a>
                    <a href="register">Đăng ký</a>
                </div>
                <div class="main-menu-mobile">
                    <div class="nav-cate">
                        <ul class="menu">
                            <li class="menu-item-count active">
                                <a href="/">
                                    <i class="fas fa-angle-right"></i>
                                    Trang chủ
                                </a>
                            </li>
                            <li class="menu-item-count">
                                <a href="<?php echo URL_Layout . "GioiThieu" ?>">
                                    <i class="fas fa-angle-right"></i>
                                    Giới thiệu
                                </a>
                            </li>
                            <li class="menu-item-count">
                                <a href="<?php echo URL_Layout . "all-sanpham" ?>">
                                    <i class="fas fa-angle-right"></i>
                                    Sản phẩm
                                </a>
                            </li>
                            <li class="menu-item-count">
                                <a href="/">
                                    <i class="fas fa-angle-right"></i>
                                    Hàng mới về
                                </a>
                            </li>
                            <li class="menu-item-count">
                                <a href="">
                                    <i class="fas fa-angle-right"></i>
                                    Tin tức
                                </a>
                            </li>
                            <li class="menu-item-count">
                                <a href="<?php echo URL_Layout . "lien-he" ?>">
                                    <i class="fas fa-angle-right"></i>
                                    Liên hệ
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>