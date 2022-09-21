<?php
include_once "../include/connect.php";
include_once "../class/class.Database.php";
include_once "../class/class.Registor.php";

$registor1 = new Registor();
// print_r($_FILES['profilepicture']['name']);
// exit;
// $file_name = $_POST['profilepicture'];
$username = $_POST['username'];
$email = $_POST['email'];
$p_number = $_POST['phonenumber'];
$pwd = $_POST['password'];

$user = $registor1->user_record_select($username,$password);

$delete = $_GET['type'];

if(isset($_POST['action']))
{
switch ($_POST['action']) {

    case 'edit':


        $flag = 1;
        
        $file = $_FILES['profile'];
        $target_dir = PROFILE_IMAGE_UPLOAD;

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
            $user_reg = $registor1->edit_user($file_name);
            $succ[] = "Successfully Updated Your record";
                    $_SESSION['succ'] = $succ;
            header("location:../user.php");
            exit;
        }
        else
        {
            $user_reg = $registor1->without_profile_edit_user($id);
            $succ[] = "Successfully Updated Your record";
                    $_SESSION['succ'] = $succ;
            header("location:../user.php");
        }

        break;

    case 'add':
        
        $err = array();

        if($_FILES['profilepicture']['name'] == "")
        {
            $err[] = "Profile Picture is not uploaded";
        }

        if($username == "")
        {
            $err[] = "Username is empty";
        }
        else if($user)
        {
            $err[] = "Username is aleady taken";
        }
        else if(strlen($username)<=5)
        {
            $err[] = "Username must be 5 characters or more<br>";
        }

        if($email == "")
        {
            $err[] = "Email is empty";
        }
        else if (!(filter_var($email, FILTER_VALIDATE_EMAIL))) {
            $err[] = "email is not a valid email address<br>";
        } 
        else if($user)
        {
            $err[] = "Email is aleady taken";
        }

        if($p_number == "")
        {
            $err[] = "Phone number is empty";
        }

        if($pwd == "")
        {
            $err[] = "Password is empty";
        }

        if(!(empty($err)))
        {
            header("Location:../add_user.php");
            $_SESSION['err'] = $err;
        }
        else
        {

                $flag = 1;

                $file = $_FILES['profilepicture'];
                $target_dir = PROFILE_IMAGE_UPLOAD;
                
                $file_name = $file['name'];
                $target_file = $target_dir . basename($_FILES["profilepicture"]["name"]);
                
                if(move_uploaded_file($_FILES["profilepicture"]["tmp_name"],$target_file))
                {
                    echo "The file ". htmlspecialchars( basename( $_FILES["profilepicture"]["name"])). " has been uploaded.";
                    $flag = 1;
                }
                else
                {
                    $flag = 0;
                }

                if($flag==1)
                {
                    $user_reg = $registor1->Registration($file_name);
                        $succ[] = "Successfully Inserted Your record";
                            $_SESSION['succ'] = $succ;
                    header("location:../user.php");
                }
                else
                {
                    $user_reg = $registor1->without_profile_Registration();
                    $succ[] = "Successfully Inserted Your record";
                            $_SESSION['succ'] = $succ;
                    header("location:../user.php");
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
                        $user_reg = $registor1->delete_user($_GET['id']);
                        $succ[] = "Successfully Deleted Your record";
                        $_SESSION['succ'] = $succ;
                        header("Location:../user.php");
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
            $user_reg = $registor1->brand_0($_GET['id']);
            $succ[] = "Successfully Status Updated Your record";
                    $_SESSION['succ'] = $succ;
            header("Location:../user.php");
        }
        else
        {
            $user_reg = $registor1->brand_1($_GET['id']);
            $succ[] = "Successfully Status Updated Your record";
                    $_SESSION['succ'] = $succ;
            header("Location:../user.php");
        }
    }
}

?>