<div class="container-fluid">

    <div class="row">
        <div class="col-lg-9 d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">All Accounts</h1>
        </div>
        <div class="col-lg-3 d-sm-flex align-items-center justify-content-between ">
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 " method="GET">
                <div class="input-group">
                    <input name="value" type="text" class="form-control bg-light border-1 small" placeholder="Search for..."
                        aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-info"  type="submit"  >
                            <i class="fas fa-search fa-sm"></i>
                        </button> 
                    </div>
                </div>
            </form>
            
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-secondary">All Accounts</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="#!" class="btn btn-light btn-icon-split mb-3" data-toggle="modal" data-target="#addAdminModal">
                    <span class="icon text-gray-600">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                    <span class="text">ADD NEW</span>
                </a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>First name</th>
                            <th>Last name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Avatar</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($data['account'] as $row) {
                        ?>
                            <tr>
                                <td><?php echo $row['adminid'] ?></td>
                                <td><?php echo $row['firstname'] ?></td>
                                <td><?php echo $row['lastname'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['phone'] ?></td>
                                <td style="display: none;"><?php echo $row['avatar'] ?></td>
                                <td><img style="width: 60px; height: 60px; border-radius: 50%;" src="<?php echo imgAccount . '/' . $row['avatar'] ?>" alt=""></td>
                                <td class="d-flex justify-content-around">
                                    <button type="button" class="btn btn-success updatebtn">
                                        <i class="fa fa-wrench fa-lg action" aria-hidden="true"></i>
                                    </button>
                                    <a type="button" class="btn btn-danger delete-btn" onclick="return window.confirm('B???n mu???n x??a kh??ng');" href="<?php echo URLAdmin . 'deleteAccount/' . $row['adminid']; ?>">
                                        <i class="fa fa-trash fa-lg function" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<!-- Add Admin Modal-->
<div class="modal fade" id="addAdminModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="modal-form form-create" enctype="multipart/form-data" action="http://localhost:8080/NoiThat/admin/AddAccount" method="POST">
                <div class="modal-body form-admin">
                    <div class="form-group">
                        <input name="email" type="email" class="form-control" id="emailAdmin" placeholder="Email">
                        <span class="form-message"></span>
                    </div>
                    <div class="form-group">
                        <input name="password" type="password" class="form-control" id="passwordAdmin" placeholder="Password">
                        <span class="form-message"></span>
                    </div>
                    <div class="form-group">
                        <input name="phone" type="phone" class="form-control" id="phoneNumberAdmin" placeholder="Phone number">
                        <span class="form-message"></span>
                    </div>
                    <div class="form-group">
                        <input name="firstname" type="firstname" class="form-control" id="firstnameAdmin" placeholder="Firstname">
                        <span class="form-message"></span>
                    </div>
                    <div class="form-group">
                        <input name="lastname" type="lastname" class="form-control" id="lastnameAdmin" placeholder="Lastname">
                        <span class="form-message"></span>
                    </div>
                    <div class="form-group">
                        <input name="avatar" type="file" class="form-control" id="file" placeholder="IMG">
                        <span class="form-message"></span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="addaccount" class="btn btn-success">Submit</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Update admin modal -->
<div class="modal fade" id="updateAdminModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="update-form" enctype="multipart/form-data" action="http://localhost:8080/NoiThat/admin/editAccount" method="POST">
                <div class="modal-body">
                    <div class="avatar text-center">
                        <img id="avatar" src="" class="change-avatar">
                    </div>
                    <input type="hidden" name="update_id" id="update_id">
                    <div class="form-group">
                        <input id="email" name="email" type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input id="phone" name="phone" type="phone" class="form-control" placeholder="phoneNumber">
                    </div>
                    <div class="form-group">
                        <input id="firstname" name="firstname" type="firstname" class="form-control" placeholder="Firstname">
                    </div>
                    <div class="form-group">
                        <input id="lastname" name="lastname" type="lastname" class="form-control" placeholder="Lastname">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="updateaccount" class="btn btn-success">Submit</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.updatebtn').on('click', function() {
            $('#updateAdminModal').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();
            console.log(data);

            $('#update_id').val(data[0]);
            $('#firstname').val(data[1]);
            $('#lastname').val(data[2]);
            $('#email').val(data[3]);
            $('#phone').val(data[4]);
            $('#avatar').src(data[5]);


        })
    });

    document.addEventListener('DOMContentLoaded', function() {
        Validator({
            form: '.form-admin',
            formGroupSelector: '.form-group',
            errorSelector: '.form-message',
            rules: [
                Validator.isRequired('#firstnameAdmin', 'Vui l??ng nh???p h??? c???a b???n!'),
                Validator.isRequired('#lastnameAdmin', 'Vui l??ng nh???p t??n c???a b???n!'),
                Validator.isRequired('#phoneNumberAdmin', 'Vui l??ng nh???p s??? ??i???n tho???i!'),
                Validator.isPhoneNumber('#phoneNumberAdmin', 'S??? m??y qu?? kh??ch v???a nh???p l?? s??? kh??ng c?? th???c!'),
                Validator.isRequired('#emailAdmin', 'Vui l??ng nh???p email!'),
                Validator.isEmail('#emailAdmin'),
                Validator.isRequired('#passwordAdmin', 'Vui l??ng nh???p password!'),
                Validator.minLength('#passwordAdmin', 6),
            ],
        })
    })
</script>