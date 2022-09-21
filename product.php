<?php
include_once "include/connect.php";
include_once "class/class.Database.php";
include_once "class/class.Product.php";

$product = new Product();

$data = $product->show_product();

if(isset($_GET['id'])){

  $category_wise = $product->category_wise_product($_GET['id']);
  
}



include_once "include/header.php";
?>

<section class="new-arriwal">
  <div class="container">
    <div class="sec-title d-flex justify-content-center flex-column">
      <h5 class="sub-title">Exclusive Products</h5>
      <h2 class="title">PRODUCTS</h2>
      <div class="title-img"><img data-src="assets/images/sec-title-img.png" class="lazyload" alt="new arriwal"></div>
    </div>

<div class="product-list">
      <div class="product-home-owl owl-carousel">
      <?php
      if(!(isset($_GET['id'])))
      {
    foreach($data as $key => $value)
    {
      if($value['status']==1)
      {
      ?>
        <div class="product-box">
          <div class="product-img d-flex align-items-center justify-content-center">
            <a href="product-detail.php?id=<?=$value['id']; ?>"><img data-src="<?php echo PRODUCT_IMAGE . $value['product_image']; ?>" class="lazyload" alt="product"></a>
          </div>
          <div class="content d-flex">
            <div class="cart-menu"> 
              <ul>
                <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                <li><a href="#"><i class="far fa-heart"></i></a></li>
              </ul>
            </div>
            <div class="product-content-left">
              <a href="#"><?php echo $value['product_name']; ?></a>
            </div>
            <div class="product-content-right"><?php echo $value['price']; ?></div>
          </div>
        </div>
      <?php
      }
      }
      }
      else
      {
        foreach($category_wise as $key => $value)
        {
          if($value['status']==1)
          {
        ?>
        <div class="product-box">
          <div class="product-img d-flex align-items-center justify-content-center">
            <a href="product-detail.php?id=<?=$value['id']; ?>"><img data-src="<?php echo PRODUCT_IMAGE . $value['product_image']; ?>" class="lazyload" alt="product"></a>
          </div>
          <div class="content d-flex">
            <div class="cart-menu"> 
              <ul>
                <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                <li><a href="#"><i class="far fa-heart"></i></a></li>
              </ul>
            </div>
            <div class="product-content-left">
              <a href="#"><?php echo $value['product_name']; ?></a>
            </div>
            <div class="product-content-right"><?php echo $value['price']; ?></div>
          </div>
        </div>
        <?php
            }
          }
        }
        ?>
    </div>
</div>


</div>
</section>
<?php
include_once "include/footer.php";
?>