<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evo Nội Thất</title>
    <?php 
        require_once "general/css.php";
    ?>
  </head>
<body>
     <!-- ========== HEADER ========== -->
     <?php $page = 'home'; require_once('general/header.php');?>
    <!-- ========== SECTION-BREAD-CRUMP ========== -->
    <section class="bread-crump">
        <div class="container">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Tất cả sản phẩm</li>
                </ol>
            </nav>
        </div>  
    </section>    
    <!-- ========== SECTION-ALL-PRODUCT ========== -->
    <section class="page-all-product">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="title-head">Tất cả sản phẩm</h1>
                    <div class="single-image">
                        <img src="<?php echo URL_Layout ."mvc/Assets/img/All-products/cat-banner-1.jpg"?>" alt="">
                    </div>
                    <div class="owl-carousel owl-category owl-theme">

                        <div class="category-item">
                            <a href="">
                                <div class="category-item-image">
                                    <img src="<?php echo URL_Layout ."mvc/Assets/img/All-products/category-group/desk.png"?>" alt="">
                                    <h6>Nội thất gỗ</h6>    
                                </div>
                            </a>
                        </div>
                        
                        <div class="category-item">
                            <a href="">
                                <div class="category-item-image">
                                    <img src="<?php echo URL_Layout ."mvc/Assets/img/All-products/category-group/sofa.png"?>" alt="">
                                    <h6>Sofa, Ghế thư giãn</h6>    
                                </div>
                            </a>
                        </div>
                        <div class="category-item">
                            <a href="">
                                <div class="category-item-image">
                                    <img src="<?php echo URL_Layout ."mvc/Assets/img/All-products/category-group/living-room.png"?>" alt="">
                                    <h6>Đồ trang trí</h6>    
                                </div>
                            </a>
                        </div>
                        <div class="category-item">
                            <a href="">
                                <div class="category-item-image">
                                    <img src="<?php echo URL_Layout ."mvc/Assets/img/All-products/category-group/curtains.png"?>" alt="">
                                    <h6>Đồ dùng vải</h6>    
                                </div>
                            </a>
                        </div>
                        <div class="category-item">
                            <a href="">
                                <div class="category-item-image">
                                    <img src="<?php echo URL_Layout ."mvc/Assets/img/All-products/category-group/dinner-table.png"?>" alt="">
                                    <h6>Vật dụng bàn ăn</h6>    
                                </div>
                            </a>
                        </div>
                        <div class="category-item">
                            <a href="">
                                <div class="category-item-image">
                                    <img src="<?php echo URL_Layout ."mvc/Assets/img/All-products/category-group/work-station-1.png"?>" alt="">
                                    <h6>Đồ dùng văn phòng</h6>    
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <aside class="evo-sidebar col-lg-3 col-md-3">
                    <div class="aside-item">
                        <div class="aside-title">
                            <h3 class="title-head">Danh mục</h3>
                        </div>
                        <div class="aside-content">
                            <ul class="nav-category">
                                <li class="nav-item">
                                    <a href="/" class="nav-link">Trang chủ</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/GioiThieu" class="nav-link">Giới thiệu</a>
                                </li>
                                <li class="nav-item plus-span">
                                    <div>
                                        <a href="/all-sanpham" class="nav-link">Sản phẩm</a>
                                        <span><i class="fas fa-plus"></i></span>
                                    </div>
                                    <!-- DROPDOWN-MENU -->
                                    <ul class="dropdown-menu1">
                                        <li class="dropdown-item nav-item plus-span">
                                            <a href="" class="nav-link">Nội thất gỗ</a>
                                        </li>
                                        <li class="dropdown-item nav-item">
                                            <a href="" class="nav-link">Sofa, Ghế thư giãn</a>
                                        </li>
                                        <li class="dropdown-item nav-item">
                                            <a href="" class="nav-link">Đồ trang trí</a>
                                        </li>
                                        <li class="dropdown-item nav-item">
                                            <a href="" class="nav-link">Đồ dùng vải</a>
                                        </li>
                                        <li class="dropdown-item nav-item">
                                            <a href="" class="nav-link">Vật dụng bàn ăn</a>
                                        </li>
                                        <li class="dropdown-item nav-item">
                                            <a href="" class="nav-link">Đồ dùng văn phòng</a>
                                        </li>
                                        <li class="dropdown-item nav-item">
                                            <a href="" class="nav-link">Đèn</a>
                                        </li>
                                        <li class="dropdown-item nav-item">
                                            <a href="" class="nav-link">Dụng cụ nhà bếp</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="/" class="nav-link">Hàng mới về</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/" class="nav-link">Tin tức</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/lien-he" class="nav-link">Liên hệ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="aside-filter">
                        <div class="heading">Tìm theo</div>
                        <div class="filter-container">
                            <div class="filter">
                                <div class="title">Giá sản phẩm</div>
                                <div class="content">
                                    <ul>
                                        <li class="filter-item">
                                            <span>
                                                <label for="">
                                                    <input type="checkbox">
                                                    Giá dưới 100.000đ
                                                </label>
                                            </span>
                                        </li>
                                        <li class="filter-item">
                                            <span>
                                                <label for="">
                                                    <input type="checkbox">
                                                    100.000đ - 200.000đ
                                                </label>
                                            </span>
                                        </li>
                                        <li class="filter-item">
                                            <span>
                                                <label for="">
                                                    <input type="checkbox">
                                                    200.000đ - 300.000đ
                                                </label>
                                            </span>
                                        </li>
                                        <li class="filter-item">
                                            <span>
                                                <label for="">
                                                    <input type="checkbox">
                                                    300.000đ - 500.000đ
                                                </label>
                                            </span>
                                        </li>
                                        <li class="filter-item">
                                            <span>
                                                <label for="">
                                                    <input type="checkbox">
                                                    500.000đ - 1.000.000đ
                                                </label>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="filter">
                                <div class="title">Khuyến mãi</div>
                                <div class="content">
                                    <div class="single-image">
                                        <img src="<?php echo URL_Layout ."mvc/Assets/img/All-products/aside_banner.jpg"?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
                <section class="col-lg-9 col-md-12 col-xs-12">
                    <div class="sort-product">
                        <h3>Xếp theo:</h3>
                        <ul>
                            <li class="btn-quick-sort">
                                <span>
                                    <label for="">
                                        <input type="checkbox">
                                        Tên A-Z
                                    </label>
                                </span>
                            </li>
                            <li class="btn-quick-sort">
                                <span>
                                    <label for="">
                                        <input type="checkbox">
                                        Tên Z-A
                                    </label>
                                </span>
                            </li>
                            <li class="btn-quick-sort">
                                <span>
                                    <label for="">
                                        <input type="checkbox">
                                        Hàng mới
                                    </label>
                                </span>
                            </li>
                            <li class="btn-quick-sort">
                                <span>
                                    <label for="">
                                        <input type="checkbox">
                                        Giá thấp đến cao
                                    </label>
                                </span>
                                <a href=""></a>
                            </li>
                            <li class="btn-quick-sort">
                                <span>
                                    <label for="">
                                        <input type="checkbox">
                                        Giá cao xuống thấp
                                    </label>
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="product-view">
                        <div class="row" id="list-product">
                            <!-- ... Render products from API -->
                        </div>
                    </div>
                    <div class="shop-pag">
                        <nav class="text-center">
                            <ul class="pagination pagination-lg">
                              <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                  <span aria-hidden="true">&laquo;</span>
                                </a>
                              </li>
                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                  <span aria-hidden="true">&raquo;</span>
                                </a>
                              </li>
                            </ul>
                        </nav>
                    </div>
                </section>
            </div>
        </div>
    </section>
    <!-- ========== FOOTER ========== -->
    <?php
        require_once('general/footer.php');
      ?> 
    </div>
    <!-- ========== JAVASCRIPT ========== -->
    <?php 
        require_once('general/js.php');
    ?>
  </body>
</html>