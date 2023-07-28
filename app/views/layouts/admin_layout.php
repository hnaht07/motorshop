<?php
$data = array();
$data['dataShow'] = $sub_content;
$data['active'] = $page_active;
$data['old'] = $oldData;
$data['img'] = $oldImg;
$data['company'] = $company;
$data['oldComp'] = $oldComp;
$data['CompName'] = $companyName;
$this->render('blocks/header', $data);
$this->render('blocks/menuAdmin', $data);
$this->render($content, $data);
$this->render('blocks/endAdmin', $data);
$this->render('blocks/footer', $data);
?>
