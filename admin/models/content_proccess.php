<?php
include_once "../include/connect.php";
include_once "../class/class.Database.php";
include_once "../class/class.Content.php";

$content = new Content();

if(isset($_POST['action']))
{
switch ($_POST['action']) {


    case 'add':

        $flie_name = $_POST['image'];
        $name = $_POST['name'];
        $name1 = $_POST['name1'];
        $desc = $_POST['description'];
        $desc1 = $_POST['description1'];

        $err = array();

        if($file_name=="")
        {
            $err[] = "Content is image is not upload";
        }

        if($name=="")
        {
            $err[] = "Heading is empty";
        }

        if($name1=="")
        {
            $err[] = "Heading1 is empty";
        }

        if($desc=="")
        {
            $err[] = "Content is empty";
        }

        if($desc1=="")
        {
            $err[] = "Content1 is empty";
        }

        if(!(empty($err)))
        {
            header("Location:../add_content.php");
            $_SESSION['err'] = $err;
        }
        
        $flag = 1;
        
        $file = $_FILES['image'];
        $target_dir = CONTENT_IMAGE_UPLOAD;

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
            $addContent = $content->add_content($file_name);
            $succ[] = "Successfully Inserted Your record";
                            $_SESSION['succ'] = $succ;
            header("Location:../content.php");
            exit;
        }
        else
        {            
            header("Location:../content.php");
        }

        case 'edit':
        
            $flag = 1;
    
            $file = $_FILES['image'];
            $target_dir = CONTENT_IMAGE_UPLOAD;
            
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
                $edit = $content->edit_content($file_name);
                $succ[] = "Successfully Updated Your record";
                            $_SESSION['succ'] = $succ;
                header("location:../content.php");
            }
            else
            {
                $edit_without_image = $content->without_image_edit_content($_POST['id']);
                $succ[] = "Successfully Updated Your record";
                            $_SESSION['succ'] = $succ;  
                header("location:../content.php");
            }
    
                break;


}
}
?>