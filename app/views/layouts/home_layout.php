<?php
$data = [];
$data['dataShow'] = $sub_content;
$data['news'] = $news;
$data['active'] = $page_active;
$this->render('blocks/header', $data);
$this->render($content, $data);
$this->render('blocks/footer', $data);

?>