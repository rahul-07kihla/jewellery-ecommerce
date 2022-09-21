<?php
include_once "include/connect.php";
include_once "class/class.Database.php";
include_once "class/class.Order.php";

$order = new Order();

$o_id = $_POST['id1'];
echo $o_id;
$key = $_POST['id'];
$quantity = $_POST['quanitity'];

// echo '<pre>';
// print_r($quantity);
// print_r($key);


foreach($key as $id=>$value1)
{
    $display[$value1]  = $order->product_id($value1);
}


$orders_items = [];

foreach($display as $key1=>$value)
{
    $total = $value[0]['price'];

    $q = $quantity[$key1];
    $mul = $total * $q;
    
    $orders_items[$key1] = ['total' => $mul, 'quantity' => $q];
}

foreach($orders_items as $key2=>$value)
{
    $quantity = $value['quantity'];
    $total = $value['total'];
    $product_key = array_keys($orders_items);
    // print_r($product_key);
    // echo "<br>";
    // print_r($orders_items);
    // print_r($key2);
    $insert_order = $order->insert_order();
    $insert = $order->insert($key2,$quantity,$total,$quantity,$total);
    // print_r($insert);
}

?>
<?php
$succ[] = "Successfully order placed";
    $_SESSION['succ'] = $succ;
header("Location:index.php");
exit;
?>