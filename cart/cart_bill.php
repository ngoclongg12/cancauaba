<?php

$total = 0;
$totalAll = 0;
$hoTen = null;
include_once $_SERVER['DOCUMENT_ROOT'] . '/connecting/connectDB.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/layout/header.php';

if(isset($_SESSION['hoTen'])){
    $hoTen = $_SESSION['hoTen'];
    $sql = "SELECT * FROM danhsach_kh WHERE fullname = '$hoTen'";
    $query = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($query);
}

?>
<link rel="stylesheet" href="<?= $config ?>/library/bootstrap-v4/css/bootstrap.min.css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?= $config ?>/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= $config ?>/assets/fonts/flaticon.css">
<link rel="stylesheet" href="<?= $config ?>/assets/css/nice-select.min.css">
<link rel="stylesheet" href="<?= $config ?>/assets/css/boxicons.min.css">
<link rel="stylesheet" href="<?= $config ?>/assets/css/meanmenu.css">
<link rel="stylesheet" type="text/css" href="<?= $config ?>/assets/css/settings.css">
<link rel="stylesheet" type="text/css" href="<?= $config ?>/assets/css/layers.css">
<link rel="stylesheet" type="text/css" href="<?= $config ?>/assets/css/navigation.css">
<link rel="stylesheet" href="<?= $config ?>/assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?= $config ?>/assets/css/owl.theme.default.min.css">
<link rel="stylesheet" href="<?= $config ?>/assets/css/modal-video.min.css">
<link rel="stylesheet" href="<?= $config ?>/assets/css/style.css">
<link rel="stylesheet" href="<?= $config ?>/assets/css/responsive.css">
<link rel="icon" type="image/png" href="<?= $config ?>/assets/images/favicon.png">

<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="<?= $config ?>/assets/js/jquery.min.js"></script>
<script src="<?= $config ?>/assets/js/popper.min.js"></script>
<script src="<?= $config ?>/assets/js/bootstrap.min.js"></script>
<script src="<?= $config ?>/assets/js/form-validator.min.js"></script>
<script src="<?= $config ?>/assets/js/contact-form-script.js"></script>
<script src="<?= $config ?>/assets/js/jquery.ajaxchimp.min.js"></script>
<script src="<?= $config ?>/assets/js/jquery.nice-select.min.js"></script>
<script src="<?= $config ?>/assets/js/jquery.meanmenu.js"></script>
<script src="<?= $config ?>/assets/js/jquery.themepunch.tools.min.js"></script>
<script src="<?= $config ?>/assets/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?= $config ?>/assets/js/extensions/revolution.extension.actions.min.js"></script>
<script src="<?= $config ?>/assets/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="<?= $config ?>/assets/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="<?= $config ?>/assets/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="<?= $config ?>/assets/js/extensions/revolution.extension.migration.min.js"></script>
<script src="<?= $config ?>/assets/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="<?= $config ?>/assets/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="<?= $config ?>/assets/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="<?= $config ?>/assets/js/extensions/revolution.extension.video.min.js"></script>
<script src="<?= $config ?>/assets/js/jquery.mixitup.min.js"></script>
<script src="<?= $config ?>/assets/js/owl.carousel.min.js"></script>
<script src="<?= $config ?>/assets/js/jquery-modal-video.min.js"></script>
<script src="<?= $config ?>/assets/js/thumb-slide.js"></script>
<script src="<?= $config ?>/assets/js/custom.js"></script>
<div class="container mt-4">
    <div class="row" style="background-color: rgb(170, 224, 248);">
        <h4 class="text-aligncenter" style="line-height: 40px; padding-left: 15px">XÁC NHẬN ĐƠN HÀNG</h4>
    </div>
    <div class="form_tb_cart">

        <table class="table table-striped mt-2 tb_cart">
            <thead>
                <tr>
                    <th scope="col">Sản phẩm</th>
                    <th scope="col">Giá thành</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Thành tiền</th>
                    <!-- <th scope="col"></th> -->
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($_SESSION['giohang']) && count($_SESSION['giohang']) > 0) {
    
                    foreach ($_SESSION['giohang'] as $k => $v) {
                        $total = $v['Count'] * $v['Price'];
                        $totalAll += $total;
                ?>
                        <tr>
                            <td scope="row">
                                <img class="admin_img_mota" src="<?= $config ?>/img/<?= $v['Image'] ?>" alt="<?= $v['Name'] ?>">
                                <div class="namePrd"><?= $v['Name'] ?></div>
                            </td>
                            <td><?= number_format($v['Price']) ?>đ</td>
                            <td data-th="Quantity">
                                <?= $v['Count'] ?>
                            </td>
                            <td><span class="ketqua"><?= number_format($total) ?>đ</span></td>
                        </tr>
                <?php
                    }
                } else {
                    echo '<center class="alert alert-danger mt-2">BẠN CHƯA CÓ SẢN PHẨM NÀO TRONG GIỎ HÀNG</center>';
                }
                ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <b class="price">
                            Tổng tiền: <?= number_format($totalAll) ?>đ
                        </b>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <form class="infoKH" action="" method="post">
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="">Tên khách hàng:</label>
                    <input id="nameBill" class="form-control" name="Name" type="text" required
                    value="<?php if(isset($_SESSION['hoTen'])){ echo $row['fullname'];} ?>"
                    >
                </div>
                <p class="alert alert-danger errNameBill" style="display: none;"></p>

                <div class="form-group">
                    <label for="">Số điện thoại:</label>
                    <input id="phoneBill" class="form-control" name="Phone" type="text" maxlength="11" required
                    value="<?php if(isset($_SESSION['hoTen'])){ echo $row['phone'];} ?>"
                    >
                </div>
                <p class="alert alert-danger errPhoneBill" style="display: none;"></p>

                <div class="form-group">
                    <label for="">Địa chỉ:</label>
                    <input id="addressBill" class="form-control" name="Address" type="text" required
                    value="<?php if(isset($_SESSION['hoTen'])){ echo $row['address'];} ?>"
                    >
                </div>
                <p class="alert alert-danger errAddressBill" style="display: none;"></p>

                <div class="form-group">
                    <label for="">Hình thức thanh toán:</label>
                    <select class="form-control" name="typeBill" id="typeBill">
                        <option value="0" disabled selected hidden>Vui lòng chọn !</option>
                        <option value="1">Tiền mặt</option>
                        <option value="4">Internet Banking</option>
                    </select>
                </div>
                <p class="alert alert-danger errTypeBill" style="display: none;"></p>
            </div>
            <?php
                if (isset($_SESSION['giohang']) && count($_SESSION['giohang']) > 0) {
            ?>
            <div class="col-md-4">
                <button type="button" name="infoSubmit" class="btn btn-info btn-sub-modal js_checkout">
                    Thanh toán
                </button>
            </div>
            <?php
                }
            ?>
        </div>
    </form>
    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thông tin mua hàng</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="post">
                    <div class="modal-body">
                        <div>Tên khách hàng: <span id="modalName"></span></div>
                        <div>Số điện thoại: <span id="modalPhone"></span></div>
                        <div>Địa chỉ: <span id="modalAddress"></span></div>
                        <div>
                            Thanh toán đơn hàng: <?= number_format($totalAll) ?> vnđ
                        </div>
                        <div>
                            Hình thức thanh toán: <span id="modalPay"></span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" name="modalSubmit" class="btn btn-info js_submit"> xác nhận</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/layout/footer.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/layout/newfooter.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/connecting/footing.php';
?>