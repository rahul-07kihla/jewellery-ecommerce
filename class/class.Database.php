<?php

class Database
{
    public $connection;
    public function __construct()
    {
        $this->connection = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_DATABASE);
        
    }
}

?>