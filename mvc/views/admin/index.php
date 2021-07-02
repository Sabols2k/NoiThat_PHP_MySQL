<?php  
    echo "index";    
    if(empty($_SESSION['admin']['username'])){

        echo "<script>window.location.href= '".URLAdmin.'login'."'</script>";

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin - Evo Furniture</title>
    <?php
        require_once('general/css.php');
    ?>
</head>

<body id="page-top">

    <div id="wrapper">

        <?php
            require_once('general/sidebar.php');
        ?>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">
                <?php
                    require_once('general/navbar.php');
                ?>
                
                <?php
                    require_once($data['main'].'.php');
                ?>
            </div>
   
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Design by &copy; Team 3 / 2020</span>
                    </div>
                </div>
            </footer>

        </div>

    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <?php
        require_once('general/logout.php');
    ?>
    <?php
        require_once('general/js.php');
    ?>

</body>

</html>