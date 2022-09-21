<?php

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
        $pnumber = $_POST['phonenumber'];
        $password = md5($_POST['password']);

        $res->execute();

        // header("location:../add_user.php");
    }

    public function without_profile_Registration()
    {
        $mysqli = new Database();

        $query = "INSERT INTO `user`(`username`, `email`, `phone_number`, `password`) VALUES (?,?,?,?)";

        $res = $mysqli->connection->prepare($query);

        $res->bind_param("ssis",$uname,$email,$pnumber,$password);
        
        $uname = $_POST['username'];
        $email = $_POST['email'];
        $pnumber = $_POST['phonenumber'];
        $password = md5($_POST['password']);

        $res->execute();

        // header("location:../add_user.php");
    }

    public function show_data()
    {           
        $mysqli = new Database();
        
        $query = "SELECT * FROM `user`";        

        $res = $mysqli->connection->query($query);        
        
        $row = $res->fetch_all(MYSQLI_ASSOC);
        
        return $row;

    }

    public function edit_user($file_name)
    {
        $mysqli = new Database();

        $query = "UPDATE `user` SET `profile_picture`=?,`username`=?,`email`=?,`phone_number`=?,`password`= ? WHERE id = '".$_POST['id1']."'";
        
        $res = $mysqli->connection->prepare($query);
        
        $res->bind_param("sssis",$file_name,$uname,$email,$pnumber,$password);
        
        $id = $_POST['id1'];
        $uname = $_POST['username'];
        $email = $_POST['email'];
        $pnumber = $_POST['pnumber'];
        $password = md5($_POST['password']);
        
        return  $res->execute();
    }

    public function without_profile_edit_user($id)
    {
        $mysqli = new Database();

        $query = "UPDATE `user` SET `username`=?,`email`=?,`phone_number`=?,`password`= ? WHERE id = '".$_POST['id1']."'";
        
        $res = $mysqli->connection->prepare($query);
        
        $res->bind_param("ssis",$uname,$email,$pnumber,$password);
        
        $id = $_POST['id1'];
        $uname = $_POST['username'];
        $email = $_POST['email'];
        $pnumber = $_POST['pnumber'];
        $password = md5($_POST['password']);
        
        return  $res->execute();
    }

    public function show_without_id_user($id)
    {
        $mysqli = new Database();
        
        $query = "SELECT * FROM `user` WHERE  id!='".$id."'";
        
        $res = $mysqli->connection->query($query);
        
        $row = $res->fetch_all(MYSQLI_ASSOC);

		return $row;
    }

    public function show_with_id_user($id)
    {
        
        $mysqli = new Database();
        
        $query = "SELECT * FROM `user` WHERE  id='".$id."'";
        
        $res = $mysqli->connection->query($query);
        
        $row = $res->fetch_assoc();
        
        return $row;
    }

    public function delete_user($id)
    {

        $mysqli = new Database();

        $query = "DELETE FROM `user` WHERE id='".$id."'";

        $res = $mysqli->connection->query($query);

    }

    public function admin_login_proccess($username,$password)
    {
        // print_r($username);
        // exit;
        $mysqli = new Database();
        
        $query = "SELECT * FROM `admin` WHERE username='".$_POST['username']."' AND password='".md5($_SESSION['password'])."'";
        // print_r($query);
        // exit;
        // SELECT * FROM `admin` WHERE username='".$_POST['username']."' OR email='".$_POST['username']."'	AND password='".$_POST['password']."'
        $res = $mysqli->connection->query($query);
        
        $count = mysqli_num_rows($res);
        
        return $count;

    }

    public function admin_login_proccess1($email,$password)
    {

        $mysqli = new Database();
        
        $query = "SELECT * FROM `admin` WHERE email='".$_POST['username']."' AND password='".md5($_SESSION['password'])."'";
        
        $res = $mysqli->connection->query($query);
        
        $count = mysqli_num_rows($res);
        
        return $count;

    }

    public function record_select($username,$password)
    {
        $mysqli = new Database();
        
        $query = "SELECT * FROM `admin` WHERE username='".$_POST['username']."' AND password='".md5($_POST['password'])."'";
        
        $res = $mysqli->connection->query($query);
        
        $row = $res->fetch_assoc();
        
        return $row;
    }

    public function record_select1($email,$password)
    {
        $mysqli = new Database();
        
        $query = "SELECT * FROM `admin` WHERE email='".$_POST['username']."' AND password='".md5($_POST['password'])."'";
        
        $res = $mysqli->connection->query($query);
        
        $row = $res->fetch_assoc();
        
        return $row;
    }

    public function user_record_select($username,$password)
    {
        $mysqli = new Database();
        
        $query = "SELECT * FROM `user` WHERE username='".$_POST['username']."' AND password='".md5($_POST['password'])."'";
        
        $res = $mysqli->connection->query($query);
        
        $row = $res->fetch_assoc();
        
        return $row;
    }

    public function brand_0($id)
    {
        $mysqli = new Database();

        $query = "UPDATE user SET status='0' WHERE id={$_GET['id']}";
        
        $res = $mysqli->connection->query($query);
    }

    public function brand_1($id)
    {
        $mysqli = new Database();

        $query = "UPDATE user SET status='1' WHERE id={$_GET['id']}";

        $res = $mysqli->connection->query($query);
    }

}
?>