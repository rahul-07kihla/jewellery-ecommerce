<?php
include_once "../include/connect.php";
include_once "../class/class.Database.php";
include_once "../class/class.Registor.php";

$registor1 = new Registor();

$username = $_POST['username'];
$email = $_POST['username'];
$password = md5($_POST['password']);
$flag = 1;

$login = $registor1->admin_login_proccess($username,$password);

if(preg_match("/^[a-zA-Z-' ]*$/",$_SESSION['username']))
{
    // echo "login with username";
    $login = $registor1->record_select($username,$password);
    // $_SESSION['s_id'] = $login['id'];
}
else
{
    // echo "login with email";
    $login = $registor1->record_select1($email,$password);
    // $_SESSION['s_id'] = $login['id'];
}


// print_r($_SESSION['s_id']);
// exit;
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = md5($_POST['password']);
$_SESSION['email'] = $_POST['username'];

// print_r($_SESSION);
// exit;

if(preg_match("/^[a-zA-Z-' ]*$/",$_SESSION['username']))
{
    echo "login with username";
    $login = $registor1->admin_login_proccess($_SESSION['username'],$_SESSION['password']);

    if($login==1)
    {
        echo "test";
        header("Location:../index.php");
    }
    else
    {
        echo "test1";
        header("Location:../auth-login.php");
    }
}
else
{
    echo "login with email";
    $login = $registor1->admin_login_proccess1($email,$password);
    
    if($login==1)
    {
        echo "test2";
        header("Location:../index.php"); 
    }
    else
    {
        echo "test3";
        header("Location:../auth-login.php");
    }
}

?>