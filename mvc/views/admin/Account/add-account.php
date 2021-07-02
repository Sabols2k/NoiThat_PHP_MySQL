<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Account Details</h1>
    </div>

    <!-- New Booking Form Example -->
    <form method="POST" enctype="multipart/form-data">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-secondary">Add Account Details</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6 p-t-20">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Username</label>
                        <input name="username" type="text" class="form-control">
                        <span class="invalidFeedback">
                            <?php echo $data['account']['usernameError']; ?>
                        </span>
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Password</label>
                        <input type="text" name="password" class="form-control">
                        <span class="invalidFeedback">
                            <?php echo $data['account']['passwordError']; ?>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 p-t-20">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email</label>
                        <input name="email"  type="text" class="form-control">
                        <span class="invalidFeedback">
                            <?php echo $data['account']['emailError']; ?>
                        </span>
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Firstname</label>
                        <input type="text" name="firstname" class="form-control">
                        <span class="invalidFeedback">
                            <?php echo $data['account']['passwordError']; ?>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 p-t-20">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Lastname</label>
                        <input name="lastname"  type="text" class="form-control">
                        <span class="invalidFeedback">
                            <?php echo $data['account']['usernameError']; ?>
                        </span>
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Address</label>
                        <input type="text" name="address" class="form-control">
                        <span class="invalidFeedback">
                            <?php echo $data['account']['passwordError']; ?>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 p-t-20">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Country</label>
                        <input name="country"  type="text" class="form-control">
                        <span class="invalidFeedback">
                            <?php echo $data['account']['usernameError']; ?>
                        </span>
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Phone</label>
                        <input type="text" name="phone" class="form-control">
                        <span class="invalidFeedback">
                            <?php echo $data['account']['passwordError']; ?>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 p-t-20">
                    <div class="form-group">
                            <label for="exampleFormControlSelect1">Gender</label>
                            <select name="gender" class="form-control" id="exampleFormControlSelect1">
                            <option></option>
                            <option>Nam</option>
                            <option>Nữ</option>
                            <option>Khác</option>
                            </select>
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Birthday</label>
                        <input type="date" name="birthday" class="form-control">
                        <span class="invalidFeedback">
                            <?php echo $data['account']['passwordError']; ?>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 p-t-20">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Ảnh đại diện</label>
                        <input type='file' name='file' class="form-control"  style="height: 100px">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 p-t-20">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">RolesID</label>
                        <input name="rolesID"  type="text" class="form-control">
                        <span class="invalidFeedback">
                            <?php echo $data['account']['usernameError']; ?>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 p-t-20 text-center">
                <button type="submit" name="addaccount" class="mdl-button mdl-button--raised btn-yellow">Submit</button>
                <a class="mdl-button mdl-button--raised btn-default" href="<?php echo URLAdmin."viewaccount" ?>" style="text-decoration: none;">Cancel</a>
            </div> 
        </div>
    </div>
    </form>
</div>
<!-- /.container-fluid -->
