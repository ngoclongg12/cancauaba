<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/cancauaba/layout/header.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/cancauaba/connecting/connectDB.php';

$type = 'phaocau';
if (isset($_GET["page_filter"])) {
    $stt = $_GET["page_filter"];
} else {
    $stt = 1;
}
$pageRow = 12;
$perRow = $stt * $pageRow - $pageRow;
$totalPage = ceil(mysqli_num_rows(mysqli_query($connect, "SELECT * FROM danhsach_sp WHERE type='$type'")) / $pageRow);
$listPrd = "";
$x = 1;
$y = 2;

for ($i = 1; $i <= $totalPage; $i++) {

    if (isset($_GET["page_filter"])) {
        $x = $_GET["page_filter"] - 1;
        $y = $_GET["page_filter"] + 1;
    }

    $prevPg = '<li class="page-item"><a class="page-link" href="?page_filter=' . $x . '" aria-label="Previous">Previous</span></a></li>';
    $listPrd .= '<li class="page-item"><a class="page-link pageNumber'.$i.'" href="?page_filter=' . $i . '">' . $i . '</a></li>';
    $nextPg = '<li class="page-item"><a class="page-link" href="?page_filter=' . $y . '" aria-label="Next"><span aria-hidden="true">Next</span></a></li>';
}
$sql = "SELECT * FROM danhsach_sp WHERE type='$type' ORDER BY ID ASC LIMIT $perRow,$pageRow";
$query = mysqli_query($connect, $sql);

?>

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
<style>
    a:hover {
        text-decoration: none;
    }

    .box-text-inner {
        min-height: 120px;
    }
    .box-text-inner h4 {
        overflow: hidden;
        text-overflow: ellipsis;
        max-height: 95px;
    }

    .box-text-inner h4:hover {
        text-overflow: clip;
    }
</style>
<!-- content -->

<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-content">
                    <h2>Trang sản phẩm</h2>
                    <ul>
                        <li>
                            <a href="index.html">Trang chủ</a>
                        </li>
                        <li>
                            <span>Phao câu</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="title-img">
        <img src="<?= $config ?>/assets/images/page-title2.jpg" alt="About">
        <img src="<?= $config ?>/assets/images/shape16.png" alt="Shape">
        <img src="<?= $config ?>/assets/images/shape17.png" alt="Shape">
        <img src="<?= $config ?>/assets/images/shape18.png" alt="Shape">
    </div>
</div>

<div class="container-fluid" style="background-color: white">

    <form action="<?= $config ?>/search.php" method="get" class="mt-5" style="max-width: 460px; margin: auto" >
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="s" placeholder="Nhập từ khoá...">
            <div class="input-group-append">
                <span>
                    <button class="btn" style="background-color: #446084; color:#ffffff; border-color:#ffffff" type="submit">Tìm kiếm</button>
                </span>
            </div>
        </div>
    </form>
    <div class="container">
    <h1>Các sản phẩm</h1>
    <div class="row pt-4">
        <?php
        if (mysqli_num_rows($query) == 0) {
            echo "Không có sản phẩm bạn muốn tìm kiếm";
        }
        ?>
        <?php
        while ($row = mysqli_fetch_array($query)) {
        ?>
            <a href="<?= $config ?>/layout/product-page.php?id_sp=<?= $row['ID'] ?>" class="col-md-3 p-3">
                <div class="col-inner">
                    <div class="box has-hover   has-hover box-shadow-1 box-text-bottom">
                        <div class="box-image">
                            <div class="image-zoom image-cover" style="padding-top:160px;">
                                <img width="1200" height="588" 
                                src="<?= $config . '/img' . '/' . $row['Image']?>" 
                                class="attachment- size-" alt="" loading="lazy" 
                                sizes="(max-width: 1200px) 100vw, 1200px">
                            </div>
                        </div>
                        <div class="box-text text-center">
                            <div class="box-text-inner">

                                <h4><?= $row['Name'] ?></h4>
                                <p><?= number_format($row['Price']) ?> đ</p>
                            </div>
                            <form action="<?= $config ?>/cart/cart_process.php">
                                <input name="id_sp" value="<?= $row['ID'] ?>" type="hidden">
                                <input name="t" value="add" type="hidden">
                                <button class="button primary">Add to cart</button>
                            </form>
                        </div>
                    </div>
                </div>
            </a>
        <?php
        }
        ?>

    </div>
    </div>
</div>

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

<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/cancauaba/layout/footer.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/cancauaba/layout/newfooter.php';
?>