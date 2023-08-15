<!-- main wrapper start -->
<main>
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area bg-img" data-bg="assets/img/banner/breadcrumb-banner.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap text-center">
                        <nav aria-label="breadcrumb">
                            <h1 class="breadcrumb-title">Đăng Nhập</h1>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="trang-chu">Trang Chủ</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Đăng Nhập</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- login register wrapper start -->
    <div class="login-register-wrapper section-padding">
        <div class="container">
            <div class="member-area-from-wrap">
                <div class="row justify-content-center">
                    <!-- Login Content Start -->
                    <div class="col-lg-6">
                        <div class="login-reg-form-wrap">
                            <h2>Đăng Nhập</h2>
                            <form action="<?php echo _WEB_ROOT ?>/user/render_login" method="post">
                                <div class="single-input-item">
                                    <input class="<?php echo (!empty($errors) && array_key_exists('login_name', $errors)) ? 'errors' : false ?>" type="text" name="login_name" id="login_name" placeholder="Tên đăng nhập" value="<?php echo (!empty($old)) ? $old['login_name'] : false ?>" required />
                                </div>
                                <div class="single-input-item">
                                    <input class="<?php echo (!empty($errors) && array_key_exists('login_password', $errors)) ? 'errors' : false ?>" type="password" name="login_password" placeholder="Nhập mật khẩu" required />
                                </div>
                                <div class="single-input-item">
                                    <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                        <div class="remember-meta">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="rememberMe">
                                                <label class="custom-control-label" for="rememberMe">Remember Me</label>
                                            </div>
                                        </div>
                                        <a href="#" class="forget-pwd">Quên Mật Khẩu?</a>
                                    </div>
                                </div>
                                <div class="single-input-item">
                                    <label>Chưa Có Tài Khoản?</label> &nbsp <a href="<?php echo _WEB_ROOT ?>/dang-ky" class="forget-pwd">Đăng Ký</a>
                                </div>
                                <div class="single-input-item">
                                    <button class="btn">Đăng Nhập</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Login Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- login register wrapper end -->
</main>
