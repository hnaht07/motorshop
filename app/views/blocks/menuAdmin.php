<!-- main wrapper start -->
<main>
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area bg-img" data-bg="public/assets/clients/images/banner/breadcrumb-banner.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap text-center">
                        <nav aria-label="breadcrumb">
                            <h1 class="breadcrumb-title">Dashboard</h1>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="home">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- my account wrapper start -->
    <div class="my-account-wrapper section-padding">
        <div class="container custom-container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- My Account Page Start -->
                    <div class="myaccount-page-wrapper">
                        <!-- My Account Tab Menu Start -->
                        <div class="row">
                            <div class="col-lg-3 col-md-4">
                                <div class="myaccount-tab-menu nav">
                                    <a href="<?php echo _WEB_ROOT ?>/quan-ly" <?php echo ($active == 'index') ? 'class="active"' : false; ?>><i class="fa fa-dashboard"></i>
                                        Dashboard</a>
                                    <a href="<?php echo _WEB_ROOT ?>/them" <?php echo ($active == 'add') ? 'class="active"' : false; ?>><i class="fa fa-plus"></i><?php echo ($active == 'add') ? $page_title : 'Thêm Sản Phẩm'; ?></a>
                                    <a href="<?php echo _WEB_ROOT ?>/thong-tin" <?php echo ($active == 'info') ? 'class="active"' : false; ?>><i class="fa fa-plus"></i>Thông Tin Chi Tiết</a>
                                    <a href="#"><i class="fa fa-sign-out"></i> Logout</a>
                                </div>
                            </div>
                            <!-- My Account Tab Menu End -->
                            <!-- My Account Tab Content Start -->
                            <div class="col-lg-9 col-md-8">
                                <div class="tab-content" id="myaccountContent">