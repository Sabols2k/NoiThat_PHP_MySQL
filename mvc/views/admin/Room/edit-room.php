<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Room Details</h1>
    </div>

    <!-- New Booking Form Example -->
    <form method="POST">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-secondary">Edit Room Details</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 p-t-20">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">RoomID</label>
                            <input value="<?php echo $data['room']['RoomID']; ?>" name="RoomID" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6 p-t-20">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">RoomNumber</label>
                            <input value="<?php echo $data['room']['RoomNumber']; ?>" name="RoomNumber" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 p-t-20">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Type</label>
                            <select name="RoomTypeID" class="form-control" id="exampleFormControlSelect1" value="<?php echo $data['room']['rRoomType']; ?>">
                                <option>SingleRoom</option>
                                <option>DoubleRoom</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 p-t-20">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Status</label>
                            <select name="RoomstatusID" class="form-control" id="exampleFormControlSelect1" value="<?php if($data['room']['RoomstatusID'] == '1')  { echo "Full";} else {echo "Null";}; ?>">
                                <option>Full</option>
                                <option>Null</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 p-t-20">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Description</label>
                            <input value="<?php echo $data['room']['Description']; ?>" name="Description"type="text" class="form-control">
                        </div>
                    </div>
                </div>
               
                <div class="col-lg-12 p-t-20 text-center">
                    <button type="submit" name="editRoom" value="Update" class="mdl-button mdl-button--raised btn-yellow" href="">Submit</button>
                    <a class="mdl-button mdl-button--raised btn-default" href="<?php echo URLAdmin."viewroom" ?>" style="text-decoration: none;">Cancel</a>
                </div> 
            </div>

        </div>
    </form>
</div>
<!-- /.container-fluid -->
