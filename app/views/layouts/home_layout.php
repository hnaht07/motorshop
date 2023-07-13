<?php
$data = [];
$data['dataShow'] = $sub_content;
$data['news'] = $news;
$this->render('blocks/header', $sub_content);
$this->render($content, $data);
$this->render('blocks/footer', $sub_content);

?>