<?php

class Slider
{

    public function add_slider($file_name)
    {
        $mysqli = new Database();
        // print_r($mysqli);
        // exit;
        $query = "INSERT INTO `slider`(`name`, `description`, `image_name`) VALUES (?,?,?)";
        
        $res = $mysqli->connection->prepare($query);
        
        $res->bind_param("sss",$name,$desp,$file_name);
        
        $name = $_POST['name'];
        $desp = $_POST['Description'];

        echo $name;
        echo "<br>";
        echo $desp;

        $res->execute();
        // var_dump($res);
        // exit;
    }

    public function show_data()
    {
        $mysqli = new Database();
        
        $query = "SELECT * FROM `slider`";        

        $res = $mysqli->connection->query($query);        
        
        $row = $res->fetch_all(MYSQLI_ASSOC);
        
        return $row;
    }

    public function show_with_id_slider($id)
    {
        
        $mysqli = new Database();
        
        $query = "SELECT * FROM `slider` WHERE  id='".$id."'";
        
        $res = $mysqli->connection->query($query);
        
        $row = $res->fetch_assoc();
        
        return $row;
    }

    public function show_without_id_slider($id)
    {
        $mysqli = new Database();
        
        $query = "SELECT * FROM `slider` WHERE  id!='".$id."'";
        
        $res = $mysqli->connection->query($query);
        
        $row = $res->fetch_all(MYSQLI_ASSOC);

		return $row;
    }

    public function edit_slider($file_name)
    {
        $mysqli = new Database();

        $query = "UPDATE `slider` SET `name`= ? ,`description`= ? ,`image_name`= ?  WHERE id = '".$_POST['id']."'";
        // print_r($query);
        // exit;    
        $res = $mysqli->connection->prepare($query);
        
        $res->bind_param("sss",$name,$desp,$file_name);
        
        $id = $_POST['id'];
        $name = $_POST['name'];
        $desp = $_POST['Description'];

        echo $name;
        echo "<br>";
        echo $desp;

        $res->execute();
    }

    public function without_image_edit_slider($id)
    {
        $mysqli = new Database();

        $query = "UPDATE `slider` SET `name`= ? ,`description`= ?   WHERE id = '".$_POST['id']."'";
        // print_r($query);
        // exit;
        $res = $mysqli->connection->prepare($query);
        
        $res->bind_param("ss",$name,$desp);
        
        $id = $_POST['id'];
        $name = $_POST['name'];
        $desp = $_POST['desp'];

        echo $id;
        echo "<br>";
        echo $name;
        echo "<br>";
        echo $desp;

        $res->execute();
    }

    public function delete_slider($id)
    {

        $mysqli = new Database();

        $query = "DELETE FROM `slider` WHERE id='".$id."'";
        
        $res = $mysqli->connection->query($query);

    }

    public function brand_0($id)
    {
        $mysqli = new Database();

        $query = "UPDATE slider SET status='0' WHERE id={$_GET['id']}";
        
        $res = $mysqli->connection->query($query);
    }

    public function brand_1($id)
    {
        $mysqli = new Database();

        $query = "UPDATE slider SET status='1' WHERE id={$_GET['id']}";

        $res = $mysqli->connection->query($query);
    }

}

?>