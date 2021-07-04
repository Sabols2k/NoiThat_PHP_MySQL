


<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All Admins</h1>
    </div>
  
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-secondary">All Admins</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="<?php echo URLAdmin ."addAdmin"?>" class="btn btn-light btn-icon-split mb-3"
                data-toggle="modal" data-target="#addAdminModal">
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
                            <th>Avatar</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php  
                        foreach($data['admin'] as $row) {
                        ?>
                            <tr>
                                <td><?php echo $row['_id'] ?></td>
                                <td><?php echo $row['_firstname'] ?></td>
                                <td><?php echo $row['_lastname'] ?></td>
                                <td><?php echo $row['_email'] ?></td>
                                <td><img style="width: 60px; height: 60px; border-radius: 50%;" src="<?php echo imgAccount . $row['admin'] ?>" alt=""></td> 
                                <td class="d-flex justify-content-around">
                                    <a class="update-btn" href="<?php echo URLAdmin.'updateAdmin/'.$row['aAdminID']; ?>" data-toggle="modal" data-target="#updateAdminModal">
                                        <i class="fa fa-wrench fa-lg action" aria-hidden="true"></i>
                                    </a>
                                    <a class="delete-btn" onclick="return window.confirm('Bạn muốn xóa không');"  href="<?php echo URLAdmin.'deleteAdmin/'.$row['aAdminID']; ?>">
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
   <div class="modal fade" id="addAdminModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Admin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form modal-form form-create" action="" method="" id="form-1">
                        <div class="form-group">
                            <input value="" name="email" type="email" class="form-control" id="email" placeholder="Email">
                            <span class="form-message"></span>
                        </div>
                        <div class="form-group">
                            <input value="" name="password" type="password" class="form-control" id="password" placeholder="Password">
                            <span class="form-message"></span>
                        </div>
                        <div class="form-group">
                            <input value="" name="phoneNumber" type="phoneNumber" class="form-control" id="phoneNumber" placeholder="Phone number">
                            <span class="form-message"></span>
                        </div>  
                        <div class="form-group">
                            <input value="" name="firstname" type="firstname" class="form-control" id="firstname" placeholder="Firstname">
                            <span class="form-message"></span>
                        </div>
                        <div class="form-group">
                            <input value="" name="lastname" type="lastname" class="form-control" id="lastname" placeholder="Lastname">
                            <span class="form-message"></span>
                        </div>
                        <div class="form-group">
                            <input value="" name="file" type="file" class="form-control" id="File">
                            <span class="form-message"></span>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Update Admin Modal-->
    <div class="modal fade" id="updateAdminModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Admin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="" class="update-form" id="form-2">
                        <div class="form-group">
                            <input value="" name="email" type="email" class="form-control" id="email" placeholder="Email" disabled>
                            <span class="form-message"></span>
                        </div>
                        <div class="form-group">
                            <input value="" name="password" type="password" class="form-control" id="password" placeholder="Password">
                            <span class="form-message"></span>
                        </div>
                        <div class="form-group">
                            <input value="" name="phoneNumber" type="phoneNumber" class="form-control" id="phoneNumber" placeholder="Phone number">
                            <span class="form-message"></span>
                        </div>  
                        <div class="form-group">
                            <input value="" name="firstname" type="firstname" class="form-control" id="firstname" placeholder="Firstname">
                            <span class="form-message"></span>
                        </div>
                        <div class="form-group">
                            <input value="" name="lastname" type="lastname" class="form-control" id="lastname" placeholder="Lastname">
                            <span class="form-message"></span>
                        </div>
                        <div class="form-group">
                            <input value="" name="file" type="file" class="form-control" id="File">
                            <span class="form-message"></span>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <div class="modal-footer">
                        <button name="updateUser" type="submit" class="btn btn-success">Submit</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
