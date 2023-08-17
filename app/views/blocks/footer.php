<!-- Start Footer Area Wrapper -->
<footer class="footer-wrapper">
    <!-- footer main area start -->
    <div class="footer-widget-area section-padding">
        <div class="container">
            <div class="row mtn-40">
                <!-- footer widget item start -->
                <div class="col-xl-5 col-lg-3 col-md-6">
                    <div class="widget-item mt-40">
                        <h5 class="widget-title">Về Chúng Tôi</h5>
                        <div class="widget-body">
                            <ul class="location-wrap">
                                <li><i class="ion-ios-location-outline"></i>77/5/12 Lê Hoàng Phái P17 Gò Vấp TPHCM</li>
                                <li><i class="ion-ios-email-outline"></i>Mail Us: <a href="mailto:dauthanh7321@gmail.com">dauthanh7321@gmail.com</a></li>
                                <li><i class="ion-ios-telephone-outline"></i>Phone: <a href="#">0933029627</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- footer widget item end -->

                <!-- footer widget item start -->
                <div class="col-xl-2 col-lg-3 col-md-6">

                </div>
                <!-- footer widget item end -->

                <!-- footer widget item start -->
                <div class="col-xl-2 col-lg-3 col-md-6">
                    <div class="widget-item mt-40">
                        <h5 class="widget-title">Nav</h5>
                        <div class="widget-body">
                            <ul class="useful-link">
                                <li><a href="home">Trang Chủ</a></li>
                                <li><a href="#">Về Chúng Tôi</a></li>
                                <li><a href="#">Liên Hệ Với Chúng Tôi</a></li>
                                <li><a href="#">Địa Chỉ Cửa Hàng</a></li>
                                <li><a href="#">Tài Khoản</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- footer widget item end -->

                <!-- footer widget item start -->

                <!-- footer widget item end -->
            </div>
        </div>
    </div>
    <!-- footer main area end -->

    <!-- footer bottom area start -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-2 order-md-1">
                    <div class="copyright-text text-center text-md-left">
                        <p>Copyright 2023 <a href="home">Thành</a>. All Rights Reserved</p>
                    </div>
                </div>
                <div class="col-md-6 order-1 order-md-2">
                    <div class="footer-social-link text-center text-md-right">
                        <a href="https://www.facebook.com/dau.hnaht07"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer bottom area end -->
</footer>
<!-- End Footer Area Wrapper -->

<!-- offcanvas search form start -->

<!-- offcanvas search form end -->

<!-- offcanvas mini cart start -->
<!-- offcanvas mini cart end -->

<!-- Scroll to top start -->
<div class="scroll-top not-visible">
    <i class="fa fa-angle-up"></i>
</div>
<!-- Scroll to Top End -->

<!--=======================Javascript============================-->
<!--=== All Vendor Js ===-->
<script src="<?php echo _WEB_ROOT ?>/public/assets/clients/js/vendor.js"></script>
<!--=== All Plugins Js ===-->
<script src="<?php echo _WEB_ROOT ?>/public/assets/clients/js/plugins.js"></script>
<!--=== Active Js ===-->
<script src="<?php echo _WEB_ROOT ?>/public/assets/clients/js/active.js"></script>



<script src="<?php echo _WEB_ROOT ?>/public/assets/admin/js/preImages.js"></script>
<script src="<?php echo _WEB_ROOT ?>/public/assets/admin/js/admin.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="<?php echo _WEB_ROOT ?>/public/assets/clients/js/custom.js"></script>
<?php
if (isset($msg)) {
?>
    <script>
        Swal.fire({
            title: '<?php echo $msg; ?>',
            text: '<?php echo $status; ?>',
            icon: '<?php echo $status_code; ?>',
        }).then((result) => {
            
                if ('<?php echo $status_code; ?>' == 'success' && '<?php echo $redirect ?>' == '') {
                    location.href = "<?php echo _WEB_ROOT ?>/<?php echo $redirect ?>";
                }

        });
    </script>
<?php
}
?>
</body>