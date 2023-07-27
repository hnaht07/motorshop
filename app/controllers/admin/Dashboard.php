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
        $dataCompany = $this->admin->getListAll('tbl_company');
        $this->data['company'] = $dataCompany;
        //Render views
        $this->render('layouts/admin_layout', $this->data);
    }

    public function insert()
    {
        $dataList = $this->admin->getListAll('tbl_product');
        $this->data['content'] = 'admin/insert';
        $this->data['page_title'] = 'Thêm Sản Phẩm';
        $this->data['sub_content'] = $dataList;
        // $dataCompany = $this->admin->getListAll('tbl_company');
        // $this->data['company'] = $dataCompany;
        // $oldId = $_GET['id'];
        // $oldData = $this->admin->getById($oldId, 'tbl_product');
        // $oldImg = $this->admin->getAllById($oldId, 'tbl_product_img', 'product_Id');
        // $oldComp = $this->admin->getAllById($oldId, 'tbl_company', 'company_Id');
        // $this->data['oldData'] = $oldData;
        // $this->data['oldImg'] = $oldImg;
        // $this->data['oldComp'] = $oldComp;
        //Render views
        $this->render('layouts/admin_layout', $this->data);
    }

    public function info_product(){
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';
        if(isset($_POST['query'])){
            $baseId = $_POST['query'];
            $dataById = $this->admin->getById($baseId, 'tbl_product', 'product_Id');
            echo json_encode($dataById);
        }else{
            echo "data has not been send";
        }
        // if($_REQUEST['proId']){
        //     $baseId = $_REQUEST['proId'];
        //     $dataById = $this->admin->getById($baseId,'tbl_product','product_Id');
        //     echo json_encode($dataById);
        // }else{
        //     echo 0;
        // }

        $dataList = $this->admin->getListAll('tbl_product');
        $this->data['content'] = 'admin/info';
        $this->data['sub_content'] = $dataList;

        $this->render('layouts/admin_layout', $this->data);
    }

    public function render_insert()
    {

        $dataInsert = [];
        $dataImg = [];
        if ($_POST['submit']) {

            // render info product

            $dataInsert['product_Id'] = '';
            $dataInsert['product_Name'] = $_POST['tensp'];
            $dataInsert['product_Price'] = $_POST['giasp'];
            if ($_POST['giamgiasp'] != '') {
                $dataInsert['product_downPrice'] = $_POST['giamgiasp'];
            } else {
                $dataInsert['product_downPrice'] = '0';
            }
            if ($_FILES['hinhsp']['name'] != '') {

                $upload_dir = SITE_ROOT . "/public/assets/admin/uploads/";
                $upload_file = $upload_dir . basename($_FILES['hinhsp']['name']);
                $target_dir = "/public/assets/admin/uploads/";
                $target_img = $target_dir . basename($_FILES['hinhsp']['name']);
                move_uploaded_file($_FILES['hinhsp']['tmp_name'], $upload_file);

                $dataInsert['product_Img'] = $target_img;
            } else {
                $dataInsert['product_Img'] = 'không có hình mô tả';
            }
            $dataInsert['company_Id'] = $_POST['nameHang'];
            $this->admin->insert($dataInsert, 'tbl_product');

            //render images

            $lastId = $this->admin->getLastId();
            $dataImg['img_Id'] = '';
            $dataImg['product_Id'] = $lastId;
            if ($_FILES['hinhsps']['name'] != '') {

                foreach ($_FILES['hinhsps']['name'] as $key => $value) {
                    $upload_dir = SITE_ROOT . "/public/assets/admin/uploads/";
                    $upload_files = $upload_dir . basename($_FILES['hinhsps']['name'][$key]);
                    $target_dir = "/public/assets/admin/uploads/";
                    $target_img = $target_dir . basename($_FILES['hinhsps']['name'][$key]);


                    move_uploaded_file($_FILES['hinhsps']['tmp_name'][$key], $upload_files);

                    $dataImg['img_Detail'] = $target_img;
                    $this->admin->insert($dataImg, 'tbl_product_img');
                }
            } else {
                $dataImg['img_Detail'] = 'không có hình chi tiết';
                $this->admin->insert($dataImg, 'tbl_product_img');
            }
        }

        $response = new Response();
        $response->redirect('product/list_product');
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
        if ($_GET['id']) {
            $id = $_GET['id'];
            $this->admin->delete($id, 'tbl_product');
        }
        $response = new Response();
        $response->redirect('product/list_product');
    }
}
?>