<?php
class News extends Controller {
    public $data = [];
    public $news;
    public function __construct()
    {
        $this->news = $this->model('NewsModel');
    }
    public function index() {
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        } else {
            $page = '';
        }
        if ($page == 1 || $page == '') {
            $begin = 0;
        } else {
            $begin = ($page * 6) - 6;
        }
        $dataIndex = $this->news->getListLimit('tbl_news', 6, $begin);
        $dataPage = $this->news->countAll('tbl_product');
        $dataPage = ceil($dataPage / 6);
        $this->data['numPage'] = $dataPage;
        $this->data['sub_content'] = $dataIndex;
        $this->data['content'] = 'news/index';
        $this->data['page_active'] = 'news';
        $this->render('layouts/news_layout', $this->data);
    }
    public function detail_news($name){
        $dataDetail = $this->news->getById("'".$name."'",'tbl_news','news_Slug');
        $this->data['sub_content'] = $dataDetail;
        $dataList = $this->news->getListAll('tbl_news');
        $this->data['news_list'] = $dataList;
        $this->data['content'] = 'news/detail';
        $this->data['page_active'] = 'news';
        $this->render('layouts/detail_news_layout', $this->data);
    }
}
?>