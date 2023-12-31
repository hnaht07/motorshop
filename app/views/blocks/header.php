<?php 
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">
    <title>MotorOnlShop</title>
    <!--=== Favicon ===-->
    <link rel="shortcut icon" href="<?php echo _WEB_ROOT ?>/public/assets/clients/images/motor.ico" type="image/x-icon">
    <!--=== All Plugins CSS ===-->
    <link href="<?php echo _WEB_ROOT ?>/public/assets/clients/css/plugins.css" rel="stylesheet">
    <!--=== All Vendor CSS ===-->
    <link href="<?php echo _WEB_ROOT ?>/public/assets/clients/css/vendor.css" rel="stylesheet">
    <!--=== Main Style CSS ===-->
    <link href="<?php echo _WEB_ROOT ?>/public/assets/clients/css/style.css" rel="stylesheet">
    <!--=== Admin Style CSS ===-->
    <link href="<?php echo _WEB_ROOT ?>/public/assets/admin/css/upImages.css" rel="stylesheet">
    <!-- Modernizer JS -->
    <script src="<?php echo _WEB_ROOT ?>/public/assets/clients/js/modernizr-2.8.3.min.js"></script>
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <!-- ckeditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script>
</head>

<body>
    <!-- Start Header Area -->
    <header class="header-area">
        <!-- main header start -->
        <div class="main-header d-none d-lg-block">
            <!-- header top start -->
            <div class="header-top theme-bg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="welcome-message">
                                <p>Welcome to MotorShop</p>
                            </div>
                        </div>
                        <div class="col-lg-6 text-right">
                            <div class="header-top-settings">
                                <?php
                                if (!empty(Session::data('username'))) {
                                    $check = Session::data('username');
                                ?>
                                    <ul class="nav align-items-center justify-content-end">
                                        <li class="curreny-wrap">
                                            Xin Chào
                                        </li>
                                        <li class="language">
                                            <?php echo $check[0]['user_Name'] ?>
                                            <i class="fa fa-angle-down"></i>
                                            <ul class="dropdown-list">
                                                <li><a href="#">Tài Khoản</a></li>
                                                <li><a href="<?php echo _WEB_ROOT ?>/dang-xuat">Đăng Xuất</a></li>
                                                <?php 
                                                if($check[0]['user_Role'] == 'admin'){
                                                    echo "<li><a href='"._WEB_ROOT. "/quan-ly'>Admin</a></li>";
                                                }
                                                ?>
                                            </ul>
                                        </li>
                                    </ul>
                                <?php
                                } else {
                                ?>
                                    <ul class="nav align-items-center justify-content-end">
                                        <li class="curreny-wrap">
                                            <a href="<?php echo _WEB_ROOT ?>/dang-nhap"><button type="button" class="btn">Đăng Nhập</button></a>
                                        </li>
                                        <li class="language">
                                            <a href="<?php echo _WEB_ROOT ?>/dang-ky"><button type="button" class="btn">Đăng Ký</button></a>
                                        </li>
                                    </ul>
                                <?php
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header top end -->

            <!-- header middle area start -->
            <div class="header-main-area sticky">
                <div class="container">
                    <div class="row align-items-center position-relative">
                        <!-- start logo area -->
                        <div class="col-lg-2">
                            <div class="logo">
                                <a href="<?php echo _WEB_ROOT ?>/home">
                                    <img src="<?php echo _WEB_ROOT ?>/public/assets/clients/images/logo/logomotor.png" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- start logo area -->
                        <!-- main menu area start -->
                        <div class="col-lg-6 position-static">
                            <div class="main-menu-area">
                                <div class="main-menu">
                                    <!-- main menu navbar start -->
                                    <nav class="desktop-menu">
                                        <ul>
                                            <li <?php echo ($active == 'home') ? 'class="active"' : false; ?>><a href="<?php echo _WEB_ROOT ?>/home">Trang Chủ</i></a></li>
                                            <li <?php echo ($active == 'product') ? 'class="active"' : false; ?>><a href="<?php echo _WEB_ROOT ?>/san-pham?page=1">shop</i></a></li>
                                            <li <?php echo ($active == 'news') ? 'class="active"' : false ?>><a href="<?php echo _WEB_ROOT ?>/tin-tuc?page=1">Tin Tức</i></a></li><!--Sửa-->
                                            <li><a href=" #">Contact us</a></li><!--Sửa-->
                                        </ul>
                                    </nav>
                                    <!-- main menu navbar end -->
                                </div>
                            </div>
                        </div>
                        <!-- main menu area end -->
                        <div class="col-lg-4">
                            <div class="header-configure-wrapper">
                                <div class="header-configure-area">
                                    <div class="search-box-offcanvas">
                                        <form method="post" action="<?php echo _WEB_ROOT ?>/product/search_product">
                                            <input type="text" name="search" id="search" placeholder="Tìm Kiếm...">
                                            <button class="search-btn" type="submit" name="submit"><i class="ion-ios-search-strong"></i></button>
                                        </form>
                                    </div>
                                    <div class="list-group not-vi" id="show_list">

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!-- header middle area end -->
        </div>
        <!-- main header start -->

        <!-- mobile header start -->
        <div class="mobile-header d-lg-none d-md-block sticky">
            <!--mobile header top start -->
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="mobile-main-header">
                            <div class="mobile-logo">
                                <a href="home">
                                    <img src="<?php echo _WEB_ROOT ?>/public/assets/clients/images/logo/logomotor.png" alt="Brand Logo">
                                </a>
                            </div>
                            <!-- Sửa Logo -->
                            <div class="mobile-menu-toggler">
                                <div class="mini-cart-wrap">
                                    <a href="#">
                                        <i class="ion-bag"></i>
                                    </a>
                                </div>
                                <div class="mobile-menu-btn">
                                    <div class="off-canvas-btn">
                                        <i class="ion-navicon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile header top start -->
        </div>
        <!-- mobile header end -->
    </header>
    <!-- end Header Area -->

    <!-- off-canvas menu start -->
    <aside class="off-canvas-wrapper">
        <div class="off-canvas-overlay"></div>
        <div class="off-canvas-inner-content">
            <div class="btn-close-off-canvas">
                <i class="ion-android-close"></i>
            </div>

            <div class="off-canvas-inner">
                <!-- search box start -->
                <div class="search-box-offcanvas">
                    <form method="post" action="<?php echo _WEB_ROOT ?>/product/search_product">
                        <input type="text" name="search_mb" id="search_mb" placeholder="Tìm Kiếm...">
                        <button class="search-btn" type="submit" name="submit"><i class="ion-ios-search-strong"></i></button>
                    </form>
                    <div class="list-group_mb not-vi" id="show_list_mb">

                    </div>
                </div>
                <!-- search box end -->

                <!-- mobile menu start -->
                <div class="mobile-navigation">
                    <!-- mobile menu navigation start -->
                    <nav>
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children"><a href="<?php echo _WEB_ROOT ?>/home">Trang Chủ</a></li>
                            <li class="menu-item-has-children "><a href="<?php echo _WEB_ROOT ?>/san-pham?page=1">Shop</a></li>
                            <li class=" menu-item-has-children "><a href=" #">Tin Tức</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </nav>
                    <!-- mobile menu navigation end -->
                </div>
                <!-- mobile menu end -->

                <!-- user setting option start -->
                <div class="mobile-settings">
                    <ul class="mobile-menu">
                        <li>
                            <a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> Thành</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Giỏ Hàng</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i> Đăng Xuất</a>
                        </li>
                    </ul>
                </div>
                <!-- user setting option end -->

                <!-- offcanvas widget area start -->
                <div class="offcanvas-widget-area">
                    <div class="off-canvas-contact-widget">
                        <ul>
                            <li><i class="fa fa-mobile"></i>
                                <a href="#">0933029627</a>
                            </li>
                            <li><i class="fa fa-envelope-o"></i>
                                <a href="#">dauthanh7321@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                    <div class="off-canvas-social-widget">
                        <a href="https://www.facebook.com/dau.hnaht07"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                    </div>
                </div>
                <!-- offcanvas widget area end -->
            </div>
        </div>
    </aside>
    <!-- off-canvas menu end -->