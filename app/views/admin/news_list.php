<!-- Single Tab Content Start -->
<div id="dashboad">
    <div class="myaccount-content">
        <h3>Danh Sách Bản Tin</h3>
        <div class="myaccount-table table-responsive text-center">
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>ID</th>
                        <th>Tiêu Đề</th>
                        <th>Hình Ảnh Tiêu Đề</th>
                        <th>Ngày Đăng</th>
                        <th>Người Đăng</th>
                        <th>Action</th>
                    </tr>

                </thead>
                <tbody>
                    <?php
                    foreach ($dataShow as $key => $value) {
                    ?>
                        <tr>
                            <td><input type="hidden" class="delete_id" value="<?php echo $value['news_Id'] ?>"><?php echo $value['news_Id'] ?></td>
                            <td style="word-wrap: break-word;"><?php echo $value['news_Title'] ?></td>
                            <td><img src="<?php echo _WEB_ROOT ?><?php echo $value['news_mainImg'] ?>" alt=""></td>
                            <td><?php $date = date_create($value['news_Date']); echo date_format($date, "d/m/Y")?></td>
                            <td><?php echo $value['news_upName'] ?></td>
                            <td><button class="delete_news"><i class="fa fa-trash-o btn"></i></button></td>
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