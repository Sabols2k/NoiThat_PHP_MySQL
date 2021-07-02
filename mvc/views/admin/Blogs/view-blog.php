

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All Blogs</h1>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-secondary">All Blogs</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="<?php echo URLAdmin ."addblog"?>" class="btn btn-light btn-icon-split mb-3">
                    <span class="icon text-gray-600">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                    <span class="text">ADD NEW</span>
                </a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php  
                        $stt=1;
                        foreach($data['blog'] as $row){
                    ?>
                        <tr>
                            <td><?php echo $stt ?></td>
                            <td><?php echo $row['blogTitle'] ?></td>
                            <td><img style="height: 50px; width: 50px; border-radius:50%" src="<?php echo imgAccount . $row['Blog'] ?>" alt=""></td> 
                            <td>
                                <button class="btn btn-edit">
                                    <a href="<?php echo URLAdmin.'editblog/'.$row['aAdminID']; ?>">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                </button>
                                <button class="btn btn-delete">
                                    <a onclick="return window.confirm('Bạn muốn xóa không');"  href="<?php echo URLAdmin.'deleteBlog/'.$row['aAdminID']; ?>" style="color: #fff;">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </button>
                            </td>
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
<!-- /.container-fluid -->

<!-- </div> -->
<!-- End of Main Content -->

            