<?php
class Order extends Controller
{

    public function __construct()
    {
        $this->orderModel = $this->model('orderModel');
        $this->cartModel = $this->model('cartModel');
        $this->bookModel = $this->model('bookModel');
        $this->reviewModel = $this->model('reviewModel');
    }

    public function index()
    {
    }

    /*
     * function called when users cancel order
     */
    public function cancel($orderID)
    {

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

    /*
     * view details of an order
     */
    public function orderDetails($orderID)
    {
        $data = [
            'orderID' => $orderID
        ];

        $items = $this->orderModel->getOneOrderDetails($data);
        $order = $this->orderModel->getOneOrder($orderID);
        if (!empty($items) && !empty($order)) {
            $data = [
                'items' => $items,
                'order' => $order
            ];
            $this->view('Order/orderDetails', $data);
        }
    }



    /**
     * create a book review
     */
    public function addReview($bookID)
    {
        

        if (isset($_POST['reviewSubmit'])) {

            $reviewmark = trim($_POST['review_mark']);

            $data = [

                "bookID" => $bookID,
                "reviewcontent" => trim($_POST['reviewTextArea']),
                "reviewmark" => $reviewmark

            ];

            // add review to the database
            if($this->reviewModel->createReview($data)){
                echo "Please wait we are creating your review";
                echo '<meta http-equiv="Refresh" content="2; url=/eCommerceProject/BookStore/User/index">';
            }

            $this->view('Order/addReview');
            
           
        }

       
    }

    /**
     * edit review (update review)
     */
    public function editReview($reviewID)
    {
        $existing_review = $this->reviewModel->getSigleReview($reviewID);

        if (!isset($_POST['editReview'])) {
            $this->view('Order/editReview', $existing_review);
        } else {
            $data = [
                "reviewcontent" => trim($_POST['reviewText']),
                "reviewID" => $reviewID,
                "reviewmark" => trim($_POST['review_mark'])

            ];
            if ($this->reviewModel->editReview($data)) {
                echo "Please wait we are editing your review";
                echo '<meta http-equiv="Refresh" content="2; url=/eCommerceProject/BookStore/User/index">';
            }
        }
    }

    /**
     * delete a review based on review id
     */
    public function deleteReview($reviewID) {
        if ($this->reviewModel->deleteReview($reviewID)) {

            echo "Please wait we are removing your review";
            echo '<meta http-equiv="Refresh" content="2; url=/eCommerceProject/BookStore/User/index">';
        }
    }
}
