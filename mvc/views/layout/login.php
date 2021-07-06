<?php  
    // print_r ($_SESSION);
    if(isset($_SESSION['user']['userid'])){
        // header('Location:'.URLAdmin);
        echo "<script>window.location.href= '".URL. "home"."'</script>";
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
                  <li class="breadcrumb-item active" aria-current="page">Đăng nhập</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- ========== SECTION-PAGE-INTRO ========== -->
    <section class="page-login">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-login-title">
                        <h3 class="title-head">Đăng nhập tài khoản</h3>
                    </div>
                    <div class="page-login-social">
                        <a href="" class="social-login">
                            <img src="<?php echo URL ."mvc/Assets/img/login-register/fb-btn.svg"?>" alt="">
                        </a>
                        <a href="" class="social-login">
                            <img src="<?php echo URL ."mvc/Assets/img/login-register/gp-btn.svg"?>" alt="">
                        </a>
                    </div>
                    <div class="line-break">
                        <span>hoặc</span>
                    </div>
                    <form method="POST" action="<?php echo URL ."login"?>" class="form">
                        <div id="form-login">
                            <div class="form-group">
                                <label for="email" class="form-label">Email*</label>
                                <input id="email" name="email" type="text" class="form-control" placeholder="Nhập Địa Chỉ Email">
                                <span class="form-message"></span>
                            </div>
                            <div class="form-group">
                                <label for="password" class="form-label">Mật khẩu*</label>
                                <input id="password" name="password" type="password" class="form-control" placeholder="Nhập mật khẩu">
                                <span class="form-message"></span>
                            </div>
                        </div>
                        <input type="submit" name="login" class="form-submit" value="Đăng nhập">
                        <p class="text-center">
                            <a href="" class="forgot-password">Quên mật khẩu?</a>
                        </p>
                        <div class="text-login text-center mt-4">
                            <p>
                                BẠN CHƯA CÓ TÀI KHOẢN. ĐĂNG KÝ
                                <a href="register">tại đây.</a>
                            </p>
                        </div>
                    </form>
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
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Validator({
            form: '#form-login',
            formGroupSelector: '.form-group',
            errorSelector: '.form-message',
            rules: [
                Validator.isRequired('#email'),
                Validator.isEmail('#email', 'Vui lòng nhập Email'),
                Validator.isRequired('#password'),
                Validator.minLength('#password', 5),
            ],
            //onSubmit: (data) => {
             //   console.log(data)
            //}
        })

    

    })
    </script>
