<?php

class Slider
{
    public function show_data()
    {
        $mysqli = new Database();
        
        $query = "SELECT * FROM `slider`";        
        
        $res = $mysqli->connection->query($query);        
        
        $row = $res->fetch_all(MYSQLI_ASSOC);
        
        return $row;
    }

    public function count_data()
    {
        $mysqli = new Database();
        
        $query = "SELECT * FROM `slider`";        
        
        $res = $mysqli->connection->query($query);        
        
        $count = mysqli_num_rows($res);
        
        return $count;
    }
}
?>