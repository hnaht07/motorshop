<?php
class Product extends Controller{

    public $data = [];
    public $products;

    public function __construct() {
        $this->products = $this->model('ProductModel');
    }

    public function index(){
        if(isset($_GET['page'])){
            $page = $_GET['page'];
        }else{
            $page = '';
        }
        if($page==1 || $page== ''){
            $begin = 0;
        }else{
            $begin = ($page * 6) - 6;
        }
        if(isset($_GET['cate'])){
            $idComp = $_GET['cate'];
            $dataIndex = $this->products->getById($idComp, 'tbl_product', 'company_Id');
            $dataNumComp = $this->products->countList('tbl_product','company_Id',$idComp);
            $this->data['numComp'] = $dataNumComp;
        }else{
            $dataIndex = $this->products->getListLimit('tbl_product', 6, $begin);
        }
        
        $this->data['content'] = 'products/index';
        $this->data['page_active'] = 'product';
        $this->data['sub_content'] = $dataIndex;
        
        $dataPage = $this->products->countAll('tbl_product');
        $dataPage = ceil($dataPage / 6);
        $this->data['numPage'] = $dataPage;
        $CompList = $this->products->getListAll('tbl_company');
        $this->data['compList'] = $CompList;
        //Render views
        $this->render('layouts/product_layout', $this->data);
            
    }
    function countCompany($cate) {
        $num = $this->products->countList('tbl_product','company_Id',$cate);
        return $num;
    }
    public function detail_product($name){
        $dataDetail = $this->products->getById("'" . $name . "'", 'tbl_product', 'product_Slug');
        $dataImg = $this->products->getById($dataDetail[0]['product_Id'], 'tbl_product_img', 'product_Id');
        $dataRel = $this->products->getById($dataDetail[0]['company_Id'], 'tbl_product', 'company_Id');
        $dataInfo = $this->products->getById($dataDetail[0]['product_Id'], 'tbl_product_info', 'product_Id');
        $this->data['content'] = 'products/detail';
        $this->data['page_title'] = $dataDetail[0]['product_Name'];
        $this->data['img'] = $dataImg;
        $this->data['sub_content'] = $dataDetail;
        $this->data['rel'] = $dataRel;
        $this->data['info'] = $dataInfo;
        $this->data['page_active'] = 'product';
        
        //Render view
        $this->render('layouts/detail_layout', $this->data);
    }
    public function search_product(){
        $dataSearch= [];
        if(isset($_POST['query'])){
            $contentSearch = $_POST['query'];
            $dataSearch = $this->products->searchbyName('tbl_product', $contentSearch , 'product_Name','product_Slug , product_Name');
        }
        if($dataSearch != []){
            foreach ($dataSearch as $key => $value) {
                $name = $value['product_Slug'];
                
                $href = _WEB_ROOT.'/san-pham/'.$name;
                echo "<ul>";
                echo "<a id='choose_res' href='$href'>";
                echo "<li>";
                echo $value['product_Name'];
                echo "</li>";
                echo "</a>";
                echo "</ul>";
            }
        }else{
            echo "<ul>";
            echo "<li>";
            echo "Không có kết quả";
            echo "</li>";
            echo "</ul>";
        }
        
    }
}
?>