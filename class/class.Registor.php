<?php
include_once "../include/connect.php";
include_once "class.Database.php";

class Registor
{
    public function Registration($file_name)
    {
        $mysqli = new Database();

        $query = "INSERT INTO `user`(`profile_picture`, `username`, `email`, `phone_number`, `password`) VALUES (?,?,?,?,?)";

        $res = $mysqli->connection->prepare($query);

        $res->bind_param("sssis",$file_name,$uname,$email,$pnumber,$password);
        
        $uname = $_POST['username'];
        $email = $_POST['email'];
        $pnumber = $_POST['pnumber'];
        $password = md5($_POST['password']);
        $cpassword = md5($_POST['cpassword']);

        $res->execute();
        
        // header("location:../add_user.php");
    }

    public function record_select($username,$password)
    {
        $mysqli = new Database();
        
        $query = "SELECT * FROM `user` WHERE username='".$_POST['username']."' AND password='".md5($_POST['password'])."'";
        
        $res = $mysqli->connection->query($query);
        
        $row = $res->fetch_assoc();
        
        return $row;
    }

    public function record_select1($email,$password)
    {
        $mysqli = new Database();
        
        $query = "SELECT * FROM `user` WHERE email='".$_POST['username']."' AND password='".md5($_POST['password'])."'";
        
        $res = $mysqli->connection->query($query);
        
        $row = $res->fetch_assoc();
        
        return $row;
    }

    public function login_proccess($username,$password)
    {

        $mysqli = new Database();
        
        $query = "SELECT * FROM `user` WHERE username='".$_SESSION['username']."' AND password='".md5($_SESSION['password'])."'";
        // print_r($query);
        // exit;
        // SELECT * FROM `admin` WHERE username='".$_POST['username']."' OR email='".$_POST['username']."'	AND password='".$_POST['password']."'
        $res = $mysqli->connection->query($query);
        
        $count = mysqli_num_rows($res);
        
        return $count;

    }

    public function login_proccess1($email,$password)
    {

        $mysqli = new Database();
        
        $query = "SELECT * FROM `user` WHERE email='".$_POST['username']."' AND password='".md5($_POST['password'])."'";
        
        $res = $mysqli->connection->query($query);
        
        $count = mysqli_num_rows($res);
        
        return $count;

    }
}
?>