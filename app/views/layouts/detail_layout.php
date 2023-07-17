<?php
$data = array();
$data['dataShow'] = $sub_content;
$data['page_title'] = $page_title;
$data['img'] = $img;
$data['rel'] = $rel;
$this->render('blocks/header', $sub_content);
$this->render($content, $data);
$this->render('blocks/footer', $sub_content);
