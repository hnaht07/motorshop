<?php
?>
<!-- main wrapper start -->
<main>
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area bg-img" data-bg="<?php echo _WEB_ROOT?>/public/assets/clients/images/banner/breadcrumb-banner.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap text-center">
                        <nav aria-label="breadcrumb">
                            <h1 class="breadcrumb-title">shop</h1>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo _WEB_ROOT ?>/home">Home</a></li>
                                <li class="breadcrumb-item"><a href="<?php echo _WEB_ROOT ?>/san-pham?page=1">Shop</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo $data['page_title'] ?></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- product details wrapper start -->
    <div class="product-details-wrapper section-padding">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12">
                    <!-- product details inner end -->
                    <div class="product-details-inner">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="product-large-slider mb-20">
                                    <?php
                                    foreach ($img as $key => $value) {
                                    ?>
                                        <div class="pro-large-img img-zoom">
                                            <img src="<?php echo _WEB_ROOT . $value['img_Detail'] ?>" alt="product thumb" />
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <div class="pro-nav slick-row-5">
                                    <?php
                                    foreach ($img as $key => $value) {
                                    ?>
                                        <div class="pro-nav-thumb"><img src="<?php echo _WEB_ROOT . $value['img_Detail'] ?>" alt="" /></div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="product-details-des">
                                    <h3 class="pro-det-title"><?php echo $dataShow[0]['product_Name'] ?></h3>
                                    <div class="price-box">
                                        <?php
                                        if ($dataShow[0]['product_downPrice'] != '0' && $dataShow[0]['product_downPrice'] != null) {
                                        ?>
                                            <span class="regular-price"><?php echo number_format($dataShow[0]['product_downPrice'], 0, ',', '.') ?> VNĐ</span>
                                            <span class="old-price"><del><?php echo number_format($dataShow[0]['product_Price'], 0, ',', '.') ?> VNĐ</del></span>
                                        <?php
                                        } else {
                                        ?>
                                            <span class="regular-price"><?php echo number_format($dataShow[0]['product_Price'], 0, ',', '.') ?> VNĐ</span>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <p><?php echo $dataShow[0]['product_Desc'] ?></p>
                                    <div class="quantity-cart-box d-flex align-items-center mb-20">

                                        <a href="cart.html" class="btn btn-default">Mua Xe</a>
                                    </div>
                                    <div class="availability mb-20">
                                        <h5 class="cat-title">Trạng Thái Xe:</h5>
                                        <?php
                                        if ($dataShow[0]['product_Status'] == 1) {
                                        ?>
                                            <span style="color:red">Hết Hàng</span>
                                        <?php
                                        } else {
                                        ?>
                                            <span>Còn Hàng</span>
                                        <?php
                                        }
                                        ?>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product details inner end -->

                    <!-- product details reviews start -->
                    <div class="product-details-reviews section-padding">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="product-review-info">
                                    <ul class="nav review-tab">
                                        <li>
                                            <a class="active" data-toggle="tab" href="#tab_one">Thông số kĩ thuật</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content reviews-tab">
                                        <div class="tab-pane fade show active" id="tab_one">
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr style="background-color:#dfdbdb">
                                                        <td>Khối lượng bản thân</td>
                                                        <td><?php echo $info[0]['info_Weight'] ?>kg</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dài x Rộng x Cao</td>
                                                        <td><?php echo $info[0]['info_Long'] ?> x <?php echo $info[0]['info_Wide'] ?> x <?php echo $info[0]['info_High'] ?>mm</td>
                                                    </tr>
                                                    <tr style="background-color:#dfdbdb">
                                                        <td>Độ cao yên</td>
                                                        <td><?php echo $info[0]['info_Saddle'] ?>mm</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Khoảng sáng gầm xe</td>
                                                        <td><?php echo $info[0]['info_Clean'] ?>mm</td>
                                                    </tr>
                                                    <tr style="background-color:#dfdbdb">
                                                        <td>Dung tích bình xăng</td>
                                                        <td><?php echo $info[0]['info_Tank'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Kích cỡ lốp trước/ sau</td>
                                                        <td>Lốp trước: <?php echo $info[0]['info_frtWheel'] ?> <br> Lốp sau: <?php echo $info[0]['info_bckWheel'] ?></td>
                                                    </tr>
                                                    <tr style="background-color:#dfdbdb">
                                                        <td>Phuộc trước</td>
                                                        <td><?php echo $info[0]['info_frtFork'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Phuộc sau</td>
                                                        <td><?php echo $info[0]['info_bckFork'] ?></td>
                                                    </tr>
                                                    <tr style="background-color:#dfdbdb">
                                                        <td>Loại động cơ</td>
                                                        <td><?php echo $info[0]['info_Engine'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Công suất tối đa</td>
                                                        <td><?php echo $info[0]['info_maxWatt'] ?></td>
                                                    </tr>
                                                    <tr style="background-color:#dfdbdb">
                                                        <td>Dung tích nhớt máy</td>
                                                        <td><?php echo $info[0]['info_Oil'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mức tiêu thụ nhiên liệu</td>
                                                        <td><?php echo $info[0]['info_Fuel'] ?></td>
                                                    </tr>
                                                    <tr style="background-color:#dfdbdb">
                                                        <td>Hộp số</td>
                                                        <td><?php echo $info[0]['info_Gear'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hệ thống khởi động</td>
                                                        <td><?php echo $info[0]['info_Starting'] ?></td>
                                                    </tr>
                                                    <tr style="background-color:#dfdbdb">
                                                        <td>Moment cực đại</td>
                                                        <td><?php echo $info[0]['info_maxMoment'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dung tích xy-lanh</td>
                                                        <td><?php echo $info[0]['info_volCylind'] ?></td>
                                                    </tr>
                                                    <tr style="background-color:#dfdbdb">
                                                        <td>Đường kính x Hành trình pít tông</td>
                                                        <td><?php echo $info[0]['info_DiameterxPistonStroke'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tỷ số nén</td>
                                                        <td><?php echo $info[0]['info_CompRatio'] ?></td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product details reviews end -->

                    <!-- featured product area start -->
                    <section class="Related-product">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="section-title text-center">
                                        <h2 class="title">Sản Phẩm Cùng Hãng</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="product-carousel-4 mbn-50 slick-row-15 slick-arrow-style">
                                        <!-- product single item start -->
                                        <?php

                                        foreach ($rel as $key => $value) {
                                            $name = $value['product_Name'];
                                            $name = str_replace(' ', '-', $name);
                                            if ($value['product_Id'] != $dataShow[0]['product_Id']) {

                                        ?>
                                                <div class="product-item mb-50">
                                                    <div class="product-thumb">
                                                        <a href="<?php echo _WEB_ROOT ?>/chi-tiet/<?php echo $name ?>">
                                                            <img src="<?php echo _WEB_ROOT . $value['product_Img'] ?>" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-content">
                                                        <h5 class="product-name">
                                                            <a href="<?php echo _WEB_ROOT ?>/chi-tiet/<?php echo $name ?>"><?php echo $value['product_Name'] ?></a>
                                                        </h5>
                                                        <div class="price-box">
                                                            <span class="price-regular"><?php echo $value['product_downPrice'] ?></span>
                                                            <span class="price-old"><del><?php echo $value['product_Price'] ?></del></span>
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php
                                            }
                                        }
                                        ?>

                                        <!-- product single item start -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- featured product area end -->
                </div>
            </div>
        </div>
    </div>
    <!-- product details wrapper end -->
</main>
<!-- main wrapper end -->