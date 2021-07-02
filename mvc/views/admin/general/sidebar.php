<ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <img src="<?php echo URL ."mvc/Assets/admin/img/quiteluxury_logo.png"?>" alt="logo" width="100%" height="100%">
        </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?php if($_SESSION['function']=='index'){echo "active";}else{echo "";} ?>">
        <a class="nav-link" href="<?php echo URLAdmin?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <li class="nav-item <?php if($_SESSION['function']=='reservation'){echo "active";}else{echo "";} ?>">
        <a class="nav-link" href="<?php echo URLAdmin."Reservation"?>">
        <i class="fas fa-fw fa-address-book"></i>
            <span>Reservation Details</span></a>
    </li>
    <!-- Nav Item - Booking Collapse Menu -->
    <li class="nav-item <?php if($_SESSION['function']=='booking'){echo "active";}else{echo "";} ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBooking"
            aria-expanded="true" aria-controls="collapseBooking">
            <i class="fas fa-fw fa-briefcase"></i>
            <span>Booking</span>
        </a>
        <div id="collapseBooking" class="collapse" aria-labelledby="headingBooking" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Booking:</h6>
                <a class="collapse-item" href="<?php echo URLAdmin."addbooking" ?>">New Booking</a>
                <a class="collapse-item" href="<?php echo URLAdmin."viewbooking" ?>">View Booking</a>
            </div>
        </div>
    </li>
     <!-- Nav Item - Rooms Collapse Menu -->
     <li class="nav-item <?php if($_SESSION['function']=='room'){echo "active";}else{echo "";} ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRoom"
            aria-expanded="true" aria-controls="collapseRoom">
            <i class="fas fa-fw fa-hotel"></i>
            <span>Rooms</span>
        </a>
        <div id="collapseRoom" class="collapse" aria-labelledby="headingRoom"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">My Rooms:</h6>
                <a class="collapse-item" href="<?php echo URLAdmin."addroom" ?>">Add Room Details</a>
                <a class="collapse-item" href="<?php echo URLAdmin."viewroom" ?>">View All Rooms</a>
            </div>
        </div>
    </li>
    <!-- Nav Item - Accounts Collapse Menu -->
    <li class="nav-item <?php if($_SESSION['function']=='account'){echo "active";}else{echo "";} ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAccount"
            aria-expanded="true" aria-controls="collapseAccount">
            <i class="fas fa-fw fa-user"></i>
            <span>Accounts</span>
        </a>
        <div id="collapseAccount" class="collapse" aria-labelledby="headingAccount" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Accounts:</h6>
                <a class="collapse-item" href="<?php echo URLAdmin."addaccount" ?>">Add Account Details</a>
                <a class="collapse-item" href="<?php echo URLAdmin."viewaccount" ?>">View All Accounts</a>
            </div>
        </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>

