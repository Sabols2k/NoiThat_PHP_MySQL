<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Room Details</h1>
    </div>

    <!-- New Booking Form Example -->
    <form method="POST">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-secondary">Add Room Details</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6 p-t-20">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Room Number</label>
                        <input name="Roomnumber" type="text" class="form-control">
                    </div>                               
                </div>
                <div class="col-lg-6 p-t-20">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Type</label>
                        <select name="RoomType" class="form-control" id="exampleFormControlSelect1">
                            <option>Single Room</option>
                            <option>Double Room</option>
                        </select>
                    </div>
                </div>
                
            </div>
            
            
            <div class="row">              
                <div class="col-lg-12 p-t-20">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Description</label>
                        <textarea name="Description"class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-12 p-t-20 text-center">
                <button type="submit" name="addroom" class="mdl-button mdl-button--raised btn-yellow">Submit</button>
                <a class="mdl-button mdl-button--raised btn-default" href="<?php echo URLAdmin."viewroom" ?>" style="text-decoration: none;">Cancel</a>
            </div> 
        </div>

    </div>
    </form>
</div>
<!-- /.container-fluid -->