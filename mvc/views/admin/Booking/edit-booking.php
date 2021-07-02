<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Booking Details</h1>
    </div>

    <!-- New Booking Form Example -->
    <form method="POST">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-secondary">Edit Booking Details</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6 p-t-20">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">BookingID</label>
                        <input value="<?php echo $data['booking']['bBookingID']; ?>" name="BookingID" type="text" class="form-control">
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">GuestID</label>
                        <input value="<?php echo $data['booking']['bGuestID']; ?>" name="GuestID" type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 p-t-20">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">ReservationAgent</label>
                        <input value="<?php echo $data['booking']['bReservationAgentID']; ?>" name="ReservationAgentID" type="text" class="form-control">
                    </div>                               
                </div>
                <div class="col-lg-6 p-t-20">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">DateCheckIn</label>
                        <input value="<?php echo $data['booking']['bDateCheckIn']; ?>" name="DateCheckIn"type="date" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 p-t-20">
                    <div class="form-group">
                            <label for="exampleFormControlInput1">DateCheckOut</label>
                            <input value="<?php echo $data['booking']['bDateCheckOut']; ?>" name="DateCheckOut"type="date" class="form-control">
                    </div>
                </div>
                <div class="col-lg-6 p-t-20">
                    <div class="form-group">
                            <label for="exampleFormControlInput1">RoomCount</label>
                            <input value="<?php echo $data['booking']['bRoomCount']; ?>" name="RoomCount"type="text" class="form-control">
                    </div>
                </div>
                
            </div>
            
           
            <div class="col-lg-12 p-t-20 text-center">
                <button  type="submit" name="editBooking" value="Update" class="mdl-button mdl-button--raised btn-pink" href="<?php echo URLAdmin.'viewBooking'?>"> Submit
               </button>
               <a class="mdl-button mdl-button--raised btn-default" href="<?php echo URLAdmin."viewbooking" ?>" style="text-decoration: none;">Cancel</a>
            </div> 
        </div>

    </div>
    </form>
</div>
<!-- /.container-fluid -->
