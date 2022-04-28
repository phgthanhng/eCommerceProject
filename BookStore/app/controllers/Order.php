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
     * function called when users cancel order
     */
    public function cancel($orderID) {
  
      
            // Update the quantity again in the Database
            // Step 1: Retrieve order first
            $order = $this->orderModel->getSingleOrder($orderID);
            // Step 2: Use the CartID to get access to all the cart items
            $cartItems = $this->cartModel->getAllCartItems($order->cartID);

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
            // delete it after updating the database
            if ($this->orderModel->deleteOrder($orderID)) {
                echo 'Please wait we are canceling the order for you!';
                echo '<meta http-equiv="Refresh" content=".2; url=' . URLROOT . '/User/index">';
            }
        }
    }

    /**
     * view details of an order
     */
    public function details($orderID) {
        $data1 = [
            'orderID' => $orderID,
        ];
        $order = $this->orderModel->getOneOrder($data1);
        if (!empty($order)) {
            $data = [
                'orders' => $order
            ];
            $this->view('User/orderDetails', $data);        

        }
        // $this->view('User/orderDetails', $data);        
    }
}



