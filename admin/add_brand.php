<?php
include_once "is_login.php";

include "include/header.php";
include "include/sidebar.php";
?>


<!-- BEGIN: Content-->
<div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0"></h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i> Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="brand.php"><i class="fab fa-bluetooth"></i> Brand</a>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrum-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                

                <!-- // Basic Floating Label Form section start -->
                
                        <div class="col-md-12 col-12">
                            <div class="card">
                            <?php
                            if(isset($_SESSION['err']))
                                {
                                foreach($_SESSION['err'] as $e)
                                    {
                                    ?>
                                    <div class="alert alert-danger" style="margin:20px;">
                                    <strong><?php echo $e; ?></strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <?php
                                }
                                } 
                                ?>
                                <div class="card-header">
                                    <h4 class="card-title">Brand</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form" action="models/brand_proccess.php" method="post">
                                        <input type="hidden" name="action" value="add">    
                                        <div class="form-body">
                                                <div class="row">

                                                    <div class="col-12">
                                                        <div class="form-label-group position-relative has-icon-left">
                                                            <input type="text" id="first-name-floating-icon" class="form-control" name="name" placeholder="Brand Name">
                                                            <div class="form-control-position">
                                                                <!-- <i class="feather icon-user"></i> -->
                                                            </div>
                                                            <label for="first-name-floating-icon">Name</label>
                                                        </div>
                                                    </div>                                                                                                       
                                                    
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-primary mr-1 mb-1">Add Brand</button>
                                                        <!-- <button type="reset" class="btn btn-outline-warning mr-1 mb-1">Reset</button> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic Floating Label Form section end -->


            </div>
        </div>
    </div>
    <!-- END: Content-->
<?php
include "include/footer.php";
?>