<?php
?>
<div id="updateInfo-product">
    <div class="myaccount-content">
        <h3>Thông Tin Chi Tiết</h3>
        <div class="account-details-form">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-input-item">
                        <label for="productList">Chọn Sản Phẩm</label>
                        <select name="productList" id="productList">
                            <option value="">--Chọn--</option>
                            <?php
                            foreach ($dataShow as $key => $value) {
                            ?>
                                <a href="home">
                                    <option value="<?php echo $value['product_Id'] ?>">
                                        <?php echo $value['product_Name'] ?>
                                    </option>
                                </a>
                            <?php
                            }
                            ?>
                        </select>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-input-item">
                        <button type="button" class="btn" id="searching">Select</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="myaccount-content not-vi" id="show_detail">
        <div class="account-details-form">
            <form action="<?php echo _WEB_ROOT ?>/admin/dashboard/info_update" method="post">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label for="product-weight">Khối Lượng Xe(kg):</label>
                            <input type="text" id="product-weight" name="product-weight" placeholder="Nhập Khối Lượng Xe" value="" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label for="product-long">Chiều Dài Xe(mm):</label>
                            <input type="text" id="product-long" name="product-long" placeholder="Nhập Chiều Dài Xe" value="" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label for="product-wide">Chiều Rộng Xe(mm):</label>
                            <input type="text" id="product-wide" name="product-wide" placeholder="Nhập Chiều Rộng Xe" value="" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label for="product-high">Chiều Cao Xe(mm):</label>
                            <input type="text" id="product-high" name="product-high" placeholder="Nhập Chiều Cao Xe" value="" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label for="product-saddle">Độ cao yên(mm):</label>
                            <input type="text" id="product-saddle" name="product-saddle" placeholder="Nhập Độ cao yên" value="" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label for="product-clean">Khoảng Sáng Gầm Xe(mm):</label>
                            <input type="text" id="product-clean" name="product-clean" placeholder="Nhập Khoảng Sáng Gầm Xe" value="" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label for="product-tank">Dung Tích Bình Xăng:</label>
                            <input type="text" id="product-tank" name="product-tank" placeholder="Nhập Dung Tích Bình Xăng" value="" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label for="product-frtWheel">Kích Cỡ Lốp Trước:</label>
                            <input type="text" id="product-frtWheel" name="product-frtWheel" placeholder="Nhập Kích Cỡ Lốp Trước" value="" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label for="product-bckWheel">Kích Cỡ Lốp Sau:</label>
                            <input type="text" id="product-bckWheel" name="product-bckWheel" placeholder="Nhập Kích Cỡ Lốp Sau" value="" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label for="product-frtFork">Phuộc Trước:</label>
                            <input type="text" id="product-frtFork" name="product-frtFork" placeholder="Nhập Phuộc Trước" value="" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label for="product-bckFork">Phuộc Sau:</label>
                            <input type="text" id="product-bckFork" name="product-bckFork" placeholder="Nhập Phuộc Sau" value="" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label for="product-Engine">Loại Động Cơ:</label>
                            <input type="text" id="product-Engine" name="product-Engine" placeholder="Nhập Loại Động Cơ" value="" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label for="product-maxWatt">Công Suất Tối Đa:</label>
                            <input type="text" id="product-maxWatt" name="product-maxWatt" placeholder="Nhập Công Suất Tối Đa" value="" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label for="product-Oil">Dung tích nhớt máy:</label>
                            <input type="text" id="product-Oil" name="product-Oil" placeholder="Nhập Dung tích nhớt máy" value="" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label for="product-Fuel">Mức tiêu thụ nhiên liệu:</label>
                            <input type="text" id="product-Fuel" name="product-Fuel" placeholder="Nhập Mức tiêu thụ nhiên liệu" value="" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label for="product-Gear">Hộp số:</label>
                            <input type="text" id="product-Gear" name="product-Gear" placeholder="Nhập Hộp số" value="" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label for="product-Start">Hệ thống khởi động:</label>
                            <input type="text" id="product-Start" name="product-Start" placeholder="Nhập Hệ thống khởi động" value="" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label for="product-maxMoment">Moment cực đại:</label>
                            <input type="text" id="product-maxMoment" name="product-maxMoment" placeholder="Nhập Moment cực đại" value="" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label for="product-Xylanh">Dung tích xy-lanh:</label>
                            <input type="text" id="product-Xylanh" name="product-Xylanh" placeholder="Nhập Dung tích xy-lanh" value="" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label for="product-Piston">Đường kính x Hành trình pít tông:</label>
                            <input type="text" id="product-Piston" name="product-Piston" placeholder="Nhập Đường kính x Hành trình pít tông" value="" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label for="product-Ratio">Tỷ số nén:</label>
                            <input type="text" id="product-Ratio" name="product-Ratio" placeholder="Nhập Tỷ số nén" value="" />
                        </div>
                    </div>
                </div>
                <div class="single-input-item">
                    <button type="submit" class="btn" id="btnSave"></button>
                    <input type="hidden" name="iptSave" value="" id="iptSave">
                </div>
            </form>
        </div>

    </div>
</div>
</div>
</div> <!-- My Account Tab Content End -->
</div>