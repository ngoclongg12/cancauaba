<?php
ob_start();
$stt = "handling";
$sql = "SELECT * FROM danhsach_donhang WHERE Status = '$stt' ORDER BY id_dh DESC";
$query = mysqli_query($connect, $sql);

?>

<table class="table table-striped mt-4">
    <thead>
        <tr>
            <th>Mã đơn hàng</th>
            <th>Ngày tạo đơn</th>
            <th>Khách hàng</th>
            <th>Địa chỉ</th>
            <th>Số điện thoại</th>
            <th>Trạng thái</th>
            <th>Khách phải trả</th>
        </tr>
    </thead>
    <?php
    while ($row = mysqli_fetch_array($query)) {
    ?>
        <tbody>
            <tr>
                <td>
                    <a href="./trangquantri.php?Admin=order_detail&id_dh=<?= $row['id_dh'] ?>">Cancauaba00<?= $row['id_dh'] ?></a>
                </td>
                <td><?= $row['created_at'] ?></td>
                <td><?= $row['Name'] ?></td>
                <td style="overflow-x: hidden; max-width: 150px;"><?= $row['Address'] ?></td>
                <td><?= $row['Phone'] ?></td>
                <td>
                    <select class="custom-select custom-select-sm cha_ship" name="">
                        <option disabled selected hidden>Đang xử lý</option>
                        <option
                            style="
                                color:black;
                                background: yellow;
                                font-weight: 700;"
                            value="<?= $row['id_dh'] ?>"
                            >
                            Shipping
                        </option>
                    </select>
                </td>
                <td><?= number_format($row['Bill']) ?>đ</td>
            </tr>
        </tbody>
    <?php
    }
    ?>
</table>

<?php
$content = ob_get_clean();
?>