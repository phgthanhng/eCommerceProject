<?php

    class User extends Controller{
        public function __construct(){
            $this->userModel = $this->model('userModel');
            if(!isLoggedIn()){
                header('Location: /eCommerceProject/BookStore/Login');
            }
        }

        public function index(){
            $this->view('User/index');
        }

        public function editProfile($userID) {
            $user = $this->userModel->getUser($userID);

            if(!isset($_POST['editProfile'])) {
                $this->view('/User/editProfile', $user);
            }
            else {
                $data = [                   
                    'email' => $_POST['email'],
                    'fname' => $_POST['fname'],
                    'lname' => $_POST['lname'],
                    'phone' => $_POST['phone'],
                    'address' => $_POST['address'],
                    'newsletter' => isset($_POST['newsletter'])? $_POST['newsletter'] : 'no',
                    'userID' => $userID
                ];
                if ($this->userModel->editProfile($data)) {
                    echo 'Please wait we are uploading your publication!';
                    echo '<meta http-equiv="Refresh" content="2; url=/EcommerceProject/Bookstore/User/editProfile/'.$userID.'">';
                }
            }
        }

        public function editCredentials($userID) {

        }
      
    }
