<?php
include_once "include/header.php";
include_once "include/connect.php";
include_once "class/class.Database.php";
include_once "class/class.Product.php";

$product = new Product();

$rows1 = $product->product_show_using_id();

?>
<section class="page-content">
  <div class="container">

    <div class="row">
      <div class="col-lg-5">

        <div class="product-slider">
            <div class="product-large-slider">
              <div class="pro-large-img img-zoom"><img src="<?php echo PRODUCT_IMAGE . $rows1['product_image']; ?>"></div>
              <!-- <div class="pro-large-img img-zoom"><img src="assets/images/product/product-2.jpg"></div>
              <div class="pro-large-img img-zoom"><img src="assets/images/product/product-3.jpg"></div>
              <div class="pro-large-img img-zoom"><img src="assets/images/product/product-4.jpg"></div>
              <div class="pro-large-img img-zoom"><img src="assets/images/product/product-5.jpg"></div>
              <div class="pro-large-img img-zoom"><img src="assets/images/product/product-6.jpg"></div> -->
            </div>
            <div class="pro-nav slick-row-10 slick-arrow-style">
              <!-- <div class="pro-nav-thumb"><img src="assets/images/product/product-1.jpg"></div>
              <div class="pro-nav-thumb"><img src="assets/images/product/product-2.jpg"></div>
              <div class="pro-nav-thumb"><img src="assets/images/product/product-3.jpg"></div>
              <div class="pro-nav-thumb"><img src="assets/images/product/product-4.jpg"></div>
              <div class="pro-nav-thumb"><img src="assets/images/product/product-5.jpg"></div>
              <div class="pro-nav-thumb"><img src="assets/images/product/product-6.jpg"></div> -->
            </div>
          </div>
         
      </div>

      <div class="col-lg-7">
        <div class="product-detail-right">
          <h3 class="title"><?php echo $rows1['product_name']; ?></h3>

          <div class="pro-type"><span>Product Code :</span> <?php echo $rows1['product_code']; ?></div>
                                  
          <div class="social-share">
            <a class="facebook" href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a class="whatsapp" href="#" target="_blank"><i class="fab fa-whatsapp"></i></a>
          </div>

          <!-- <div class="pro-type"><span>Product Number :</span> 2589 - MINA</div> -->
          
          <div class="pro-type"><span>Availability : </span> <?php echo $rows1['avalability']; ?> </div>
          <h4>ABOUT THIS PRODUCT</h4>

          <div class="description-text">
            <p><?php echo $rows1['about_product']; ?></p>
          </div>

        </div>
      </div>

    </div>

    <div class="product-detail-bottom">
      <div class="row">
        <div class="col-lg-6">
          <div class="pro-type"><span>BRAND : </span> <?php echo $rows1['b_name']; ?></div>
        </div>
        <div class="col-lg-6">
          <div class="pro-type"><span>PRODUCT TYPE : </span> <?php echo $rows1['avalability']; ?> </div>
        </div>
        <div class="col-lg-6">
          <div class="pro-type"><span>PRODUCT CODE : </span> <?php echo $rows1['product_code']; ?></div>
        </div>
        <div class="col-lg-6">
          <div class="pro-type"><span>DESIGN LENGTH : </span> <?php echo $rows1['design_height']; ?></div>
        </div>
        <div class="col-lg-6">
          <div class="pro-type"><span>DESIGN WIDTH : </span> <?php echo $rows1['design_width']; ?> CM</div>
        </div>
        <div class="col-lg-6">
          <div class="pro-type"><span>PRODUCT PRICE : </span> <?php echo $rows1['price']; ?></div>
        </div>
        <div class="col-lg-6">
          <div class="pro-type"><span>COLOUR : </span> <div style="background-color:<?php echo $rows1['color']; ?>;min-height:15px;min-width:-10px;"></div>
        </div> 
        <div class="col-lg-6">
          <div class="pro-type"><span>MATERIAL : </span> <?php echo $rows1['material']; ?></div>
        </div>
        <div class="col-lg-6">
          <div class="pro-type"><span>PLATING : </span> <?php echo $rows1['plating']; ?></div>
        </div>
        <div class="col-lg-6">
          <div class="pro-type"><span>STONE TYPE : </span> <?php echo $rows1['stone_type']; ?></div>
        </div>
      </div>
    </div>
    <a href="add_cart.php?id=<?=$rows1['id']; ?>&type1=add"><button id="trigger" onclick="msg()" class="btn btn-primary">Add cart</button></a>
    
  </div>
</section>
<?php
if($_SERVER['HTTP_REFERER']=="http://sam.rahul-shradha.svs152/login.php")
{
?>
  <script>
  document.getElementById("trigger").click();

  // function msg(){
	// 		alert("Auto click");
	// 	}
  </script>  
<?php
}
?>

<?php
include_once "include/footer.php";
?>