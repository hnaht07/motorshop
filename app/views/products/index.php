<?php

?>

<!-- main wrapper start -->
<main>
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area bg-img" data-bg="public/assets/clients/images/banner/breadcrumb-banner.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap text-center">
                        <nav aria-label="breadcrumb">
                            <h1 class="breadcrumb-title">shop</h1>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="home">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">shop</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- page main wrapper start -->
    <div class="shop-main-wrapper section-padding">
        <div class="container">
            <div class="row">
                <!-- sidebar area start -->
                <div class="col-lg-3 order-2 order-lg-1">
                    <div class="sidebar-wrapper">
                        <!-- single sidebar start -->
                        <div class="sidebar-single">
                            <div class="sidebar-title">
                                <h3>Categories</h3>
                            </div>
                            <div class="sidebar-body">
                                <ul class="color-list">
                                    <li><a href="san-pham?cate=1">Honda <span>(<?php echo $hond ?>)</span> </a></li>
                                    <li><a href="san-pham?cate=2">Suzuki <span>(<?php echo $yam ?>)</span> </a></li>
                                    <li><a href="san-pham?cate=3">Yamaha <span>(<?php echo $suzu ?>)</span> </a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- single sidebar end -->
                        <!-- single sidebar start -->
                        <!-- single sidebar end -->

                        <!-- single sidebar start -->
                        <!-- single sidebar end -->

                        <!-- single sidebar start -->
                        <!-- single sidebar end -->
                    </div>
                </div>
                <!-- sidebar area end -->

                <!-- shop main wrapper start -->
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="shop-product-wrapper">
                        <!-- shop product top wrap start -->
                        <div class="shop-top-bar">
                            <div class="row">
                                <div class="col-xl-5 col-lg-4 col-md-3 order-2 order-md-1">

                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-8 col-md-9 order-1 order-md-2">

                            </div>
                        </div>
                    </div>
                    <!-- shop product top wrap start -->

                    <!-- product item list start -->

                    <div class="shop-product-wrap grid-view row mbn-50">
                        <?php
                        foreach ($dataShow as $key => $value) {

                        ?>
                            <div class="col-lg-4 col-sm-6">

                                <!-- product grid item start -->

                                <div class="product-item mb-53">

                                    <div class="product-thumb">
                                        <a href="chi-tiet-san-pham?id=<?php echo $value['product_Id'] ?>">
                                            <img src="<?php echo _WEB_ROOT ?><?php echo $value['product_Img'] ?>" alt="">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h5 class="product-name">
                                            <a href="product-details.html"><?php echo $value['product_Name'] ?></a>
                                        </h5>
                                        <div class="price-box">
                                            <span class="price-regular"><?php echo $value['product_downPrice'] ?> VNĐ</span>
                                            <span class="price-old"><del><?php echo $value['product_Price'] ?> VNĐ</del></span>
                                        </div>
                                    </div>

                                </div>

                                <!-- product grid item end -->



                            </div>
                        <?php
                        }
                        ?>

                    </div>

                    <!-- product item list end -->

                    <!-- start pagination area -->
                    <?php
                    if (!isset($_GET['cate'])) {
                    ?>
                        <div class="paginatoin-area text-center mt-45">
                            <ul class="pagination-box">
                                <?php if ($_GET['page'] != '' && $_GET['page'] != 1) { ?>
                                    <li><a class="Previous" href="san-pham?page=<?php echo $_GET['page'] - 1 ?>"><i class="ion-ios-arrow-left"></i></a></li>
                                <?php
                                }
                                ?>

                                <?php
                                for ($i = 1; $i <= $numPage; $i++) {
                                ?>
                                    <li <?php echo ($_GET['page'] && $_GET['page'] == $i) ?  'class="active"' : false ?>><a href="san-pham?page=<?php echo $i ?>"><?php echo $i ?></a></li>
                                <?php
                                }
                                ?>
                                <?php
                                if ($_GET['page'] != $numPage) {
                                ?>
                                    <li><a class="Next" href="san-pham?page=<?php echo $_GET['page'] + 1 ?>"><i class="ion-ios-arrow-right"></i></a></li>
                                <?php
                                }

                                ?>


                            </ul>
                        </div>
                    <?php
                    } elseif ($numComp >= 6) {
                    ?>
                        <div class="paginatoin-area text-center mt-45">
                            <ul class="pagination-box">
                                <?php if ($_GET['page'] != '' && $_GET['page'] != 1) { ?>
                                    <li><a class="Previous" href="san-pham?cate=<?php echo $_GET['cate'] ?>&page=<?php echo $_GET['page'] - 1 ?>"><i class="ion-ios-arrow-left"></i></a></li>
                                <?php
                                }
                                ?>

                                <?php
                                for ($i = 1; $i <= $numPage; $i++) {
                                ?>
                                    <li <?php echo ($_GET['page'] && $_GET['page'] == $i) ?  'class="active"' : false ?>><a href="san-pham?cate=<?php echo $_GET['cate'] ?>&page=<?php echo $i ?>"><?php echo $i ?></a></li>
                                <?php
                                }
                                ?>
                                <?php
                                if ($_GET['page'] != $numPage) {
                                ?>
                                    <li><a class="Next" href="san-pham?cate=<?php echo $_GET['cate'] ?>&page=<?php echo $_GET['page'] + 1 ?>"><i class="ion-ios-arrow-right"></i></a></li>
                                <?php
                                }

                                ?>


                            </ul>
                        </div>
                    <?php
                    }
                    ?>
                    <!-- end pagination area -->
                </div>
            </div>
            <!-- shop main wrapper end -->
        </div>
    </div>
    </div>
    <!-- page main wrapper end -->
</main>
<!-- main wrapper end -->