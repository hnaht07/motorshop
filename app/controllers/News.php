<?php
class News extends Controller {
    public $data = [];
    public $news;
    public function __construct()
    {
        $this->news = $this->model('NewsModel');
    }
    public function index() {
        $dataIndex = $this->news->getListAll('tbl_news');
        $this->data['sub_content'] = $dataIndex;
        $this->data['content'] = 'news/index';
        $this->data['page_active'] = 'news';
        $this->render('layouts/news_layout', $this->data);
    }
    public function detail_news(){
        echo "detail";
    }
}




?>