<?php
require_once "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="assets/images/favicon.png">

  <!-- Meta -->
  <title>Shraddha Ornaments</title>
  <!-- css -->
  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="assets/css/animate.min.css" rel="stylesheet">
  <!-- font-awesome CSS -->
  <link rel="stylesheet" href="assets/fontawesome/web-fonts-with-css/css/all.css">
  <!-- owl-carousel CSS -->
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
  <!-- Template CSS -->
  <link href="assets/css/style.css" rel="stylesheet">
  <!-- grid CSS -->
  <link href="assets/css/grid.css" rel="stylesheet">
</head>
<body class="inner-page-body"> 

<header class="header">
  <div class="site-header-top">
    <div class="container-fluid">
      <div class="row">
        <div class="header-top-left col-lg-6 col-sm-12">
          <p>Need Help? Free call us: 123-456-7890</p>
        </div>
        <div class="header-top-right col-lg-6 col-sm-12">
          <ul class="mr-auto d-lg-flex justify-content-end">
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="site-header-main">
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="assets/images/logo.png" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample07">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Company
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="index.php">HOME</a>
                <a class="dropdown-item" href="company.html">PROFILE</a>
                <a class="dropdown-item" href="company.html">FROM THE OWNERS' CORNER</a>
                <a class="dropdown-item" href="company.html">QUALITY CONTROL</a>
                <a class="dropdown-item" href="company.html">PRIVACY POLICY</a>
                <a class="dropdown-item" href="company.html">OFFER</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="product.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Products
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="product.php">EARRINGS</a>
                <a class="dropdown-item" href="products.php">NECKLACE</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Catalogue
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="catalogue.html">AD COLLECTION</a>
                <a class="dropdown-item" href="catalogue.html">BRACELET</a>
                <a class="dropdown-item" href="catalogue.html">MALA</a>
                <a class="dropdown-item" href="catalogue.html">NECKLACE</a>
                <a class="dropdown-item" href="catalogue.html">TOPS PUSH PATCH</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="get-touch.html">Get In Touch</a></li>
            <?php
            if(isset($_SESSION['s_id']))
            {
            ?>
            <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
            <li class="nav-item"><a class="nav-link" href="buynow.php">Order</a></li>
            <?php
            }
            else
            {
            ?>
            <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
            <?php
            }
            ?>
          </ul>
        </div>
        
      </div>
    </nav>
  </div>
</header>