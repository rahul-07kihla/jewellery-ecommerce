<?php

class Quotes
{
    public function Quotes_add()
    {
        $mysqli = new Database();

        $query = "INSERT INTO `quotes`(`quotes`, `quotes_author`) VALUES (?,?)";

        $res = $mysqli->connection->prepare($query);

        $res->bind_param("ss",$quotes,$quotes_author);
        
        $quotes = $_POST['quotes'];
        $quotes_author = $_POST['quotes_author'];

        $res->execute();

        // header("location:../add_user.php");
    }

    public function show_data()
    {           
        $mysqli = new Database();
        
        $query = "SELECT * FROM `quotes`";        

        $res = $mysqli->connection->query($query);        
        
        $row = $res->fetch_all(MYSQLI_ASSOC);
        
        return $row;

    }

    public function edit_quotes()
    {
        $mysqli = new Database();

        $query = "UPDATE `quotes` SET `quotes`= ? ,`quotes_author`= ?  WHERE id = '".$_POST['id1']."'";
        
        $res = $mysqli->connection->prepare($query);
        
        $res->bind_param("ss",$quotes,$quotes_author);
        
        $id = $_POST['id1'];
        $quotes_author = $_POST['quotes_author'];
        $quotes = $_POST['quotes'];
        
        return  $res->execute();
    }


    public function show_without_id_user($id)
    {
        $mysqli = new Database();
        
        $query = "SELECT * FROM `quotes` WHERE  id!='".$id."'";
        
        $res = $mysqli->connection->query($query);
        
        $row = $res->fetch_all(MYSQLI_ASSOC);

		return $row;
    }

    public function show_with_id_user($id)
    {
        
        $mysqli = new Database();
        
        $query = "SELECT * FROM `quotes` WHERE  id='".$id."'";
        
        $res = $mysqli->connection->query($query);
        
        $row = $res->fetch_assoc();
        
        return $row;
    }

    public function delete_user($id)
    {

        $mysqli = new Database();

        $query = "DELETE FROM `quotes` WHERE id='".$id."'";

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
        
        $query = "SELECT * FROM `quotes` WHERE username='".$_POST['username']."' AND password='".md5($_POST['password'])."'";
        
        $res = $mysqli->connection->query($query);
        
        $row = $res->fetch_assoc();
        
        return $row;
    }

    public function brand_0($id)
    {
        $mysqli = new Database();

        $query = "UPDATE quotes SET status='0' WHERE id={$_GET['id']}";
        
        $res = $mysqli->connection->query($query);
    }

    public function brand_1($id)
    {
        $mysqli = new Database();

        $query = "UPDATE quotes SET status='1' WHERE id={$_GET['id']}";

        $res = $mysqli->connection->query($query);
    }

}
?>