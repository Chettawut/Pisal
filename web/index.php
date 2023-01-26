<?php
session_start();
// if ($_SESSION["user_login"] <>""){
	?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <?php 
    include_once("../import_css.php");
    
    ?>
</head>


<body class="hold-transition sidebar-mini sidebar-collapse">
    <div class="wrapper">

        <!-- Preloader -->

        <!-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?php echo PATH; ?>/img/rwi-logo-s.png" height="80" width="80">
        </div> -->

        <?php 
        include_once("menu_header.php");
        ?>

        <?php 
        include_once("menu_left.php");
        ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard v1</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            
        </div>
       

       
    </div>
    <!-- ./wrapper -->

    <?php include_once("../import_js.php");?>
</body>

<?php
//  odbc_close_all();	
// }else{
// header( "location: login.php");
//  exit(0);	
// }
?>

</html>
