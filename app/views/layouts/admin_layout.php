<?php
$data = array();
$data['dataShow'] = $sub_content;
$data['active'] = $page_active;
$data['errors'] = $errors;
$data['msg'] = $msg;
$data['old'] = $old;
$data['img'] = $img;
$data['comp'] = $comp;
$data['company'] = $company;
$this->render('blocks/header', $data);
$this->render('blocks/menuAdmin', $data);
$this->render($content, $data);
$this->render('blocks/endAdmin', $data);
$this->render('blocks/footer', $data);
?>
