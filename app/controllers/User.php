<?php 
class User extends Controller {
    public $user , $data;
    
    public function __construct(){
        $this->user = $this->model('UserModel');
    }
    public function login()
    {
        $this->data['content'] = 'user/login';
        $this->data['page_active'] = 'login';
        $this->data['errors'] = Session::flash('errors');
        $this->data['old'] = Session::flash('old');
        $this->data['msg'] = Session::flash('msg');
        $this->data['status'] = Session::flash('status');
        $this->data['status_code'] = Session::flash('status_code');
        $this->render('layouts/login_layout', $this->data);
    }
    public function register()
    {
        $this->data['content'] = 'user/register';
        $this->data['page_active'] = 'register';
        $this->data['errors'] = Session::flash('errors');
        $this->data['old'] = Session::flash('old');
        $this->data['msg'] = Session::flash('msg');
        $this->data['status'] = Session::flash('status');
        $this->data['status_code'] = Session::flash('status_code');
        $this->render('layouts/login_layout', $this->data);
    }
    public function logout(){
        Session::delete('username');
        $response = new Response();
        $response->redirect('dang-nhap');
    }
    public function render_login(){
        $request = new Request();
        if($request->isPost()){
            $request->rules([
                'login_name' => 'callback_check_name',
                'login_password' => 'callback_check_password',
            ]);
            $request->message([
                'login_name.callback_check_name' => 'Sai Tài Khoản!',
                'login_password.callback_check_password' => 'Sai Mật Khẩu!',
            ]);
        }
        $validate = $request->validate();
        if (!$validate) {
            Session::flash('errors', $request->errors());
            Session::flash('old', $request->getField());
            Session::flash('msg', "Có Lỗi Xảy Ra!");
            Session::flash('status', 'Sai Tài Khoản Hoặc Mật Khẩu');
            Session::flash('status_code', 'error');
        }else{
            $data = $this->user->getById("'" . $_POST['login_name'] . "'", 'tbl_users', 'user_Name');
            Session::data('username',$data);
            $response = new Response();
            $response->redirect('trang-chu');
        }
        $response = new Response();
        $response->redirect('dang-nhap');
    }
    public function check_name($login_name){
        $check_name = $this->user->getById("'" . $login_name . "'", 'tbl_users', 'user_Name');
        if(empty($check_name)){
            return false;
        }
        return true;
    }
    public function check_password()
    {
        $login_password = $_POST['login_password'];
        $data = $this->user->getById("'" . $_POST['login_name'] . "'", 'tbl_users', 'user_Name');
        $check_password = $data[0]['user_Pass'];
        $compare = substr_compare($login_password,$check_password,0);
        if($compare != 0){
            return false;
        }else{
            return true;
        }
        
    }
    public function render_register(){
        $dataRegister = [];
        $request = new Request();
        if($request->isPost()){
            $request->rules([
                'username' => 'min:5|max:30',
                'useremail' => 'email|min:6|unique:tbl_users:user_Email',
                'userpass' => 'min:3',
                'userrepass' => 'match:userpass',
            ]);
            $request->message([
                'username.min' => 'Tên đăng nhập phải lớn hơn 5 ký tự!',
                'username.max' => 'Tên đăng nhập phải nhỏ hơn 30 ký tự!',
                'useremail.email' => 'Định dạng email không hợp lệ!',
                'useremail.min' => 'Email phải lớn hơn 6 ký tự!',
                'useremail.unique' => 'Email đã được đăng kí!',
                'userpass.min' => 'Mật khẩu phải lớn hơn 3 ký tự!',
                'userrepass.match' => 'Mật khẩu nhập lại không đúng!',
            ]);
            $validate = $request->validate();
            if (!$validate) {
                Session::flash('errors', $request->errors());
                Session::flash('old', $request->getField());
                Session::flash('msg', "Có Lỗi Xảy Ra!");
                Session::flash('status', 'Tài Khoản Đăng Ký Không Thành Công!');
                Session::flash('status_code', 'error');
                $response = new Response();
                $response->redirect('dang-ky');
            }else{
                $dataRegister['user_Id'] = '';
                $dataRegister['user_Name'] = $_POST['username'];
                $dataRegister['user_Pass'] = $_POST['useremail'];
                $dataRegister['user_Email'] = $_POST['userpass'];
                $dataRegister['user_Role'] = 'client';
                $this->user->insert($dataRegister, 'tbl_users');
                Session::flash('msg', "Đăng Ký Thành Công!");
                Session::flash('status', 'Xin Chào Mừng '.$_POST['username']);
                Session::flash('status_code', 'success');
                Session::flash('redirect','trang-chu');
                $response = new Response();
                $response->redirect('dang-ky');
            }
        }
        
    }
}

?>