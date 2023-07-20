<?php 
class AuthMiddleware extends Middlewares{
    public function handle(){
        $productModel = Load::model('ProductModel');
        
        if(Session::data('admin_login')==null){
            $response = new Response();
            //$response->redirect('trang-chu');
        }
    }
}

?>