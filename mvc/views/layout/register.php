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
                  <li class="breadcrumb-item active" aria-current="page">Đăng kí</li>
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
                        <h3 class="title-head">Đăng ký tài khoản</h3>
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
                    <form method="POST" action="http://localhost:8080/NoiThat/register/create" class="form">
                        <div id="form-register">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="firstname" class="form-label">Họ*</label>
                                        <input id="firstname" name="firstname" type="text" class="form-control" placeholder="Nhập Họ">
                                        <span class="form-message"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lastname" class="form-label">Tên*</label>
                                        <input id="lastname" name="lastname" type="text" class="form-control" placeholder="Nhập Tên">
                                        <span class="form-message"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phoneNumber" class="form-label">Số điện thoại*</label>
                                <input id="phoneNumber" name="phoneNumber" type="text" class="form-control" placeholder="Nhập Số Điện Thoại">
                                <span class="form-message"></span>
                            </div>
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
                            <div class="form-group">
                                <label for="password-confirm" class="form-label">Nhập lại mật khẩu*</label>
                                <input id="password-confirm" type="password" class="form-control" placeholder="Nhập lại mật khẩu">
                                <span class="form-message"></span>
                            </div>
                        </div>
                        <button type="submit" name="register" class="form-submit" onclick="showToastSuccess()">Đăng ký</button>
                        <div class="text-register text-center mt-4">
                            <p>
                                <a href="login">Đăng nhập</a>
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
            form: '#form-register',
            formGroupSelector: '.form-group',
            errorSelector: '.form-message',
            rules: [
                Validator.isRequired('#firstname', 'Vui lòng nhập họ của bạn!'),
                Validator.isRequired('#lastname', 'Vui lòng nhập tên của bạn!'),
                Validator.isRequired('#phoneNumber', 'Vui lòng nhập số điện thoại!'),
                Validator.isPhoneNumber('#phoneNumber', 'Số máy quý khách vừa nhập là số không có thực!'),
                Validator.isRequired('#email', 'Vui lòng nhập email!'),
                Validator.isEmail('#email'),
                Validator.minLength('#password', 6),
                Validator.isRequired('#password-confirm'),
                Validator.isConfirmed('#password-confirm', function () {
                return document.querySelector('#form-1 #password').value;
                }, 'Mật khẩu nhập lại không chính xác')
            ],
            //onSubmit: function (data) {
                // Call API
              //  console.log(data);
            // }
            })
        })
        function showToastSuccess() {
            toast({
                title: 'Success',
                message: 'Xin chúc mừng! Bạn đã đăng ký thành công.',
                type: 'success',
                duration: 30000
            })
        }
    </script>
</body>
</html> 