<?php
?>
<main>
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area bg-img" data-bg="assets/img/banner/breadcrumb-banner.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap text-center">
                        <nav aria-label="breadcrumb">
                            <h1 class="breadcrumb-title">Tin Tức</h1>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="home">Trang Chủ</a></li>
                                <li class="breadcrumb-item"><a href="blog-left-sidebar.html">Tin Tức</a></li>
                                <li class="breadcrumb-item active" aria-current="page">chi tiết</li>
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
                <div class="col-lg-3 order-2 order-lg-1">
                    <div class="blog-widget-wrapper">
                        <!-- widget item start -->
                        <!-- widget item end -->

                        <!-- widget item start -->
                        <div class="blog-widget">
                            <h4 class="blog-widget-title">Search</h4>
                            <form class="widget-search-form">
                                <input placeholder="Search keyword" type="text" class="search-field">
                                <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <!-- widget item end -->

                        <!-- widget item start -->

                        <!-- widget item end -->

                        <!-- widget item start -->
                        <div class="blog-widget">
                            <h4 class="blog-widget-title">Categories</h4>
                            <ul class="blog-categories">
                                <li><a href="blog-details.html">Shoes</a><span>(20)</span></li>
                                <li><a href="blog-details.html">Fashion</a><span>(18)</span></li>
                                <li><a href="blog-details.html">Wallet</a><span>(40)</span></li>
                                <li><a href="blog-details.html">Life Style</a><span>(66)</span></li>
                                <li><a href="blog-details.html">Electronics</a><span>(66)</span></li>
                                <li><a href="blog-details.html">Jewellery & Cosmetics</a><span>(30)</span></li>
                            </ul>
                        </div>
                        <!-- widget item end -->

                        <!-- widget item start -->
                        <div class="blog-widget">
                            <h4 class="blog-widget-title">Tags</h4>
                            <div class="blog-tag">
                                <a href="blog-details.html">Fashion</a>
                                <a href="blog-details.html">Shoes</a>
                                <a href="blog-details.html">Wallet</a>
                                <a href="blog-details.html">Bags</a>
                                <a href="blog-details.html">Jewelery</a>
                            </div>
                        </div>
                        <!-- widget item end -->
                    </div>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="row">
                        <div class="col-12">
                            <!-- blog single item start -->
                            <div class="blog-post-item">
                                <?php
                                foreach ($dataShow as $key => $value) {
                                ?>
                                    <div class="blog-thumb">
                                        <img src="<?php echo _WEB_ROOT ?>/<?php echo $value['news_contentImg'] ?>" alt="blog thumb">
                                    </div>
                                    <div class="blog-content blog-details">
                                        <h5 class="blog-title">
                                            <?php echo $value['news_Title'] ?>
                                        </h5>
                                        <ul class="blog-meta">
                                            <li><span>On: </span>
                                            <?php
                                            $date = date_create($value['news_Date']);
                                            echo date_format($date,"d/m/Y");
                                            ?></li>
                                        </ul>
                                        <?php echo $value['news_BlockContent'] ?>
                                        <?php echo $value['news_Content'] ?>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                            <!-- blog single item start -->

                            <!-- comment area start -->

                            <!-- comment area end -->

                            <!-- start blog comment box -->

                            <!-- start blog comment box -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog main wrapper end -->
</main>