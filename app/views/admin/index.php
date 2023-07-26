<!-- main wrapper start -->
<main>
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area bg-img" data-bg="assets/img/banner/breadcrumb-banner.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap text-center">
                        <nav aria-label="breadcrumb">
                            <h1 class="breadcrumb-title">Dashboard</h1>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
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
                                <div class="myaccount-tab-menu nav" role="tablist">
                                    <a href="#dashboad" class="active" data-toggle="tab"><i class="fa fa-dashboard"></i>
                                        Dashboard</a>
                                    <a href="#add-product" data-toggle="tab"><i class="fa fa-plus"></i>Thêm Sản Phẩm</a>
                                    <a href="#updateInfo-product" data-toggle="tab"><i class="fa fa-plus"></i>Thông Tin Chi Tiết</a>
                                    <a href="#"><i class="fa fa-sign-out"></i> Logout</a>
                                </div>
                            </div>
                            <!-- My Account Tab Menu End -->

                            <!-- My Account Tab Content Start -->
                            <div class="col-lg-9 col-md-8">
                                <div class="tab-content" id="myaccountContent">
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Danh Sách</h3>
                                            <div class="myaccount-table table-responsive text-center">
                                                <table class="table table-bordered">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Tên Sản Phẩm</th>
                                                            <th>Giá</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        foreach ($dataShow as $key => $value) {
                                                        ?>
                                                            <tr>
                                                                <td><?php echo $value['product_Id'] ?></td>
                                                                <td><?php echo $value['product_Name'] ?></td>
                                                                <td><?php echo $value['product_Price'] ?></td>
                                                                <td>
                                                                    <?php if ($value['product_Status']) {
                                                                    ?>
                                                                        <span style="color:red">Hết Hàng</span>
                                                                    <?php
                                                                    } else {
                                                                    ?>
                                                                        <span style="color:green">Còn Hàng</span>
                                                                    <?php
                                                                    }
                                                                    ?>


                                                                </td>
                                                                <td><a href="#"><i class="fa fa-pencil btn"></i></a><a href="#"><i class="fa fa-trash-o btn"></i></a></td>
                                                            </tr>
                                                        <?php
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="add-product" role="tabpanel">
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
                                                        <button class="btn ">Thêm </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->
                                    <div class="tab-pane fade" id="updateInfo-product" role="tabpanel">
                                        <div class="myaccount-content">
                                            <?php
                                            $select = $_POST['selectName'];
                                            echo $select;
                                            ?>
                                            <h3>Thông Tin Chi Tiết</h3>
                                            <?php
                                            if (!isset($_GET['id'])) {
                                            ?>
                                                <div class="single-input-item">
                                                    <label for="product-name">Chọn Sản Phẩm</label>
                                                        <select name="selectName" id="">
                                                            <option value="0">--Chọn--</option>
                                                            <?php
                                                            foreach ($dataShow as $key => $value) {
                                                            ?>
                                                                <option value="admin?id=<?php echo $value['product_Id'] ?>">
                                                                    <?php echo $value['product_Name'] ?>
                                                                </option>
                                                            <?php
                                                            }
                                                            ?>
                                                        </select>
                                                </div>
                                            <?php
                                            } else {
                                            ?>
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
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- My Account Tab Content End -->
                        </div>
                    </div> <!-- My Account Page End -->
                </div>
            </div>
        </div>
    </div>
    <!-- my account wrapper end -->
</main>
<!-- main wrapper end -->