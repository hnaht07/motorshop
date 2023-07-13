<?php 
class ParamsMiddleware extends Middlewares{
    public function handle(){
        if(!empty($_SERVER['QUERY_STRING'])){
            if ($_GET['id']) {
                $id = $_GET['id'];
                if (is_numeric($id)) {
                    if ($_SERVER['QUERY_STRING'] = 'id=' . $id) {
                        return $id;
                    } else {
                        $response = new Response();
                        $response->redirect(Route::getFullUrl());
                    }
                } else {
                    $response = new Response();
                    $response->redirect(Route::getFullUrl());
                }
            }
            if ($_GET['page']) {
                $page = $_GET['page'];
                if (is_numeric($page)) {
                    if ($_SERVER['QUERY_STRING'] = 'page=' . $page) {
                        return $page;
                    } else {
                        $response = new Response();
                        $response->redirect(Route::getFullUrl());
                    }
                } else {
                    $response = new Response();
                    $response->redirect(Route::getFullUrl());
                }
            }
            if ($_GET['cate']) {
                $cate = $_GET['cate'];
                if (is_numeric($cate)) {
                    if ($_SERVER['QUERY_STRING'] = 'cate=' . $cate) {
                        return $cate;
                    } else {
                        $response = new Response();
                        $response->redirect(Route::getFullUrl());
                    }
                } else {
                    $response = new Response();
                    $response->redirect(Route::getFullUrl());
                }
            }
        }

    }
}
?>