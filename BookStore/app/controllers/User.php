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

        // public function getUsers(){
        //     $users = $this->userModel->getUsers();
        //     $data = [
        //         "users" => $users
        //     ];
        //     $this->view('User/getUsers',$data);
        // }

        public function editProfile($userID) {
            $user = $this->userModel->getUser($userID);

            if(!isset($_POST[''])) {
                $this->view('/User/editProfile', $user);
            }
            else {
                $data = [                   
                    'email' => $_POST['email'],
                    'fname' => $_POST['fname'],
                    'lname' => $_POST['lname'],
                    'phone' => $_POST['phone'],
                    'address' => $_POST['address'],
                    'newsletter' => isset($_POST['newsletter'])? $_POST['newsletter'] : 'no'
                ];
            }
        }

        public function editCredentials($userID) {

        }
        

        

        // public function details($user_id){
        //     $user = $this->userModel->getUser($user_id);

           
        //         $this->view('User/details',$user);
            
        // }

        // public function update($user_id){
        //     $user = $this->userModel->getUser($user_id);
        //     if(!isset($_POST['update'])){
        //         $this->view('User/updateUser',$user);
        //     }
        //     else{
        //         $filename= $this->imageUpload();
        //         $data=[
        //             'name' => trim($_POST['name']),
        //             'city' => trim($_POST['city']),
        //             'phone' => trim($_POST['phone']),
        //             'picture' => $filename,
        //             'ID' => $user_id
        //         ];
        //         if($this->userModel->updateUser($data)){
        //             echo 'Please wait we are upating the user for you!';
        //             //header('Location: /MVC/User/getUsers');
        //             echo '<meta http-equiv="Refresh" content="2; url=/MVC/User/getUsers">';
        //         }
                
        //     }
        // }

      
    }
