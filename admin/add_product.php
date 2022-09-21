<?php
include_once "include/connect.php";
include_once "class/class.Database.php";
include_once "class/class.Product.php";

include_once "is_login.php";

include "include/header.php";
include "include/sidebar.php";

$product = new Product();

$rows = $product->select_brand();

$row = $product->select_category();

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
                                    <li class="breadcrumb-item"><a href="user.php"><i class="fas fa-user"></i> Product</a>
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
                                    <h4 class="card-title">Product</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form" action="models/product_proccess.php" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="action" value="add">    
                                        <div class="form-body">
                                                <div class="row">
                                                <div class="col-12">
                                                        <div class="form-label-group position-relative has-icon-left">
                                                            <input type="file" id="email-id-floating-icon" class="form-control" name="product_image" placeholder="product_image">
                                                            <div class="form-control-position">
                                                                <i class="feather icon"></i>
                                                            </div>
                                                            <label for="product-id-floating-icon"></label>

                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-label-group position-relative has-icon-left">
                                                            <input type="text" id="first-name-floating-icon" class="form-control" name="productname" placeholder="Product Name">
                                                            <div class="form-control-position">
                                                                <i class="feather icon-user"></i>
                                                            </div>
                                                            <label for="first-name-floating-icon">Product Name</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-label-group position-relative has-icon-left">
                                                            <input type="text" id="email-id-floating-icon" class="form-control" name="product_code" placeholder="Enter Product code">
                                                            <div class="form-control-position">
                                                            <i class="fas fa-code"></i>
                                                            </div>
                                                            <label for="email-id-floating-icon">Product code</label>

                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-12">
                                                        <div class="form-label-group position-relative has-icon-left">
                                                            <input type="text" id="contact-floating-icon" class="form-control" name="availability" placeholder="Availibility">
                                                            <div class="form-control-position">
                                                            <i class="fas fa-at"></i>
                                                            </div>
                                                            <label for="contact-floating-icon">Availibility</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-label-group position-relative has-icon-left">
                                                    <textarea class="form-control" name="description" placeholder="About Product"></textarea>
                                                    <div class="form-control-position">
                                                    <i class="far fa-address-card"></i>
                                                            </div>
                                                        <label for="contact-floating-icon">Product Description</label>
                                                    </div>
                                                </div>
                                                    
                                                    
                                                    <div class="col-12">
                                                        <div class="form-label-group position-relative has-icon-left">
                                                        <select name="brand" class="form-control">
                                                        <?php
                                                        foreach($rows as $key => $value)
                                                        {
                                                        ?>                                                           
                                                            <option value="<?php echo $value['id']; ?>"><?php echo $value['brand_name']; ?></option>
                                                        <?php
                                                            }
                                                        ?>
                                                            </select>
                                                            <div class="form-control-position">
                                                            <i class="fab fa-bluetooth-b"></i>
                                                            </div>
                                                            <label for="password-floating-icon">Brand</label>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    <div class="col-12">
                                                        <div class="form-label-group position-relative has-icon-left">
                                                            <select name="category" class="form-control">
                                                            <?php
                                                            foreach($row as $key1 => $value1)
                                                            {
                                                            ?>
                                                                <option value="<?php echo $value1['id']; ?>"><?php echo $value1['category_name']; ?></option>
                                                            <?php
                                                            }
                                                            ?>
                                                            </select>
                                                            <div class="form-control-position">
                                                            <i class="fab fa-bluetooth-b"></i>
                                                            </div>
                                                            <label for="password-floating-icon">Category</label>
                                                        </div>
                                                    </div>                                                    

                                                    <div class="col-12">
                                                        <div class="form-label-group position-relative has-icon-left">
                                                            <input type="text" id="desciption-floating-icon" class="form-control" name="ptype" placeholder="Product type">
                                                            <div class="form-control-position">
                                                            <i class="fab fa-tumblr"></i>
                                                            </div>
                                                            <label for="password-floating-icon">Product type</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-label-group position-relative has-icon-left">
                                                            <input type="text" id="desciption-floating-icon" class="form-control" name="dwidth" placeholder="Design Width">
                                                            <div class="form-control-position">
                                                            <i class="fas fa-text-width"></i>
                                                            </div>
                                                            <label for="password-floating-icon">Design Widh</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-label-group position-relative has-icon-left">
                                                            <input type="text" id="desciption-floating-icon" class="form-control" name="dheight" placeholder="Design Height">
                                                            <div class="form-control-position">
                                                            <i class="fas fa-text-height"></i>
                                                            </div>
                                                            <label for="password-floating-icon">Design Height</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-label-group position-relative has-icon-left">
                                                            <input type="color" value="" id="desciption-floating-icon" class="form-control" name="color" placeholder="color">
                                                            <div class="form-control-position">
                                                            <!-- <i class="fas fa-tint"></i> -->
                                                            </div>
                                                            <label for="password-floating-icon">color</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-label-group position-relative has-icon-left">
                                                            <input type="text" id="desciption-floating-icon" class="form-control" name="material" placeholder="Material">
                                                            <div class="form-control-position">
                                                            <i class="fab fa-maxcdn"></i>
                                                            </div>
                                                            <label for="password-floating-icon">Material</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-label-group position-relative has-icon-left">
                                                            <input type="text" id="desciption-floating-icon" class="form-control" name="plating" placeholder="Plating">
                                                            <div class="form-control-position">
                                                            <i class="fab fa-pinterest-p"></i>
                                                            </div>
                                                            <label for="password-floating-icon">Plating</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-label-group position-relative has-icon-left">
                                                            <input type="text" id="desciption-floating-icon" class="form-control" name="stype" placeholder="Stone type">
                                                            <div class="form-control-position">
                                                            <i class="fab fa-stripe-s"></i>
                                                            </div>
                                                            <label for="password-floating-icon">Stone type</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-label-group position-relative has-icon-left">
                                                            <input type="text" id="desciption-floating-icon" class="form-control" name="price" placeholder="Product price">
                                                            <div class="form-control-position">
                                                            <!-- <i class="fab fa-tumblr"></i> -->
                                                            </div>
                                                            <label for="password-floating-icon">Price</label>
                                                        </div>
                                                    </div>


                                                    <!-- <div class="form-group col-12">
                                                        <fieldset class="checkbox">
                                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                                <input type="checkbox">
                                                                <span class="vs-checkbox">
                                                                    <span class="vs-checkbox--check">
                                                                        <i class="vs-icon feather icon-check"></i>
                                                                    </span>
                                                                </span>
                                                                <span class="">Remember me</span>
                                                            </div>
                                                        </fieldset>
                                                    </div> -->
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-primary mr-1 mb-1">Add Product</button>
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