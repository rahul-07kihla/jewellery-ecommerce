<?php
include_once "../include/connect.php";
include_once "../class/class.Database.php";
include_once "../class/class.Order.php";

$order = new Order();

$delete_order = $order->delete_product($_GET['id']);
$succ[] = "Successfully Deleted Your record";
    $_SESSION['succ'] = $succ;
header("Location:../order.php");
exit;

?>