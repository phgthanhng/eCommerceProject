<?php
class Login extends Controller
{
    public function __construct()
    {
        $this->loginModel = $this->model('loginModel');
    }

    public function index()
    {
        if(!isset($_POST['login'])){
            $this->view('Login/index');
        }
        else{
            $user = $this->loginModel->getCustomer($_POST['username']);
            
            if($user != null){
                $hashed_pass = $user->pass_hash;
                $password = $_POST['password'];
                if(password_verify($password,$hashed_pass)){
                    //echo '<meta http-equiv="Refresh" content="2; url=/MVC/">';
                    $this->createSession($user);
                    $data = [
                        'msg' => "Welcome, $user->username!",
                    ];
                    $this->view('Home/home',$data);
                }
                else{
                    $data = [
                        'msg' => "Password incorrect! for $user->username",
                    ];
                    $this->view('Login/index',$data);
                }
            }
            else{
                $data = [
                    'msg' => "User: ". $_POST['username'] ." does not exists",
                ];
                $this->view('Login/index',$data);
            }
        }
    }


    public function signup() {
        $this->view('Login/signup');
    }


    public function create()
    {
        if(!isset($_POST['signup'])){
            $this->view('Login/signup');
        }
        else{
            $user = $this->loginModel->getCustomer($_POST['username']);
            if($user == null){
                $data = [
                    'username' => trim($_POST['username']),
                    'email' => $_POST['email'],
                    'pass' => $_POST['password'],
                    'fname' => $_POST['fname'],
                    'lname' => $_POST['lname'],
                    'phone' => $_POST['phone'],
                    'address' => $_POST['address'],

                    // 'pass_verify' => $_POST['verify_password'],
                    'pass_hash' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                    // 'username_error' => '',
                    // 'password_error' => '',
                    // 'password_match_error' => '',
                    // 'password_len_error' => '',
                    // 'msg' => '',
                    // 'email_error' => ''
                ];
                // if($this->validateData($data)){
                    if($this->loginModel->createCustomer($data)){
                        echo 'Please wait creating the account for '.trim($_POST['username']);
                        echo '<meta http-equiv="Refresh" content="2; url=/BookStore/Home/index">';
                 }
                // } 
            }
            else{
                $data = [
                    'msg' => "User: ". $_POST['username'] ." already exists",
                ];
                $this->view('Login/signup',$data);
            }
            
        }
    }

    public function validateData($data){
        if(empty($data['username'])){
            $data['username_error'] = 'Username can not be empty';
        }
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $data['email_error'] = 'Please check your email and try again';
        }
        if(strlen($data['pass']) < 6){
            $data['password_len_error'] = 'Password can not be less than 6 characters';
        }
        if($data['pass'] != $data['pass_verify']){
            $data['password_match_error'] = 'Password does not match';
        }

        if(empty($data['username_error']) && empty($data['password_error']) && empty($data['password_len_error']) && empty($data['password_match_error'])){
            return true;
        }
        else{
            $this->view('Login/create',$data);
        }
    }

    public function createSession($user){
        $_SESSION['user_id'] = $user->id;
        $_SESSION['user_username'] = $user->username;
    }

    public function logout(){
        unset($_SESSION['user_id']);
        session_destroy();
        echo '<meta http-equiv="Refresh" content="1; url=/MVC/Login/">';
    }
}
