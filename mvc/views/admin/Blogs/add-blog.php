<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Blog Details</h1>
    </div>

    <!-- New Booking Form Example -->
    <form method="POST">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-secondary">Add Blog Details</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 p-t-20">
                        <div class="form-group">
                            <label>Title</label>
                            <input name="title" type="text" class="form-control" placeholder="Title..." required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 p-t-20">
                        <div class="form-group">
                            <label>Content</label>
                            <textarea name="content" id="content" class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 p-t-20">
                        <div class="form-group">
                            <label>Image</label>
                            <input name="img" type="file" class="form-control" style="height: 100px">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 p-t-20 text-center">
                    <button type="submit" name="addblog" class="mdl-button mdl-button--raised btn-yellow">Submit</button>
                    <a class="mdl-button mdl-button--raised btn-default" href="<?php echo URLAdmin."viewblog" ?>" style="text-decoration: none;">Cancel</a>
                </div> 
            </div>
        </div>
    </form>
</div>
<!-- /.container-fluid -->
