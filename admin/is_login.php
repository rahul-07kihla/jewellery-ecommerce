<?php
include_once "include/connect.php";

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if(!(isset($_SESSION['username']))){
    header('Location:auth-login.php');
}
