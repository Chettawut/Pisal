<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo PATH; ?>" class="brand-link">
        <img src="<?php echo PATH; ?>/img/logo_fb.png" class="brand-image img-circle elevation-3"
            style="background-color:white;">
        <span class="brand-text font-weight-light">Demo</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo PATH; ?>/img/default.jpg" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Chayapat Niropas</a>
            </div>
        </div>

        <nav class="mt-2" id="sideStore" style="display:none;">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header">Systems</li>
                <li class="nav-item">
                    <a href="<?php echo PATH; ?>/store/po" class="nav-link">
                        <i class="nav-icon fa fa-edit"></i>
                        <p>
                            ใบสั่งซื้อ (Purchase Order)
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo PATH; ?>/store/rr" class="nav-link">
                        <i class="nav-icon fa fa-truck"></i>
                        <p>
                            รับสินค้า (Goods Receipt)
                        </p>
                    </a>
                </li>
                <li class="nav-header">Data</li>
                <li class="nav-item">
                    <a href="<?php echo PATH; ?>/store/inventory" class="nav-link">
                        <i class="nav-icon fa fa-cube"></i>
                        <p>
                            วัสดุพื้นฐาน (Inventory)
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo PATH; ?>/store/supplier" class="nav-link">
                        <i class="nav-icon fa fa-cube"></i>
                        <p>
                            ผู้ขาย (Supplier)
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo PATH; ?>/store/unit" class="nav-link">
                        <i class="nav-icon 	fa fa-tag"></i>
                        <p>
                            หน่วยวัสดุ (Unit)
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo PATH; ?>/store/warehouse" class="nav-link">
                        <i class="nav-icon fas fa-warehouse"></i>
                        <p>
                           ประเภทวัสดุ (Type)
                        </p>
                    </a>
                </li>
                
            </ul>
        </nav>

        <nav class="mt-2" id="sideSale" style="display:none;">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header">Systems</li>
                <li class="nav-item">
                    <a href="<?php echo PATH; ?>/sale/so" class="nav-link">
                        <i class="nav-icon fas fa-file-invoice"></i>
                        <p>
                            บิลขาย (Sale Order)
                        </p>
                    </a>
                </li>
                <li class="nav-header">Data</li>
                <li class="nav-item">
                    <a href="<?php echo PATH; ?>/sale/patient" class="nav-link">
                        <i class="nav-icon fa fa-address-card"></i>
                        <p>
                            ข้อมูลคนไข้ (Patient)
                        </p>
                    </a>
                </li>
            </ul>
        </nav>


        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>