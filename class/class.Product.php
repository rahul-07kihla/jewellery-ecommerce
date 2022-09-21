<?php

class Product{

    public function show_product()
    {           
        $mysqli = new Database();
        
        $query = "SELECT product.id,product.product_name,product.product_image,product.product_code,product.avalability,product.about_product,product.product_type,product.design_width,product.design_height,product.color,product.material,product.plating,brand.brand_name,category.category_name,product.status,product.stone_type,product.price FROM `product` JOIN brand ON product.brand=brand.id JOIN category ON product.category_id=category.id";

        $res = $mysqli->connection->query($query);        
        
        $row = $res->fetch_all(MYSQLI_ASSOC);
        
        return $row;

    }

    public function product_show_using_id()
    {

        $mysqli = new Database();

        $query = "SELECT product.id,product.product_name,product.product_image,product.product_code,product.avalability,product.about_product,product.product_type,product.design_width,product.design_height,product.color,product.material,product.plating,brand.brand_name AS b_name,category.category_name AS c_name,product.status,product.stone_type,product.price FROM `product` JOIN brand ON product.brand=brand.id JOIN category ON product.category_id=category.id WHERE product.id= '".$_GET['id']."'";

        $res = $mysqli->connection->query($query);

        $row = $res->fetch_assoc();

        return $row;
    }

    public function new_arrival()
    {           
        $mysqli = new Database();
        
        $query = "SELECT * FROM `product` ORDER BY id DESC LIMIT 5";

        $res = $mysqli->connection->query($query);        
        
        $row = $res->fetch_all(MYSQLI_ASSOC);
        
        return $row;

    }

    public function category()
    {           
        $mysqli = new Database();
        
        $query = "SELECT * FROM `category` where status=1";

        $res = $mysqli->connection->query($query);        
        
        $row = $res->fetch_all(MYSQLI_ASSOC);
        
        return $row;

    }

    public function category_wise_product($id)
    {        
        $mysqli = new Database();

        $query = "SELECT * FROM `product` JOIN category ON product.category_id=category.id WHERE category.id= '".$_GET['id']."'";
        
        $res = $mysqli->connection->query($query);

        $row = $res->fetch_all(MYSQLI_ASSOC);

        return $row;
    }

}