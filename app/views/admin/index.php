
                                    <!-- Single Tab Content Start -->
                                    <div id="dashboad" >
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
                                