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
                  <li class="breadcrumb-item active" aria-current="page">404 Không tìm thấy trang</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- ========== SECTION-PAGE-404-NOT-FOUND ========== -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-404 text-center">
                        <div class="image-404">
                            <img src="<?php echo URL ."mvc/Assets/img/404.png"?>"  alt="404" class="center-block">
                        </div>
                        <h1>Lỗi không tìm thấy trang</h1>
                        <p class="land">Có vẻ như các trang mà bạn đang cố gắng tiếp cận không tồn tại nữa hoặc có thể nó vừa di chuyển.</p>
                        <div class="wrap-btn-go-home">
                            <a href="/" class="btn btn-lg btn-go-home">Về trang chủ</a>
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