<?php 

$routes['default_controller'] = 'home';
/**
* 
* Đường dẫn ảo => đường dẫn thật
* 
*/
$routes['trang-chu'] = 'home';
$routes['san-pham'] = 'product/index';
$routes['san-pham/(.+)'] = 'product/detail_product/$1';
$routes['tin-tuc'] = 'news/index';
$routes['tin-tuc/(.+)'] = 'news/detail_news/$1';
$routes['quan-ly'] = 'admin/dashboard';
$routes['them'] = 'admin/dashboard/insert';
$routes['thong-tin'] = 'admin/dashboard/info_product';
$routes['chinh-sua'] = 'admin/dashboard/update';
$routes['ban-tin'] = 'admin/dashboard/news';
$routes['them-ban-tin'] = 'admin/dashboard/news_insert';
$routes['dang-nhap'] = 'user/login';
$routes['dang-ky'] = 'user/register';
$routes['dang-xuat'] = 'user/logout';
?>