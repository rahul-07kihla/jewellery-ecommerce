<?php
include_once "include/connect.php";

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if(!(isset($_SESSION['s_id']))){
    header('Location:login.php');
}

// print_r(basename($_SERVER['HTTP_REFERER']));
// exit;
if(basename($_SERVER['HTTP_REFERER'])=="product-detail.php")
{
    header("Location:produtct-detail.php");
}
basename($_SERVER['HTTP_REFERER']);
