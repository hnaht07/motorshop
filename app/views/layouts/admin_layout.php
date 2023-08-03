<?php
$data = array();
$data['dataShow'] = $sub_content;
$data['active'] = $page_active;
$data['page_title'] = $page_title;
$data['errors'] = $errors;
$data['msg'] = $msg;
$data['status'] = $status;
$data['status_code'] = $status_code;
$data['old'] = $old;
$data['old_img'] = $old_img;
$data['old_imgs'] = $old_imgs;
$data['comp'] = $comp;
$data['company'] = $company;
$this->render('blocks/header', $data);
$this->render('blocks/menuAdmin', $data);
$this->render($content, $data);
$this->render('blocks/endAdmin', $data);
$this->render('blocks/footer', $data);
?>
