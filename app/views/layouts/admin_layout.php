<?php
$data = array();
$data['dataShow'] = $sub_content;
$data['baseProduct'] = $baseProduct;
$data['page_title'] = $page_title;
$data['old'] = $oldData;
$data['img'] = $oldImg;
$data['company'] = $company;
$data['oldComp'] = $oldComp;
$data['CompName'] = $companyName;
$this->render('blocks/header', $sub_content);
$this->render('blocks/menuAdmin', $sub_content);
$this->render($content, $data);
$this->render('blocks/endAdmin', $sub_content);
$this->render('blocks/footer', $sub_content);
?>
