<?php
include_once "../include/connect.php";
include_once "../class/class.Database.php";
include_once "../class/class.Slider.php";

$slider = new Slider();

$name = $_POST['name'];
$desc = $_POST['Description'];
$file_name = $_POST['image'];

$delete = $_GET['type'];

if(isset($_POST['action']))
{
switch ($_POST['action']) {


    case 'add': 
        $err = array();

        if($name=="")
        {
            $err[] = "Slider name is empty";
        }

        if($desc=="")
        {
            $err[] = "Desciption is empty";
        }

        if($file_name=="")
        {
            $err[] = "Slider image is not upload";
        }

        if(!(empty($err)))
        {
            header("Location:../add_slider.php");
            $_SESSION['err'] = $err;
        }
        else
        {

            $flag = 1;
            
            $file = $_FILES['image'];
            $target_dir = SLIDER_IMAGE_UPLOAD;

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
                $addSlider = $slider->add_slider($file_name);
                $succ[] = "Successfully Inserted Your record";
                            $_SESSION['succ'] = $succ;
                header("Location:../slider.php");
                exit;
            }
            else
            {            
                header("Location:../slider.php");
            }
        }

        case 'edit':
        
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
                $addSlider = $slider->edit_slider($file_name);
                $succ[] = "Successfully Updated Your record";
                            $_SESSION['succ'] = $succ;
                header("location:../slider.php");
            }
            else
            {
                $addSlider = $slider->without_image_edit_slider($_POST['id']);  
                $succ[] = "Successfully Updated Your record";
                            $_SESSION['succ'] = $succ;
                header("location:../slider.php");
            }
    
                break;

    }
}

else if(isset($delete))
    {
            if(isset($_GET['id']) && $delete=='delete')
            {
                    {
                        $addSlider = $slider->delete_slider($_GET['id']);
                        $succ[] = "Successfully Deleted Your record";
                            $_SESSION['succ'] = $succ;
                        header("Location:../slider.php");
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
            $addSlider = $slider->brand_0($_GET['id']);
            $succ[] = "Successfully Status updated Your record";
                            $_SESSION['succ'] = $succ;
            header("Location:../slider.php");
        }
        else
        {
            $addSlider = $slider->brand_1($_GET['id']);
            $succ[] = "Successfully Status updated Your record";
                            $_SESSION['succ'] = $succ;
            header("Location:../slider.php");
        }
    }
    }

?>