<?php
class Cart extends Controller
{
    public function __construct()
    {
        $this->cartModel = $this->model('cartModel');
    }

    public function index() 
    {
        $this->view('Cart/index');
        $this->getUserCart();

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
        




    }

    public function removeCartItem() {

    }

    public function editCartItemQuantity() {

    }

}

?>

