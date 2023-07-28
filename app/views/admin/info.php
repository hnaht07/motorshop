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
                <div class="single-input-item">
                    <label for="product-name" class="required">Nhập Tên Sản Phẩm</label>
                    <input type="text" id="product-name" placeholder="Nhập Tên Sản Phẩm" />
                </div>
                <div class="single-input-item">
                    <label for="product-desc">Mô tả sản phẩm</label>
                    <input type="text" id="product-desc" placeholder="Mô tả sản phẩm" />
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label for="product-price" class="required">Giá sản phẩm</label>
                            <input type="text" id="product-price" placeholder="Giá sản phẩm" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label for="product-downprice">Giảm Giá</label>
                            <input type="text" id="product-downprice" placeholder="Giảm Giá" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label class="required">Hình Ảnh Sản Phẩm</label>
                            <input type="file" id="product-img" accept="image/*" />
                            <label for="product-img" class="lblImg">
                                <i class="fa fa-upload"></i> &nbsp; Chọn Hình Ảnh
                            </label>
                            <img id="chooseImg">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label>Hình Ảnh Chi Tiết</label>
                            <input type="file" id="product-imgs" accept="image/*" multiple="multiple" onchange="preview()" />
                            <label for="product-imgs" class="lblImg">
                                <i class="fa fa-upload"></i> &nbsp; Chọn Hình Ảnh
                            </label>
                            <p id="num-of-files">Chưa chọn hình ảnh</p>
                            <div id="images"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label>Hãng Xe</label>
                            <select name="" id="">
                                <option value="0">--Chọn--</option>
                                <?php
                                foreach ($company as $key => $value) {
                                ?>
                                    <option value="<?php echo $value['company_Id'] ?>"><?php echo $value['company_Name'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="single-input-item">
                    <button class="check-btn sqr-btn ">Save Changes</button>
                </div>
            </form>
        </div>

    </div>
</div>
</div>
</div> <!-- My Account Tab Content End -->
</div>