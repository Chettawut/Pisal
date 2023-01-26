<div id="divMenuHead">
    <!-- Navbar -->

    <nav class="main-header navbar navbar-expand navbar-dark navbar-light" style="background-color: #2471A3">

        <?php
		include_once("../const.php");
		include_once("../func.php");
        include_once("../func_pae.php");
        $conn= sql_connect() ;
        ?>

        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"
                    style="color: #FFFFFF; font-size: 22px;"><i class="fas fa-bars"></i></a>
            </li>

            <li class="nav-item d-sm-inline-block">
                <a href="" class="nav-link d-none d-lg-block " style="color: #FFFFFF; font-size: 22px;">Home</a>
            </li>

            <li class="nav-item d-sm-inline-block">
                <a class="nav-link d-block d-sm-none" data-toggle="collapse" data-target="#navbarToggleExternalContent"
                    aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation"
                    style="color: #FFFFFF; font-size: 20px;">
                    <span>Menu</span>
                </a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>

            <li class="user-footer">
                <div class="pull-right">
                    <a href="<?php echo PATH; ?>/logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
            </li>
        </ul>
    </nav>
    <nav class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
        <a href="" class="nav-link " style="color: #FFFFFF; font-size: 22px;">Home</a>
            <a href="" class="nav-link " style="color: #FFFFFF; font-size: 22px;">Home</a>
            <a href="" class="nav-link " style="color: #FFFFFF; font-size: 22px;">Home</a>
            <a href="" class="nav-link " style="color: #FFFFFF; font-size: 22px;">Home</a>
            <a href="" class="nav-link " style="color: #FFFFFF; font-size: 22px;">Home</a>
            <a href="" class="nav-link " style="color: #FFFFFF; font-size: 22px;">Home</a>
        </div>
    </nav>

</div>