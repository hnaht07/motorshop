<?php
$data = [];
$data['dataShow'] = $sub_content;
$data['active'] = $page_active;
$data['news_list'] = $news_list;
$this->render('blocks/header', $data);
$this->render($content, $data);
$this->render('blocks/footer', $data);
