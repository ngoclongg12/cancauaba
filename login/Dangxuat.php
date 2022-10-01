<?php
session_start();
if(isset($_SESSION["hoTen"])){
    session_destroy();
    header('location: '.$config.'/login/Dangnhap.php');
}
else{
    header('location: '.$config.'/login/Dangnhap.php');
}