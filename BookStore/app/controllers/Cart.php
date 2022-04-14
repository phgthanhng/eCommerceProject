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
        // else return the cart that exist already
        return $this->cartModel->getUserCart();
    }

    /*
     * Adds an item to the cart
     */
    public function addCartItem($quantity, $bookID) {
        // Step 1: Get user cart from the cart table
        $cart = $this->getUserCart();
        
        // Step 2: Add item to CartItems table (associate book item with $userID a)
        // Create cartitem first

        $this->createCartItem($cart->cartID, $quantity, $bookID);
    }

    /*
     * Create cartItem 
     */
    public function createCartItem($cartID, $quantity, $bookID) {
        $data = [
            'cartID' => $cartID,
            'bookID' => $bookID,
            'quantity' => $quantity,
            'subtotalPrice' =>  $this->calcSubtotal($quantity, $bookID),
        ];
        
        $this->cartModel->createCartItem($data); // pass the bookID 
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
        // will call the view to show all cartitems
        $this->cartModel->getAllCartItems($)
    }

    /*
     * Calculates the total price
     */
    public function calcTotal() {

    }

    public function removeCartItem() {

    }

    public function editCartItemQuantity() {

    }

    public function createSession($cart) {
        $_SESSION['user_id'] = $cart->cartID;
    }
 
}

?>

