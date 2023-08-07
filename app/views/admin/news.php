<?php
?>
<!-- Single Tab Content Start -->
<div id="add-product">
    <div class="myaccount-content">
        <h3>Thêm Tin Tức</h3>
        <div class="account-details-form">
            <form action="<?php echo _WEB_ROOT ?>/admin/dashboard/render_news" method="post" enctype="multipart/form-data">
                <div class="single-input-item">
                    <label for="news_Title" class="required">Tiêu đề:</label>
                    <input class="<?php echo (!empty($errors) && array_key_exists('news_Title', $errors)) ? 'errors' : false ?>" type="text" id="news_Title" name="news_Title" placeholder="Nhập Tên Sản Phẩm" value="<?php echo (!empty($old)) ? $old['news_Title'] : false ?>" />
                    <span class="error" id="error_title"><?php echo (!empty($errors) && array_key_exists('news_Title', $errors)) ? $errors['news_Title'] : false ?></span>
                </div>
                <div class="single-input-item">
                    <label for="news_Block" class="required">Trích Dẫn:</label>
                    <textarea class="<?php echo (!empty($errors) && array_key_exists('news_Block', $errors)) ? 'errors' : false ?>" id="news_Block" name="news_Block" cols="30" rows="10" placeholder="Mô tả sản phẩm"><?php echo (!empty($old)) ? $old['news_Block'] : false ?></textarea>
                    <span class="error" id="error_block"><?php echo (!empty($errors) && array_key_exists('news_Block', $errors)) ? $errors['news_Block'] : false ?></span>
                </div>
                <div class="single-input-item">
                    <label class="required">Hình Ảnh Tiêu Đề</label>
                    <input type="file" id="product-img" name="news_imgTitle" accept="image/*" />
                    <label for="product-img" class="lblImg">
                        <i class="fa fa-upload"></i> &nbsp; Chọn Hình Ảnh
                    </label>
                    <span class="error"><?php echo (!empty($errors) && array_key_exists('news_imgTitle', $errors)) ? $errors['news_imgTitle'] : false ?></span>
                    <?php
                    if (!empty($old_img)) {
                    ?>
                        <img src="<?php echo _WEB_ROOT ?>/public/assets/admin/images/<?php echo $old_img ?>" alt="" id="chooseImg">
                    <?php
                    } else {
                    ?>
                        <img id="chooseImg">
                    <?php
                    }
                    ?>
                </div>
                <div class="single-input-item">
                    <label for="NewsContent">Nội Dung:</label>
                    <textarea id="NewsContent" name="NewsContent" cols="30" rows="10" placeholder="Nội Dung Tin Tức"><?php echo (!empty($old)) ? $old['NewsContent'] : false ?></textarea>
                    <script>
                        ClassicEditor
                            .create(document.querySelector('#NewsContent'))
                            .catch(error => {
                                console.error(error);
                            });
                    </script>
                </div>
                <div class="single-input-item">
                    <button type="submit" class="btn">Thêm Tin Tức</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Single Tab Content End -->