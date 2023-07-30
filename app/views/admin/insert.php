<?php
?>

<!-- Single Tab Content Start -->
<div id="add-product">
    <div class="myaccount-content">
        <h3>Thêm Sản Phẩm</h3>
        <div class="account-details-form">
            <form action="<?php echo _WEB_ROOT ?>/admin/dashboard/render_insert" method="post" enctype="multipart/form-data">
                <div class="single-input-item">
                    <label for="product-name" class="required">Nhập Tên Sản Phẩm</label>
                    <input class="<?php echo (!empty($errors) && array_key_exists('product-name', $errors)) ? 'errors' : false ?>" type="text" id="product-name" name="product-name" placeholder="Nhập Tên Sản Phẩm" value="<?php echo (!empty($old)) ? $old['product-name'] : false ?>" />
                    <span class="error"><?php echo (!empty($errors) && array_key_exists('product-name', $errors)) ? $errors['product-name'] : false ?></span>
                </div>
                <div class="single-input-item">
                    <label for="product-desc">Mô tả sản phẩm</label>
                    <textarea class="<?php echo (!empty($errors) && array_key_exists('product-desc', $errors)) ? 'errors' : false ?>" id="product-desc" name="product-desc" cols="30" rows="10" placeholder="Mô tả sản phẩm" value="<?php echo (!empty($old)) ? $old['product-desc'] : false ?>"></textarea>
                    <span class="error"><?php echo (!empty($errors) && array_key_exists('product-desc', $errors)) ? $errors['product-desc'] : false ?></span>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label for="product-price" class="required">Giá sản phẩm</label>
                            <input class="<?php echo (!empty($errors) && array_key_exists('product-price', $errors)) ? 'errors' : false ?>" type="text" id="product-price" name="product-price" placeholder="Giá sản phẩm" value="<?php echo (!empty($old)) ? $old['product-price'] : false ?>" />
                            <span class="error"><?php echo (!empty($errors) && array_key_exists('product-price', $errors)) ? $errors['product-price'] : false ?></span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label for="product-downprice">Giảm Giá</label>
                            <input type="text" id="product-downprice" name="product-downprice" placeholder="Giảm Giá" value="<?php echo (!empty($old)) ? $old['product-downPrice'] : false ?>" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label class="required">Hình Ảnh Sản Phẩm</label>
                            <input type="file" id="product-img" name="product-img" accept="image/*" />
                            <label for="product-img" class="lblImg">
                                <i class="fa fa-upload"></i> &nbsp; Chọn Hình Ảnh
                            </label>
                            <span class="error"><?php echo (!empty($errors) && array_key_exists('product-img', $errors)) ? $errors['product-img'] : false ?></span>
                            <img id="chooseImg">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label>Hình Ảnh Chi Tiết</label>
                            <input type="file" id="product-imgs" name="product-imgs[]" accept="image/*" multiple="multiple" onchange="preview()" />
                            <label for="product-imgs" class="lblImg">
                                <i class="fa fa-upload"></i> &nbsp; Chọn Hình Ảnh
                            </label>
                            <p id="num-of-files">Chưa chọn hình ảnh</p>
                            <div id="images"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label class="required">Hãng Xe</label>
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
                    <button type="submit" class="btn">Thêm </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Single Tab Content End -->