

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All Reservations</h1>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-secondary">All Reservations</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>FirstName</th>
                            <th>LastName</th>
                            <th>Address</th>
                            <th>Country</th>
                            <th>Phone</th>
                            <th>Gender</th>
                            <th>RolesID</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>STT</th>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>FirstName</th>
                            <th>LastName</th>
                            <th>Address</th>
                            <th>Country</th>
                            <th>Phone</th>
                            <th>Gender</th>
                            <th>RolesID</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    <?php  
                        $stt=1;
                        foreach($data['reservation'] as $row){
                    ?>
                        <tr id="<?php echo 'reservation' .$stt; ?>">
                            <td><?php echo $stt ?></td>
                            <td id="<?php echo 'reserv' .$stt;?>"><?php echo $row['raReservationAgentID'] ?></td>
                            <td><?php echo $row['raUsername'] ?></td>
                            <td><?php echo $row['raPassword'] ?></td>
                            <td><?php echo $row['raFirstName'] ?></td>
                            <td><?php echo $row['raLastName'] ?></td>
                            <td><?php echo $row['raAddress'] ?></td>
                            <td><?php echo $row['raCountry'] ?></td>
                            <td><?php echo $row['raPhone'] ?></td>
                            <td><?php echo $row['raGender'] ?></td>
                            <td><?php echo $row['raRolesID'] ?></td>
                            <td>
                                
                                <a class="btn btn-edit" href="<?php echo URLAdmin.'editaccount/'.$row['aAdminID']; ?>">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <a class="btn btn-delete" onclick="return window.confirm('Bạn muốn xóa không');"  href="<?php echo URLAdmin.'deleteBooking/'.$row['bBookingID']; ?>">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
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

            