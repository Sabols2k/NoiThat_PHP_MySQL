<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Booking Details</h1>
    </div>

    <!-- New Booking Form Example -->
    <form method="POST">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-secondary">Add Booking Details</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 p-t-20">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Name</label>
                            <input name="name" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6 p-t-20">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Mail Address</label>
                            <input type="text" name="mail" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 p-t-20">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Phone Number</label>
                            <input name="phone" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6 p-t-20">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Country</label>
                            <input type="text" name="country" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 p-t-20">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">DateCheckIn</label>
                            <input type="date" name="DateCheckIn" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6 p-t-20">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">DateCheckOut</label>
                            <input type="date" name="DateCheckOut" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 p-t-20">
                        <div class="form-group">
                            <label>Number Adults</label>
                            <input type="text" name="NumberAdults" class="form-control">

                        </div>
                    </div>
                    <div class="col-lg-6 p-t-20">
                        <div class="form-group">
                            <label>Number Children</label>
                            <input type="text" name="NumberChildren" class="form-control">

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 p-t-20">
                        <div class="form-group">
                            <label>Room Type</label>
                            <select name="booking-roomtype" class="form-control" title="Select Room Type" data-header="Select Room Type">
                                <option value="Single Room" data-subtext="<span class='badge badge-info'>$89 / night</span>">Single Room</option>
                                <option value="Double Room" data-subtext="<span class='badge badge-info'>$129 / night</span>">Double Room</option>

                            </select>

                        </div>
                        <div class="form-group">
                            <label> roomcount</label>
                            <input name="roomcount" type="text" class="form-control">

                        </div>
                       
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 p-t-20">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Comments</label>
                            <input name="Descriptions" type="text" class="form-control">

                        </div>
                    </div>
                    

                </div>
                <div class="col-lg-12 p-t-20 text-center">
                    <button type="submit" name="addbooking" class="mdl-button mdl-button--raised btn-yellow">Submit</button>
                    <a class="mdl-button mdl-button--raised btn-default" href="<?php echo URLAdmin . "viewbooking" ?>" style="text-decoration: none;">Cancel</a>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- /.container-fluid -->