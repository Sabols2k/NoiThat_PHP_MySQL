<?php
// echo "index";    
if (empty($_SESSION['user']['userid'])) {

    echo "<script>window.location.href= '" . URL . 'login' . "'</script>";
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
    <?php $page = 'home';
    require_once('general/header.php'); ?>
    <!-- ========== SECTION-BREAD-CRUMP ========== -->
    <section class="bread-crump">
        <div class="container">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Account</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- ========== SECTION-PAGE-ACCOUNT ========== -->
    <section class="page-customer-account">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-lg-4">
                    <h1 class="title-head">Thông tin tài khoản</h1>
                    <div class="form-info-account">
                        <p>
                            <img id="avatar-image" class="change-avatar" src="<?php echo imgUser. $data['account']['avatar'] ?> " alt="account" data-bs-toggle="modal" data-bs-target="#changeAvatarModal">
                        </p>
                        <p>
                            <strong>Họ tên:</strong>
                            <?php echo $data['account']['lastname'] . " " . $data['account']['firstname'] ?>
                        </p>
                        <p>
                            <strong>Email:</strong>

                            <?php echo $data['account']['email'] ?>
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-lg-8">
                    <h1 class="title-head">Đơn hàng của bạn</h1>
                    <div class="table-order-responsive">
                        <table class="table-order">
                            <thead>
                                <th>Đơn hàng</th>
                                <th>Ngày</th>
                                <th>Địa chỉ</th>
                                <th>Giá trị đơn hàng</th>
                                <th>TT thanh toán</th>
                                <th>TT vận chuyển</th>
                            </thead>
                            <tbody>
                                <?php
                                 $stt=1;
                                    foreach ($data['bill'] as $row) {
                                       
                                ?>
                                    <tr>
                                        <td style="padding-left: 10px;">#<?php echo $stt?></td>
                                        <td><?php echo $row['createdAt'] ?></td>
                                        <td><?php echo $row['address'] ?></td>
                                        <td class="price"><?php echo $row['totalprice'] ?>₫</td>
                                        <td class="span-pending">Chưa thu tiền</td>
                                        <td>Chưa chuyển</td>
                                    </tr>
                                <?php 
                                    $stt++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="changeAvatarModal" tabindex="-1" aria-labelledby="changeAvatarModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="changeAvatarModalLabel">Update Profile</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form  action="http://localhost:8080/NoiThat/account/updateprofile" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">

                        <div class="avatar text-center">
                            <img src="<?php echo imgUser. $data['account']['avatar'] ?> "class="change-avatar">
                        </div>
                        <div class="form-group">
                            <label for="avatar" class="col-form-label" style="font-size: 1.4rem;">Choose avatar:</label>
                            <input type="file" name="avatar" value="<?php echo $data['account']['avatar'] ?>" class="form-control" id="avatar-name" style="padding: 10px 10px; font-size: 1.4rem;">
                        </div>
                        <input type="hidden" name="userid" value="<?php echo $data['account']['userid'] ?>" class="form-control" style="padding: 10px 10px; font-size: 1.4rem;">
                        <div class="form-group">
                            <label for="avatar" class="col-form-label" style="font-size: 1.4rem;">Email</label>
                            <input type="text" name="email" value="<?php echo $data['account']['email'] ?>" class="form-control" style="padding: 10px 10px; font-size: 1.4rem;">
                        </div>
                        <div class="form-group">
                            <label for="avatar" class="col-form-label" style="font-size: 1.4rem;">First Name</label>
                            <input type="text" name="firstname" value="<?php echo $data['account']['firstname'] ?>" class="form-control" style="padding: 10px 10px; font-size: 1.4rem;">
                        </div>
                        <div class="form-group">
                            <label for="avatar" class="col-form-label" style="font-size: 1.4rem;">Lastname</label>
                            <input type="text" name="lastname" value="<?php echo $data['account']['lastname'] ?>" class="form-control" style="padding: 10px 10px; font-size: 1.4rem;">
                        </div>
                        <div class="form-group">
                            <label for="avatar" class="col-form-label" style="font-size: 1.4rem;">Phone</label>
                            <input type="text" name="phone" value="<?php echo $data['account']['phone'] ?>" class="form-control" style="padding: 10px 10px; font-size: 1.4rem;">
                        </div>
                        <div class="form-group">
                            <label for="avatar" class="col-form-label" style="font-size: 1.4rem;">Address</label>
                            <input type="text" name="address" value="<?php echo $data['account']['address'] ?>" class="form-control" style="padding: 10px 10px; font-size: 1.4rem;">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button  name="updateprofile" type="submit" class="btn btn-lg">Save changes</button>
                    </div>
                </form>
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
</body>

</html>