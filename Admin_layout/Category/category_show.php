<?php
ob_start();

if (isset($_GET['page_category'])) {
    $page_prd = $_GET['page_category'];
} else {
    $page_prd = 1;
}

$pagePerRow = 7;

$pageRow = $page_prd * $pagePerRow - $pagePerRow;

$sql = "SELECT * FROM danhsach_dm ORDER BY id ASC LIMIT $pageRow, $pagePerRow";
$query = mysqli_query($connect, $sql);
$row = mysqli_fetch_all($query);

$totalRow = mysqli_num_rows(mysqli_query($connect, "SELECT * FROM danhsach_dm"));
$totalPage = ceil($totalRow / $pagePerRow);
$listPage = "";
$nextPage = "";
$prevPage = "";
$x = 1;
$y = 2;

for ($i = 1; $i <= $totalPage; $i++) {
    
    if(isset($_GET['page_category']) && 2 <= $_GET['page_category'] && $_GET['page_category'] < $totalPage){
        $x = $_GET['page_category'] - 1;
        $y = $_GET['page_category'] + 1;
    }

    if(isset($_GET['page_category']) && $_GET['page_category'] = $totalPage){
        $x = $_GET['page_category'] - 1;
        $y = $totalPage;
    }

    if ($page_prd == $i) {
        $prevPage = '
        <li class="page-item">
        <a class="page-link" 
        href="'. $configAdmin .'/admin/trangQuanTri.php?Admin=category_show&page_category='.$x.'" 
        aria-label="Previous">
        <span aria-hidden="true"><i class="fas fa-angle-left"></i></span>
        </a>
        </li>';
        $listPage .= '<li class="page-item active"><a class="page-link" href="http://localhost/cancauaba/admin/trangQuanTri.php?Admin=category_show&page_category=' . $i . '">' . $i . '</a></li>';
        $nextPage = '
        <li class="page-item">
        <a class="page-link" 
        href="'. $configAdmin .'/admin/trangQuanTri.php?Admin=category_show&page_category='.$y.'" 
        aria-label="Next">
        <span aria-hidden="true"><i class="fas fa-angle-right"></i></span>
        </a>
        </li>';
    } else {
        $listPage .= '<li class="page-item"><a class="page-link" href="http://localhost/cancauaba/admin/trangQuanTri.php?Admin=category_show&page_category=' . $i . '">' . $i . '</a></li>';
        
    }
}



?>

<h4 class="text-aligncenter mt-3">Cập nhật danh mục</h4>

<table class="table table-striped mt-4">

    <thead>
        <tr>
            <th style="width: 70px;">ID</th>
            <th>Tên danh mục</th>
            <th>Chỉnh sửa</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($row as $row) {
        ?>
            <tr>
                <td><?= $row['0'] ?></td>
                <td><?= $row['1'] ?></td>
                <td>
                    <a class="btn btn-primary btn-sm" href="<?= $configAdmin ?>/public/TrangQuanTri.php?Admin=category_fix&id=<?= $row["0"] ?>">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a onclick="return product_del()" class="btn btn-danger btn-sm" href="<?= $configAdmin ?>/Admin_layout/Category/category_del.php?id=<?= $row["0"] ?>">
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

<?php
$content = ob_get_clean();
?>