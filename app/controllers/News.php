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
    public function detail_news($name){
       
        $name = strtolower($name);
        $name = str_replace('-',' ',$name);
        echo $name;
        
        //$dataDetail = $this->news->getById("'".reSlug($name)."'",'tbl_news','news_Title');
        //$this->data['sub_content'] = $dataDetail;
        $dataList = $this->news->getListAll('tbl_news');
        foreach ($dataList as $key => $value) {
            echo '<pre>';
            print_r($value['news_Title']);
            echo '</pre>';
            $check = preg_match($name,$value['news_Title']);
        }
        $this->data['news_list'] = $dataList;
        $this->data['content'] = 'news/detail';
        $this->data['page_active'] = 'news';
        $this->render('layouts/detail_news_layout', $this->data);
        
        var_dump($check);
    }
}
?>