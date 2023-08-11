<?php
class Home extends Controller{

    public $category , $data;
        
    public function __construct() {
        $this->category = $this->model('HomeModel');
    }
    public function index(){
        $dataIndex = $this->category->getListAll('tbl_product');
        $this->data['content'] = 'home/index';
        $this->data['sub_content'] = $dataIndex;
        $this->data['page_active'] = 'home';
        $dataNews = $this->category->getListLimit('tbl_news');
        $this->data['news'] = $dataNews;
        $this->render('layouts/home_layout',$this->data);
    }

}
?>