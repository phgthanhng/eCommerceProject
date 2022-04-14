<?php
class Cart extends Controller
{
    public function __construct()
    {
        $this->cartModel = $this->model('cartModel');  
        $this->bookModel = $this->model('bookModel');
    }

    public function index() 
    {
        $this->view('Cart/index');
        $this->getAllCartItems();
    }

    /*
     * Create a cart object
     */
    public function createCart() {
        $this->cartModel->createCart();
    }

    /*
     * Retrieves the user cart 
     */
    public function getUserCart() {
        // If there is no cart in the database then create a cart for the user
        if (!$this->cartModel->getUserCart()) { // if return is false then create a cart
            $this->createCart();  
        }
        // else
        //retrieve, createsession and return the existing cart
        $cart = $this->cartModel->getUserCart();
        $this->createSession($cart);
        return $cart;
    }

// NOTE: Might combine addCartItem method with createCartItem

    /*
     * Adds an item to the cart
     */
    public function addCartItem($quantity, $bookID) {
        // Step 1: Get user cart from the cart table
        $cart = $this->getUserCart();
        
        // Step 2: Add item to CartItems table (associate book item with $userID a)
        // Create cartitem first
        $this->createCartItem($quantity, $bookID);
    }

    /*
     * Create cartItem 
     */
    public function createCartItem($quantity, $bookID) {
        $data = [
            'cartID' => $_SESSION['cart_id'],
            'bookID' => $bookID,
            'quantity' => $quantity,
            'subtotalPrice' =>  $this->calcSubtotal($quantity, $bookID),
        ];
        
        return $this->cartModel->createCartItem($data); // pass the bookID 
    }


    /*
     * Calculates subtotal of an item
     */
    public function calcSubtotal($quantity, $bookID) {
        $book = $this->bookModel->getSingleBook($bookID);
        return $quantity * $bookID->retailprice;
    }

    /*
     * Retrieves all items of user in the database
     */
    public function getAllCartItems() {
        // call the getUserCart 

        // will call the view to show all cartitems
        $items = $this->cartModel->getAllCartItems();

        $data = [  
            "items" => $items
        ];
        $this->view('Cart/index', $data); // data to display the cart items in the view
    }

    /*
     * Calculates the total price
     */
    public function calcTotal() {

    }

    public function removeCartItem() {

    }

    public function editCartItemQuantity() {  
            // recalculate here the pricing
    }

    public function createSession($cart) {
        $_SESSION['cart_id'] = $cart->cartID;
    }
}

?>

