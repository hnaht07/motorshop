<!-- Single Tab Content Start -->
<div id="add-product">
    <div class="myaccount-content">
        <h3>Thêm Sản Phẩm</h3>
        <div class="account-details-form">
            <form action="#">
                <div class="single-input-item">
                    <label for="product-name" class="required">Nhập Tên Sản Phẩm</label>
                    <input type="text" id="product-name" placeholder="Nhập Tên Sản Phẩm" />
                </div>
                <div class="single-input-item">
                    <label for="product-desc">Mô tả sản phẩm</label>
                    <textarea name="" id="product-desc" cols="30" rows="10" placeholder="Mô tả sản phẩm"></textarea>
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
                    <button class=" btn ">Thêm </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Single Tab Content End -->