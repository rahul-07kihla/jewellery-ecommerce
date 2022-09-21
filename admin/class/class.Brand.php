<?php

class Brand
{
    public function add_brand()
    {
       
        $mysqli  = new Database();
        $name = $_POST['name'];
        $query = "INSERT INTO `brand`(`brand_name`) VALUES (?)";
        
        $res = $mysqli->connection->prepare($query);
        
        $res->bind_param("s",$name);
        
        

        $res->execute();
        
    }

    public function show_data()
    {
        $mysqli = new Database();
        
        $query = "SELECT * FROM `brand`";        

        $res = $mysqli->connection->query($query);        
        
        $row = $res->fetch_all(MYSQLI_ASSOC);
        
        return $row;
    }

    public function show_without_id_brand($id)
    {
        $mysqli = new Database();
        
        $query = "SELECT * FROM `brand` WHERE  id!='".$id."'";
        
        $res = $mysqli->connection->query($query);
        
        $row = $res->fetch_all(MYSQLI_ASSOC);

		return $row;
    }

    public function show_with_id_brand($id)
    {
        
        $mysqli = new Database();
        
        $query = "SELECT * FROM `brand` WHERE  id='".$id."'";
        
        $res = $mysqli->connection->query($query);
        
        $row = $res->fetch_assoc();
        
        return $row;
    }

    public function edit_brand()
    {
        $mysqli = new Database();

        $query = "UPDATE `brand` SET `brand_name`= ? WHERE id = '".$_POST['id1']."'";
        
        $res = $mysqli->connection->prepare($query);
        
        $res->bind_param("s",$b_name);
        
        $id = $_POST['id1'];
        $b_name = $_POST['name'];        
        
        return  $res->execute();
    }

    public function delete_brand($id)
    {

        $mysqli = new Database();

        $query = "DELETE FROM `brand` WHERE id='".$id."'";

        $res = $mysqli->connection->query($query);

    }

    public function brand_0($id)
    {
        $mysqli = new Database();

        $query = "UPDATE brand SET status='0' WHERE id={$_GET['id']}";
        
        $res = $mysqli->connection->query($query);
    }

    public function brand_1($id)
    {
        $mysqli = new Database();

        $query = "UPDATE brand SET status='1' WHERE id={$_GET['id']}";

        $res = $mysqli->connection->query($query);
    }

}
?>