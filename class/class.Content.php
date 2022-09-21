<?php

class Content{

    public function add_content($file_name)
    {

        $mysqli = new Database();

        $query = "INSERT INTO `content`(`image`, `heading`, `content`) VALUES (?,?,?)";

        $res = $mysqli->connection->prepare($query);

        $res->bind_param("sss",$file_name,$name,$des);

        $name = $_POST['name'];
        $des = $_POST['description'];
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

}