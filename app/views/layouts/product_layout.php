<?php
$data = array();
$data['dataShow'] = $sub_content;
$data['page_title'] = $page_title;
$data['hond'] = $numHond;
$data['yam'] = $numYam;
$data['suzu'] = $numSuzu;
$data['numPage'] = $numPage;
$data['numComp'] = $numComp;
$data['active'] = $page_active;
$this->render('blocks/header', $data);
$this->render($content, $data);
$this->render('blocks/footer', $data);
?>