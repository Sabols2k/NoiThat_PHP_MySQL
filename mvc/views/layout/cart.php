<?php  
    // echo "index";    
    if(empty($_SESSION['user']['userid'])){

        echo "<script>window.location.href= '".URL.'login'."'</script>";

    }
?>
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
                  <li class="breadcrumb-item active" aria-current="page">Giỏ hàng</li>
                </ol>
            </nav>
        </div>
    </section>   
    <!-- ========== SECTION-CART ========== -->
    <div class="shopping-cart">
        <div class="container">
            <!-- Cart-Title -->
            <div class="row">
                <div class="col-md-12">
                    <h1 class="title-head">
                        Giỏ Hàng
                        <span class="count-item">(0 sản phẩm)</span>
                    </h1>
                </div>
            </div>
            <!-- Cart-Content -->
            <div class="row">
                <div class="col-lg-12 cart-empty d-none">
                    <span class="empty-icon">
                        <i class="ico-cart"></i>
                    </span>
                    <div class="btn-cart-empty">
                        <a href="<?php echo URL_Layout."AllSanpham"?>" class="btn btn-lg btn-checkouts">Tiếp tục mua hàng</a>
                    </div>
                </div>
                <div class="col-lg-9 cart-in-stock">
                    <div class="content">
                        <table class="table d-none d-lg-table">
                            <tbody id="order_items">
                                <!-- Render products desktop -->
                            </tbody>
                        </table>
                        <div id="order_items_mobile" class="mobile_table d-lg-none mb-3 bg-white p-3 pt-4">
                            <!-- Render products mobile -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 cart-in-stock">
                    <div class="container">
                        <div class="cart-submit">
                            <div class="box-fee">
                                <p>
                                    <span>Tạm tính:</span>
                                    <strong id="total-price" class="total">0₫</strong>
                                </p>
                            </div>
                            <div class="box-fee">
                                <p>
                                    <span>Thành tiền:</span>
                                    <strong id="total-price" class="total amount">0₫</strong>
                                </p>
                            </div>
                            <a href="<?php echo URL_Layout."Checkout"?>" class="btn btn-lg btn-checkout">Thanh toán ngay</a>
                            <a href="<?php echo URL_Layout."AllSanpham"?>" class="btn btn-lg btn-checkouts">Tiếp tục mua hàng</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== FOOTER ========== -->
    <?php
        require_once('general/footer.php');
    ?> 
    </div>
    <!-- ========== JAVASCRIPT ========== -->
    <?php 
        require_once('general/js.php');
    ?>