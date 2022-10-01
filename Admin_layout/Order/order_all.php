<?php
ob_start();
$configHref = include $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';
$text = '';
$hasSearch = false;
$classBtnStatus = "btn-danger";

if (isset($_GET["s"])) {
    $text = $_GET["s"];
    $hasSearch = true;
}

$textFix = trim($text);
$arr_textFix = explode(" ", $textFix);
$textFix = implode("%", $arr_textFix);
$textFix = "%" . $textFix . "%";
    
if (isset($_GET["page_filter"])) {
    $stt = $_GET["page_filter"];
} else {
    $stt = 1;
}
$pageRow = 6;
$perRow = $stt * $pageRow - $pageRow;
$totalPage = ceil(mysqli_num_rows(mysqli_query($connect, "SELECT * FROM danhsach_donhang WHERE Phone LIKE ('$textFix')")) / $pageRow);
$listPrd = "";
$x = 1;
$y = 2;

for ($i = 1; $i <= $totalPage; $i++) {

    if (isset($_GET["page_filter"])) {
        $x = $_GET["page_filter"] - 1;
        $y = $_GET["page_filter"] + 1;
    }

    $prevPg = '
        <li class="page-item">
            <a class="page-link" 
            href="'.$configHref.'/admin/trangquantri.php?Admin=order_all&s=' . $text . '&page_filter=' . $x . '"
            aria-label="Next">
                <span aria-label="Previous">Previous</span>
            </a>
        </li>';
    $listPrd .= '<li class="page-item">
            <a class="page-link pageNumber'.$i.'"
            href="'.$configHref.'/admin/trangquantri.php?Admin=order_all&s=' . $text . '&page_filter=' . $i . '">' . $i . '</a>
        </li>';
    $nextPg = '<li class="page-item"><a class="page-link" href="'.$configHref.'/admin/trangquantri.php?Admin=order_all&s=' . $text . '&page_filter=' . $y . '" aria-label="Next"><span aria-hidden="true">Next</span></a></li>';
}

if ($hasSearch) {
    $sql = "SELECT * FROM danhsach_donhang WHERE Phone LIKE ('$textFix') ORDER BY id_dh DESC LIMIT $perRow,$pageRow";
} else {
    $sql = "SELECT * FROM danhsach_donhang ORDER BY updated_at LIMIT $perRow,$pageRow";
}

$query = mysqli_query($connect, $sql);

if (mysqli_num_rows($query) == 0) {
    echo '<center class="alert alert-danger mt-3">Không có đơn hàng nào !</center>';
}

?>

<!-- search -->
<form action="<?= $configHref ?>/admin/trangquantri.php" method="get" class="mt-5" style="max-width: 460px; margin: auto" >
    <div class="input-group mb-3">
        <input type="hidden" name="Admin" value="order_all">
        <input type="text" class="form-control" name="s" placeholder="Tìm kiếm theo số điện thoại...">
        <div class="input-group-append">
            <span>
                <button class="btn" style="background-color: #446084; color:#ffffff; border-color:#ffffff" type="submit">
                    <i class="fas fa-search"></i> Tìm kiếm
                </button>
            </span>
        </div>
    </div>
</form>

<?php 
if ($hasSearch && $text) {
?>
    <div class="mt-4" style="background-color: #446084;">
        <div class="container-fluid">
            <h4 style="line-height: 45px; margin: 0; color: white">Kết quả tìm kiếm cho: <?= $text ?></h4>
        </div>
    </div>
<?php
}
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
        if ($row['Status'] == 'Shipping') {
            $classBtnStatus = 'btn-info';
        } elseif ($row['Status'] == 'Done') {
            $classBtnStatus = 'btn-success';
        }
    ?>
        <tbody>
            <tr>
                <td>
                    <a href="<?= $configHref ?>/admin/trangquantri.php?Admin=order_detail&id_dh=<?= $row['id_dh'] ?>">Cancauaba00<?= $row['id_dh'] ?></a>
                </td>
                <td><?= $row['created_at'] ?></td>
                <td><?= $row['Name'] ?></td>
                <td style="overflow-x: hidden; max-width: 150px;"><?= $row['Address'] ?></td>
                <td><?= $row['Phone'] ?></td>
                <td>
                    <div class="btn <?= $classBtnStatus ?>">
                        <?= $row['Status'] ?>
                    </div>
                </td>
                <td><?= number_format($row['Bill']) ?>đ</td>
            </tr>
        </tbody>
    <?php
    }
    ?>
</table>

<div class="container mt-5">

    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <?php
                    if (isset($_GET['page_filter']) && $_GET['page_filter'] > 1) {
                        echo $prevPg;
                    }
                    ?>
                    <?= $listPrd ?>
                    <?php
                    if (isset($_GET['page_filter']) && $_GET['page_filter'] < $totalPage) {
                        echo $nextPg;
                    }
                    if (empty($_GET['page_filter']) && $totalPage >= 2) {
                        echo $nextPg;
                    }
                    ?>

                </ul>
            </nav>
        </div>
        <div class="col-md-4"></div>
    </div>

</div>
<?php
$content = ob_get_clean();
?>