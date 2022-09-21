<?php

class Category
{
    public function add_category($file_name)
    {
        $c_name = $_POST['name'];

        $mysqli = new Database();
        // print_r($mysqli);
        // exit;
        $query = "INSERT INTO `category`( `category_image` , `category_name`) VALUES (?,?)";
        
        $res = $mysqli->connection->prepare($query);
        
        $res->bind_param("ss",$file_name,$c_name);    

        $res->execute();
        
    }

    public function show_data()
    {
        $mysqli = new Database();
        
        $query = "SELECT * FROM `category`";        

        $res = $mysqli->connection->query($query);        
        
        $row = $res->fetch_all(MYSQLI_ASSOC);
        
        return $row;
    }

    public function show_with_id_user($id)
    {
        
        $mysqli = new Database();
        
        $query = "SELECT * FROM `category` WHERE  id='".$id."'";
        
        $res = $mysqli->connection->query($query);
        
        $row = $res->fetch_assoc();
        
        return $row;
    }

    public function show_without_id_user($id)
    {
        $mysqli = new Database();
        
        $query = "SELECT * FROM `category` WHERE  id!='".$id."'";
        
        $res = $mysqli->connection->query($query);
        
        $row = $res->fetch_all(MYSQLI_ASSOC);

		return $row;
    }

    public function edit_category($file_name)
    {
        $mysqli = new Database();

        $query = "UPDATE `category` SET `category_image`= ?,`category_name`= ? WHERE id = '".$_POST['id1']."'";
        
        $res = $mysqli->connection->prepare($query);
        
        $res->bind_param("ss",$file_name,$c_name);
        
        $id = $_POST['id1'];
        $c_name = $_POST['cname'];        
        
        return  $res->execute();
    }

    public function without_image_edit_category($id)
    {
        $mysqli = new Database();

        $query = "UPDATE `category` SET `category_name`= ? WHERE id = '".$_POST['id1']."'";
        
        $res = $mysqli->connection->prepare($query);
        
        $res->bind_param("s",$c_name);
        
        $id = $_POST['id1'];
        $c_name = $_POST['cname'];
        
        return  $res->execute();
    }

    public function delete_category($id)
    {

        $mysqli = new Database();

        $query = "DELETE FROM `category` WHERE id='".$id."'";
        
        $res = $mysqli->connection->query($query);

    }

    public function brand_0($id)
    {
        $mysqli = new Database();

        $query = "UPDATE category SET status='0' WHERE id={$_GET['id']}";
        
        $res = $mysqli->connection->query($query);
    }

    public function brand_1($id)
    {
        $mysqli = new Database();

        $query = "UPDATE category SET status='1' WHERE id={$_GET['id']}";

        $res = $mysqli->connection->query($query);
    }

}
?>