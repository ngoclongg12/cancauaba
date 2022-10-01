<?php 
include_once $_SERVER['DOCUMENT_ROOT'] . '/layout/header.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/connecting/connectDB.php';

if(isset($_GET['id_sp'])){
    $id = $_GET['id_sp'];
    $sql = "SELECT * FROM danhsach_sp WHERE ID = $id";
    $query = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($query);
}

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

<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="title-content">
                    <h2>Single Product</h2>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <span>Single Product</span>
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

<div class="product-details-area ptb-100">
    <div class="container">
        <div class="top">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="outer">
                        <div class="row">
                            <div class="col-sm-3 col-lg-3">
                                <div class="owl-thumbs" data-slider-id="1">
                                    <div class="item owl-thumb-item">
                                        <div class="top-img">
                                            <img src="<?= $config ?>/img/<?= $row['Image'] ?>" alt="Product">
                                        </div>
                                    </div>
                                    <div class="item owl-thumb-item">
                                        <div class="top-img">
                                            <img src="<?= $config ?>/assets/images/products/product-details2.png" alt="Product">
                                        </div>
                                    </div>
                                    <div class="item owl-thumb-item">
                                        <div class="top-img">
                                            <img src="<?= $config ?>/assets/images/products/product-details3.png" alt="Product">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-9 col-lg-9">
                                <div class="image-slides owl-carousel owl-theme" data-slider-id="1">
                                    <div class="item">
                                        <div class="top-img">
                                            <img src="<?= $config ?>/img/<?= $row['Image'] ?>" alt="Product">
                                        </div>
                                    </div>
                                    <div class="top-img">
                                        <img src="<?= $config ?>/assets/images/products/product-details5.png" alt="Product">
                                    </div>
                                    <div class="top-img">
                                        <img src="<?= $config ?>/assets/images/products/product-details6.png" alt="Product">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="top-content">
                        <h2><?= $row['Name'] ?></h2>
                        <ul class="reviews">
                            <li>
                                <i class="bx bxs-star checked"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star checked"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star checked"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star checked"></i>
                            </li>
                            <li>
                                <i class="bx bxs-star"></i>
                            </li>
                            <li>
                                <span>(2 Reviews)</span>
                            </li>
                            <li>
                                <h3><?= number_format($row['Price']) ?> đ</h3>
                            </li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy </p>
                        <ul class="tag">
                            <li>SKU: <span>042</span></li>
                            <li>Category: <span>Sofa</span></li>
                            <li>Tag: <span>Furniture</span></li>
                            <li>Status: <span>In Stock</span></li>
                        </ul>
                        <ul class="cart">
                                <a class="common-btn" href="<?= $config ?>/cart/cart_process.php?id_sp=<?= $row['ID'] ?>&t=add">
                                    Add To Cart
                                    <img src="<?= $config ?>/assets/images/shape1.png" alt="Shape">
                                    <img src="<?= $config ?>/assets/images/shape2.png" alt="Shape">
                                </a>
                        </ul>
                        <a class="wishlist-btn" href="#">
                            <i class='bx bx-heart'></i>
                            Add To Heart
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom">
            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home"
                        role="tab" aria-controls="pills-home" aria-selected="true">Description</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile"
                        role="tab" aria-controls="pills-profile" aria-selected="false">Reviews</a>
                </li>
                <li class="nav-item" role="presentation">
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                    aria-labelledby="pills-home-tab">
                    <div class="bottom-description">
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                            accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                            sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur
                            sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna</p>
                        <p>It is a long established fact that a reader will be distracted by the readable content of
                            a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less normal distribution of letters, as opposed to using 'Content here, content
                            here', making it look like readable English</p>
                        <ul>
                            <li><span></span> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                nonumy</li>
                            <li><span></span> Eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed
                                diam voluptua</li>
                            <li><span></span> At vero eos et accusam et justo duo dolores et ea rebum. Stet clita
                                kasd gubergren</li>
                            <li><span></span> No sea takimata sanctus est Lorem ipsum dolor sit amet</li>
                            <li><span></span> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                nonumy eirmod tempor</li>
                        </ul>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="bottom-comment">
                        <ul class="comments">
                            <li>
                                <img src="<?= $config ?>/assets/images/blog/comment1.jpg" alt="Blog">
                                <h4>Tom Henry</h4>
                                <span>01 December, 2020</span>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At
                                    vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren
                                </p>
                                <ul class="reviews">
                                    <li>
                                        <i class="bx bxs-star checked"></i>
                                    </li>
                                    <li>
                                        <i class="bx bxs-star checked"></i>
                                    </li>
                                    <li>
                                        <i class="bx bxs-star checked"></i>
                                    </li>
                                    <li>
                                        <i class="bx bxs-star checked"></i>
                                    </li>
                                    <li>
                                        <i class="bx bxs-star"></i>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <img src="<?= $config ?>/assets/images/blog/comment2.jpg" alt="Blog">
                                <h4>Angele Carter</h4>
                                <span>02 December, 2020</span>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At
                                    vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren
                                </p>
                                <ul class="reviews">
                                    <li>
                                        <i class="bx bxs-star checked"></i>
                                    </li>
                                    <li>
                                        <i class="bx bxs-star checked"></i>
                                    </li>
                                    <li>
                                        <i class="bx bxs-star checked"></i>
                                    </li>
                                    <li>
                                        <i class="bx bxs-star checked"></i>
                                    </li>
                                    <li>
                                        <i class="bx bxs-star"></i>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="bottom-review">
                        <h3>Leave A Review</h3>
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <textarea id="your-comments" rows="8" class="form-control"
                                    placeholder="Comments"></textarea>
                            </div>
                            <button type="submit" class="btn common-btn">
                                Post A Review
                                <img src="<?= $config ?>/assets/images/shape1.png" alt="Shape">
                                <img src="<?= $config ?>/assets/images/shape2.png" alt="Shape">
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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
include_once $_SERVER['DOCUMENT_ROOT'] . '/layout/footer.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/layout/newfooter.php';
?>