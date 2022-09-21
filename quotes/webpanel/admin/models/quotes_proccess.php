<?php
include_once "../include/connect.php";
include_once "../class/class.Database.php";
include_once "../class/class.Quotes.php";

$quotes1 = new Quotes();
// print_r($_FILES['profilepicture']['name']);
// exit;
// $file_name = $_POST['profilepicture'];
$quotes = isset($_POST['quotes']);
$quotes_author = isset($_POST['quotes_author']);

$delete = isset($_GET['type']);

if(isset($_POST['action']))
{
switch ($_POST['action']) {

    case 'edit':


            $quotes_reg = $quotes1->edit_quotes();
            $succ[] = "Successfully Updated Your record";
                    $_SESSION['succ'] = $succ;
            header("location:../quotes.php");
            exit;

        break;

    case 'add':
        
        $err = array();

        if($quotes == "")
        {
            $err[] = "Quotes is empty";
        }

        if($quotes_author == "")
        {
            $err[] = "Quotes Author is empty";
        }

        if(!(empty($err)))
        {
            // header("Location:../add_quotes.php");
            $_SESSION['err'] = $err;
        }
        else
        {

            $add_quotes = $quotes1->Quotes_add();
                $succ[] = "Successfully Inserted Your record";
                    $_SESSION['succ'] = $succ;
            header("location:../quotes.php");

            break;
        }
    }
}

else if(isset($delete))
    {
            if(isset($_GET['id']) && $delete=='delete')
            {
                    {
                        $delete_quotes = $quotes1->delete_quotes($_GET['id']);
                        $succ[] = "Successfully Deleted Your record";
                        $_SESSION['succ'] = $succ;
                        header("Location:../quotes.php");
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
            $quotes_reg = $quotes1->brand_0($_GET['id']);
            $succ[] = "Successfully Status Updated Your record";
                    $_SESSION['succ'] = $succ;
            header("Location:../quotes.php");
        }
        else
        {
            $quotes_reg = $quotes1->brand_1($_GET['id']);
            $succ[] = "Successfully Status Updated Your record";
                    $_SESSION['succ'] = $succ;
            header("Location:../quotes.php");
        }
    }
}

?>