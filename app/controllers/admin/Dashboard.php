<?php 
class Dashboard extends Controller{
    public $data = [];
    public $admin;
    
    public function __construct()
    {
        $this->admin = $this->model('ProductModel');
    }
    public function index()
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

    public function insert()
    {
        $this->data['errors'] = Session::flash('errors');
        $this->data['old'] = Session::flash('old');
        $this->data['msg'] = Session::flash('msg');
        $this->data['status'] = Session::flash('status');
        $this->data['img'] = Session::flash('img');
        $this->data['content'] = 'admin/insert';
        $this->data['page_title'] = 'Thêm Sản Phẩm';
        $this->data['page_active'] = 'add';
        $dataCompany = $this->admin->getListAll('tbl_company');
        $this->data['company'] = $dataCompany;
        //Render views
        $this->render('layouts/admin_layout', $this->data);
    }

    public function render_insert()
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
                Session::flash('errors', $request->errors());
                Session::flash('old', $request->getField());
                Session::flash('msg', "Có Lỗi Xảy Ra!");
                Session::flash('status','error');
            }else{
                
                $dataInsert = [];
                $dataImg = [];
                //render insert product
                $dataInsert['product_Id'] = '';
                $dataInsert['product_Name'] = $_POST['product_name'];
                $dataInsert['product_Desc'] = $_POST['product_desc'];
                $dataInsert['product_Price'] = $_POST['product_price'];
                if ($_POST['product_downprice'] != '') {
                    $dataInsert['product_downPrice'] = $_POST['product_downprice'];
                } else {
                    $dataInsert['product_downPrice'] = '0';
                }
                $dataInsert['product_Status'] = 0;
                if ($_FILES['product-img']['name'] != '') {

                    $upload_dir = SITE_ROOT . "/public/assets/admin/uploads/";
                    $upload_file = $upload_dir . basename($_FILES['product-img']['name']);
                    $target_dir = "/public/assets/admin/uploads/";
                    $target_img = $target_dir . basename($_FILES['product-img']['name']);
                    move_uploaded_file($_FILES['product-img']['tmp_name'], $upload_file);
                    $dataInsert['product_Img'] = $target_img;
                } else {
                    $dataInsert['product_Img'] = 'không có hình mô tả';
                }
                $dataInsert['company_Id'] = $_POST['compSelect'];
                $this->admin->insert($dataInsert, 'tbl_product');
                Session::flash('msg', "Thêm Thành Công!");
                Session::flash('status', 'success');
            }
            
        }
        $response = new Response();
        $response->redirect('them');

        // $dataInsert = [];
        // $dataImg = [];
        // if ($_POST['submit']) {

        //     // render info product

        //     $dataInsert['product_Id'] = '';
        //     $dataInsert['product_Name'] = $_POST['tensp'];
        //     $dataInsert['product_Price'] = $_POST['giasp'];
        //     if ($_POST['giamgiasp'] != '') {
        //         $dataInsert['product_downPrice'] = $_POST['giamgiasp'];
        //     } else {
        //         $dataInsert['product_downPrice'] = '0';
        //     }
        //     if ($_FILES['hinhsp']['name'] != '') {

        //         $upload_dir = SITE_ROOT . "/public/assets/admin/uploads/";
        //         $upload_file = $upload_dir . basename($_FILES['hinhsp']['name']);
        //         $target_dir = "/public/assets/admin/uploads/";
        //         $target_img = $target_dir . basename($_FILES['hinhsp']['name']);
        //         move_uploaded_file($_FILES['hinhsp']['tmp_name'], $upload_file);

        //         $dataInsert['product_Img'] = $target_img;
        //     } else {
        //         $dataInsert['product_Img'] = 'không có hình mô tả';
        //     }
        //     $dataInsert['company_Id'] = $_POST['nameHang'];
        //     $this->admin->insert($dataInsert, 'tbl_product');

        //     //render images

        //     $lastId = $this->admin->getLastId();
        //     $dataImg['img_Id'] = '';
        //     $dataImg['product_Id'] = $lastId;
        //     if ($_FILES['hinhsps']['name'] != '') {

        //         foreach ($_FILES['hinhsps']['name'] as $key => $value) {
        //             $upload_dir = SITE_ROOT . "/public/assets/admin/uploads/";
        //             $upload_files = $upload_dir . basename($_FILES['hinhsps']['name'][$key]);
        //             $target_dir = "/public/assets/admin/uploads/";
        //             $target_img = $target_dir . basename($_FILES['hinhsps']['name'][$key]);


        //             move_uploaded_file($_FILES['hinhsps']['tmp_name'][$key], $upload_files);

        //             $dataImg['img_Detail'] = $target_img;
        //             $this->admin->insert($dataImg, 'tbl_product_img');
        //         }
        //     } else {
        //         $dataImg['img_Detail'] = 'không có hình chi tiết';
        //         $this->admin->insert($dataImg, 'tbl_product_img');
        //     }
        // }

        // $response = new Response();
        // $response->redirect('product/list_product');
    }

    public function check_comp($compSelect){
        if(!empty($compSelect) || $compSelect > 0){
            return true;
        }else{
            return false;
        }
        
    }
    public function check_img(){
        $img = $_FILES['product-img']['name'];
        if($img != ''){
            return true;
        } return false;
    }
    public function check_price($product_price){
        if(is_numeric($product_price)){
            return true;
        } return false;
    }
    
    public function info_action(){
        if(isset($_POST['query'])){
            $baseId = $_POST['query'];
            $data = $this->admin->getById($baseId, 'tbl_product_info', 'product_Id');
            echo json_encode($data);
        }else{
            echo "data has not been send";
        }
    }
    public function info_product() {
        $dataList = $this->admin->getListAll('tbl_product');
        $this->data['content'] = 'admin/info';
        $this->data['sub_content'] = $dataList;
        $this->data['page_active'] = 'info';
        $this->render('layouts/admin_layout', $this->data);
    }
    public function render_update()
    {
        $idUpdate = $_POST['idsp'];
        $table = 'tbl_product';
        $img = $this->admin->getById($idUpdate, $table);
        $dataUpdate = [];
        if ($_POST['submit']) {
            $dataUpdate['product_Id'] =  $_POST['idsp'];
            $dataUpdate['product_Name'] = $_POST['tensp'];
            $dataUpdate['product_Price'] = $_POST['giasp'];
            if ($_POST['giamgiasp'] != '') {
                $dataUpdate['product_downPrice'] = $_POST['giamgiasp'];
            } else {
                $dataUpdate['product_downPrice'] = '0';
            }
            if ($_FILES['hinhsp']['name'] != '') {

                $upload_dir = SITE_ROOT . "/public/assets/admin/uploads/";
                $upload_file = $upload_dir . basename($_FILES['hinhsp']['name']);
                $target_dir = "/public/assets/admin/uploads/";
                $target_img = $target_dir . basename($_FILES['hinhsp']['name']);



                if (move_uploaded_file($_FILES['hinhsp']['tmp_name'], $upload_file)) {
                    echo "Update Hình OK.\n";
                } else {
                    echo "Update Hình failed";
                }
                $dataUpdate['product_Img'] = $target_img;
            } else {
                $dataUpdate['product_Img'] = $img['product_Img'];
            }
            $dataUpdate['company_Id'] = $_POST['nameHang'];
        }
        $this->admin->update($dataUpdate, $idUpdate, 'tbl_product');
        $response = new Response();
        $response->redirect('product/list_product');
    }

    
    public function delete_product()
    {
        if(isset($_POST['id'])){
            $id = $_POST['id'];
            $this->admin->delete($id, 'tbl_product');
        }
        
        
    }
}
?>