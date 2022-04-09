<?php
session_start();
if (isset($_GET['id']) && isset($_GET['qty'])) {

    $ID = $_GET['id'];
    $countNum = $_GET['qty'];
    if($countNum <= 0){
        unset($_SESSION['giohang'][$ID]);
    }
    else{
        if($countNum > 10) {
            $countNum = 10;
        }
        $_SESSION['giohang'][$ID]['Count'] = $countNum;
    }
    echo json_encode(true);
}