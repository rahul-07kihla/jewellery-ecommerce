<?php

class Order{

    public function insert_order()
    {
        $mysqli = new Database();

        $query = "INSERT INTO `order`(`user_id`) VALUES (?)";

        $res = $mysqli->connection->prepare($query);

        $res->bind_param("i",$user_id);

        $user_id = $_SESSION['s_id'];

        $res->execute();
        // print_r($res);
    }

    public function selected_order()
    {
        $mysqli = new Database();

        $query = "SELECT `order_detail`.id,product.product_image,product.product_name,product.price,order_detail.product_id  FROM `order_detail` JOIN product ON `order_detail`.product_id=product.id WHERE `order_detail`.user_id='".$_SESSION['s_id']."'";
        
        $res = $mysqli->connection->query($query);

        $row = $res->fetch_all(MYSQLI_ASSOC);
        
        return $row;
    }

    public function delete_product($id)
    {

        $mysqli = new Database();

        $query = "DELETE FROM `order_detail` WHERE id='".$id."'";

        $res = $mysqli->connection->query($query);

    }

    public function product_id($key)
    {
        $mysqli = new Database();

        $query = "SELECT * FROM product WHERE id = '$key'";
        
        $res = $mysqli->connection->query($query);

        $row = $res->fetch_all(MYSQLI_ASSOC);

        return $row;
    }

    public function insert($key2,$quantity,$total)
    {

        $mysqli = new Database();

        $query = "INSERT INTO `order_detail`(`order_id`,`user_id`, `product_id` ,`quantity` ,`total`) VALUES (?,?,?,?,?)";
        // print_r($query);
        // exit;
        $res = $mysqli->connection->prepare($query);
        // print_r($res);
        // exit;
        $res->bind_param("iiiii",$o_id,$user_id,$key2,$quantity,$total);
        
        $o_id = $_POST['id'];
        $user_id = $_SESSION['s_id'];
        // print_r($user_id);
        // exit;
        // $product_id = $_GET['id'];
        
        $res->execute();
        print_r($res);
        exit;

    }

    public function inserted_record_check($id)
    {
        $mysqli = new Database();

        $query = "SELECT * FROM `order_detail` WHERE user_id='".$_SESSION['s_id']."'";
        
        $res = $mysqli->connection->query($query);

        $row = $res->fetch_assoc();

        return $row;
    }

}