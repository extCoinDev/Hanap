<html class="no-js" lang="en">
<head>
    <?php include('dependencies/header.php');?>
</head>
<body>
    <!-- Preloader -->
    <div id="preloader" class="preloader animated" style="position: relative; animation-duration:.3s!important ">
        <img src="dependencies/images/logo_name.svg" alt="" class="w3-display-middle" style="width:150px; " />
        <!--<div id="status"></div>-->
    </div>
    <?php include('overlays.php'); ?>
    <?php include('views.php'); ?>

</body>

  <?php include('dependencies/footer.php');

    if (isset($_GET['link'])){
    echo '<script>setSponsor("' . $_GET['link'] . '")</script>';
    }
 ?>

</html>