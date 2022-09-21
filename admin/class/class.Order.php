<?php

class Order{

    public function order_display()
    {
        $mysqli = new Database();

        $query = "SELECT * FROM `order_detail` JOIN user ON `order_detail`.user_id=user.id JOIN product ON `order_detail`.product_id=product.id;";
        // $query = "SELECT * FROM `order` JOIN product ON `order`.`product_id`=product.id JOIN user ON `order`.`user_id`=user.id JOIN order_detail";
    
        $res = $mysqli->connection->query($query);

        $row = $res->fetch_all(MYSQLI_ASSOC);
            
        return $row;
    }

    public function delete_product($id)
    {
        // print_r($id);
        // exit;
        $mysqli = new Database();

        $query = "DELETE FROM `order` WHERE id='".$id."'";

        $res = $mysqli->connection->query($query);

    }

    public function order_detail()
    {
        $mysqli = new Database();

        $query = "SELECT * FROM `order_product` JOIN `order` ON order_product.order_id=`order`.`id` JOIN product ON order_product.product_id=product.id JOIN user ON order_product.user_id=user.id";
        print_r($query);
        exit;
        $res = $mysqli->connection->query($query);

        $row = $res->fetch_all(MYSQLI_ASSOC);
        
        return $row;
    }

}