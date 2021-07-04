<ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin-dashboard">
        <div class="sidebar-brand-icon">
            <img src="<?php echo URL ."mvc/Assets/admin/img/logo.png"?>" alt="logo" width="80%" height="80%">
        </div>
    </a>

    <li class="nav-item <?php if($_SESSION['function']=='index'){echo "active";}else{echo "";} ?>">
        <a class="nav-link" href="<?php echo URLAdmin?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item <?php if($_SESSION['function']=='account'){echo "active";}else{echo "";} ?>">
        <a class="nav-link" href="<?php echo URLAdmin."account"?>">
        <i class="fas fa-fw fa-address-book"></i>
            <span>Accounts</span></a>
    </li>

    <li class="nav-item <?php if($_SESSION['function']=='user'){echo "active";}else{echo "";} ?>">
        <a class="nav-link" href="<?php echo URLAdmin."user"?>">
        <i class="fas fa-fw fa-address-book"></i>
            <span>Users</span></a>
    </li>

    <li class="nav-item <?php if($_SESSION['function']=='product'){echo "active";}else{echo "";} ?>">
        <a class="nav-link" href="<?php echo URLAdmin."product"?>">
        <i class="fas fa-fw fa-address-book"></i>
            <span>Products</span></a>
    </li>
     
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>


