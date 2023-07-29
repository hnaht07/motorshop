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
            <form action="#">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label for="product-weight">Khối Lượng Xe(kg):</label>
                            <input type="text" id="product-weight" placeholder="Nhập Khối Lượng Xe" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label for="product-long">Chiều Dài Xe(mm):</label>
                            <input type="text" id="product-long" placeholder="Nhập Chiều Dài Xe" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label for="product-wide">Chiều Rộng Xe(mm):</label>
                            <input type="text" id="product-wide" placeholder="Nhập Chiều Rộng Xe" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label for="product-high">Chiều Cao Xe(mm):</label>
                            <input type="text" id="product-high" placeholder="Nhập Chiều Cao Xe" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label for="product-saddle">Độ cao yên(mm):</label>
                            <input type="text" id="product-saddle" placeholder="Nhập Độ cao yên" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label for="product-clean">Khoảng Sáng Gầm Xe(mm):</label>
                            <input type="text" id="product-clean" placeholder="Nhập Khoảng Sáng Gầm Xe" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label for="product-tank">Dung Tích Bình Xăng:</label>
                            <input type="text" id="product-tank" placeholder="Nhập Dung Tích Bình Xăng" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label for="product-frtWheel">Kích Cỡ Lốp Trước:</label>
                            <input type="text" id="product-frtWheel" placeholder="Nhập Kích Cỡ Lốp Trước" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label for="product-bckWheel">Kích Cỡ Lốp Sau:</label>
                            <input type="text" id="product-bckWheel" placeholder="Nhập Kích Cỡ Lốp Sau" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label for="product-frtFork">Phuộc Trước:</label>
                            <input type="text" id="product-frtFork" placeholder="Nhập Phuộc Trước" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label for="product-bckFork">Phuộc Sau:</label>
                            <input type="text" id="product-bckFork" placeholder="Nhập Phuộc Sau" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label for="product-Engine">Loại Động Cơ:</label>
                            <input type="text" id="product-Engine" placeholder="Nhập Loại Động Cơ" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label for="product-maxWatt">Công Suất Tối Đa:</label>
                            <input type="text" id="product-maxWatt" placeholder="Nhập Công Suất Tối Đa" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label for="product-Oil">Dung tích nhớt máy:</label>
                            <input type="text" id="product-Oil" placeholder="Nhập Dung tích nhớt máy" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label for="product-Fuel">Mức tiêu thụ nhiên liệu:</label>
                            <input type="text" id="product-Fuel" placeholder="Nhập Mức tiêu thụ nhiên liệu" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label for="product-Gear">Hộp số:</label>
                            <input type="text" id="product-Gear" placeholder="Nhập Hộp số" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label for="product-Start">Hệ thống khởi động:</label>
                            <input type="text" id="product-Start" placeholder="Nhập Hệ thống khởi động" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label for="product-maxMoment">Moment cực đại:</label>
                            <input type="text" id="product-maxMoment" placeholder="Nhập Moment cực đại" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label for="product-Xylanh">Dung tích xy-lanh:</label>
                            <input type="text" id="product-Xylanh" placeholder="Nhập Dung tích xy-lanh" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label for="product-Piston">Đường kính x Hành trình pít tông:</label>
                            <input type="text" id="product-Piston" placeholder="Nhập Đường kính x Hành trình pít tông" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label for="product-Ratio">Tỷ số nén:</label>
                            <input type="text" id="product-Ratio" placeholder="Nhập Tỷ số nén" />
                        </div>
                    </div>
                </div>
                <div class="single-input-item">
                    <button class="btn">Lưu Thông Tin</button>
                </div>
            </form>
        </div>

    </div>
</div>
</div>
</div> <!-- My Account Tab Content End -->
</div>