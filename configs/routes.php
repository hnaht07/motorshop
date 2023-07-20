<?php 

$routes['default_controller'] = 'home';
/**
* 
* Đường dẫn ảo => đường dẫn thật
* 
*/
$routes['trang-chu'] = 'home';
$routes['san-pham'] = 'product/index';
$routes['danh-sach-san-pham']= 'product/list_product';
$routes['chi-tiet/(.+)'] = 'product/detail_product/$1';

?>