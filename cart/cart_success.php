<?php

$total = 0;
$totalAll = 0;

include_once '../layout/header.php';
?>

<link rel="stylesheet" href="<?= $config ?>/library/css-wp.less">
<link rel="stylesheet" href="<?= $config ?>/library/bootstrap-v4/css/bootstrap.min.css">

<div class="container mt-5 cart_success">
    <div class="row h4-success alert alert-info">
        <h4>
            Đặt hàng thành công
        </h4>
    </div>
    <div class="row">
        <div class="content_success">
            <div>
                <img class="img_success" src="../img/cart_success.png" alt="cart">
            </div>
            <div>
                <p>Cảm ơn bạn đã đặt hàng tại <b style="color: #0077b6">Anhbafishing</b></p>
                <p>Đơn hàng sẽ được giao cho bạn <b>từ 3-5 ngày</b></p>
                <p>Có bất cứ vấn đề gì hãy liên lạc ngay với chúng tôi</p>
                <p>Email: <i>cskh.anhbafishing@gmail.com</i></p>
                <p>Hotline: <strong><i style="color: red">1900 1009</i> | <i style="color: red">1980 1089</i></strong></p>
                <a class="btn btn-info" href="./index.php">Tiếp tục mua hàng</a>
            </div>
        </div>
    </div>
</div>

<?php include_once '../layout/footer.php'; ?>
<?php include_once '../connecting/footing.php'; ?>
