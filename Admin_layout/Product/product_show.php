<?php
ob_start();
$configHref = include $_SERVER['DOCUMENT_ROOT'] . '/cancauaba/config/config.php';

if (isset($_GET['page_product'])) {
    $page_prd = $_GET['page_product'];
} else {
    $page_prd = 1;
}

$pagePerRow = 5;

$pageRow = $page_prd * $pagePerRow - $pagePerRow;

$sql = "SELECT * FROM danhsach_sp ORDER BY ID DESC LIMIT $pageRow, $pagePerRow";
$query = mysqli_query($connect, $sql);

$totalRow = mysqli_num_rows(mysqli_query($connect, "SELECT * FROM danhsach_sp"));
$totalPage = ceil($totalRow / $pagePerRow);
$listPage = "";
$nextPage = "";
$prevPage = "";
$x = 1;
$y = 2;


for ($i = 1; $i <= $totalPage; $i++) {

    if (isset($page_prd)) {
        $x = $page_prd - 1;
        $y = $page_prd + 1;
    }

    $prevPage = '
            <li class="page-item">
            <a class="page-link" 
            href="'.$configHref.'/admin/trangquantri.php?Admin=product_show&page_product=' . $x . '" 
            aria-label="Previous">
            <span aria-hidden="true"><i class="fas fa-angle-left"></i></span>
            </a>
            </li>';

    $nextPage = '
            <li class="page-item">
            <a class="page-link" 
            href="'.$configHref.'/admin/trangquantri.php?Admin=product_show&page_product=' . $y . '" 
            aria-label="Next">
            <span aria-hidden="true"><i class="fas fa-angle-right"></i></span>
            </a>
            </li>';

    if ($page_prd == $i) {

        $listPage .= '<li class="page-item active"><a class="page-link" href="'.$configHref.'/admin/trangquantri.php?Admin=product_show&page_product=' . $i . '">' . $i . '</a></li>';
    } else {

        $listPage .= '<li class="page-item"><a class="page-link" href="'.$configHref.'/admin/trangquantri.php?Admin=product_show&page_product=' . $i . '">' . $i . '</a></li>';
    }
}



?>

<h4 class="text-aligncenter mt-3">Cập nhật sản phẩm</h4>

<table class="table table-striped mt-4">

    <thead>
        <tr>
            <th style="width: 70px;">ID</th>
            <th>Tên sản phẩm</th>
            <th>Số lượng</th>
            <th>Giá</th>
            <th>Top sản phẩm</th>
            <th>Ảnh mô tả</th>
            <th>Chỉnh sửa</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($row = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?= $row['ID'] ?></td>
                <td><?= $row['Name'] ?></td>
                <td><?= $row['Status'] ?></td>
                <td><?= number_format($row['Price']) ?> ₫</td>
                <td>
                    <?php
                        if($row['Top'] == 1) {
                            echo "<div class='btn btn-success'>bán chạy</div>";
                        } elseif ($row['Top'] == 2) {
                            echo "<div class='btn btn-info'>mới</div>";
                        } else {
                            echo "<div class='btn btn-primary'>thường</div>";
                        }
                    ?>
                </td>
                <td><img class="admin_img_mota" src="<?= $configHref ?>/img/<?= $row['Image'] ?>" alt="product"></td>
                <td>
                    <a class="btn btn-primary btn-sm" href="<?= $configHref ?>/admin/trangquantri.php?Admin=product_fix&id_sp=<?= $row["ID"] ?>">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a onclick="return product_del()" class="btn btn-danger btn-sm" href="<?= $config['hostname'] ?>Admin_layout/Product/product_del.php?id_sp=<?= $row["ID"] ?>">
                        <i class="fas fa-trash-alt"></i>
                    </a>
                </td>
            </tr>
        <?php
            // break;
        }
        ?>

    </tbody>

</table>

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <?php
                if (isset($_GET['page_product']) && $_GET['page_product'] > 1) {
                    echo $prevPage;
                }
                
                ?>
                <?= $listPage ?>
                <?php
                if (isset($_GET['page_product']) && $_GET['page_product'] < $totalPage) {
                    echo $nextPage;
                }
                if(!isset($_GET['page_product'])){
                    echo $nextPage;
                }
                ?>
                </li>
            </ul>
        </nav>
    </div>
    <div class="col-md-4"></div>
</div>

<?php
$content = ob_get_clean();
?>