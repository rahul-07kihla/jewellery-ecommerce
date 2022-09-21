<?php
include_once "include/connect.php";
include_once "class/class.Database.php";
include_once "class/class.Category.php";

include_once "is_login.php";

$category = new Category();

$rows = $category->show_data();

// $action = isset($_GET['type']);

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
                                    <li class="breadcrumb-item active"><a href="index.php">Category Table</a>
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
                                <h4 class="card-title">Category Table</h4>
                            </div>
                            <div class="card-content">
                                <!-- <div class="card-body">
                                    <p><code class="highlighter-rouge"></code><code class="highlighter-rouge"></code><code class="highlighter-rouge"></code></p>
                                </div> -->
                                <br>
                                <div class="table-responsive">       
                                <form action="models/category_proccess.php" method="post" id="form1" name="form1" enctype="multipart/form-data">                                                         
                                    <table class="table table-hover-animation mb-0">
                                    <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Category Picture</th> 
                                                <th scope="col">Category Name</th>
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
                                        foreach($rows as $key => $value)
                                        {
                                            //print_r( PROFILE_IMAGE .  $value['profile_picture'] );exit;                                            
                                            ?>
                                        <tr>
                                                <th scope="row"><?php echo $value['id']; ?></th>
                                                <td><img class="round" src="<?php echo CATEGORY_IMAGE .  $value['category_image']; ?>"></td>
                                                <td><?php echo $value['category_name']; ?></td>                                                
                                                <td><a href="?id=<?= $value['id']; ?>&type=edit"><img src="app-assets/images/icons/edit.svg"></a></td>
                                                <td><a href="models/category_proccess.php?id=<?= $value['id'];?>&type=delete"><img src="app-assets/images/icons/trash.svg"></a></td>
                                                <?php
                                                if($value['status']==1)
                                                {
                                                ?>
                                                <td class="nav-item d-none d-lg-block"><a class="nav-link" href="models/category_proccess.php?id=<?= $value['id']; ?>&type3=status&type2=1" data-toggle="tooltip" data-placement="top" title="Active" style="margin-top:70px;"><h1>&#128515</h1></a></td>
                                                <?php
                                                }
                                                else
                                                {
                                                ?>
                                                <td class="nav-item d-none d-lg-block"><a class="nav-link" href="models/category_proccess.php?id=<?=$value['id']; ?>&type3=status&type2=0" data-toggle="tooltip" data-placement="top" title="Inactive" style="margin-top:70px;"><h1>&#128545</h1></a></td>
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
                                                                              
                                        $rows1 = $category->show_with_id_user($_GET['id']);
                                        // echo "<pre>";
                                        // print_r($rows1);
                                        // exit;
                                                                                
                                        ?>                                        
                                        <tr>
                                        <td scope="row"><?php echo $rows1['id']; ?></td>
                                                <input type="hidden" value="edit" name="action" for="form1">                                                
                                                <td><input type="hidden" value="<?php echo $rows1['id']; ?>" name="id1" for="form1">
                                                    <input type="file" style="display:none;" name="image" id="profile" for="from1"><label for="profile"><img class="round" src="<?php echo CATEGORY_IMAGE . $rows1['category_image']; ?>"></label></td>
                                                <td><input type="text" value="<?php echo $rows1['category_name']; ?>" name="cname" for="from1"></td>
                                                <td><input type="submit" value="Edit" name="submit" class="btn btn-primary" autofocus for="from1"></td>                                            
                                        </tr>
                                    <?php
                                        $rows2 = $category->show_without_id_user($_GET['id']);
                                        
                                        foreach($rows2 as $key2 => $value2)
                                        {                                            
                                    ?>
                                        <tr>
                                                <th scope="row"><?php echo $value2['id']; ?></th>
                                                <td><img class="round" src="<?php echo CATEGORY_IMAGE . $value2['category_image']; ?>" max-height=50 max-width=50></td>
                                                <td><?php echo $value2['category_name']; ?></td>
                                                <td><a href="?id=<?= $value2['id'];?>&type=edit"><img src="app-assets/images/icons/edit.svg"></a></td>
                                                <td><a href="models/category_proccess.php?id=<?= $value2['id'];?>&action=delete"><img src="app-assets/images/icons/trash.svg"></a></td>
                                                <?php
                                                if($value2['status']==1)
                                                {
                                                ?>
                                                <td><a href="models/category_proccess.php?id=<?= $value2['id']; ?>&type3=status&type2=1"><h1 style="margin:50px;">&#128515</h1></a></td>
                                                <?php
                                                }
                                                else
                                                {
                                                ?>
                                                <td><a href="models/category_proccess.php?id=<?=$value2['id']; ?>&type3=status&type2=0"><h1>&#128545</h1></a></td>
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