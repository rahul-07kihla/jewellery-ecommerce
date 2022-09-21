<?php

session_start();

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(E_ALL);

define ("DB_SERVER","localhost");
define ("DB_USER","root");
define ("DB_PASS","svs");
define ("DB_DATABASE","sam_test_rahul_shraddha");

$conn = mysqli_connect (DB_SERVER,DB_USER,DB_PASS,DB_DATABASE);
// $conn = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_DATABASE);
// echo $_SERVER['SERVER_NAME'] . "/assets/images/profile_picture/";
// exit;

$_SESSION['REFERER'] = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

define("PROFILE_IMAGE_UPLOAD", $_SERVER['DOCUMENT_ROOT']. "/assets/images/profile_picture/");
define("PROFILE_IMAGE", "http://" .  $_SERVER['SERVER_NAME'] . "/assets/images/profile_picture/");

define("SLIDER_IMAGE_UPLOAD", $_SERVER['DOCUMENT_ROOT']. "/assets/images/slider/");
define("SLIDER_IMAGE", "http://" .  $_SERVER['SERVER_NAME'] . "/assets/images/slider/");

define("PRODUCT_IMAGE_UPLOAD", $_SERVER['DOCUMENT_ROOT']. "/assets/images/product/");
define("PRODUCT_IMAGE", "http://" .  $_SERVER['SERVER_NAME'] . "/assets/images/product/");

define("CONTENT_IMAGE_UPLOAD", $_SERVER['DOCUMENT_ROOT']. "/assets/images/content/");
define("CONTENT_IMAGE", "http://" .  $_SERVER['SERVER_NAME'] . "/assets/images/content/");

define("CATEGORY_IMAGE_UPLOAD", $_SERVER['DOCUMENT_ROOT']. "/assets/images/category/");
define("CATEGORY_IMAGE", "http://" .  $_SERVER['SERVER_NAME'] . "/assets/images/category/");
?>