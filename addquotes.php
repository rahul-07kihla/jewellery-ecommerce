<?php

$server_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "sam_test_rahul_quotes";

$conn = mysqli_connect($server_name,$user_name,$password,$db_name);

$QUOTES = $_POST['quotes'];
$QOUTES_AUTHOR = $_POST['quotes_author'];

$query = "INSERT INTO `quotes`(`quotes`, `quotes_author`) VALUES ('$QUOTES','$QOUTES_AUTHOR')";

$res = $conn->query($query);

if($res==1)
{
    $response = array("status"=>"1","message"=>"Quotes inserted Successfull");
}
else
{
    $response = array("status"=>"0","message"=>"Something went wrong");
}

echo json_encode($response);

?>