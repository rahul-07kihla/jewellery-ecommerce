<?php
include_once "../include/connect.php";
include_once "../class/class.Database.php";
include_once "../class/class.Category.php";

$category = new Category();

$delete = isset($_GET['type']);
// print_r($_POST['action']);
// exit;
if(isset($_POST['action']))
{
switch ($_POST['action']) {


    case 'add':
        echo "test";
        
        $file_name = $_FILES['image']['name'];
        
        $name = $_POST['name'];
        
        $err = array();

        if($file_name=="")
        {
            $err[] = "Category image is not upload";
        }
        if($name=="")
        {
            $err[] = "Category name is empty";
        }

        if(!(empty($err)))
        {
            header("Location:../add_category.php");
            $_SESSION['err'] = $err;
        }
        else
        {
            $flag = 1;
            
            $file = $_FILES['image'];
            $target_dir = CATEGORY_IMAGE_UPLOAD;

            $file_name = $file['name'];
            $target_file = $target_dir . basename($_FILES["image"]["name"]);

            if(move_uploaded_file($_FILES["image"]["tmp_name"],$target_file))
            {
                echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
                $flag = 1;
            }
            else
            {
                echo "error";
                $flag = 0;
            }

            if($flag == 1)
            {
                $addCategory = $category->add_category($file_name);
                $succ[] = "Successfully Inserted Your record";
                            $_SESSION['succ'] = $succ;
                header("Location:../category.php");
                exit;
            }
            else
            {            
                header("Location:../category.php");
            }
        }


    case 'edit':
        echo "test1";
        exit;
        $flag = 1;

        $file = $_FILES['image'];
        $target_dir = PROFILE_IMAGE_UPLOAD;
        
        $file_name = $file['name'];
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        
        if(move_uploaded_file($_FILES["image"]["tmp_name"],$target_file))
        {
            echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
            $flag = 1;
        }
        else
        {
            $flag = 0;
        }

        if($flag==1)
        {
            $addCategory = $category->edit_category($file_name);
            $succ[] = "Successfully Updated Your record";
                            $_SESSION['succ'] = $succ;
            header("location:../category.php");
        }
        else
        {
            $addCategory = $category->without_image_edit_category($_POST['id']); 
            $succ[] = "Successfully Updated Your record";
                            $_SESSION['succ'] = $succ; 
            header("location:../category.php");
        }

            break;

}
}

else if(isset($delete))
{
        if(isset($_GET['id']) && $delete=='delete')
        {
                {
                    $addCategory = $category->delete_category($_GET['id']);
                    $succ[] = "Successfully Deleted Your record";
                            $_SESSION['succ'] = $succ;
                    header("Location:../category.php");
                    exit;
                }
        }
}

if(isset($_GET['type3'])=="status") 
{

    $s = $_GET['type2'];
    $a = $_GET['type3'];

    if($a && ($s == 0 || $s))
    {
        if($s==1)
        {
                $addCategory = $category->brand_0($_GET['id']);
                $succ[] = "Successfully Status update Your record";
                            $_SESSION['succ'] = $succ;
                header("Location:../category.php");
        }
        else
        {
                $addCategory = $category->brand_1($_GET['id']);
                $succ[] = "Successfully Status update Your record";
                            $_SESSION['succ'] = $succ;
                header("Location:../category.php");
        }
    }
  }

?>