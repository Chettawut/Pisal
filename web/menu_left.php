<aside class="main-sidebar sidebar-light-primary elevation-4" style="background-color: #F0F8FF" >
    <a href="<?php echo PATH; ?>" class="brand-link" style="background-color: #5499C7" >
        <img src="<?php echo PATH; ?>/img/rwi-logo-s.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light" style="color: #FFFFFF;">AdminRWI</span>
        
    </a>
    <div class="sidebar" >
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <?php 
            
                              $strSQL = " SELECT emppic FROM [RWI_DATACENTER].[dbo].[Au_EmpMaster] where empcode = '".$_SESSION["empcode"]."' ";
                              $oRs=odbc_exec($conn,$strSQL);
                              odbc_fetch_row($oRs);
                                            
                              $emppic = odbc_result($oRs, 'emppic');
                              if($emppic!='')
                              echo '<img src="/empimages/'.$emppic.'"  class="img-circle elevation-3" >';
                              else
                              echo '<img src="/empimages/default.png"  class="img-circle elevation-3" >';                                        
                            ?>
            </div>
            <div class="info" >
                <a href="#" class="d-block"><?php echo $_SESSION["user_name"];?></a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa fa-briefcase"></i>
                        <p>Sale
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                Report
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo PATH; ?>/sale/monthly-sales" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        Monthly-sales</a>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa fa-truck"></i>
                        <p>WH & Dispatch
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Report
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo PATH; ?>/backlog" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        Back Order</a>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    
</aside>