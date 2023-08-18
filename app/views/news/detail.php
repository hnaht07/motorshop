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

                        <div class="blog-widget">
                            <h4 class="blog-widget-title">Tin tức khác</h4>
                            <ul class="recent-posts-inner">
                                <?php
                                foreach ($news_list as $key => $value) {

                                ?>

                                    <li class="recent-posts">
                                        <div class="recent-posts-image">
                                            <a href="<?php echo _WEB_ROOT ?>/tin-tuc/<?php echo $value['news_Slug']; ?>"><img src="<?php echo _WEB_ROOT ?><?php echo $value['news_mainImg'] ?>" alt="post thumb"></a>
                                        </div>
                                        <div class="recent-posts-body">
                                            <span class="recent-posts-meta"><?php $date = date_create($value['news_Date']);
                                                                            echo date_format($date, "d/m/Y") ?></span>
                                            <h6 class="recent-posts-title"><a href="<?php echo _WEB_ROOT ?>/tin-tuc/<?php echo $value['news_Slug']; ?>">
                                                    <?php
                                                    if (strlen($value['news_Title']) > 30) {
                                                        $split = explode(' ', $value['news_Title']);

                                                        $new = array_slice($split, 0, 5);

                                                        $newstring = implode(' ', $new) . '...';
                                                    }
                                                    echo $newstring;
                                                    ?>
                                                </a></h6>
                                        </div>
                                    </li>

                                <?php
                                }
                                ?>
                            </ul>
                        </div>
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
                                        <img src="<?php echo _WEB_ROOT ?><?php echo $value['news_mainImg'] ?>" alt="blog thumb">
                                    </div>
                                    <div class="blog-content blog-details">
                                        <h5 class="blog-title">
                                            <?php echo $value['news_Title'] ?>
                                        </h5>
                                        <ul class="blog-meta">
                                            <li><span>On: </span>
                                                <?php
                                                $date = date_create($value['news_Date']);
                                                echo date_format($date, "d/m/Y");
                                                ?></li>
                                        </ul>
                                        <blockquote><?php echo $value['news_BlockContent'] ?></blockquote>

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