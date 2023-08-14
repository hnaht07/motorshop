<?php

$data = [];
$data['active'] = $page_active;
$data['errors'] = $errors;
$data['msg'] = $msg;
$data['status'] = $status;
$data['status_code'] = $status_code;
$data['old'] = $old;
$this->render('blocks/header', $data);
$this->render($content, $data);
$this->render('blocks/footer', $data);

?>