<?php
$data = [];
$data['dataShow'] = $sub_content;
$data['active'] = $page_active;
$data['numPage'] = $numPage;
$this->render('blocks/header', $data);
$this->render($content, $data);
$this->render('blocks/footer', $data);

?>