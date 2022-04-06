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
            $user = $this->loginModel->getUser($_POST['username']);
            // user exists
            if($user != null){
                // if user is admin
                if ($user->userID == 1 || $user->userID == 2 || $user->userID == 3) {
                    $hashed_pass = $user->password;
                    $password = $_POST['password'];
                    // if admin password correct
                    if ($password == $hashed_pass){
                        $this->createSession($user);
                        $data = [
                            'msg' => "Welcome, $user->username!",
                        ];
                        header('Location: /eCommerceProject/BookStore/Admin/index');
                        $this->view('Admin/index',$data);
                    }
                    // if admin password incorrect
                    else {
                        $data = [
                            'msg' => "Password incorrect! for $user->username",
                        ];
                        $this->view('Login/index',$data);
                    }
                }
                // if not admin
                else {
                    $hashed_pass = $user->password;
                    $password = $_POST['password'];
                    
                    // if user password correct
                    if (password_verify($password,$hashed_pass)){
                        $this->createSession($user);
                        $data = [
                            'msg' => "Welcome, $user->username!",
                        ];
                        header('Location: /eCommerceProject/BookStore/User/index');
                        $this->view('User/index',$data);
                    }
                    // if user password incorrect
                    else {
                        $data = [
                            'msg' => "Password incorrect! for $user->username",
                        ];
                        $this->view('Login/index',$data);
                    }
                }
            }
            // user null
            else{
                $data = [
                    'msg' => "User: ". $_POST['username'] ." does not exists",
                ];
                $this->view('Login/index',$data);
            }
        }
    }

    public function signup()
    {
        if (!isset($_POST['signup'])) {
            $this->view('Login/signup');
        } else {
            $user = $this->loginModel->getUser($_POST['username']);
            if ($user == null) {
                $data = [
                    'username' => trim($_POST['username']),
                    'email' => $_POST['email'],
                    'pass' => $_POST['password'],
                    'fname' => $_POST['fname'],
                    'lname' => $_POST['lname'],
                    'phone' => $_POST['phone'],
                    'address' => $_POST['address'],
                    'newsletter' => isset($_POST['newsletter'])? $_POST['newsletter'] : 'no',
                    'pass_hash' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                ];
                if ($this->loginModel->createUser($data)) {
                    echo 'Please wait creating the account for ' . trim($_POST['username']);
                    echo '<meta http-equiv="Refresh" content="2; url=/eCommerceProject/BookStore/Home/index">';
                }
            } else {
                $data = [
                    'msg' => "User: " . $_POST['username'] . " already exists",
                ];
                $this->view('Login/index', $data);
            }
        }
    }

    public function createSession($user)
    {
        $_SESSION['user_id'] = $user->userID;
        $_SESSION['user_username'] = $user->username;
    }

    public function logout(){
        echo '<meta http-equiv="Refresh" content="5; /eCommerceProject/BookStore/Login/logout">';
        echo 'Logging out user';
        unset($_SESSION['user_id']);
        session_destroy();
        echo '<meta http-equiv="Refresh" content="1; /eCommerceProject/BookStore/Login/index">';
        // header('Location: /eCommerceProject/BookStore/Login/index');   // change later if
        // header('Location: /BookStore/Login/index');   // change later if
    }
}