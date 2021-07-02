<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All Admins</h1>
    </div>
  
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-secondary">All Users</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="<?php echo URLAdmin ."addUser"?>" class="btn btn-light btn-icon-split mb-3"
                data-toggle="modal" data-target="#addUserModal">
                    <span class="icon text-gray-600">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                    <span class="text">ADD NEW</span>
                </a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php  
                        foreach($data['product'] as $row) {
                        ?>
                            <tr>
                                <td><?php echo $row['_id'] ?></td>
                                <td>
                                    <img style="width: 60px; height: 60px; border-radius: 50%;" src="<?php echo imgAccount . $row['product'] ?>" alt="">
                                </td> 
                                <td><?php echo $row['name'] ?></td>
                                <td><?php echo $row['price'] ?></td>
                                <td class="d-flex justify-content-around">
                                    <a class="update-btn" href="<?php echo URLAdmin.'updateProduct/'.$row['aProductID']; ?>" data-toggle="modal" data-target="#updateproductModal">
                                        <i class="fa fa-wrench fa-lg action" aria-hidden="true"></i>
                                    </a>
                                    <a class="delete-btn" onclick="return window.confirm('Bạn muốn xóa không');"  href="<?php echo URLAdmin.'deleteProduct/'.$row['aproductID']; ?>">
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

    <!-- Add product Modal-->
    <div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
       aria-hidden="true">
       <div class="modal-dialog" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
                <form class="modal-form form-create" action="/all-product/create" method="POST">
                   <div class="modal-body">
                  
                       <div class="form-group">
                           <input name="email" type="email" class="form-control" id="exampleInputPassword" placeholder="Email">
                       </div>
                       <div class="form-group">
                           <input name="username" type="username" class="form-control" id="exampleInputPassword" placeholder="Username">
                       </div>
                       <div class="form-group">
                           <input name="password" type="password" class="form-control" id="exampleInputPassword" placeholder="Password">
                       </div>
                       <div class="form-group">
                           <input name="phoneNumber" type="phoneNumber" class="form-control" id="exampleInputPassword" placeholder="phoneNumber">
                       </div>
                       <div class="form-group">
                           <input name="firstname" type="firstname" class="form-control" id="exampleInputPassword" placeholder="Firstname">
                       </div>
                       <div class="form-group">
                           <input name="lastname" type="lastname" class="form-control" id="exampleInputPassword" placeholder="Lastname">
                       </div>
                       <div class="form-group">
                           <input name="age" type="age" class="form-control" id="exampleInputPassword" placeholder="age">
                       </div>
                       <div class="form-group">
                           <input name="img" type="img" class="form-control" id="exampleInputPassword" placeholder="IMG">
                       </div>
                 
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
           </div>
       </div>
   </div>
        
    <!-- Update Product modal -->
    <div class="modal fade" id="updateProductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <a href="" id="modalEdit" data-dismiss="modal" style="text-decoration: none; color: #000">X</a>
                </div>
                <div class="modal-body">
                    <form  method="POST" class="update-form">
                        <div class="form-group">
                            <input value="" name="email" type="email" class="form-control" id="exampleInputPassword1"
                                placeholder="Email" disabled>
                        </div>
                        <div class="form-group">
                            <input value="" name="firstname" type="firstname" class="form-control" id="exampleInputPassword1"
                                placeholder="Firstname" >
                        </div>
                        <div class="form-group">
                            <input value="" name="lastname" type="lastname" class="form-control" id="exampleInputPassword1"
                                placeholder="Lastname" >
                        </div>
                        
                        <button name="updateProduct" type="submit" class="btn btn-primary mt-2">Submit</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>



            