<?php
?>
<main>
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area bg-img" data-bg="public/assets/clients/images/banner/breadcrumb-banner.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap text-center">
                        <nav aria-label="breadcrumb">
                            <h1 class="breadcrumb-title">Tin Tức</h1>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="home">Trang Chủ</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tin Tức</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- blog main wrapper start -->
    <div class="blog-main-wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <?php
                        foreach ($dataShow as $key => $value) {

                        ?>
                            <div class="col-xl-4 col-md-6">
                                <!-- blog single item start -->
                                <div class="blog-post-item mb-30">
                                    <div class="blog-thumb">
                                        <a href="<?php echo _WEB_ROOT ?>/tin-tuc/<?php echo toSlug($value['news_Title']); ?>">
                                            <img src="<?php echo _WEB_ROOT ?><?php echo $value['news_mainImg'] ?>" alt="blog thumb">
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <h5 class="blog-title">
                                            <a href="<?php echo _WEB_ROOT ?>/tin-tuc/<?php echo toSlug($value['news_Title']); ?>">
                                                <?php echo $value['news_Title'] ?>
                                            </a>
                                        </h5>
                                        <ul class="blog-meta">
                                            <li><span>On: </span>
                                                <?php
                                                $date = date_create($value['news_Date']);
                                                echo date_format($date, "d/m/Y");
                                                ?>
                                            </li>
                                        </ul>
                                        <a href="<?php echo _WEB_ROOT ?>/tin-tuc/<?php echo toSlug($value['news_Title']); ?>" class="read-more">Read More...</a>
                                    </div>
                                </div>
                                <!-- blog single item start -->
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                    <!-- start pagination area -->
                    <div class="paginatoin-area text-center">
                        <ul class="pagination-box">
                            <li><a class="Previous" href="#"><i class="ion-ios-arrow-left"></i></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a class="Next" href="#"><i class="ion-ios-arrow-right"></i></a></li>
                        </ul>
                    </div>
                    <!-- end pagination area -->
                </div>
            </div>
        </div>
    </div>
    <!-- blog main wrapper end -->
</main>