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
    <!-- ========== SECTION-DETAIL-PRODUCT ========== -->
    <section class="detail-product">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="product-top">
                                <h1 class="title-head"><?php echo $data['product']['name'] ?> </h1>
                                <div class="sku-product">
                                    <div class="item-ku">
                                        SKU:
                                        <span class="variant-sku"><?php echo $data['product']['productid'] ?></span>
                                    </div>
                                    <div class="item-ku">
                                        Thương hiệu:
                                        <span class="variant-sku">Evo Nội Thất</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="slider-img-product">
                                        <div class="mySlides">
                                            <img src="<?php echo URL_Layout ."mvc/Assets/img/All-products/". $data['product']['img'].".jpg"?>" style="width:100%">
                                        </div>
                                        <div class="mySlides">
                                            <img src="<?php echo URL_Layout ."mvc/Assets/img/All-products/". $data['product']['img'].".jpg"?>" style="width:100%">
                                        </div>
                                      
                                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                                        <a class="next" onclick="plusSlides(1)">❯</a>
                                      
                                        <div class="thumb">
                                            <div class="thumb-item">
                                                <img class="demo" src="<?php echo URL_Layout ."mvc/Assets/img/All-products/". $data['product']['img'].".jpg"?>" style="width:100%" onclick="currentSlide(1)">
                                            </div>
                                            <div class="thumb-item">
                                                <img class="demo" src="<?php echo URL_Layout ."mvc/Assets/img/All-products/". $data['product']['img'].".jpg"?>" style="width:100%" onclick="currentSlide(2)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <div class="price-box">
                                            <div>
                                                <!-- Current price -->
                                                <span class="product-price"><?php echo $data['product']['price'] ?>₫ </span>
                                                
                                            </div>
                                           
                                        </div>
                                        <div class="inventory-quantily">
                                            <span class="stock-brand-title">Tình trạng:</span>
                                            <span class="a-stock">Còn hàng</span>
                                        </div>
                                        <div class="product-describe">
                                            <p><strong><?php echo $data['product']['name'] ?></strong> khiến mọi vị khách cảm thấy hài lòng trong quá trình sử dụng. Điều thu hút khách hàng đầu tiện chính là vẻ đpẹ hiện đại, thanh lịch của mẫu giường ngủ gỗ. Cùng với đó, thiết kế nệm bọc nỉ, da cao cấp của sản phẩm cũng góp phần đem đến những trải nghiệm thoải mái, dễ chịu nhất đối với người dùng.</p>
                                        </div>
                                    </div>
                                    <div class="form-product">
                                        <div class="qty-ant">
                                            <label for="">Số lượng:</label>
                                            <div class="custom-btn-number">
                                            <button id="dec" class="btn-cts btn-minus" onClick="cartLS.quantity(1,-1)">-</button>
                                                <input type="text" id="qty" value="1">
                                            <button id="inc" class="btn-cts btn-plus" onClick="cartLS.quantity(1,1)">+</button>
                                            </div>
                                        </div>
                                        <!-- Button open cart modal -->
                                        <div class="btn-buy">
                                            <button type="submit" 
                                                    class="btn btn-gray btn-lg add-to-cart"
                                                    data-bs-toggle="modal" data-bs-target="#cartModal"
                                                    onClick="cartLS.add({id: <?php echo $data['product']['productid']?>, name: '<?php echo $data['product']['name'] ?>', img:'<?php echo $data['product']['img']?>', price: <?php echo $data['product']['price'] ?> })">
                                                    
                                                <span>
                                                    Mua ngay 
                                                    <b class="product-price"><?php echo $data['product']['price'] ?>₫</b>
                                                </span>
                                                <span class="txt-add">Đặt mua giao hàng tận nơi</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="call-payment">
                                        <div class="hotline-product">
                                            Gọi điện để được tư vấn: 
                                            <a href="">0900 090 090</a>
                                        </div>
                                        <div class="payment-product">
                                            <span>Hình thức thanh toán</span>
                                            <img src="<?php echo URL_Layout ."mvc/Assets/img/All-products/payment/ppayment-1.svg"?>" alt="">
                                            <img src="<?php echo URL_Layout ."mvc/Assets/img/All-products/payment/ppayment-2.svg"?>" alt="">
                                            <img src="<?php echo URL_Layout ."mvc/Assets/img/All-products/payment/ppayment-3.svg"?>" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-9 col-md-8">
                                    <div class="tabs">
                                        <div class="tab-item active">
                                            Mô tả
                                        </div>
                                        <div class="tab-item">
                                            Giới thiệu
                                        </div>
                                        <div class="line"></div>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane active">
                                           <div class="describe">
                                               <p><strong> Giường ngủ gỗ chất lượng cao cho gia đình GHS-9071 </strong>khiến mọi vị khách cảm thấy hài lòng trong quá trình sử dụng. Điều thu hút khách hàng đầu tiện chính là vẻ đpẹ hiện đại, thanh lịch của mẫu giường ngủ gỗ. Cùng với đó, thiết kế nệm bọc nỉ, da cao cấp của sản phẩm cũng góp phần đem đến những trải nghiệm thoải mái, dễ chịu nhất đối với người dùng.</p>
                                               <p>
                                                   <img class="mw-100" src="<?php echo URL_Layout ."mvc/Assets/img/All-products/giuong-ngu-go-gia-dinh-phun-son-hien-dai.jpg"?>" alt="">
                                               </p>
                                               <h2>Thông tin chi tiết về giường ngủ gỗ chất lượng cao cho gia đình GHS-9071</h2>
                                               <p>
                                                   <strong>Mã sản phẩm:</strong>
                                                   GHS-9071
                                               </p>
                                               <p>
                                                <strong>Mã sản phẩm:</strong>
                                                GHS-9071
                                            </p>
                                            <p>
                                                <strong>Mã sản phẩm:</strong>
                                                GHS-9071
                                            </p>
                                            <p>
                                                <strong>Mã sản phẩm:</strong>
                                                GHS-9071
                                            </p>
                                            <p>
                                                <strong>Mã sản phẩm:</strong>
                                                GHS-9071
                                            </p>
                                            <p>
                                                <strong>Mã sản phẩm:</strong>
                                                GHS-9071
                                            </p> 
                                           </div>
                                        </div>
                                        <div class="tab-pane">
                                            <div class="introduce">
                                                <div class="page-intro-content">
                                                    <h3>
                                                        <strong>Những mặt hàng thương hiệu EVO cung cấp</strong>
                                                    </h3>
                                                    <p>Showroom EVO giới thiệu hàng loạt các sản phẩm với thiết kế theo xu hướng mới nhất trên thị trường nội thất hiện nay với kiểu dáng tinh tế, hiện đại, mang tính thẩm mỹ cao như: bàn ghế sofa, bàn ăn, thảm trang trí, thiết bị vệ sinh mạ vàng đèn trang trí, giấy dán tường, tranh treo tường, hoa và những phụ kiện trang trí...</p>
                                                </div>
                                                <div class="page-intro-content">
                                                    <h3>
                                                        <strong>Niềm tin được đặt đúng chỗ khi đến với EVO </strong>
                                                    </h3>
                                                    <p>Siêu thị nội thất EVO với 02 showroom diện tích hơn 800 m2, nằm ở vị trí trung tâm thành phố Đà Nẵng với hệ thống giao thông thuận lợi, là điểm đến tin cậy làm vừa lòng cả những vị khách hàng khó tính nhất. Showroom được xây dựng với tiêu chuẩn 3S (Super, Special và Smart) với đầy đủ tiện nghi, cơ sở vật chất hiện đại, sang trọng. Những sản phẩm được trưng bày tại showroom cam kết mang chất lượng tốt nhất, mang kiểu dáng, mẫu mã và thiết kế mới nhất, nắm bắt nhanh và theo kịp những xu hướng trang trí nội thất mới nhất.</p>
                                                </div>
                                                <div class="page-intro-content">
                                                    <h3>
                                                        <strong>Niềm tin được đặt đúng chỗ khi đến với EVO </strong>
                                                    </h3>
                                                    <p>Siêu thị nội thất EVO với 02 showroom diện tích hơn 800 m2, nằm ở vị trí trung tâm thành phố Đà Nẵng với hệ thống giao thông thuận lợi, là điểm đến tin cậy làm vừa lòng cả những vị khách hàng khó tính nhất. Showroom được xây dựng với tiêu chuẩn 3S (Super, Special và Smart) với đầy đủ tiện nghi, cơ sở vật chất hiện đại, sang trọng. Những sản phẩm được trưng bày tại showroom cam kết mang chất lượng tốt nhất, mang kiểu dáng, mẫu mã và thiết kế mới nhất, nắm bắt nhanh và theo kịp những xu hướng trang trí nội thất mới nhất.</p>
                                                </div>
                                                <div class="page-intro-content">
                                                    <h3>
                                                        <strong>Niềm tin được đặt đúng chỗ khi đến với EVO </strong>
                                                    </h3>
                                                    <p>Siêu thị nội thất EVO với 02 showroom diện tích hơn 800 m2, nằm ở vị trí trung tâm thành phố Đà Nẵng với hệ thống giao thông thuận lợi, là điểm đến tin cậy làm vừa lòng cả những vị khách hàng khó tính nhất. Showroom được xây dựng với tiêu chuẩn 3S (Super, Special và Smart) với đầy đủ tiện nghi, cơ sở vật chất hiện đại, sang trọng. Những sản phẩm được trưng bày tại showroom cam kết mang chất lượng tốt nhất, mang kiểu dáng, mẫu mã và thiết kế mới nhất, nắm bắt nhanh và theo kịp những xu hướng trang trí nội thất mới nhất.</p>
                                                </div>
                                                <div class="page-intro-content">
                                                    <h3>
                                                        <strong>Niềm tin được đặt đúng chỗ khi đến với EVO </strong>
                                                    </h3>
                                                    <p>Siêu thị nội thất EVO với 02 showroom diện tích hơn 800 m2, nằm ở vị trí trung tâm thành phố Đà Nẵng với hệ thống giao thông thuận lợi, là điểm đến tin cậy làm vừa lòng cả những vị khách hàng khó tính nhất. Showroom được xây dựng với tiêu chuẩn 3S (Super, Special và Smart) với đầy đủ tiện nghi, cơ sở vật chất hiện đại, sang trọng. Những sản phẩm được trưng bày tại showroom cam kết mang chất lượng tốt nhất, mang kiểu dáng, mẫu mã và thiết kế mới nhất, nắm bắt nhanh và theo kịp những xu hướng trang trí nội thất mới nhất.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="similar-product">
                                        <h2>
                                            <a href="">Bạn có thể thích</a>
                                        </h2>
                                        <div class="list-bestsell">
                                            <div class="evo-three-col-slick">
                                                <div class="evo-product-item">
                                                    <div class="product-img">
                                                        <div class="product-sale">
                                                            <span>- 16% </span>
                                                        </div>
                                                        <a href="">
                                                            <img src="<?php echo URL_Layout ."mvc/Assets/img/section-tab-san-pham/tu-bep-gia-dinh-go-cong-nghiep-nho-gon-da-nang.jpg"?>" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-detail">
                                                        <div class="pro-brand">
                                                            <a href="">Evo Nội Thất</a>
                                                        </div>
                                                        <h3 class="pro-name">
                                                            <a href="">Tủ bếp bằng gỗ tự nhiên nhỏ gọn đa năng tiện lợi</a>
                                                        </h3>
                                                        <div class="box-pro-price">
                                                            <p class="pro-price">12.500.000₫</p>
                                                            <span class="pro-price-del">
                                                                <del class="compare-price">1.540.000₫</del>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="evo-product-item">
                                                    <div class="product-img">
                                                        <div class="product-sale">
                                                            <span>- 16% </span>
                                                        </div>
                                                        <a href="">
                                                            <img src="<?php echo URL_Layout ."mvc/Assets/img/section-tab-san-pham/ezgif.jpg"?>" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-detail">
                                                        <div class="pro-brand">
                                                            <a href="">Evo Nội Thất</a>
                                                        </div>
                                                        <h3 class="pro-name">
                                                            <a href="">Tủ bếp bằng gỗ tự nhiên nhỏ gọn đa năng tiện lợi</a>
                                                        </h3>
                                                        <div class="box-pro-price">
                                                            <p class="pro-price">12.500.000₫</p>
                                                            <span class="pro-price-del">
                                                                <del class="compare-price">1.540.000₫</del>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="evo-product-item">
                                                    <div class="product-img">
                                                        <div class="product-sale">
                                                            <span>- 16% </span>
                                                        </div>
                                                        <a href="">
                                                            <img src="<?php echo URL_Layout ."mvc/Assets/img/section-tab-san-pham/tu-bep-go-tu-nhien-thiet-ke-da-nang-dep-hien-dai.jpg"?>" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-detail">
                                                        <div class="pro-brand">
                                                            <a href="">Evo Nội Thất</a>
                                                        </div>
                                                        <h3 class="pro-name">
                                                            <a href="">Tủ bếp bằng gỗ tự nhiên nhỏ gọn đa năng tiện lợi</a>
                                                        </h3>
                                                        <div class="box-pro-price">
                                                            <p class="pro-price">12.500.000₫</p>
                                                            <span class="pro-price-del">
                                                                <del class="compare-price">1.540.000₫</del>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="evo-product-item">
                                                    <div class="product-img">
                                                        <div class="product-sale">
                                                            <span>- 16% </span>
                                                        </div>
                                                        <a href="">
                                                            <img src="<?php echo URL_Layout ."mvc/Assets/img/section-tab-san-pham/tu-bep-go-tu-nhien-thiet-ke-da-nang-dep-hien-dai.jpg"?>" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-detail">
                                                        <div class="pro-brand">
                                                            <a href="">Evo Nội Thất</a>
                                                        </div>
                                                        <h3 class="pro-name">
                                                            <a href="">Tủ bếp bằng gỗ tự nhiên nhỏ gọn đa năng tiện lợi</a>
                                                        </h3>
                                                        <div class="box-pro-price">
                                                            <p class="pro-price">12.500.000₫</p>
                                                            <span class="pro-price-del">
                                                                <del class="compare-price">1.540.000₫</del>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5 mb-5">
                                <div class="col-lg-12">
                                    <div class="home-title">
                                        <h2>
                                            <a href="">Sản phẩm liên quan</a>
                                        </h2>
                                    </div>
                                    <div class="related-product">
                                        <div class="owl-carousel owl-related-product owl-theme">
                                            <div class="evo-product-block-item">
                                                <div class="product-img">
                                                    <a href="">
                                                        <img src="<?php echo URL_Layout ."mvc/Assets/img/section-tab-san-pham/ezgif.jpg"?>">
                                                    </a>
                                                    <div class="button-add">
                                                        <button>
                                                            <i class="far fa-check-square"></i>
                                                        </button>
                                                        <button>
                                                            <i class="fas fa-shopping-bag"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="product-detail">
                                                    <div class="pro-brand">
                                                        <a href="">Evo Nội Thất</a>
                                                    </div>
                                                    <h3 class="pro-name">
                                                        <a href="">Tủ bếp bằng gỗ tự nhiên nhỏ gọn đa năng tiện lợi</a>
                                                    </h3>
                                                    <p class="pro-price">12.500.000₫</p>
                                                </div>
                                            </div>
                                            <div class="evo-product-block-item">
                                                <div class="product-img">
                                                    <a href="">
                                                        <img src="<?php echo URL_Layout ."mvc/Assets/img/section-tab-san-pham/tu-bep-go-tu-nhien-thiet-ke-da-nang-dep-hien-dai.jpg"?>">
                                                    </a>
                                                    <div class="button-add">
                                                        <button>
                                                            <i class="far fa-check-square"></i>
                                                        </button>
                                                        <button>
                                                            <i class="fas fa-shopping-bag"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="product-detail">
                                                    <div class="pro-brand">
                                                        <a href="">Evo Nội Thất</a>
                                                    </div>
                                                    <h3 class="pro-name">
                                                        <a href="">Tủ bếp bằng gỗ tự nhiên nhỏ gọn đa năng tiện lợi</a>
                                                    </h3>
                                                    <p class="pro-price">12.500.000₫</p>
                                                </div>
                                            </div>
                                            <div class="evo-product-block-item">
                                                <div class="product-img">
                                                    <a href="">
                                                        <img src="<?php echo URL_Layout ."mvc/Assets/img/section-tab-san-pham/tu-bep-gia-dinh-go-cong-nghiep-nho-gon-da-nang.jpg"?>" alt="">
                                                    </a>
                                                    <div class="button-add">
                                                        <button>
                                                            <i class="far fa-check-square"></i>
                                                        </button>
                                                        <button>
                                                            <i class="fas fa-shopping-bag"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="product-detail">
                                                    <div class="pro-brand">
                                                        <a href="">Evo Nội Thất</a>
                                                    </div>
                                                    <h3 class="pro-name">
                                                        <a href="">Tủ bếp bằng gỗ tự nhiên nhỏ gọn đa năng tiện lợi</a>
                                                    </h3>
                                                    <p class="pro-price">12.500.000₫</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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