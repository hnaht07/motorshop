<?php
$data = array();
$data['dataShow'] = $sub_content;
$data['page_title'] = $page_title;
$data['img'] = $img;
$data['rel'] = $rel;
$data['info'] = $info;
$data['active'] = $page_active;
$this->render('blocks/header', $data);
$this->render($content, $data);
$this->render('blocks/footer', $data);
