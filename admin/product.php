<?php
include_once "include/connect.php";
include_once "class/class.Database.php";
include_once "class/class.Product.php";

include_once "is_login.php";

$product = new Product();

$rows1 = $product->show_data();

$rows = $product->select_brand();

$row = $product->select_category();


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
                                    <li class="breadcrumb-item active"><a href="index.php">Product Table</a>
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
                                <h4 class="card-title">Product Table</h4>
                            </div>
                            <div class="card-content">
                                <!-- <div class="card-body">
                                    <p><code class="highlighter-rouge"></code><code class="highlighter-rouge"></code><code class="highlighter-rouge"></code></p>
                                </div> -->
                                <br>
                                <div class="table-responsive">       
                                <form action="models/product_proccess.php" method="post" id="form1" name="form1" enctype="multipart/form-data">                                                         
                                    <table class="table table-hover-animation mb-0">
                                    <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Product Image</th> 
                                                <th scope="col">Product Name</th>
                                                <th scopr="col">Product code</th>
                                                <th scope="col">Availibility</th>
                                                <th scope="col">About Product</th>
                                                <th scope="col">Brand Name</th>
                                                <th scope="col">Category Name</th>
                                                <th scope="col">Product Type</th>
                                                <th scope="col">Design Width</th>
                                                <th scope="col">Design Height</th>
                                                <th scope="col">Color</th>
                                                <th scope="col">Material</th>
                                                <th scope="col">Plating</th>
                                                <th scope="col">Stone Type</th>
                                                <th scope="col">Price</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        
                                        <?php
                                        if(!(isset($_GET['id'])))
                                        {
                                        ?>                                        
                                        <tbody>
                                        <?php
                                        foreach($rows1 as $key => $value)
                                        {
                                            //print_r( PROFILE_IMAGE .  $value['profile_picture'] );exit;                                            
                                            ?>
                                        <tr>
                                                <th scope="row"><?php echo $value['id']; ?></th>
                                                <td><img class="round" src="<?php echo PRODUCT_IMAGE .  $value['product_image']; ?>" height="50" width="50"></td>
                                                <td><?php echo $value['product_name']; ?></td>
                                                <td><?php echo $value['product_code']; ?></td>
                                                <td><?php echo $value['avalability']; ?></td>
                                                <td><?php echo $value['about_product']; ?></td>
                                                <td><?php echo $value['brand_name']; ?></td>
                                                <td><?php echo $value['category_name']; ?></td>
                                                <td><?php echo $value['product_type']; ?></td>
                                                <td><?php echo $value['design_width']; ?></td>
                                                <td><?php echo $value['design_height']; ?></td>
                                                <td><div style="background-color:<?php echo $value['color']; ?>;min-height:30px;min-width:10px;"></div></td>
                                                <td><?php echo $value['material']; ?></td>
                                                <td><?php echo $value['plating']; ?></td>
                                                <td><?php echo $value['stone_type']; ?></td>
                                                <td><?php echo $value['price']; ?></td>
                                                <td><a href="?id=<?= $value['id']; ?>&type=edit"><img src="app-assets/images/icons/edit.svg"></a></td>
                                                <td><a href="models/product_proccess.php?id=<?= $value['id'];?>&type=delete"><img src="app-assets/images/icons/trash.svg"></a></td>
                                                <?php
                                                if($value['status']==1)
                                                {
                                                ?>
                                                <td class="nav-item d-none d-lg-block"><a class="nav-link" href="models/product_proccess.php?id=<?= $value['id']; ?>&type3=status&type2=1" data-toggle="tooltip" data-placement="top" title="Active"><h1>&#128515</h1></a></td>
                                                <?php
                                                }
                                                else
                                                {
                                                ?>
                                                <td class="nav-item d-none d-lg-block"><a class="nav-link" href="models/product_proccess.php?id=<?=$value['id']; ?>&type3=status&type2=0" data-toggle="tooltip" data-placement="top" title="Inactive"><h1>&#128545</h1></a></td>
                                                <?php
                                                }
                                                ?>
                                            </tr>
                                        <?php
                                        }
                                    }
                                    // print_r($action);
                                    // exit;
                                    else if(isset($_GET['id']) && isset($_GET['type'])=='edit')
                                    {
                                        ?>                                        
                                        <?php
                                                                              
                                        $rows1 = $product->show_with_id_product($_GET['id']);
                                        // echo "<pre>";
                                        // print_r($rows1);
                                        // exit;
                                                                                
                                        ?>                                        
                                        <tr>
                                        <td scope="row"><?php echo $rows1['id']; ?></td>
                                                <input type="hidden" value="edit" name="action" for="form1">                                                
                                                <td><input type="hidden" value="<?php echo $rows1['id']; ?>" name="id1" for="form1">
                                                    <input type="file" style="display:none;" name="profile" id="profile" for="from1"><label for="profile"><img class="round" src="<?php echo PRODUCT_IMAGE . $rows1['product_image']; ?>" height="50" width="50"></label></td>
                                                    <!-- <td><img class="round" src="" height="50" width="50"></td> -->
                                                <td><input type="text" value="<?php echo $rows1['product_name']; ?>" name="p_name"></td>
                                                <td><input type="text" value="<?php echo $rows1['product_code']; ?>" name="p_code"></td>
                                                <td><input type="text" value="<?php echo $rows1['avalability']; ?>" name="avalability"></td>
                                                <td><input type="text" value="<?php echo $rows1['about_product']; ?>" name="desc"></td>
                                                <td><select name="brand" class="form-control">
                                                        <?php
                                                        foreach($rows as $key => $value)
                                                        {
                                                        ?>                                                           
                                                            <option value="<?php echo $value['id']; ?>"><?php echo $value['brand_name']; ?></option>                                                            
                                                        <?php
                                                            }
                                                        ?>
                                                            </select></td>
                                                <td><select name="category" class="form-control">
                                                            <?php
                                                            foreach($row as $key1 => $value1)
                                                            {
                                                            ?>
                                                                <option value="<?php echo $value1['id']; ?>"><?php echo $value1['category_name']; ?></option>
                                                            <?php
                                                            }
                                                            ?>
                                                            </select></td>
                                                <td><input type="text" value="<?php echo $rows1['product_type']; ?>" name="p_type"></td>
                                                <td><input type="text" value="<?php echo $rows1['design_width']; ?>" name="d_width"></td>
                                                <td><input type="text" value="<?php echo $rows1['design_height']; ?>" name="d_height"></td>
                                                <td><input type="color" value="<div style='background-color:<?php echo $rows1['color']; ?>;min-height:30px;min-width:10px;'></div>" name="color"></td>
                                                <td><input type="text" value="<?php echo $rows1['material']; ?>" name="material"></td>
                                                <td><input type="text" value="<?php echo $rows1['plating']; ?>" name="plating"></td>
                                                <td><input type="text" value="<?php echo $rows1['stone_type']; ?>" name="s_type"></td>
                                                <td><input type="text" value="<?php echo $rows1['price']; ?>" name="price"></td>
                                                <td><input type="submit" value="Edit" name="submit" class="btn btn-primary" autofocus for="from1"></td>                                            
                                        </tr>
                                    <?php
                                        $rows2 = $product->show_without_id_product($_GET['id']);
                                        
                                        foreach($rows2 as $key2 => $value2)
                                        {                                            
                                    ?>
                                        <tr>
                                            <th scope="row"><?php echo $value2['id']; ?></th>
                                                <td><img class="round" src="<?php echo PRODUCT_IMAGE .  $value2['product_image']; ?>" height="50" width="50"></td>
                                                <td><?php echo $value2['product_name']; ?></td>
                                                <td><?php echo $value2['product_code']; ?></td>
                                                <td><?php echo $value2['avalability']; ?></td>
                                                <td><?php echo $value2['about_product']; ?></td>
                                                <td><?php echo $value2['brand_name']; ?></td>
                                                <td><?php echo $value2['category_name']; ?></td>
                                                <td><?php echo $value2['product_type']; ?></td>
                                                <td><?php echo $value2['design_width']; ?></td>
                                                <td><?php echo $value2['design_height']; ?></td>
                                                <td><div style="background-color:<?php echo $value2['color']; ?>;min-height:30px;min-width:10px;"></div></td>
                                                <td><?php echo $value2['material']; ?></td>
                                                <td><?php echo $value2['plating']; ?></td>
                                                <td><?php echo $value2['stone_type']; ?></td>
                                                <td><?php echo $value2['price']; ?></td>
                                                <td><a href="?id=<?= $value2['id'];?>&type=edit"><img src="app-assets/images/icons/edit.svg"></a></td>
                                                <td><a href="models/product_proccess.php?id=<?= $value2['id'];?>&action=delete"><img src="app-assets/images/icons/trash.svg"></a></td>
                                                <?php
                                                if($value2['status']==1)
                                                {
                                                ?>
                                                <td class="nav-item d-none d-lg-block"><a class="nav-link" href="models/product_proccess.php?id=<?= $value2['id']; ?>&type3=status&type2=1" data-toggle="tooltip" data-placement="top" title="Active"><h1>&#128515</h1></a></td>
                                                <?php
                                                }
                                                else
                                                {
                                                ?>
                                                <td class="nav-item d-none d-lg-block"><a class="nav-link" href="models/product_proccess.php?id=<?=$value2['id']; ?>&type3=status&type2=0" data-toggle="tooltip" data-placement="top" title="Inactive"><h1>&#128545</a></td>
                                                <?php
                                                }
                                                ?>
                                            </tr>    
                                    <?php
                                        }
                                    }
                                    ?>
                                        </tbody>
                                    </table>
                                    </form>
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