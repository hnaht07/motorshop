<?php 
class AuthMiddleware extends Middlewares{
    public function handle(){
        $check = Session::data('username');
        if($check[0]['user_Role'] != 'admin'){
            $response = new Response();
            $response->redirect('trang-chu');
        }
    }
}

?>