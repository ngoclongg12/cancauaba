<?php
$config = include_once $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';
?>

<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/ecop/default/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Jan 2022 17:15:17 GMT -->

<head>
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
    <title>Ecop - Multipurpose eCommerce HTML Template</title>
    <link rel="icon" type="image/png" href="<?= $config ?>/assets/images/favicon.png">
</head>

<body>

    <div class="loader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="pre-load">
                    <div class="inner one"></div>
                    <div class="inner two"></div>
                    <div class="inner three"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-content">
                        <h2>Shop</h2>
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <span>Shop</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="title-img">
            <img src="<?= $config ?>/assets/images/page-title1.jpg" alt="About">
            <img src="<?= $config ?>/assets/images/shape16.png" alt="Shape">
            <img src="<?= $config ?>/assets/images/shape17.png" alt="Shape">
            <img src="<?= $config ?>/assets/images/shape18.png" alt="Shape">
        </div>
    </div>


    <div class="products-area ptb-100">
        <div class="container">
            <div class="row">
                <!-- <div class="col-lg-3">
                    <div class="sorting-menu">
                        <ul>
                            <li class="filter active" data-filter="all">
                                <div class="products-thumb">
                                    <img src="<?= $config ?>/assets/images/products/shape1.png" alt="Shape">
                                    <img src="<?= $config ?>/assets/images/products/shape2.png" alt="Shape">
                                    <i class="flaticon-square"></i>
                                    <span>All</span>
                                </div>
                            </li>
                            <li class="filter" data-filter=".armchair">
                                <div class="products-thumb">
                                    <img src="<?= $config ?>/assets/images/products/shape1.png" alt="Shape">
                                    <img src="<?= $config ?>/assets/images/products/shape2.png" alt="Shape">
                                    <i class="flaticon-armchair"></i>
                                    <span>Armchair</span>
                                </div>
                            </li>
                            <li class="filter" data-filter=".sofa">
                                <div class="products-thumb">
                                    <img src="<?= $config ?>/assets/images/products/shape1.png" alt="Shape">
                                    <img src="<?= $config ?>/assets/images/products/shape2.png" alt="Shape">
                                    <i class="flaticon-sofa"></i>
                                    <span>Sofa</span>
                                </div>
                            </li>
                            <li class="filter" data-filter=".computer">
                                <div class="products-thumb">
                                    <img src="<?= $config ?>/assets/images/products/shape1.png" alt="Shape">
                                    <img src="<?= $config ?>/assets/images/products/shape2.png" alt="Shape">
                                    <i class="flaticon-table"></i>
                                    <span>Computer Desk</span>
                                </div>
                            </li>
                            <li class="filter" data-filter=".desk">
                                <div class="products-thumb">
                                    <img src="<?= $config ?>/assets/images/products/shape1.png" alt="Shape">
                                    <img src="<?= $config ?>/assets/images/products/shape2.png" alt="Shape">
                                    <i class="flaticon-desk-chair"></i>
                                    <span>Desk Chair</span>
                                </div>
                            </li>
                            <li class="filter" data-filter=".center">
                                <div class="products-thumb">
                                    <img src="<?= $config ?>/assets/images/products/shape1.png" alt="Shape">
                                    <img src="<?= $config ?>/assets/images/products/shape2.png" alt="Shape">
                                    <i class="flaticon-table-1"></i>
                                    <span>Center Table</span>
                                </div>
                            </li>
                            <li class="filter" data-filter=".book">
                                <div class="products-thumb">
                                    <img src="<?= $config ?>/assets/images/products/shape1.png" alt="Shape">
                                    <img src="<?= $config ?>/assets/images/products/shape2.png" alt="Shape">
                                    <i class="flaticon-shelf"></i>
                                    <span>Book Shelf</span>
                                </div>
                            </li>
                            <li class="filter" data-filter=".cabinet">
                                <div class="products-thumb">
                                    <img src="<?= $config ?>/assets/images/products/shape1.png" alt="Shape">
                                    <img src="<?= $config ?>/assets/images/products/shape2.png" alt="Shape">
                                    <i class="flaticon-cabinet"></i>
                                    <span>Cabinet</span>
                                </div>
                            </li>
                            <li class="filter" data-filter=".bed">
                                <div class="products-thumb">
                                    <img src="<?= $config ?>/assets/images/products/shape1.png" alt="Shape">
                                    <img src="<?= $config ?>/assets/images/products/shape2.png" alt="Shape">
                                    <i class="flaticon-bed"></i>
                                    <span>Bed</span>
                                </div>
                            </li>
                            <li class="filter" data-filter=".center-table">
                                <div class="products-thumb">
                                    <img src="<?= $config ?>/assets/images/products/shape1.png" alt="Shape">
                                    <img src="<?= $config ?>/assets/images/products/shape2.png" alt="Shape">
                                    <i class="flaticon-dresser"></i>
                                    <span>Dressing Table</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div> -->
                <div class="col-lg-12">
                    <div id="Container" class="row">
                        <div class="col-sm-6 col-lg-3 mix armchair center-table">
                            <div class="products-item">
                                <div class="top">
                                    <a class="product-type" href="#">Top</a>
                                    <a class="wishlist" href="#">
                                        <i class='bx bx-heart'></i>
                                    </a>
                                    <img src="<?= $config ?>/assets/images/products/products1.png" alt="Products">
                                    <div class="inner">
                                        <h3>
                                            <a href="single-product.html">White Comfy Stool</a>
                                        </h3>
                                        <span>$200.00</span>
                                    </div>
                                </div>
                                <div class="bottom">
                                    <a class="cart-text" href="#">Add To Cart</a>
                                    <i class='bx bx-plus'></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 mix sofa bed">
                            <div class="products-item">
                                <div class="top">
                                    <a class="wishlist" href="#">
                                        <i class='bx bx-heart'></i>
                                    </a>
                                    <img src="<?= $config ?>/assets/images/products/products2.png" alt="Products">
                                    <div class="inner">
                                        <h3>
                                            <a href="single-product.html">Yellow Armchair</a>
                                        </h3>
                                        <span>$180.00</span>
                                    </div>
                                </div>
                                <div class="bottom">
                                    <a class="cart-text" href="#">Add To Cart</a>
                                    <i class='bx bx-plus'></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 mix computer cabinet">
                            <div class="products-item">
                                <div class="top">
                                    <a class="wishlist" href="#">
                                        <i class='bx bx-heart'></i>
                                    </a>
                                    <img src="<?= $config ?>/assets/images/products/products3.png" alt="Products">
                                    <div class="inner">
                                        <h3>
                                            <a href="single-product.html">White Loyal Sofa</a>
                                        </h3>
                                        <span>$170.00</span>
                                    </div>
                                </div>
                                <div class="bottom">
                                    <a class="cart-text" href="#">Add To Cart</a>
                                    <i class='bx bx-plus'></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 mix desk book">
                            <div class="products-item">
                                <div class="top">
                                    <a class="wishlist" href="#">
                                        <i class='bx bx-heart'></i>
                                    </a>
                                    <img src="<?= $config ?>/assets/images/products/products4.png" alt="Products">
                                    <div class="inner">
                                        <h3>
                                            <a href="single-product.html">Royal Ash Sofa</a>
                                        </h3>
                                        <span>$190.00</span>
                                    </div>
                                </div>
                                <div class="bottom">
                                    <a class="cart-text" href="#">Add To Cart</a>
                                    <i class='bx bx-plus'></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 mix center armchair">
                            <div class="products-item">
                                <div class="top">
                                    <a class="product-type two" href="#">Hot</a>
                                    <a class="wishlist" href="#">
                                        <i class='bx bx-heart'></i>
                                    </a>
                                    <img src="<?= $config ?>/assets/images/products/products5.png" alt="Products">
                                    <div class="inner">
                                        <h3>
                                            <a href="single-product.html">Wooden Yellow Comfort</a>
                                        </h3>
                                        <span>$160.00</span>
                                    </div>
                                </div>
                                <div class="bottom">
                                    <a class="cart-text" href="#">Add To Cart</a>
                                    <i class='bx bx-plus'></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 mix book sofa">
                            <div class="products-item">
                                <div class="top">
                                    <a class="wishlist" href="#">
                                        <i class='bx bx-heart'></i>
                                    </a>
                                    <img src="<?= $config ?>/assets/images/products/products6.png" alt="Products">
                                    <div class="inner">
                                        <h3>
                                            <a href="single-product.html">Orange Classic Sofa</a>
                                        </h3>
                                        <span>$120.00</span>
                                    </div>
                                </div>
                                <div class="bottom">
                                    <a class="cart-text" href="#">Add To Cart</a>
                                    <i class='bx bx-plus'></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 mix cabinet computer">
                            <div class="products-item">
                                <div class="top">
                                    <a class="wishlist" href="#">
                                        <i class='bx bx-heart'></i>
                                    </a>
                                    <img src="<?= $config ?>/assets/images/products/products7.png" alt="Products">
                                    <div class="inner">
                                        <h3>
                                            <a href="single-product.html">White Luxury Sofa</a>
                                        </h3>
                                        <span>$250.00</span>
                                    </div>
                                </div>
                                <div class="bottom">
                                    <a class="cart-text" href="#">Add To Cart</a>
                                    <i class='bx bx-plus'></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 mix bed desk">
                            <div class="products-item">
                                <div class="top">
                                    <a class="wishlist" href="#">
                                        <i class='bx bx-heart'></i>
                                    </a>
                                    <img src="<?= $config ?>/assets/images/products/products8.png" alt="Products">
                                    <div class="inner">
                                        <h3>
                                            <a href="single-product.html">Royal Queen Black Chair</a>
                                        </h3>
                                        <span>$210.00</span>
                                    </div>
                                </div>
                                <div class="bottom">
                                    <a class="cart-text" href="#">Add To Cart</a>
                                    <i class='bx bx-plus'></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 mix center-table cabinet">
                            <div class="products-item">
                                <div class="top">
                                    <a class="product-type" href="#">Top</a>
                                    <a class="wishlist" href="#">
                                        <i class='bx bx-heart'></i>
                                    </a>
                                    <img src="<?= $config ?>/assets/images/products/products9.png" alt="Products">
                                    <div class="inner">
                                        <h3>
                                            <a href="single-product.html">Four Door Wardrobe</a>
                                        </h3>
                                        <span>$220.00</span>
                                    </div>
                                </div>
                                <div class="bottom">
                                    <a class="cart-text" href="#">Add To Cart</a>
                                    <i class='bx bx-plus'></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 mix desk sofa">
                            <div class="products-item">
                                <div class="top">
                                    <a class="product-type two" href="#">Trending</a>
                                    <a class="wishlist" href="#">
                                        <i class='bx bx-heart'></i>
                                    </a>
                                    <img src="<?= $config ?>/assets/images/products/products10.png" alt="Products">
                                    <div class="inner">
                                        <h3>
                                            <a href="single-product.html">White Luxury Wardrobe</a>
                                        </h3>
                                        <span>$200.00</span>
                                    </div>
                                </div>
                                <div class="bottom">
                                    <a class="cart-text" href="#">Add To Cart</a>
                                    <i class='bx bx-plus'></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 mix center armchair">
                            <div class="products-item">
                                <div class="top">
                                    <a class="wishlist" href="#">
                                        <i class='bx bx-heart'></i>
                                    </a>
                                    <img src="<?= $config ?>/assets/images/products/products11.png" alt="Products">
                                    <div class="inner">
                                        <h3>
                                            <a href="single-product.html">Wooden Wardrobe</a>
                                        </h3>
                                        <span>$180.00</span>
                                    </div>
                                </div>
                                <div class="bottom">
                                    <a class="cart-text" href="#">Add To Cart</a>
                                    <i class='bx bx-plus'></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 mix book center-table">
                            <div class="products-item">
                                <div class="top">
                                    <a class="wishlist" href="#">
                                        <i class='bx bx-heart'></i>
                                    </a>
                                    <img src="<?= $config ?>/assets/images/products/products12.png" alt="Products">
                                    <div class="inner">
                                        <h3>
                                            <a href="single-product.html">Three Door Wardrobe</a>
                                        </h3>
                                        <span>$170.00</span>
                                    </div>
                                </div>
                                <div class="bottom">
                                    <a class="cart-text" href="#">Add To Cart</a>
                                    <i class='bx bx-plus'></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 mix cabinet bed">
                            <div class="products-item">
                                <div class="top">
                                    <a class="wishlist" href="#">
                                        <i class='bx bx-heart'></i>
                                    </a>
                                    <img src="<?= $config ?>/assets/images/products/products13.png" alt="Products">
                                    <div class="inner">
                                        <h3>
                                            <a href="single-product.html">Classic Wooden Table</a>
                                        </h3>
                                        <span>$190.00</span>
                                    </div>
                                </div>
                                <div class="bottom">
                                    <a class="cart-text" href="#">Add To Cart</a>
                                    <i class='bx bx-plus'></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 mix cabinet cabinet bed">
                            <div class="products-item">
                                <div class="top">
                                    <a class="wishlist" href="#">
                                        <i class='bx bx-heart'></i>
                                    </a>
                                    <img src="<?= $config ?>/assets/images/products/products42.png" alt="Products">
                                    <div class="inner">
                                        <h3>
                                            <a href="single-product.html">Pure Wooden Center Table</a>
                                        </h3>
                                        <span>$180.00</span>
                                    </div>
                                </div>
                                <div class="bottom">
                                    <a class="cart-text" href="#">Add To Cart</a>
                                    <i class='bx bx-plus'></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 mix cabinet desk bed">
                            <div class="products-item">
                                <div class="top">
                                    <a class="wishlist" href="#">
                                        <i class='bx bx-heart'></i>
                                    </a>
                                    <img src="<?= $config ?>/assets/images/products/products43.png" alt="Products">
                                    <div class="inner">
                                        <h3>
                                            <a href="single-product.html">Wooden Stool</a>
                                        </h3>
                                        <span>$190.00</span>
                                    </div>
                                </div>
                                <div class="bottom">
                                    <a class="cart-text" href="#">Add To Cart</a>
                                    <i class='bx bx-plus'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a class="common-btn" href="shop.html">
                            Load More Products
                            <img src="<?= $config ?>/assets/images/shape1.png" alt="Shape">
                            <img src="<?= $config ?>/assets/images/shape2.png" alt="Shape">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="products-area pb-70">
        <div class="container">
            <div class="section-title">
                <h2>Best Selling Products</h2>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="products-item">
                        <div class="top">
                            <a class="wishlist" href="#">
                                <i class='bx bx-heart'></i>
                            </a>
                            <img src="<?= $config ?>/assets/images/products/products10.png" alt="Products">
                            <div class="inner">
                                <h3>
                                    <a href="single-product.html">White Luxury Wardrobe</a>
                                </h3>
                                <span>$200.00</span>
                            </div>
                        </div>
                        <div class="bottom">
                            <a class="cart-text" href="#">Add To Cart</a>
                            <i class='bx bx-plus'></i>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="products-item">
                        <div class="top">
                            <a class="wishlist" href="#">
                                <i class='bx bx-heart'></i>
                            </a>
                            <img src="<?= $config ?>/assets/images/products/products11.png" alt="Products">
                            <div class="inner">
                                <h3>
                                    <a href="single-product.html">Wooden Wardrobe</a>
                                </h3>
                                <span>$180.00</span>
                            </div>
                        </div>
                        <div class="bottom">
                            <a class="cart-text" href="#">Add To Cart</a>
                            <i class='bx bx-plus'></i>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="products-item">
                        <div class="top">
                            <a class="wishlist" href="#">
                                <i class='bx bx-heart'></i>
                            </a>
                            <img src="<?= $config ?>/assets/images/products/products12.png" alt="Products">
                            <div class="inner">
                                <h3>
                                    <a href="single-product.html">Three Door Wardrobe</a>
                                </h3>
                                <span>$170.00</span>
                            </div>
                        </div>
                        <div class="bottom">
                            <a class="cart-text" href="#">Add To Cart</a>
                            <i class='bx bx-plus'></i>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="products-item">
                        <div class="top">
                            <a class="wishlist" href="#">
                                <i class='bx bx-heart'></i>
                            </a>
                            <img src="<?= $config ?>/assets/images/products/products13.png" alt="Products">
                            <div class="inner">
                                <h3>
                                    <a href="single-product.html">Classic Wooden Table</a>
                                </h3>
                                <span>$190.00</span>
                            </div>
                        </div>
                        <div class="bottom">
                            <a class="cart-text" href="#">Add To Cart</a>
                            <i class='bx bx-plus'></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-right popup-modal" id="exampleModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2>Shopping Cart <span>02 Items</span></h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="cart-table">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        <img src="<?= $config ?>/assets/images/cart/cart1.png" alt="Cart">
                                    </th>
                                    <td>
                                        <h3>White Comfy Stool</h3>
                                        <span class="rate">$200.00 x 1</span>
                                    </td>
                                    <td>
                                        <ul class="number">
                                            <li>
                                                <span class="minus">-</span>
                                                <input type="text" value="1" />
                                                <span class="plus">+</span>
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        <a class="close" href="#">
                                            <i class='bx bx-x'></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <img src="<?= $config ?>/assets/images/cart/cart2.png" alt="Cart">
                                    </th>
                                    <td>
                                        <h3>Yellow Armchair</h3>
                                        <span class="rate">$180.00 x 1</span>
                                    </td>
                                    <td>
                                        <ul class="number">
                                            <li>
                                                <span class="minus">-</span>
                                                <input type="text" value="1" />
                                                <span class="plus">+</span>
                                            </li>
                                        </ul>
                                    </td>
                                    <td>
                                        <a class="close" href="#">
                                            <i class='bx bx-x'></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="total-amount">
                            <h3>Total: <span>$380.00</span></h3>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <form>
                        <input type="text" class="form-control" placeholder="Enter Coupon Code">
                        <button type="submit" class="btn common-btn">
                            Proceed To Checkout
                            <img src="<?= $config ?>/assets/images/shape1.png" alt="Shape">
                            <img src="<?= $config ?>/assets/images/shape2.png" alt="Shape">
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade modal-right popup-modal wishlist-modal" id="exampleModalWishlist" tabindex="-1"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2>Wishlist <span>02 Items</span></h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="cart-table">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        <img src="<?= $config ?>/assets/images/cart/cart1.png" alt="Cart">
                                    </th>
                                    <td>
                                        <h3>White Comfy Stool</h3>
                                        <span class="rate">$200.00 x 1</span>
                                    </td>
                                    <td>
                                        <a class="common-btn" href="shop.html">
                                            Add To Cart
                                            <img src="<?= $config ?>/assets/images/shape1.png" alt="Shape">
                                            <img src="<?= $config ?>/assets/images/shape2.png" alt="Shape">
                                        </a>
                                    </td>
                                    <td>
                                        <a class="close" href="#">
                                            <i class='bx bx-x'></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <img src="<?= $config ?>/assets/images/cart/cart2.png" alt="Cart">
                                    </th>
                                    <td>
                                        <h3>Yellow Armchair</h3>
                                        <span class="rate">$180.00 x 1</span>
                                    </td>
                                    <td>
                                        <a class="common-btn" href="shop.html">
                                            Add To Cart
                                            <img src="<?= $config ?>/assets/images/shape1.png" alt="Shape">
                                            <img src="<?= $config ?>/assets/images/shape2.png" alt="Shape">
                                        </a>
                                    </td>
                                    <td>
                                        <a class="close" href="#">
                                            <i class='bx bx-x'></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="go-top">
        <i class='bx bxs-up-arrow-circle'></i>
        <i class='bx bxs-up-arrow-circle'></i>
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
</body>

<!-- Mirrored from templates.hibootstrap.com/ecop/default/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Jan 2022 17:15:17 GMT -->

</html>