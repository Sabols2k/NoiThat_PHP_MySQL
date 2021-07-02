
<?php  
    echo "index";    
    if(empty($_SESSION['admin']['username'])){
        // header('Location:'.URLAdmin.'login');
        echo "<script>window.location.href= '".URLAdmin.'login'."'</script>";

    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin - Hotel Booking Room</title>
    <?php
    require_once('general/css.php');
    ?>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
            if($_SESSION['admin']['type']== 'reserve'){
                require_once('general/sidebarReserve.php');
            }else{
            require_once('general/sidebar.php');
            }
        ?>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php
                    require_once('general/navbar.php');
                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                
                <?php
                    require_once($data['main'].'.php');
                ?>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Design by &copy; Team 5 / 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <?php
        require_once('general/logout.php');
    ?>
    <?php
        require_once('general/js.php');
    ?>
    
</body>

</html>