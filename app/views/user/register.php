<!-- main wrapper start -->
<main>
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area bg-img" data-bg="assets/img/banner/breadcrumb-banner.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap text-center">
                        <nav aria-label="breadcrumb">
                            <h1 class="breadcrumb-title">Đăng Ký</h1>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="trang-chu">Trang Chủ</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Đăng Ký</li>
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
                    <!-- Register Content Start -->
                    <div class="col-lg-6">
                        <div class="login-reg-form-wrap signup-form">
                            <h2>Đăng Ký</h2>
                            <form action="<?php echo _WEB_ROOT ?>/user/render_register" method="post">
                                <div class="single-input-item">
                                    <input type="text" class="<?php echo (!empty($errors) && array_key_exists('username', $errors)) ? 'errors' : false ?>" name="username" id="username" placeholder="Tên Đăng Nhập" value="<?php echo (!empty($old)) ? $old['username'] : false ?>" required />
                                    <span class="error" id="error_username"><?php echo (!empty($errors) && array_key_exists('username', $errors)) ? $errors['username'] : false ?></span>
                                </div>
                                <div class="single-input-item">
                                    <input type="email" class="<?php echo (!empty($errors) && array_key_exists('useremail', $errors)) ? 'errors' : false ?>" name="useremail" id="useremail" placeholder="Nhập Email của bạn" value="<?php echo (!empty($old)) ? $old['useremail'] : false ?>" required />
                                    <span class="error" id="error_useremail"><?php echo (!empty($errors) && array_key_exists('useremail', $errors)) ? $errors['useremail'] : false ?></span>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="single-input-item">
                                            <input type="password" class="<?php echo (!empty($errors) && array_key_exists('userpass', $errors)) ? 'errors' : false ?>" name="userpass" id="userpass" placeholder="Nhập Mật Khẩu" required />
                                            <span class="error" id="error_userpass"><?php echo (!empty($errors) && array_key_exists('userpass', $errors)) ? $errors['userpass'] : false ?></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single-input-item">
                                            <input type="password" class="<?php echo (!empty($errors) && array_key_exists('userrepass', $errors)) ? 'errors' : false ?>" name="userrepass" id="userrepass" placeholder="Nhập Lại Mật Khẩu" required />
                                            <span class="error" id="error_userrepass"><?php echo (!empty($errors) && array_key_exists('userrepass', $errors)) ? $errors['userrepass'] : false ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-input-item">
                                    <button class="btn">Đăng Ký</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Register Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- login register wrapper end -->
</main>