<?php

?>
<!-- main wrapper start -->
<main>
    <!-- hero slider section start -->
    <section class="hero-slider">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style">
                        <!-- single slider item start -->
                        <div class="hero-single-slide">
                            <div class="hero-slider-item bg-img" data-bg="public/assets/clients/images/slider/slider_1.png">

                            </div>
                        </div>
                        <!-- single slider item end -->

                        <!-- single slider item start -->
                        <div class="hero-single-slide">
                            <div class="hero-slider-item bg-img" data-bg="public/assets/clients/images/slider/slider_2.jpg">

                            </div>
                        </div>
                        <!-- single slider item end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero slider section end -->

    <!-- service features start -->
    <section class="service-policy-area">
        <div class="container">
            <div class="row">
                <!-- single policy item start -->
                <div class="col-lg-4">
                    <div class="service-policy-item mt-30 bg-1">
                        <div class="policy-icon">
                            <img src="public/assets/clients/images/icon/policy-1.png" alt="policy icon">
                        </div>
                        <div class="policy-content">
                            <h5 class="policy-title">Vận Chuyển Miễn Phí</h5>
                            <p class="policy-desc">Áp dụng cho mọi đơn đặt hàng của bạn!</p>
                        </div>
                    </div>
                </div>
                <!-- single policy item start -->

                <!-- single policy item start -->
                <div class="col-lg-4">
                    <div class="service-policy-item mt-30 bg-2">
                        <div class="policy-icon">
                            <img src="public/assets/clients/images/icon/policy-2.png" alt="policy icon">
                        </div>
                        <div class="policy-content">
                            <h5 class="policy-title">Hỗ Trợ Trực Tuyến</h5>
                            <p class="policy-desc">Luôn luôn sẵn sàng hỗ trợ bạn 24/7!</p>
                        </div>
                    </div>
                </div>
                <!-- single policy item start -->

                <!-- single policy item start -->
                <div class="col-lg-4">
                    <div class="service-policy-item mt-30 bg-3">
                        <div class="policy-icon">
                            <img src="public/assets/clients/images/icon/policy-3.png" alt="policy icon">
                        </div>
                        <div class="policy-content">
                            <h5 class="policy-title">Chính Sách Hoàn Tiền</h5>
                            <p class="policy-desc">Sẵn sàng hoàn trả lại cho trong vòng 5 ngày!</p>
                        </div>
                    </div>
                </div>
                <!-- single policy item start -->
            </div>
        </div>
    </section>
    <!-- service features end -->

    <!-- our product area start -->
    <section class="our-product section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2 class="title">Sản Phẩm Của Chúng Tôi</h2>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-carousel-4 mbn-50 slick-row-15 slick-arrow-style">
                        <!-- product single item start -->
                        <?php
                        foreach ($data['dataShow'] as $key => $value) {
                        ?>
                            <div class="product-item mb-50">
                                <div class="product-thumb">
                                    <a href="san-pham/<?php echo $value['product_Slug'] ?>">
                                        <img src="<?php echo _WEB_ROOT . $value['product_Img'] ?>" alt="">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h5 class="product-name">
                                        <a href="san-pham/<?php echo $value['product_Slug'] ?>"><?php echo $value['product_Name'] ?></a>
                                    </h5>
                                    <div class="price-box">
                                        <?php
                                        if ($value['product_downPrice'] != '0' && $value['product_downPrice'] != null) {
                                        ?>
                                            <span class="price-regular"><?php echo number_format($value['product_downPrice'], 0, ',', '.') ?> VNĐ</span>
                                            <br />
                                            <span class="price-old"><del><?php echo number_format($value['product_Price'], 0, ',', '.') ?> VNĐ</del></span>
                                        <?php
                                        } else {
                                        ?>
                                            <span class="price-regular"><?php echo number_format($value['product_Price'], 0, ',', '.') ?> VNĐ</span>
                                        <?php
                                        }
                                        ?>
                                    </div>

                                </div>
                            </div>
                        <?php
                        }
                        ?>
                        <!-- product single item start -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our product area end -->

    <!-- banner statistic area start -->

    <!-- banner statistic area end -->

    <!-- top seller area start -->

    <!-- top seller area end -->

    <!-- latest blog area start -->
    <section class="latest-blog-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2 class="title">Tin Tức</h2>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="blog-carousel-active slick-row-15">
                        <!-- blog single item start -->
                        <?php
                        foreach ($news as $key => $value) {
                        ?>
                            <div class="blog-post-item">
                                <div class="blog-thumb">
                                    <a href="<?php echo _WEB_ROOT ?>/tin-tuc/<?php echo $value['news_Slug'] ?>">
                                        <img src="<?php echo _WEB_ROOT ?><?php echo $value['news_mainImg'] ?>" alt="blog thumb">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <h5 class="blog-title">
                                        <a href="<?php echo _WEB_ROOT ?>/tin-tuc/<?php echo $value['news_Slug'] ?>">
                                            <?php echo $value['news_Title'] ?>
                                        </a>
                                    </h5>
                                    <ul class="blog-meta">
                                        <li><span>By: </span><?php echo $value['news_upName'] ?>,</li>
                                        <li><span>On: </span><?php echo $value['news_Date'] ?></li>
                                    </ul>
                                    <a href="<?php echo _WEB_ROOT ?>/tin-tuc/<?php echo $value['news_Slug'] ?>" class="read-more">Read More...</a>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                        <!-- blog single item start -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- latest blog area end -->

    <!-- brand area start -->
    <div class="brand-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brand-active-carousel">
                        <div class="brand-item">
                            <a href="#">
                                <img src="public/assets/clients/images/brand/honda_logo.png" alt="brand image">
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="#">
                                <img src="public/assets/clients/images/brand/suzuki_logo.png" alt="brand image">
                            </a>
                        </div>
                        <div class="brand-item">
                            <a href="#">
                                <img src="public/assets/clients/images/brand/yamaha_logo.png" alt="brand image">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand area end -->
</main>
<!-- main wrapper end -->