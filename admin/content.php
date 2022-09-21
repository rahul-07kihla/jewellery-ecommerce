<?php
include_once "include/connect.php";
include_once "class/class.Database.php";
include_once "class/class.Content.php";

include_once "is_login.php";

$content = new Content();

$row =  $content->content_display();

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
                                    <li class="breadcrumb-item active"><a href="index.php">Content Table</a>
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
                                <h4 class="card-title">Content Table</h4>
                            </div>
                            <div class="card-content">
                                <!-- <div class="card-body">
                                    <p><code class="highlighter-rouge"></code><code class="highlighter-rouge"></code><code class="highlighter-rouge"></code></p>
                                </div> -->
                                <br>
                                <div class="table-responsive">   
                                <form action="models/content_proccess.php" method="post" id="form1" name="form1" enctype="multipart/form-data">                                              
                                    <table class="table table-hover-animation mb-0">
                                    <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Image</th> 
                                                <th scope="col">Header</th>
                                                <th scope="col">Header 1</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Description 1</th>
                                                <th scope="col">Edit</th>
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
                                            ?>
                                        <tr>
                                                <th scope="row"><?php echo $value['id']; ?></th>
                                                <td><img src="<?php echo CONTENT_IMAGE .  $value['image']; ?>" height="50" width="50"></td>
                                                <td><?php echo $value['heading']; ?></td>
                                                <td><?php echo $value['heading_1']; ?></td>
                                                <td><?php echo $value['content']; ?></td>
                                                <td><?php echo $value['content_1']; ?></td>
                                                <td><a href="?id=<?= $value['id']; ?>&type=edit"><img src="app-assets/images/icons/edit.svg"></a></td>
                                            </tr>
                                        <?php
                                            }
                                        }
                                        else if(isset($_GET['id']) && isset($_GET['type'])=='edit')
                                        {
                                        ?>
                                    <?php                                    
                                                                              
                                        $edit =  $content->show_with_id_content($_GET['id']);                                        
                                                                                
                                        ?>                                        
                                        <tr>
                                        <td scope="row"><?php echo $edit['id']; ?></td>
                                                <input type="hidden" value="edit" name="action" for="form1">                                                
                                                <td><input type="hidden" value="<?php echo $edit['id']; ?>" name="id" for="form1">
                                                    <input type="file" style="display:none;" name="image" id="image" for="from1"><label for="image"><img src="<?php echo CONTENT_IMAGE . $edit['image']; ?>"></label></td>
                                                <td><input type="text" value="<?php echo $edit['heading']; ?>" name="name" for="from1"></td>
                                                <td><input type="text" value="<?php echo $edit['heading_1']; ?>" name="name1" for="from1"></td>
                                                <td><textarea name="desp" for="from1"><?php echo $edit['content']; ?></textarea></td>
                                                <td><textarea name="desp1" for="from1"><?php echo $edit['content_1']; ?></textarea></td>
                                                <td><input type="submit" value="Edit" name="submit" class="btn btn-primary" autofocus for="from1"></td>                                            
                                        </tr>
                                        <?php
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