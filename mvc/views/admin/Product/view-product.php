<div class="container-fluid">

    <div class="row">
        <div class="col-lg-9 d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">All Products</h1>
        </div>
        <div class="col-lg-3 d-sm-flex align-items-center justify-content-between ">
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 " method="GET">
                <div class="input-group">
                    <input name="value" type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-info" type="submit">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-secondary">All Products</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="#!" class="btn btn-light btn-icon-split mb-3" data-toggle="modal" data-target="#addProductModal">
                    <span class="icon text-gray-600">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                    <span class="text">ADD NEW</span>
                </a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Images</th>
                            <th>Price</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($data['product'] as $row) {
                        ?>
                            <tr>
                                <td><?php echo $row['productid'] ?></td>
                                <td><?php echo $row['name'] ?></td>
                                <td><img style="width: 60px; height: 60px; border-radius: 50%;" src="<?php echo imgAdmin . $row['img'] ?>" alt=""></td>
                                <td><?php echo $row['price'] ?></td>
                                <td><?php echo $row['category'] ?></td>
                                <td class="d-flex justify-content-around">
                                    <button type="button" class="btn btn-success updatebtn">
                                        <i class="fa fa-wrench fa-lg action" aria-hidden="true"></i>
                                    </button>
                                    <a type="button" class="btn btn-danger delete-btn" onclick="return window.confirm('Bạn muốn xóa không');" href="<?php echo URLAdmin . 'deleteProduct/' . $row['productid']; ?>">
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

<!-- Add Product Modal-->
<div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="modal-form form-create" enctype="multipart/form-data" action="http://localhost:8080/NoiThat/admin/AddProduct" method="POST">
                <div class="modal-body">

                    <div class="form-group">
                        <input name="name" type="text" class="form-control"  placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input name="price" type="text" class="form-control"  placeholder="Price">
                    </div>
                    <div class="form-group">
                        <input name="category" type="text" class="form-control" placeholder="Category">
                    </div>
                    <div class="form-group">
                        <input name="img" type="file" class="form-control"  placeholder="IMG">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" name="addproduct" class="btn btn-success">Submit</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Update admin modal -->
<div class="modal fade" id="updateProductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a href="" id="modalEdit" data-dismiss="modal" style="text-decoration: none; color: #000">X</a>
            </div>
            <form class="update-form" enctype="multipart/form-data" action="http://localhost:8080/NoiThat/admin/editProduct" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="update_id" id="update_id">
                    <div class="form-group">
                        <input id="name" name="name" type="name" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input id="price" name="price" type="price" class="form-control" placeholder="Price">
                    </div>
                    <div class="form-group">
                        <input id="category" name="category" type="category" class="form-control" placeholder="Category">
                    </div>
                    <div class="form-group">
                        <input id="img" name="img" type="file" class="form-control" placeholder="IMG">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" name="updateproduct" class="btn btn-success">Submit</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<script>
    $(document).ready(function() {
        $('.updatebtn').on('click', function() {
            $('#updateProductModal').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();
            console.log(data);

            $('#update_id').val(data[0]);
            $('#name').val(data[1]);
            $('#price').val(data[3]);
            $('#category').val(data[4]);
            $('#img').val(data[2]);


        })
    });
</script>