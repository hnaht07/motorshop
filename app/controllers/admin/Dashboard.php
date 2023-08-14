<?php 
class Dashboard extends Controller{
    public $data = [];
    public $admin;
    
    public function __construct()
    {
        $this->admin = $this->model('ProductModel');
    }
    public function index()//layout trang chủ admin
    {
        $dataList = $this->admin->getWith('tbl_company cp', 'cp.company_Id', 'tbl_product pr', 'pr.company_Id');
        $this->data['content'] = 'admin/index';
        $this->data['page_title'] = 'Trang Danh Sản Phẩm';
        $this->data['sub_content'] = $dataList;
        $this->data['page_active'] = 'index';
        $dataCompany = $this->admin->getListAll('tbl_company');
        $this->data['company'] = $dataCompany;
        //Render views
        $this->render('layouts/admin_layout', $this->data);
    }

    public function insert()//layout trang thêm sản phẩm
    {
        $this->data['action'] = 'insert';
        $this->data['errors'] = Session::flash('errors');
        $this->data['old'] = Session::flash('old');
        $this->data['msg'] = Session::flash('msg');
        $this->data['status'] = Session::flash('status');
        $this->data['status_code'] = Session::flash('status_code');
        $this->data['old_img'] = Session::flash('old_img');
        $this->data['old_imgs'] = Session::flash('old_imgs');
        $this->data['content'] = 'admin/insert';
        $this->data['page_title'] = 'Thêm Sản Phẩm';
        $this->data['page_active'] = 'add';
        $dataCompany = $this->admin->getListAll('tbl_company');
        $this->data['company'] = $dataCompany;
        //Render views
        $this->render('layouts/admin_layout', $this->data);
    }
    public function update($id)//layout trang update
    {
        $this->data['action'] = 'update';
        $this->data['errors'] = Session::flash('errors');
        $this->data['old'] = Session::flash('old');
        $this->data['msg'] = Session::flash('msg');
        $this->data['status'] = Session::flash('status');
        $this->data['status_code'] = Session::flash('status_code');
        $this->data['content'] = 'admin/insert';
        $dataProduct = $this->admin->getById($id, 'tbl_product', 'product_Id');
        Session::flash('productId', $dataProduct[0]['product_Id']);
        $this->data['sub_content'] = $dataProduct;
        $this->data['page_title'] = 'Chỉnh Sửa Sản Phẩm';
        $this->data['page_active'] = 'add';
        $dataCompany = $this->admin->getListAll('tbl_company');
        $dataImg = $this->admin->getById($id,'tbl_product_img','product_Id');
        $this->data['company'] = $dataCompany;
        $this->data['product_img'] = $dataImg;
        //Render views
        $this->render('layouts/admin_layout', $this->data);
    }
    public function news(){
        $dataList = $this->admin->getListAll('tbl_news');
        $this->data['content'] = 'admin/news_list';
        $this->data['page_title'] = 'Danh sách bản tin';
        $this->data['sub_content'] = $dataList;
        $this->data['page_active'] = 'list';
        //Render views
        $this->render('layouts/admin_layout', $this->data);
    }

    public function news_insert(){ //layout trang thêm tin tức
        $this->data['content'] = 'admin/news';
        $this->data['page_title'] = 'Thêm Tin Tức';
        $this->data['page_active'] = 'news';
        $this->data['errors'] = Session::flash('errors');
        $this->data['old'] = Session::flash('old');
        $this->data['msg'] = Session::flash('msg');
        $this->data['status'] = Session::flash('status');
        $this->data['status_code'] = Session::flash('status_code');
        $this->data['old_img'] = Session::flash('old_img');
        $this->render('layouts/admin_layout', $this->data);
    }

    public function render_news(){//xử lý thêm tin tức
        $dataInsert = [];
        $request = new Request();
        if($request->isPost()){
            $request->rules([
                'news_Title' => 'required',
                'news_Block' => 'required|max:1000',
                'news_imgTitle' => 'callback_check_newsImg',
            ]);
            $request->message([
                'news_Title.required' => 'Vui Lòng Nhập Trường Này!',
                'news_Block.required' => 'Vui Lòng Nhập Trường Này!',
                'news_Block.max' => 'Vui Lòng Nhập Dưới 1000 Ký Tự!',
                'news_imgTitle.callback_check_newsImg' => 'Vui Lòng Chọn Hình Ảnh!',
            ]);
            $validate = $request->validate();
            if (!$validate) {
                $old_img = $_FILES['news_imgTitle']['name'];
                Session::flash('errors', $request->errors());
                Session::flash('old', $request->getField());
                Session::flash('old_img', $old_img);
                Session::flash('msg', "Có Lỗi Xảy Ra!");
                Session::flash('status', 'Tin Tức Chưa Được Thêm Vào Database');
                Session::flash('status_code', 'error');
            }else{
                $dataInsert['news_Id'] = '';
                $dataInsert['news_Title'] = $_POST['news_Title'];
                $dataInsert['news_Slug'] = toSlug($_POST['news_Title']);
                if ($_FILES['news_imgTitle']['name'] != '') {
                    $upload_dir = SITE_ROOT . "/public/assets/admin/uploads/";
                    $upload_file = $upload_dir . basename($_FILES['news_imgTitle']['name']);
                    $target_dir = "/public/assets/admin/uploads/";
                    $target_img = $target_dir . basename($_FILES['news_imgTitle']['name']);
                    move_uploaded_file($_FILES['news_imgTitle']['tmp_name'], $upload_file);
                    $dataInsert['news_mainImg'] = $target_img;
                } else {
                    $dataInsert['news_mainImg'] = 'không có hình mô tả';
                }
                $dataInsert['news_BlockContent'] = $_POST['news_Block'];
                $dataInsert['news_Content'] = $_POST['NewsContent'];
                $dataInsert['news_Date'] = date("Y-m-d");
                $dataInsert['news_upName'] = 'admin';
                //insert tin tức
                $this->admin->insert($dataInsert,'tbl_news');
                Session::flash(
                    'msg',
                    "Thêm Thành Công!"
                );
                Session::flash('status', 'Bản Tin Đã Được Thêm Vào Database');
                Session::flash('status_code', 'success');
            }
        }
        $response = new Response();
        $response->redirect('them-ban-tin');
    }

    public function render_insert()//xử lý thêm sản phẩm
    {
        
        //VALIDATE FORM
        $request = new Request();
        if($request->isPost()){
            $request->rules([
                'product_name' => 'required',
                'product_desc' => 'max:1000',
                'product_price' => 'required|callback_check_price',
                'product-img' => 'callback_check_img',
                'compSelect' => 'callback_check_comp',
            ]);
            $request->message([
                'product_name.required' => 'Vui Lòng Nhập Trường Này!',
                'product_price.required' => 'Vui Lòng Nhập Trường Này!',
                'product_price.callback_check_price' => 'Chỉ Được Nhập Số!',
                'product-img.callback_check_img' => 'Vui Lòng Chọn Hình Ảnh!',
                'product_desc.max' => 'Vui Lòng Nhập Dưới 1000 Kí Tự',
                'compSelect.callback_check_comp' => 'Vui Lòng Chọn Hãng Xe!',
            ]);
            $validate = $request->validate();
            if (!$validate) {
                $old_img = $_FILES['product-img']['name'];
                $old_imgs = [];
                if(isset($_FILES['product-imgs'])) {
                    for ($i = 0; $i < count($_FILES['product-imgs']['name']); $i++) {
                        $old_imgs[$i] = $_FILES['product-imgs']['name'][$i];
                    }
                    Session::flash('old_imgs', $old_imgs);
                }
                Session::flash('errors', $request->errors());
                Session::flash('old', $request->getField());
                Session::flash('old_img',$old_img);
                Session::flash('msg', "Có Lỗi Xảy Ra!");
                Session::flash('status','Sản Phẩm Chưa Được Thêm Vào Database');
                Session::flash('status_code', 'error');
            }else{
                $dataUpdate = [];
                $dataImg = [];
                
                //render insert product
                $dataUpdate['product_Id'] = '';
                $dataUpdate['product_Name'] = $_POST['product_name'];
                $dataUpdate['product_Slug'] = toSlug($_POST['product_name']);
                $dataUpdate['product_Desc'] = $_POST['product_desc'];
                $dataUpdate['product_Price'] = $_POST['product_price'];
                if ($_POST['product_downprice'] != '') {
                    $dataUpdate['product_downPrice'] = $_POST['product_downprice'];
                } else {
                    $dataUpdate['product_downPrice'] = '0';
                }
                $dataUpdate['product_Status'] = 0;
                if ($_FILES['product-img']['name'] != '') {
                    $upload_dir = SITE_ROOT . "/public/assets/admin/uploads/";
                    $upload_file = $upload_dir . basename($_FILES['product-img']['name']);
                    $target_dir = "/public/assets/admin/uploads/";
                    $target_img = $target_dir . basename($_FILES['product-img']['name']);
                    move_uploaded_file($_FILES['product-img']['tmp_name'], $upload_file);
                    $dataUpdate['product_Img'] = $target_img;
                } else {
                    $dataUpdate['product_Img'] = 'không có hình mô tả';
                }
                $dataUpdate['company_Id'] = $_POST['compSelect'];
                $this->admin->insert($dataUpdate, 'tbl_product');
                $lastId = $this->admin->getLastId();
                $dataImg['img_Id'] = '';
                $dataImg['product_Id'] = $lastId;
                if ($_FILES['product-imgs']['name'][0] != '') {
                    foreach ($_FILES['product-imgs']['name'] as $key => $value) {
                        //đưa hình vào file uploads
                        $upload_dir = SITE_ROOT . "/public/assets/admin/uploads/";
                        $upload_files = $upload_dir . basename($_FILES['product-imgs']['name'][$key]);
                        //đưa hình vào database
                        $target_dir = "/public/assets/admin/uploads/";
                        $target_img = $target_dir . basename($_FILES['product-imgs']['name'][$key]);
                        move_uploaded_file($_FILES['product-imgs']['tmp_name'][$key], $upload_files);
                        $dataImg['img_Detail'] = $target_img;
                        $this->admin->insert($dataImg, 'tbl_product_img');
                    }
                } else {
                        $dataImg['img_Detail'] = 'không có hình chi tiết';
                        $this->admin->insert($dataImg, 'tbl_product_img');
                }
                Session::flash('msg', "Thêm Thành Công!");
                Session::flash('status', 'Sản Phẩm Đã Được Thêm Vào Database');
                Session::flash('status_code', 'success');
            }
        }
        $response = new Response();
        $response->redirect('them');
    }

    public function render_update()//xử lý update 
    {
        $update_id = Session::flash('productId');
        $request = new Request();
        if ($request->isPost()) {
                $dataUpdate = [];
                $dataImg = [];
                //render update product
                $dataUpdate['product_Name'] = $_POST['product_name'];
                $dataUpdate['product_Slug'] = toSlug($_POST['product_name']);
                $dataUpdate['product_Desc'] = $_POST['product_desc'];
                $dataUpdate['product_Price'] = $_POST['product_price'];
                if ($_POST['product_downprice'] != '') {
                    $dataUpdate['product_downPrice'] = $_POST['product_downprice'];
                }
                $dataUpdate['product_Status'] = $_POST['statusSelect'];
                if ($_FILES['product-img']['name'] != '') {
                    $upload_dir = SITE_ROOT . "/public/assets/admin/uploads/";
                    $upload_file = $upload_dir . basename($_FILES['product-img']['name']);
                    $target_dir = "/public/assets/admin/uploads/";
                    $target_img = $target_dir . basename($_FILES['product-img']['name']);
                    move_uploaded_file($_FILES['product-img']['tmp_name'], $upload_file);
                    $dataUpdate['product_Img'] = $target_img;
                }
                if($_POST['compSelect'] != 0){
                    $dataUpdate['company_Id'] = $_POST['compSelect'];
                }
                $this->admin->update($dataUpdate, $update_id, 'tbl_product', 'product_Id');
                $dataImg['product_Id'] = $update_id;
                if ($_FILES['product-imgs']['name'][0] != '') {
                    foreach ($_FILES['product-imgs']['name'] as $key => $value) {
                        //đưa hình vào file uploads
                        $upload_dir = SITE_ROOT . "/public/assets/admin/uploads/";
                        $upload_files = $upload_dir . basename($_FILES['product-imgs']['name'][$key]);
                        //đưa hình vào database
                        $target_dir = "/public/assets/admin/uploads/";
                        $target_img = $target_dir . basename($_FILES['product-imgs']['name'][$key]);
                        move_uploaded_file($_FILES['product-imgs']['tmp_name'][$key], $upload_files);
                        $dataImg['img_Detail'] = $target_img;
                        $this->admin->insert($dataImg, 'tbl_product_img');
                    }
                }
        }
        Session::flash('msg', "Cập Nhập Sản Phẩm Thành Công!");
        Session::flash('status', 'Sản Phẩm Đã Được Chỉnh Sửa');
        Session::flash('status_code', 'success');
        $response = new Response();
        $response->redirect('them');
    }

    public function check_comp($compSelect){//function dùng để callback xử lý validate chọn hãng xe
        if(!empty($compSelect) || $compSelect > 0){
            return true;
        }else{
            return false;
        }
        
    }
    public function check_img(){//check validate images
        $img = $_FILES['product-img']['name'];
        if($img != ''){
            return true;
        } return false;
    }
    public function check_newsImg(){ //check validate images
        $img = $_FILES['news_imgTitle']['name'];
        if ($img != '') {
            return true;
        }
        return false;
    }
    public function check_price($product_price){//check validate giá tiền
        if(is_numeric($product_price)){
            return true;
        } return false;
    }
    
    public function info_action(){//xử lý ajax thông tin chi tiết
        if(isset($_POST['query'])){
            $baseId = $_POST['query'];
            Session::flash('baseid',$baseId);
            $data = $this->admin->getById($baseId, 'tbl_product_info', 'product_Id');
            if($data == []){
                Session::flash('action','insert');
            }else{
                Session::flash('action','update');
                Session::flash('info_Id', $data[0]['info_Id']);
            }
            echo json_encode($data);
        }else{
            echo "data has not been send";
        }
    }
    public function info_update(){//xử lý thông tin chi tiết
        $dataInfo = [];
        $action = Session::flash('action');
        $request = new Request();
        if($request->isPost()){
            $baseId = Session::flash('baseid');  
            if($action == 'insert'){
                $dataInfo['info_Id'] = '';
                $dataInfo['product_Id'] = $baseId;
                $dataInfo['info_Weight'] = $_POST['product-weight'];
                $dataInfo['info_Long'] = $_POST['product-long'];
                $dataInfo['info_High'] = $_POST['product-high'];
                $dataInfo['info_Wide'] = $_POST['product-wide'];
                $dataInfo['info_Saddle'] = $_POST['product-saddle'];
                $dataInfo['info_Clean'] = $_POST['product-clean'];
                $dataInfo['info_Tank'] = $_POST['product-tank'];
                $dataInfo['info_frtWheel'] = $_POST['product-frtWheel'];
                $dataInfo['info_bckWheel'] = $_POST['product-bckWheel'];
                $dataInfo['info_frtFork'] = $_POST['product-frtFork'];
                $dataInfo['info_bckFork'] = $_POST['product-bckFork'];
                $dataInfo['info_Engine'] = $_POST['product-Engine'];
                $dataInfo['info_maxWatt'] = $_POST['product-maxWatt'];
                $dataInfo['info_Oil'] = $_POST['product-Oil'];
                $dataInfo['info_Fuel'] = $_POST['product-Fuel'];
                $dataInfo['info_Gear'] = $_POST['product-Gear'];
                $dataInfo['info_Starting'] = $_POST['product-Start'];
                $dataInfo['info_maxMoment'] = $_POST['product-maxMoment'];
                $dataInfo['info_volCylind'] = $_POST['product-Xylanh'];
                $dataInfo['info_DiameterxPistonStroke'] = $_POST['product-Piston'];
                $dataInfo['info_CompRatio'] = $_POST['product-Ratio'];
                $this->admin->insert($dataInfo, 'tbl_product_info');
                Session::flash('msg', "Thêm Thành Công!");
                Session::flash('status', 'Thông Tin Đã Được Thêm Vào Database');
                Session::flash('status_code', 'success');
            }elseif($action == 'update'){
                $id_update = Session::flash('info_Id');
                $dataInfo['product_Id'] = $baseId;
                $dataInfo['info_Weight'] = $_POST['product-weight'];
                $dataInfo['info_Long'] = $_POST['product-long'];
                $dataInfo['info_High'] = $_POST['product-high'];
                $dataInfo['info_Wide'] = $_POST['product-wide'];
                $dataInfo['info_Saddle'] = $_POST['product-saddle'];
                $dataInfo['info_Clean'] = $_POST['product-clean'];
                $dataInfo['info_Tank'] = $_POST['product-tank'];
                $dataInfo['info_frtWheel'] = $_POST['product-frtWheel'];
                $dataInfo['info_bckWheel'] = $_POST['product-bckWheel'];
                $dataInfo['info_frtFork'] = $_POST['product-frtFork'];
                $dataInfo['info_bckFork'] = $_POST['product-bckFork'];
                $dataInfo['info_Engine'] = $_POST['product-Engine'];
                $dataInfo['info_maxWatt'] = $_POST['product-maxWatt'];
                $dataInfo['info_Oil'] = $_POST['product-Oil'];
                $dataInfo['info_Fuel'] = $_POST['product-Fuel'];
                $dataInfo['info_Gear'] = $_POST['product-Gear'];
                $dataInfo['info_Starting'] = $_POST['product-Start'];
                $dataInfo['info_maxMoment'] = $_POST['product-maxMoment'];
                $dataInfo['info_volCylind'] = $_POST['product-Xylanh'];
                $dataInfo['info_DiameterxPistonStroke'] = $_POST['product-Piston'];
                $dataInfo['info_CompRatio'] = $_POST['product-Ratio'];
                $this->admin->update($dataInfo, $id_update, 'tbl_product_info','info_Id');
                Session::flash('msg', "Sửa Thành Công!");
                Session::flash('status', 'Thông Tin Đã Được Sửa');
                Session::flash('status_code', 'success');
            }
            
        }
        $response = new Response();
        $response->redirect('thong-tin');

    }
    public function info_product() {//layout trang thông tin chi tiết
        $dataList = $this->admin->getListAll('tbl_product');
        $this->data['content'] = 'admin/info';
        $this->data['sub_content'] = $dataList;
        $this->data['page_active'] = 'info';
        $this->data['msg'] = Session::flash('msg');
        $this->data['status'] = Session::flash('status');
        $this->data['status_code'] = Session::flash('status_code');
        $this->render('layouts/admin_layout', $this->data);
    }

    public function delete_product()//xử lý xóa sản phẩm
    {
        
        if(isset($_POST['id'])){
            $id = $_POST['id'];
            $this->admin->delete($id, 'tbl_product','product_Id');
            $this->admin->delete($id,'tbl_product_img','product_Id');
            $this->admin->delete($id,'tbl_product_info','product_Id');
        }
    }
    public function delete_img()//xử lý xóa hình ảnh chi tiết
    {
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $this->admin->delete($id, 'tbl_product_img', 'img_Id');
        }
    }
    public function delete_news() //xử lý xóa hình ảnh chi tiết
    {
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $this->admin->delete($id, 'tbl_news', 'news_Id');
        }
    }
}
?>