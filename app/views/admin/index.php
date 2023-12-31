<!-- Single Tab Content Start -->
<div id="dashboad">
    <div class="myaccount-content">
        <h3>Danh Sách</h3>
        <div class="myaccount-table table-responsive text-center">
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>ID</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Giá</th>
                        <th>Hãng Xe</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($dataShow as $key => $value) {
                    ?>
                        <tr>
                            <td><input type="hidden" class="delete_id" value="<?php echo $value['product_Id'] ?>"><?php echo $value['product_Id'] ?></td>
                            <td><?php echo $value['product_Name'] ?></td>
                            <td><?php echo number_format($value['product_Price'], 0, ',', '.') ?>đ</td>
                            <td><?php echo $value['company_Name'] ?></td>
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
                            <td><button><a href="<?php echo _WEB_ROOT ?>/chinh-sua/<?php echo $value['product_Id'] ?>"><i class="fa fa-pencil btn"></i></a></button><button class="delete_product"><i class="fa fa-trash-o btn"></i></button></td>
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