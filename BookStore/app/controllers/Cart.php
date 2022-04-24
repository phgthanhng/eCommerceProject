<?php
class Cart extends Controller
{
    public function __construct()
    {
        $this->cartModel = $this->model('cartModel');  
        $this->bookModel = $this->model('bookModel');
        $this->orderModel = $this->model('orderModel');
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
    
                // $cartCount = $this->cartModel->getCartItemCount();
                // $data = [
                //     'count' => $cartCount
                // ];
                $this->view('Cart/index', $data);           
            header('Location: /eCommerceProject/BookStore/Book/bookdetail'. $bookID);
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
            'subtotalPrice' => $subtotal
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
            $price = $this->calcTotal($items); 
            
            $data = [  
                'items' => $items,
                'cartTotal' => $price[0],
                'gst' => $price[1],
                'qst' => $price[2],
                'salesTaxes' => $price[3],
                'finalPrice' =>  $price[4]
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
        $noTaxPrice = 0;
        foreach ($cartItems as $item) {
            $noTaxPrice += $item->cartitemprice;
        }

        $gst = number_format($noTaxPrice * 0.05, 2, '.', '');
        $qst = number_format($noTaxPrice *  0.09975, 2, '.', '');
        $salesTaxes = number_format($qst + $gst, 2, '.', '');
        $withTaxPrice = number_format($salesTaxes + $noTaxPrice, 2, '.', '');
        
        // set CART total to with tax price
        $this->cartModel->updateCartTotalPrice($withTaxPrice);

        return array($noTaxPrice, $gst, $qst, $salesTaxes, $withTaxPrice);
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

    }

    /*
     * Checks out the cart of the user
     */
    public function checkout() {
        // if user clicks the checkout button an d the cart item is not empty(uses the session for cartid)
        if (isset($_POST['checkout']) && !empty($this->cartModel->getAllCartItems())) {
            // get cart object
            $cart = $this->cartModel->getUserCart(); 
            $data = [
                "shippingaddress" => $_POST['shippingaddress'],
                'totalprice' => $cart->totalprice,
                'paymentmethod' => $_POST['paymentmethod'],
            ];
            // create order object
            $this->orderModel->createOrder($data); // uses session var cartid
            echo 'Transaction completed successfully';
            destroySession();
        
        }
    }

    /*
     * Creates a session of the user cart
     */
    public function createSession($cart) {
        $_SESSION['cart_id'] = $cart->cartID;
    }

    /*
     * Deletes a session of the user cart
     */ 
    public function destroySession() {
        unset($_SESSION['cart_id']);
        session_destroy();
    }
}

?>

