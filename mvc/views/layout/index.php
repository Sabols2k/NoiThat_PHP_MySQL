<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evo Nội Thất</title>
    <?php 
        require_once "general/css.php";
    ?>
  </head>
<body>
      <!-- ========== HEADER ========== -->
      <?php $page = 'home'; require_once('general/header.php');?>
      <!-- ========== HOMEPAGE ========== -->
      <?php
        require_once('general/home.php');
      ?> 
      <!-- ========== FOOTER ========== -->
      <?php
        require_once('general/footer.php');
      ?> 
    </div>
    <!-- ========== JAVASCRIPT ========== -->
    <?php 
        require_once('general/js.php');
    ?>
  </body>
</html>