<?php
include_once "include/header.php";
include_once "class/class.Database.php";
include_once "class/class.Slider.php";
include_once "class/class.Product.php";
include_once "class/class.Content.php";

// if (isset($_SESSION['s_id'])) {
// 	header("location:".$_SESSION['REFERER']);
// }

$_SESSION['REFERER'] = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

$slider = new Slider();
$product = new Product();
$content = new Content();

$content = $content->content_display();

$data = $product->new_arrival();

$category_display = $product->category();

$rows = $slider->show_data();

$count = $slider->count_data();
?>
<?php
      if(isset($_SESSION['succ']))
      {
      foreach($_SESSION['succ'] as $s)
      ?>
      <div class="alert alert-success" style="margin:20px;">
      <?php echo $s; ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      </div>
      <?php
      }
      ?>
<section class="image-slider">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
    <?php

$counter = 0;

foreach($rows as $key => $value)
{
  // echo "<pre>";
  // print_r($value);
  // var_dump($value['status']);
  // echo "<br>";
  if($value['status'] == 1)
  {
    $class = $counter == 0 ? 'active' : ''; 
    $counter++;
    
?>  
      <div class="carousel-item <?php echo $class; ?>" style="background-image: url('<?php echo SLIDER_IMAGE . $value['image_name']; ?>')">
        <div class="d-flex align-items-center justify-content-center h-100">
          <div class="slider-content">
            <h4><?php echo $value['name']; ?></h4>
            <h2><?php echo $value['description']; ?></h2>
            <p class="lead">WHEN YOU HAVE CONFIDENCE, YOU CAN HAVE A LOT OF FUN.</p>
            <a href="#" class="btn btn-primary">Shop Now <span class="icon"><i class="fas fa-chevron-right"></i></span></a>
          </div>
        </div>
  </div>
<?php
}
}
?>
      <!-- <div class="carousel-item" style="background-image: url('assets/images/slider-1.jpg')">
        <div class="d-flex align-items-center justify-content-center h-100">
          <div class="slider-content">
            <h4>Live The Moent</h4>
            <h2>World Jewelry</h2>
            <p class="lead">WHEN YOU HAVE CONFIDENCE, YOU CAN HAVE A LOT OF FUN.</p>
            <a href="#" class="btn btn-primary">Shop Now <span class="icon"><i class="fas fa-chevron-right"></i></span></a>
          </div>
        </div>
      </div> -->

    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

  </div>
</section>

<section class="features">
  <div class="container-fluid">
    <div class="row">

      <div class="col-sm-3 features-box features-border-right d-flex justify-content-lg-center align-items-center">
          <div class="icon"><img data-src="assets/images/premium-icon.png" class="lazyload" align="premium design patterns"></div>
          <h2>Premium Design Patterns</h2>
      </div>

      <div class="col-sm-3 features-box features-border-right d-flex justify-content-lg-center align-items-center">
          <div class="icon"><img data-src="assets/images/premium-icon-2.png" class="lazyload" alt="premium quality"></div>
          <h2>Premium Quality</h2>
      </div>

      <div class="col-sm-3 features-box features-border-right d-flex justify-content-lg-center align-items-center">
          <div class="icon"><img data-src="assets/images/premium-icon-3.png" class="lazyload" alt="wide range"></div>
          <h2>Wide Range</h2>
      </div>

      <div class="col-sm-3 features-box features-border-right d-flex justify-content-lg-center align-items-center">
          <div class="icon"><img data-src="assets/images/premium-icon-4.png" class="lazyload" alt="skilled experienced team"></div>
          <h2>Skilled & Experienced Team</h2>
      </div>

    </div>
  </div>
</section>


<?php
foreach ($content as $key=>$value)
{
?>
<section class="welcome-sec">
  <div class="container">
    <div class="row d-lg-flex align-items-center">
      <div class="col-lg-5">
        <div class="welcome-img"><img data-src="<?php echo CONTENT_IMAGE .  $value['image']; ?>" class="lazyload" alt="about shraddha ornaments"></div>
      </div>
      <div class="col-lg-7">
        <div class="welcome-right">
          <h2><?php echo $value['heading']; ?><br><span><?php echo $value['heading_1']; ?></span></h2>
          <div class="text">
            <?php echo $value['content']; ?><br><br>

            <?php echo $value['content_1']; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
}
?>

<section class="new-arriwal">
  <div class="container">
    <div class="sec-title d-flex justify-content-center flex-column">
      <h5 class="sub-title">Exclusive Products</h5>
      <h2 class="title">NEW ARRIVAL</h2>
      <div class="title-img"><img data-src="assets/images/sec-title-img.png" class="lazyload" alt="new arriwal"></div>
    </div>

    <div class="product-list">
      <div class="product-home-owl owl-carousel">
      <?php
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
      ?>
        <!-- <div class="product-box">
          <div class="product-img d-flex align-items-center justify-content-center">
            <a href="#"><img data-src="assets/images/product/product-2.jpg" class="lazyload" alt="product"></a>
          </div>
          <div class="content d-flex">
            <div class="cart-menu"> 
              <ul>
                <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                <li><a href="#"><i class="far fa-heart"></i></a></li>
              </ul>
            </div>
            <div class="product-content-left">
              <a href="#">Curabitur cursus dignis</a>
            </div>
            <div class="product-content-right">₹1754</div>
          </div>
        </div>

        <div class="product-box">
          <div class="product-img d-flex align-items-center justify-content-center">
            <a href="#"><img data-src="assets/images/product/product-5.jpg" class="lazyload" alt="product"></a>
          </div>
          <div class="content d-flex">
            <div class="cart-menu"> 
              <ul>
                <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                <li><a href="#"><i class="far fa-heart"></i></a></li>
              </ul>
            </div>
            <div class="product-content-left">
              <a href="#">Curabitur cursus dignis</a>
            </div>
            <div class="product-content-right">₹1754</div>
          </div>
        </div>

        <div class="product-box">
          <div class="product-img d-flex align-items-center justify-content-center">
            <a href="#"><img data-src="assets/images/product/product-4.jpg" class="lazyload" alt="product"></a>
          </div>
          <div class="content d-flex">
            <div class="cart-menu"> 
              <ul>
                <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                <li><a href="#"><i class="far fa-heart"></i></a></li>
              </ul>
            </div>
            <div class="product-content-left">
              <a href="#">Curabitur cursus dignis</a>
            </div>
            <div class="product-content-right">₹1754</div>
          </div>
        </div>

        <div class="product-box">
          <div class="product-img d-flex align-items-center justify-content-center">
            <a href="#"><img data-src="assets/images/product/product-6.jpg" class="lazyload" alt="product"></a>
          </div>
          <div class="content d-flex">
            <div class="cart-menu"> 
              <ul>
                <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                <li><a href="#"><i class="far fa-heart"></i></a></li>
              </ul>
            </div>
            <div class="product-content-left">
              <a href="#">Curabitur cursus dignis</a>
            </div>
            <div class="product-content-right">₹1754</div>
          </div>
        </div> -->

      </div>
    </div>

  </div>
</section>

<section class="category-sec-home">
  <div class="container">
    <div class="sec-title d-flex justify-content-center flex-column">
      <h2 class="title">SHOP BY CATEGORY</h2>
      <div class="title-img"><img data-src="assets/images/sec-title-img.png" class="lazyload" alt="shop by category"></div>
    </div>

    <div class="category-list">
      <div class="category-owl owl-carousel">

      <?php
      // if($category_display['status']==0)
      // {
      foreach($category_display as $key => $value)
      {
        
        ?>
        <div class="category-box">
          <div class="img d-flex justify-content-center align-items-center">
            <a href="product.php?id=<?= $value['id']; ?>"><img data-src="<?php echo CATEGORY_IMAGE . $value['category_image']; ?>" class="lazyload" alt="rings"></a>
          </div>
          <div class="content">
              <h2><?php echo $value['category_name']; ?></h2>
              <a href="product.php?id=<?= $value['id']; ?>" class="link">See the collection</a>
          </div>
        </div>
        <?php
        }
        // }
        // else
        // {
        //   echo "<h1>Category Not found</h1>";
        // }
        ?>

        <!-- <div class="category-box">
          <div class="img d-flex justify-content-center align-items-center">
            <a href="#"><img data-src="assets/images/earing.png" class="lazyload" alt="earring"s></a>
          </div>
          <div class="content">
              <h2>Earrings</h2>
              <a href="#" class="link">See the collection</a>
          </div>
        </div>

        <div class="category-box">
          <div class="img d-flex justify-content-center align-items-center">
            <a href="#"><img data-src="assets/images/necklaces.png" class="lazyload" alt="necklaces"></a>
          </div>
          <div class="content">
              <h2>Necklaces</h2>
              <a href="#" class="link">See the collection</a>
          </div>
        </div>

        <div class="category-box">
          <div class="img d-flex justify-content-center align-items-center">
            <a href="#"><img data-src="assets/images/bracelets.png" class="lazyload" alt="bracelets"></a>
          </div>
          <div class="content">
              <h2>Bracelets</h2>
              <a href="#" class="link">See the collection</a>
          </div>
        </div>

        <div class="category-box">
          <div class="img d-flex justify-content-center align-items-center">
            <a href="#"><img data-src="assets/images/ring.png" class="lazyload" alt="rings"></a>
          </div>
          <div class="content">
              <h2>Rings</h2>
              <a href="#" class="link">See the collection</a>
          </div>
        </div>

        <div class="category-box">
          <div class="img d-flex justify-content-center align-items-center">
            <a href="#"><img data-src="assets/images/earing.png" class="lazyload" alt="earrings"></a>
          </div>
          <div class="content">
              <h2>Earrings</h2>
              <a href="#" class="link">See the collection</a>
          </div>
        </div>

        <div class="category-box">
          <div class="img d-flex justify-content-center align-items-center">
            <a href="#"><img data-src="assets/images/necklaces.png" class="lazyload" alt="necklaces"></a>
          </div>
          <div class="content">
              <h2>Necklaces</h2>
              <a href="#" class="link">See the collection</a>
          </div>
        </div>

        <div class="category-box">
          <div class="img d-flex justify-content-center align-items-center">
            <a href="#"><img data-src="assets/images/bracelets.png" class="lazyload" alt="bracelets"></a>
          </div>
          <div class="content">
              <h2>Bracelets</h2>
              <a href="#" class="link">See the collection</a>
          </div>
        </div> -->

      </div>
    </div>

  </div>
</section>

<!-- <section class="occasion-sec">
  <div class="container">
    <div class="sec-title d-flex justify-content-center flex-column">
      <h2 class="title">SHOP BY OCCASION</h2>
      <div class="title-img"><img data-src="assets/images/sec-title-img.png" class="lazyload" alt="shop by occasion"></div>
    </div>

    <div class="row">

      <div class="col-sm-6">
        <div class="occasion-text-box d-flex justify-content-center align-items-center flex-column">
          <h2>Anniversary Gift</h2>
          <p>Let us help find perfect diamond</p>
          <a href="#" class="btn btn-primary">Shop Now</a>
        </div>
        <div class="occasion-box-images">
          <a href="#"><img data-src="assets/images/occasion-img-1.jpg" class="lazyload" alt="wedding collection"></a>
          <div class="infor-images">
            <h3 class="title_images">Wedding Collection</h3>
            <a href="#" class="button-shop text-center">Shop Now</a>
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="occasion-box-images">
          <a href="#"><img data-src="assets/images/occasion-img-2.jpg" class="lazyload" alt="engagement collection"></a>
          <div class="infor-images">
            <h3 class="title_images">Engagement Collection</h3>
            <a href="#" class="button-shop text-center">Shop Now</a>
          </div>
        </div>
        <div class="occasion-text-box d-flex justify-content-center align-items-center flex-column">
          <h2>Anniversary Gift</h2>
          <p>Let us help find perfect diamond</p>
          <a href="#" class="btn btn-primary">Shop Now</a>
        </div>
      </div>

    </div>

  </div>
</section> -->

<?php
include "include/footer.php";
?>
