<?php

class Database
{
    public $connection;
    public function __construct()
    {
        // echo "test";
        // exit;
        // $conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_DATABASE);
        // var_dump($conn);
        // exit;
        $this->connection = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_DATABASE);
        // print_r(SLIDER_IMAGE);
        // exit;
    }
}

?>