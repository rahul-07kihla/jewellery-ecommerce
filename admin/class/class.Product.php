<?php

class Product{

    public function select_brand()
    {
        $mysqli = new Database();

        $query = "SELECT * FROM `brand`";

        $res = $mysqli->connection->query($query);        
        
        $row = $res->fetch_all(MYSQLI_ASSOC);
        
        return $row;
    }

    public function select_category()
    {
        $mysqli = new Database();

        $query = "SELECT * FROM `category`";        

        $res = $mysqli->connection->query($query);
        
        $row = $res->fetch_all(MYSQLI_ASSOC);
        
        return $row;
    }

    public function product_with_image($file_name)
    {
        $mysqli = new Database();

        $query = "INSERT INTO `product`(`product_image`, `product_name`, `product_code`, `avalability`, `about_product`, `brand`, `category_id`, `product_type`, `design_width`, `design_height`, `color`, `material`, `plating`, `stone_type`,`price`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

        $res = $mysqli->connection->prepare($query);

        $res->bind_param("sssssiissssssss",$file_name,$product_name,$p_code,$avb,$desc,$brand_id,$c_id,$pro_type,$des_width,$des_height,$color,$material,$plating,$stone_type,$price);
        
        $product_name = $_POST['productname'];
        $p_code = $_POST['product_code'];
        $avb = $_POST['availability'];
        $desc = $_POST['description'];
        $brand_id = $_POST['brand'];
        $c_id = $_POST['category'];
        $pro_type = $_POST['ptype'];
        $des_width = $_POST['dwidth'];
        $des_height = $_POST['dheight'];
        $color = $_POST['color'];
        $material = $_POST['material'];
        $plating = $_POST['plating'];
        $stone_type = $_POST['stype'];
        $price = $_POST['price'];

        $res->execute();
        
        // header("location:../add_user.php");
    }

    public function product_without_image()
    {
        $mysqli = new Database();

        $query = "INSERT INTO `product`(`product_name`, `product_code`, `avalability`, `about_product`, `brand`, `category_id`, `product_type`, `design_width`, `design_height`, `color`, `material`, `plating`, `stone_type`, `price`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

        $res = $mysqli->connection->prepare($query);

        $res->bind_param("ssssiissssssss",$product_name,$p_code,$avb,$desc,$brand_id,$c_id,$pro_type,$des_width,$des_height,$color,$material,$plating,$stone_type,$price);
        
        $product_name = $_POST['productname'];
        $p_code = $_POST['product_code'];
        $avb = $_POST['availability'];
        $desc = $_POST['description'];
        $brand_id = $_POST['brand'];
        $c_id = $_POST['category'];
        $pro_type = $_POST['ptype'];
        $des_width = $_POST['dwidth'];
        $des_height = $_POST['dheight'];
        $color = $_POST['color'];
        $material = $_POST['material'];
        $plating = $_POST['plating'];
        $stone_type = $_POST['stype'];
        $price = $_POST['price'];

        $res->execute();

        // header("location:../add_user.php");
    }

    public function show_data()
    {           
        $mysqli = new Database();
        
        $query = "SELECT product.id,product.product_name,product.product_image,product.product_code,product.avalability,product.about_product,product.product_type,product.design_width,product.design_height,product.color,product.material,product.plating,brand.brand_name,category.category_name,product.status,product.stone_type,product.price FROM `product` JOIN brand ON product.brand=brand.id JOIN category ON product.category_id=category.id";

        $res = $mysqli->connection->query($query);        
        
        $row = $res->fetch_all(MYSQLI_ASSOC);
        
        return $row;

    }

    public function show_with_id_product($id)
    {
        
        $mysqli = new Database();
        
        $query = "SELECT product.id,product.product_name,product.product_image,product.product_code,product.avalability,product.about_product,product.product_type,product.design_width,product.design_height,product.color,product.material,product.plating,brand.brand_name,category.category_name,product.status,product.stone_type,product.price FROM `product` JOIN brand ON product.brand=brand.id JOIN category ON product.category_id=category.id WHERE  product.id='".$id."'";
        
        $res = $mysqli->connection->query($query);
        
        $row = $res->fetch_assoc();
        
        return $row;
    }

    public function show_without_id_product($id)
    {
        $mysqli = new Database();
        
        $query = "SELECT product.id,product.product_name,product.product_image,product.product_code,product.avalability,product.about_product,product.product_type,product.design_width,product.design_height,product.color,product.material,product.plating,brand.brand_name,category.category_name,product.status,product.stone_type,product.price FROM `product` JOIN brand ON product.brand=brand.id JOIN category ON product.category_id=category.id WHERE  product.id!='".$id."'";
        
        $res = $mysqli->connection->query($query);
        
        $row = $res->fetch_all(MYSQLI_ASSOC);

		return $row;
    }

    public function edit_product($file_name)
    {
        $mysqli = new Database();

        $query = "UPDATE `product` SET `product_image`= ? ,`product_name`= ?,`product_code`= ?,`avalability`= ? ,`about_product`= ?,`brand`= ?,`category_id`= ?,`product_type`= ?,`design_width`= ?,`design_height`= ?,`color`= ? ,`material`= ?,`plating`= ?,`stone_type`= ?,`price`=? WHERE id = '".$_POST['id1']."'";
        
        $res = $mysqli->connection->prepare($query);
        
        $res->bind_param("sssssiisssssssi",$file_name,$product_name,$p_code,$avb,$desc,$brand_id,$c_id,$pro_type,$des_width,$des_height,$color,$material,$plating,$stone_type,$price);
        
        $id = $_POST['id1'];
        $product_name = $_POST['p_name'];
        $p_code = $_POST['p_code'];
        $avb = $_POST['avalability'];
        $desc = $_POST['desc'];
        $brand_id = $_POST['brand'];
        $c_id = $_POST['category'];
        $pro_type = $_POST['p_type'];
        $des_width = $_POST['d_width'];
        $des_height = $_POST['d_height'];
        $color = $_POST['color'];
        $material = $_POST['material'];
        $plating = $_POST['plating'];
        $stone_type = $_POST['s_type'];
        $price = $_POST['price'];
        
        
        return  $res->execute();
    }

    public function without_image_edit_product()
    {
        $mysqli = new Database();

        $query = "UPDATE `product` SET `product_name`= ?,`product_code`= ?,`avalability`= ? ,`about_product`= ?,`brand`= ?,`category_id`= ?,`product_type`= ?,`design_width`= ?,`design_height`= ?,`color`= ? ,`material`= ?,`plating`= ?,`stone_type`= ?,`price`=? WHERE id = '".$_POST['id1']."'";
        
        $res = $mysqli->connection->prepare($query);
        
        $res->bind_param("ssssiisssssssi",$product_name,$p_code,$avb,$desc,$brand_id,$c_id,$pro_type,$des_width,$des_height,$color,$material,$plating,$stone_type,$price);
        
        $id = $_POST['id1'];
        $product_name = $_POST['p_name'];
        $p_code = $_POST['p_code'];
        $avb = $_POST['avalability'];
        $desc = $_POST['desc'];
        $brand_id = $_POST['brand'];
        $c_id = $_POST['category'];
        $pro_type = $_POST['p_type'];
        $des_width = $_POST['d_width'];
        $des_height = $_POST['d_height'];
        $color = $_POST['color'];
        $material = $_POST['material'];
        $plating = $_POST['plating'];
        $stone_type = $_POST['s_type'];
        $price = $_POST['price'];
    
        return  $res->execute();
    }

    public function delete_product($id)
    {

        $mysqli = new Database();

        $query = "DELETE FROM `product` WHERE id='".$id."'";

        $res = $mysqli->connection->query($query);

    }

    public function brand_0($id)
    {
        $mysqli = new Database();

        $query = "UPDATE product SET status='0' WHERE id={$_GET['id']}";
        
        $res = $mysqli->connection->query($query);
    }

    public function brand_1($id)
    {
        $mysqli = new Database();

        $query = "UPDATE product SET status='1' WHERE id={$_GET['id']}";

        $res = $mysqli->connection->query($query);
    }

}
?>