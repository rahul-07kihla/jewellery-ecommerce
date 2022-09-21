<?php
include_once "include/connect.php";
include_once "class/class.Database.php";
include_once "class/class.Order.php";

include_once "is_login.php";

$order = new Order();

$row =  $order->order_display();

include_once "include/header.php";
include_once "include/sidebar.php";
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
                                    <li class="breadcrumb-item"><a href="index.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="index.php">Order Table</a>
                                    </li>
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

                <!-- Table head options start -->
                <div class="row" id="table-hover-animation">
                    <div class="col-12">
                        <div class="card">
                        <?php
                        if(isset($_SESSION['succ']))
                        {
                        foreach($_SESSION['succ'] as $s)
                        ?>
                        <div class="alert alert-success" style="margin:20px;">
                        <?php echo $s; ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <?php
                        }
                        ?>
                            <div class="card-header">
                                <h4 class="card-title">Order Table</h4>
                            </div>
                            <div class="card-content">
                                <!-- <div class="card-body">
                                    <p><code class="highlighter-rouge"></code><code class="highlighter-rouge"></code><code class="highlighter-rouge"></code></p>
                                </div> -->
                                <br>
                                <div class="table-responsive">                                                 
                                    <table class="table table-hover-animation mb-0">
                                    <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Profile Picture</th> 
                                                <th scope="col">User Name</th>
                                                <th scope="col">Product Name</th>
                                                <th scope="col">Quantity</th>
                                                <th scope="col">Total Price</th>
                                                <th>Delete</th>
                                            </tr>                                        
                                        </thead>
                                        
                                        <?php
                                        if(!(isset($_GET['id'])))
                                        {
                                        ?>                                        
                                        <tbody>
                                        <?php
                                        foreach($row as $key => $value)
                                        {
                                            //print_r( PROFILE_IMAGE .  $value['profile_picture'] );exit;                                            
                                            ?>
                                        <tr>
                                                <td><img class="round" src="<?php echo PRODUCT_IMAGE .  $value['product_image']; ?>" height="50" width="50"></td>
                                                <td><?php echo $value['username']; ?></td>
                                                <td><?php echo $value['product_name']; ?></td>               
                                                <td><?php echo $value['quantity']; ?></td>
                                                <td><?php echo $value['totalprice']; ?></td>                                 
                                                <td><a href="models/order_proccess.php?id=<?= $value['id'];?>&type=delete"><img src="app-assets/images/icons/trash.svg"></a></td>                                                
                                            </tr>
                                        <?php
                                        }
                                    }
                                    ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Table head options end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

<?php
include "include/footer.php";
?>