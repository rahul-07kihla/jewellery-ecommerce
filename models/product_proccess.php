<?php
include_once "../include/connect.php";
include_once "../class/class.Database.php";
include_once "../class/class.Order.php";

$order = new Order();

$id = $_GET['id'];

$check = $order->inserted_record_check($id);

$delete = isset($_GET['type']);
$add = isset($_GET['type1']);

if($check)
{
    
        $succ[] = "Order is already taken";
            $_SESSION['succ'] = $succ;        
            header("Location:../buynow.php");
}
else if(isset($_GET['id']) && $add=='add')
{
    $order_insert = $order->insert_order();
    $succ[] = "Successfully Order Your Product";
        $_SESSION['succ'] = $succ;
    header("Location:../buynow.php");
}

if($delete)
{
    echo "test2";
        if(isset($_GET['id']) && $delete=='delete')
        {
                {
                    $delete_product = $order->delete_product($_GET['id']);
                    $succ[] = "Successfully Deleted From Buy now";
                        $_SESSION['succ'] = $succ;
                    header("Location:../buynow.php");
                    exit;
                }
        }
}
?>