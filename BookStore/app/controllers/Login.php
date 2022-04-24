<?php
class Login extends Controller
{
    /*
     * Default constructor of the login class
     */
    public function __construct()
    {
        $this->loginModel = $this->model('loginModel');
    }

    /*
     * Displays login page and process login inputs
     */
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

    /*
     * Creates a new user
     */
    public function signup()
    {   
        // if SIGNUP button is NOT clicked
        if (!isset($_POST['signup'])) {
            $this->view('Login/signup');
        // if signup button is clicked
        } else {
            $user = $this->loginModel->getUser($_POST['username']);
            // if user does not exist in the system
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
                    'pass_verify' => $_POST['verify_password']
                ];
                // validate data first
                if ($this->validateSignupData($data)) {
                    if ($this->loginModel->createUser($data)) {
                        echo 'Please wait creating the account for ' . trim($_POST['username']);
                        echo '<meta http-equiv="Refresh" content="2; url=/eCommerceProject/BookStore/Home/index">';
                    }
                }
            // if user exists in the system
            } else {
                $data = [
                    'msg' => "User: " . $_POST['username'] . " already exists",
                ];
                $this->view('Login/index', $data);
            }
        }
    }

    /*
     * Validates sign up input
     */
    public function validateSignupData($data) {
        if ($data['pass'] != $data['pass_verify']) {
            $data['password_match_error'] = 'Password does not match';
        } 
        if (empty($data['password_match_error'])) {
            return true;
        }
        else {
            $this->view('Login/signup', $data);
        }
    }

    /*
     * Create a session of a specific user
     */
    public function createSession($user)
    {
        $_SESSION['user_id'] = $user->userID;
        $_SESSION['user_username'] = $user->username;
    }

    /*
     * Logouts a user and destroys a session
     */
    public function logout(){
        echo '<meta http-equiv="Refresh" content="5; /eCommerceProject/BookStore/Login/logout">';
        echo '
        <div style="position: absolute;
            top: 50%;
            width: 100%;
            text-align: center;
            font-size: 18px;">
            <h1>Logging out, '.$_SESSION['user_username'].'<h1>
        </div>
        ';
        unset($_SESSION['user_id']);
        unset($_SESSION['user_username']);
        session_destroy();
        echo '<meta http-equiv="Refresh" content="1; /eCommerceProject/BookStore/Login/index">';
        // header('Location: /eCommerceProject/BookStore/Login/index');   // change later if
        // header('Location: /BookStore/Login/index');   // change later if
    }
}