<?php
include_once "../include/connect.php";
include_once "../class/class.Database.php";
include_once "../class/class.Product.php";

$product = new Product();

$file_name = $_POST['product_image'];
$product_name = $_POST['productname'];
$product_code = $_POST['product_code'];
$avb = $_POST['availability'];
$desc = $_POST['description'];
$p_type = $_POST['ptype'];
$d_width = $_POST['dwidth'];
$d_height = $_POST['dheight'];
$material = $_POST['material'];
$plating = $_POST['plating'];
$stype = $_POST['stype'];
$price = $_POST['price'];

$delete = isset($_GET['type']);

if(isset($_POST['action']))
{
switch ($_POST['action']) {

    case 'edit':

        $flag = 1;
        
        $file = $_FILES['profile'];
        $target_dir = PRODUCT_IMAGE_UPLOAD;

        $file_name = $file['name'];
        $target_file = $target_dir . basename($_FILES["profile"]["name"]);

        if(move_uploaded_file($_FILES["profile"]["tmp_name"],$target_file))
        {
            // echo "The file ". htmlspecialchars( basename( $_FILES["profile"]["name"])). " has been uploaded.";
            $flag = 1;
        }
        else
        {
            $flag = 0;
        }

        if($flag == 1)
        {
            $add_product = $product->edit_product($file_name);
            $succ[] = "Successfully Updated Your record";
                            $_SESSION['succ'] = $succ;
            header("location:../product.php");
            exit;
        }
        else
        {
            $add_product = $product->without_image_edit_product();
            $succ[] = "Successfully Updated Your record";
                            $_SESSION['succ'] = $succ;
            header("location:../product.php");
            exit;
        }

        break;

    case 'add':
        

        $err = array();

        if($file_name=="")
        {
            $err[] = "File is not uploaded";
        }
        if($product_name=="")
        {
            $err[] = "Product name is empty";
        }

        if($product_code=="")
        {
            $err[] = "Product code is empty";
        }

        if($avb=="")
        {
            $err[] = "Availibility is empty";
        }
        if($desc=="")
        {
            $err[] = "About Product is empty"; 
        }
        if($p_type=="")
        {
            $err[] = "Product type is empty";
        }
        if($d_width=="")
        {
            $err[] = "Design width is empty";
        }
        if($d_height=="")
        {
            $err[] = "Design height is empty";
        }
        if($material=="")
        {
            $err[] = "Material is empty";
        }
        if($plating=="")
        {
            $err[] = "Plating is empty";
        }
        if($stype=="")
        {
            $err[] = "Stone type is empty";
        }
        if($price=="")
        {
            $err[] = "Price is empty";
        }


        if(!(empty($err)))
        {
            header("Location:../add_product.php");
            $_SESSION['err'] = $err;
        }
        else
        {
            $flag = 1;

            $file = $_FILES['product_image'];
            $target_dir = PRODUCT_IMAGE_UPLOAD;
            
            $file_name = $file['name'];
            $target_file = $target_dir . basename($_FILES["product_image"]["name"]);
            
            if(move_uploaded_file($_FILES["product_image"]["tmp_name"],$target_file))
            {
                echo "The file ". htmlspecialchars( basename( $_FILES["product_image"]["name"])). " has been uploaded.";
                $flag = 1;
            }
            else
            {
                $flag = 0;
            }

            if($flag==1)
            {
                $add_product = $product->product_with_image($file_name);
                $succ[] = "Successfully Inserted Your record";
                            $_SESSION['succ'] = $succ;
                header("location:../product.php");
            }
            else
            {
                $add_out_product = $product->product_without_image();   
                $succ[] = "Successfully Inserted Your record";
                            $_SESSION['succ'] = $succ; 
                header("location:../product.php");
            }

                break;
        }

    }
}

else if(isset($delete))
{
        if(isset($_GET['id']) && $delete=='delete')
        {
                {
                    $delete_product = $product->delete_product($_GET['id']);
                    $succ[] = "Successfully Deleted Your record";
                            $_SESSION['succ'] = $succ;
                    header("Location:../product.php");
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
            $add_out_product = $product->brand_0($_GET['id']);
            $succ[] = "Successfully Status Updated Your record";
                            $_SESSION['succ'] = $succ;
            header("Location:../product.php");
        }
        else
        {
            $add_out_product = $product->brand_1($_GET['id']);
            $succ[] = "Successfully Status Updates Your record";
                            $_SESSION['succ'] = $succ;
            header("Location:../product.php");
        }
    }
}

?>