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
        $this->getAllCartItems();
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
        $this->createSession($cart); // cart object for the user
        return $cart;
    }

    /*
     * Create a cart object
     */
    public function createCart() {
        $this->cartModel->createCart();
    }


// NOTE: Might combine addCartItem method with createCartItem

    /*
     * Adds an item to the cart
     */
    public function addCartItem($quantity, $bookID) {
        // Step 1: Get user cart from the cart table
        $cart = $this->getUserCart();

        $isItemInCart = $cartItem = $this->cartModel->isExistInCartItem($bookID);
    
        if (!$isItemInCart) { 
            // Step 2: Add item to CartItems table (associate book item with $userID a)
            // Create cartitem first
            $this->createCartItem($quantity, $bookID);
            header('Location: /eCommerceProject/BookStore/Book/bookdetail/'. $bookID);
        }
        else {
            $newQuantity = $cartItem->quantity + $quantity;
            $this->editCartItemQuantity($newQuantity, $cartItem->cartitemID);  // trying to add the new update number
            header('Location: /eCommerceProject/BookStore/Cart/index');
        }
    }

    /*
     * Create cartItem 
     */
    public function createCartItem($quantity, $bookID) {
        $subtotal = $this->calcSubtotal($quantity, $bookID);
    
        $data = [
            'cartID' => $_SESSION['cart_id'],
            'bookID' => $bookID,
            'quantity' => $quantity,
            'subtotalPrice' => $subtotal,
        ];
        
        return $this->cartModel->createCartItem($data); // pass the bookID 
    }

    /*
     * Calculates subtotal of an item
     */
    public function calcSubtotal($quantity, $bookID) {
        $book = $this->bookModel->getSingleBook($bookID);
        return number_format($quantity * $book->retailprice, 2, '.', '');
    }

    /*
     * Retrieves all items of user in the database
     */
    public function getAllCartItems() {
        // call the getUserCart to create cart and a session 
        $this->getUserCart();

        if (!empty($this->cartModel->getAllCartItems())) {
        // will call the view to show all cartitems
            $items = $this->cartModel->getAllCartItems(); 
            $noTaxPrice = $this->calcTotal($items); 
            $gst = $noTaxPrice * 0.05;
            $qst = $noTaxPrice *  0.09975;
            $salesTaxes = $qst + $gst;
            $withTaxPrice = $salesTaxes + $noTaxPrice;
            $data = [  
                'items' => $items,
                'cartTotal' => $noTaxPrice,
                'gst' => number_format($gst, 2, '.', ''),
                'qst' => number_format($qst, 2, '.', ''),
                'salesTaxes' => number_format($salesTaxes, 2, '.', ''),
                'finalPrice' =>  number_format($withTaxPrice, 2, '.', '')
            ];  
        }
        else {
            $data = [
             'msg' => "There is no items in the cart"
            ];
        }
        $this->view('Cart/index', $data);
    }

    /*
     * Calculates the total price
     */
    public function calcTotal($cartItems) {
        // get all cart items of a specific user and get the subtotal of all of them
        // $cartItems = $this->cartModel->getAllCartItems();
        $cartTotal = 0;
        foreach ($cartItems as $item) {
            $cartTotal += $item->cartitemprice;
        }

        return number_format($cartTotal, 2, '.', '');
    }

    /*
     * Removes a specific cart item based on the cart item ID
     */ 
    public function removeCartItem($cartitemID) {
        $this->cartModel->deleteCartItem($cartitemID);

        header('Location: /eCommerceProject/BookStore/Cart/index');
        // NOTE: put msg here to be sent to view
    }

    /*
     * Updates the cart item's quantity and recalculates the price too
     */
    public function editCartItemQuantity($quantity, $cartitemID) {  
        // recalculate here the pricing
        $item = $this->cartModel->getCartItem($cartitemID);

        $data = [
            'quantity' => $quantity,
            'cartitemID' => $cartitemID,
            'subtotal' => $this->calcSubtotal($quantity, $item->bookID)
            ];

        if($this->cartModel->updateCartItemQuantity($data)){
            $items = $this->cartModel->getAllCartItems();
            
            $data = [  
                'items' => $items
            ];
            header('Location: /eCommerceProject/BookStore/Cart/index');
            $this->view('Cart/index', $data);
        }  
        //var_dump($data); 
    }

    /*
     * Creates a session of the user cart
     */
    public function createSession($cart) {
        $_SESSION['cart_id'] = $cart->cartID;
    }
}

?>

