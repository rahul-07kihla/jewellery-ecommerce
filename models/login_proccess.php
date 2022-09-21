<?php
include_once "../class/class.Registor.php";

$registor1 = new Registor();

$username = $_POST['username'];
$email = $_POST['username'];
$password = md5($_POST['password']);

echo $username;
echo "<br>";
echo $email;
echo "<br>";
echo $password;

if(preg_match("/^[a-zA-Z-' ]*$/",$username))
{
    $login = $registor1->record_select($username,$password);
}
else
{
    $login = $registor1->record_select1($email,$password);
}

$_SESSION['s_id'] = $login['id'];
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];
// print_r($_SESSION);
// exit;

if(preg_match("/^[a-zA-Z-' ]*$/",$_SESSION['username']))
{
    echo "login with username";
    $login = $registor1->login_proccess($_SESSION['username'],$_SESSION['password']);
    
    if($login==1)
    {
        echo "test";
        $succ[] = "Successfully Login";
        $_SESSION['succ'] = $succ;
        // echo $_SESSION['RAHUL'];
        header("Location:" . $_SESSION['RAHUL']);
    }
    else
    {
        // header("Location:../login.php");
    }
}
else
{
    echo "login with email";
    $login = $registor1->login_proccess1($email,$password);
    
    if($login==1)
    {
        $succ[] = "Successfully Login";
        $_SESSION['succ'] = $succ;
        // header("Location:" . $_SESSION['RAHUL']); 
    }
    else
    {
        // header("Location:../login.php");
    }
}

?>