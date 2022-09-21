<?php

class Content{

    public function add_content($file_name)
    {

        $mysqli = new Database();

        $query = "INSERT INTO `content`(`image`, `heading`, `heading_1`, `content`,  `content_1`) VALUES (?,?,?,?,?)";

        $res = $mysqli->connection->prepare($query);

        $res->bind_param("sssss",$file_name,$name,$name1,$des,$des1);

        $name = $_POST['name'];
        $des = $_POST['description'];
        $name1 = $_POST['name1'];
        $des1 = $_POST['description1'];
        echo $name;
        echo $des;

        $res->execute();
        // print_r($res);
        // exit;

    }

    public function content_display()
    {

        $mysqli = new Database();

        $query = "SELECT * FROM `content`";        

        $res = $mysqli->connection->query($query);        
        
        $row = $res->fetch_all(MYSQLI_ASSOC);
        
        return $row;
    }

    public function show_with_id_content($id)
    {
        
        $mysqli = new Database();
        
        $query = "SELECT * FROM `content` WHERE  id='".$id."'";
        
        $res = $mysqli->connection->query($query);
        
        $row = $res->fetch_assoc();
        
        return $row;

    }

    public function edit_content($file_name)
    {
        $mysqli = new Database();

        $query = "UPDATE `content` SET `image`= ? ,`heading`= ? ,`heading_1`= ? ,`content` = ? ,`content_1`= ? WHERE id = '".$_POST['id']."'";
        // print_r($query);
        // exit;    
        $res = $mysqli->connection->prepare($query);
        
        $res->bind_param("sssss",$file_name,$name,$name1,$des,$des1);
        
        $id = $_POST['id'];
        $name = $_POST['name'];
        $des = $_POST['desp'];
        $name1 = $_POST['name1'];
        $des1 = $_POST['desp1'];

        echo $name;
        echo "<br>";
        echo $desp;

        $res->execute();
        
    }

    public function without_image_edit_content($id)
    {
        $mysqli = new Database();

        $query = "UPDATE `content` SET `heading`= ? ,`heading_1`= ? ,`content` = ? ,`content_1`= ? WHERE id = '".$_POST['id']."'";
        // print_r($query);
        // exit;
        $res = $mysqli->connection->prepare($query);
        
        $res->bind_param("ssss",$name,$name1,$des,$des1);
        
        $id = $_POST['id'];
        $name = $_POST['name'];
        $des = $_POST['desp'];
        $name1 = $_POST['name1'];
        $des1 = $_POST['desp1'];

        echo $id;
        echo "<br>";
        echo $name;
        echo "<br>";
        echo $desp;

        $res->execute();
        
    }

}