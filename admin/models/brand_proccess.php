<?php
include_once "../include/connect.php";
include_once "../class/class.Database.php";
include_once "../class/class.Brand.php";

$brand = new Brand();

$delete = isset($_GET['type']);

if(isset($_POST['action']))
{
switch ($_POST['action']) {

    case 'add':
        
        $b_name = $_POST['name'];
        
        $err = array();

        if($b_name == "")
        {
                $err[] = "Brand name is empty";
        }

        if(!(empty($err)))
        {
                header("Location:../add_brand.php");
                $_SESSION['err'] = $err;
        }
        else
        {
               $addbrand = $brand->add_brand();

                $succ[] = "Successfully Inserted Your record";
                        $_SESSION['succ'] = $succ;

                // header("Location:../brand.php");
        }

    case 'edit':
        
                $addBrand = $brand->edit_brand();

                header("location:../brand.php");

                break;

}
}

else if(isset($delete)=="delete")
{
        if(isset($_GET['id']) && $delete=='delete')
        {
                {
                        $addBrand = $brand->delete_brand($_GET['id']);
                        $succ[] = "Successfully Deleted Your record";
                        $_SESSION['succ'] = $succ;
                        // header("Location:../brand.php");
                }
        }
}

if(isset($_GET['type3'])=="status") 
{
        echo "test";

    $s = $_GET['type2'];
    $a = $_GET['type3'];

    if($a && ($s == 0 || $s))
    {
        if($s==1)
        {
                $addBrand = $brand->brand_0($_GET['id']);
                $succ[] = "Successfully Updates your status";
                        $_SESSION['succ'] = $succ;
                // header("Location:../brand.php");
        }
        else
        {
                $addBrand = $brand->brand_1($_GET['id']);
                $succ[] = "Successfully Updates your status";
                        $_SESSION['succ'] = $succ;
                header("Location:../brand.php");
        }
    }
  }


?>