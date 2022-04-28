<?php
class Order extends Controller {

    public function __construct() {
        $this->orderModel= $this->model('orderModel');
        $this->cartModel= $this->model('cartModel');
        $this->bookModel= $this->model('bookModel');
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

    /*
     * function called when users cancel order
     */
    public function cancel($orderID) {
        // delete oder
        $data = [
            'orderID' => $orderID,
        ];

        if ($this->orderModel->deleteOrder($data)) {
            // Update the quantity again in the Database
            // Step 1: Retrieve order first
            $order = $this->orderModel->getSingleOrder($orderID);
            // Step 2: Use the CartID to get access to all the cart items
            $cartItems = $this->$cartModel->getAllCartItems($order->cartID);

            // return all the books so update all the book's quantity in the cart 
            foreach ($cartItems as $item) {
                // get current book in database to be able to get the current available quantity
                $book = $this->bookModel->getSingleBook($item->bookID);
                $availableQty = $book->availablequantity;  // the current available quantity in the database
                $returnQty = $item->quantity;  // the returned quantity
                $data = [
                    'updatedQuantity' => $availableQty + $returnQty,
                    'bookID' => $item->bookID
                ];

                // update the database
                $this->bookModel->updateBookQuantity($data);

            }

            echo 'Please wait we are canceling the order for you!';
            echo '<meta http-equiv="Refresh" content=".2; url=' . URLROOT . '/User/index">';
        }
    }

    /**
     * to return an order
     */
    public function return() {

    }

    /**
     * view details of an order
     */
    public function details() {

    }

    /**
     * to mark orders as shipped
     */
    public function markAsShipped() {

    }

}



