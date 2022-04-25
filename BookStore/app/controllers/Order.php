<?php
class Order extends Controller {

    public function __construct() {
        $this->orderModel= $this->model('orderModel');
        $this->cartModel= $this->model('cartModel');
    }

    public function index() {
    }

    /*
     * Creates an order
     */
    public function placeOrder() {
        // $cart = $this->cartModel->getUserCart();
        // $data = [
        //     'cartID' => $cart->cartID,
        //     'fname' => $_POST['firstname'],
        //     'lname' => $_POST['lastname'],
        //     'email' => $_POST['email'],
        //     'totalprice' => $cart->totalPrice,
        //     'paymentMethod' => $_POST['paymentMethod'],
        //     'address' => $_POST['address'] . ', ' .$_POST['province'] . ', ' . $_POST['postalcode'],
        //     'cardname' => $_POST['cardname'],
        //     'expiration' => $_POST['expiration'],
        //     'cvv' => $_POST['cvv']
        // ];
        
        // // create order
        // if ($this->orderModel->createOrder($data)) {
        //     // create a new cart
        //     $this->cartModel->createCart($_SESSION['user_id']);
        //     $this->view('Order/success');  
        // }
         
        
    }
}



