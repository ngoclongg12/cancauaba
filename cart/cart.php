<?php

$total = 0;
$totalAll = 0;

include_once '../layout/header.php';
?>
<link rel="stylesheet" href="<?= $config ?>/library/css-wp.less">

<link rel="stylesheet" href="<?= $config ?>/library/bootstrap-v4/css/bootstrap.min.css">

<div class="container mt-4">
    <div style="background-color: #446084;">
        <h4 class="text-aligncenter" style="color: white; line-height: 40px; padding-left: 15px; text-transform: uppercase;">GIỎ HÀNG anhbafishing</h4>

    </div>
    <form class="form_tb_cart" method="get">

        <table class="table table-hover mt-2 tb_cart">
            <thead>
                <tr>
                    <th scope="col">Sản phẩm</th>
                    <th scope="col">Giá thành</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Thành tiền</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($_SESSION['giohang']) && count($_SESSION['giohang']) > 0) {

                    foreach ($_SESSION['giohang'] as $k => $v) {
                        $total = $v['Count'] * $v['Price'];
                        $totalAll += $total;
                ?>
                        <input type="hidden" name="component" value="bill">
                        <tr>
                            <th scope="row">
                                <img class="admin_img_mota" src="../img/<?= $v['Image'] ?>" alt="product">
                                <div class="namePrd"><?= $v['Name'] ?></div>
                            </th>
                            <td><?= number_format($v['Price']) ?>đ</td>
                            <td data-th="Quantity">
                                <input data-id="<?= $v['ID'] ?>" class="form-control text-center countNum" style="max-width: 85px" value="<?= $v['Count'] ?>" type="number" min="1" max="10">
                            </td>
                            <td><span class="ketqua"><?= number_format($total) ?>đ</span></td>
                            <td>
                                <a onclick="return prd_cart_del()" class="btn btn-danger btn-md" href="./cart_process.php?id_sp=<?= $v['ID'] ?>&t=del">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                <?php
                    }
                } else {
                    echo '<center class="alert alert-danger mt-2">BẠN CHƯA CÓ SẢN PHẨM NÀO TRONG GIỎ HÀNG</center>';
                }
                ?>
                <tr>
                    <th>
                        <div class="animate__animated animate__fadeInRight rq_swipe_r mb-2">
                            <i class="fas fa-angle-double-left"></i>
                            Trượt sang phải
                        </div>
                        <a class="btn btn-info" href="<?= $config ?>/index.php">Chọn thêm sản phẩm</a>
                    </th>
                    <td>
                        
                    </td>
                    <td></td>
                    <td><b class="price">
                            Tổng tiền: <?= number_format($totalAll) ?>đ
                        </b>
                    </td>
                    <td>
                        <!-- <button type="submit" class="btn btn-info">
                            Thực hiện mua hàng
                        </button> -->
                        <a href="./cart_bill.php" class="btn btn-info">
                            Thực hiện mua hàng
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>
<?php include_once '../layout/footer.php'; ?>
<?php include_once '../connecting/footing.php'; ?>