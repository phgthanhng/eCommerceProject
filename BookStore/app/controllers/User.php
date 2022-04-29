<?php

class User extends Controller
{
    /*
     * Default constructor of the user class
     */
    public function __construct()
    {
        $this->orderModel = $this->model('orderModel');
        $this->userModel = $this->model('userModel');
        $this->reviewModel = $this->model('reviewModel');
        if (!isLoggedIn()) {
            header('Location: /eCommerceProject/BookStore/Login');
        }
    }

    /*
     * Displays user profile
     */
    public function index()
    {
        $processingOrder = $this->orderModel->getUserIncompletedOrders();
        $completedOrder = $this->orderModel->getUserCompletedOrders();
        // $reviews = $this->reviewModel->getAllReviews();
        $data = [  
            "processingOrders" => $processingOrder,
            "completedOrders" => $completedOrder,
            // "reviews" => $reviews
        ];
        $this->view('User/index', $data);
    }

    /*
     * Updates a user profile
     */
    public function editProfile($userID)
    {
        $user = $this->userModel->getUser($userID);

        if (!isset($_POST['editProfile'])) {
            $this->view('/User/editProfile', $user);
        } else {
            $data = [
                'email' => $_POST['email'],
                'fname' => $_POST['fname'],
                'lname' => $_POST['lname'],
                'phone' => $_POST['phone'],
                'address' => $_POST['address'],
                'newsletter' => isset($_POST['newsletter']) ? $_POST['newsletter'] : 'no',
                'userID' => $userID
            ];
            if ($this->userModel->editProfile($data)) {
                echo 'Please wait we are uploading your publication!';
                echo '<meta http-equiv="Refresh" content="2; url=/EcommerceProject/Bookstore/User/editProfile/' . $userID . '">';
            }
        }
    }

    /*
     * Updates user credentials: password
     */
    public function editCredentials($userID)
    {
        $user = $this->userModel->getUser($userID);

        if (!isset($_POST['editCredentials'])) {
            $this->view('/User/editCredentials', $user);
        } else {
            $data = [
                'username' => $_POST['username'],
                'password' => $_POST['password'],
                'pass_hash' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                'userID' => $userID
                // 'pass_verify' => $_POST['verify_password']
            ];
            // if ($this->validateEditCredentialsData($data)) {
                if ($this->userModel->editCredentials($data)) {
                    echo 'Please wait we are editing your information!';
                    echo '<meta http-equiv="Refresh" content="2; url=/EcommerceProject/Bookstore/User/index">';
                }
            // }
        }
    }

    
  
    }
// }
