<?php

$server_name = "localhost";
$user_name = "root";
$password = "svs";
$db_name = "sam_test_rahul_quotes";

$conn = mysqli_connect($server_name,$user_name,$password,$db_name);

$query = "SELECT * FROM `quotes`";

$res = $conn->query($query);

$row = $res->fetch_all(MYSQLI_ASSOC);

if(empty($row))
{
   $response = array("data"=>$row);
}
else
{
    $response = $row;
}

echo json_encode($response);
?>