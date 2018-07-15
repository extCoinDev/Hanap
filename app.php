
<!DOCTYPE Joseph>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <?php include('dependencies/header.php'); ?>
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
