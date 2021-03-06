<?php
class Cart extends Controller
{
    /*
     * Default constructor for the cart
     */ 
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
    public function getUserCart()
    {
        // If there is no cart in the database then create a cart for the user
        if (!$this->cartModel->getUserCart()) {
            // if return is false then create a cart
            $this->createCart($_SESSION['user_id']);
        }
        $cart = $this->cartModel->getUserCart();
        return $cart;
    }

    /*
     * Create a cart object
     */
    public function createCart($userID)
    {
        $this->cartModel->createCart($userID);
    }

    /*
     * Adds an item to the cart
     */
    public function addCartItem($quantity, $bookID)
    {
        // Step 1: Get user cart from the cart table
        $cart = $this->getUserCart();
        $data = [
            'cartID' => $cart->cartID,
            'bookID' => $bookID,
        ];

        $isItemInCart = $cartItem = $this->cartModel->isExistInCartItem($data);
        $bookQuantity = $this->bookModel->getSingleBook($bookID)->availablequantity; // quantity in database
        $subtotal = $this->calcSubtotal($quantity, $bookID);
        if (!$isItemInCart) {
            // check if theres sufficient available quantity
            if ($quantity <= $bookQuantity) {
                $data = [
                'cartID' => $cart->cartID,
                'bookID' => $bookID,
                'quantity' => $quantity,
                'subtotalPrice' => $subtotal,
            ];
                // create a cart item 
                $this->cartModel->createCartItem($data); 

                // add successful message to be printed in the view
                $msg = "Book Added ";
                $color = "success";
        
            }
            // no sufficient quantity
            else {
                if ($bookQuantity == 0) {
                    $msg = "Out of stock";   
                }
                else {
                    $msg = "Low stock! adding to cart failed";   
                }
                $color = "danger";
            }
        
        // item not in cart yet
        } else {
            // check if quantity is available
            if ($quantity <= $bookQuantity) {
                $newQuantity = $cartItem->quantity + $quantity;
                $this->editCartItemQuantity($newQuantity, $cartItem->cartitemID); // trying to add the new update number

                // add successful message to be printed in the view
                $msg = "Book Quantity Updated ";   
                $color = "success";
            }
            // cannot update the cart because of low stock
            else {
                if ($bookQuantity == 0) {
                    $msg = "Out of stock";   
                }
                else {
                    $msg = "Low stock! adding to cart failed";   
                }
                $color = "danger";
            }
        }
        header("Location: /eCommerceProject/BookStore/Book/bookdetail/$bookID?variable=$msg&newVariable=$color");
    }

    /*
     * Calculates subtotal of an item
     */
    public function calcSubtotal($quantity, $bookID)
    {
        $book = $this->bookModel->getSingleBook($bookID);
        return number_format($quantity * $book->retailprice, 2, '.', '');
    }

    /*
     * Retrieves all items of user in the database
     */
    public function getAllCartItems()
    {
        // call the getUserCart to create cart and a session
        $cart = $this->getUserCart();

        if (!empty($this->cartModel->getAllCartItems($cart->cartID))) {
            //model
            // will call the view to show all cartitems
            $items = $this->cartModel->getAllCartItems($cart->cartID);
            $price = $this->calcTotal($items);

            $data = [
                'items' => $items,
                'cartTotal' => $price[0],
                'gst' => $price[1],
                'qst' => $price[2],
                'salesTaxes' => $price[3],
                'finalPrice' => $price[4],
            ];
        } else {
            $data = [
                'msg' => 'There is no items in the cart',
            ];
        }
        $this->view('Cart/index', $data);

        return $data;
    }

    /*
     * Calculates the total price
     */
    public function calcTotal($cartItems)
    {
        // get all cart items of a specific user and get the subtotal of all of them
        $cart = $this->cartModel->getUserCart();
        $noTaxPrice = 0;
        foreach ($cartItems as $item) {
            $noTaxPrice += $item->cartitemprice;
        }

        $gst = number_format($noTaxPrice * 0.05, 2, '.', '');
        $qst = number_format($noTaxPrice * 0.09975, 2, '.', '');
        $salesTaxes = number_format($qst + $gst, 2, '.', '');
        $withTaxPrice = number_format($salesTaxes + $noTaxPrice, 2, '.', '');

        // set CART total to with tax price
        $data = [
            'withTaxPrice' => $withTaxPrice,
            'cartID' => $cart->cartID,
        ];
        $this->cartModel->updateCartTotalPrice($data);

        return [$noTaxPrice, $gst, $qst, $salesTaxes, $withTaxPrice];
    }

    /*
     * Removes a specific cart item based on the cart item ID
     */

    public function removeCartItem($cartitemID)
    {
        $this->cartModel->deleteCartItem($cartitemID);

        header('Location: /eCommerceProject/BookStore/Cart/index');
        // NOTE: put msg here to be sent to view
    }

    /*
     * Updates the cart item's quantity and recalculates the price too
     */
    public function editCartItemQuantity($quantity, $cartitemID)
    {
        // recalculate here the pricing
        $item = $this->cartModel->getCartItem($cartitemID);
        $cart = $this->getUserCart();
        $data = [
            'quantity' => $quantity,
            'cartitemID' => $cartitemID,
            'subtotal' => $this->calcSubtotal($quantity, $item->bookID),
        ];

        if ($this->cartModel->updateCartItemQuantity($data)) {
            $items = $this->cartModel->getAllCartItems($cart->cartID);
            $data = [
                'items' => $items,
            ];
            header('Location: /eCommerceProject/BookStore/Cart/index');
            $this->view('Cart/index', $data);
        }
        return;
    }

    /*
     * Displays the checkout page
     */
    public function checkout()
    {
        $cart = $this->getUserCart();
        $items = $this->cartModel->getAllCartItems($cart->cartID);

        if (!isset($_POST['orderButton'])) {
            // if (!empty($this->cartModel->getAllCartItems($cart->cartID))) {
            $price = $this->calcTotal($items);

            $data = [
                'items' => $items,
                'cartTotal' => $price[0],
                'gst' => $price[1],
                'qst' => $price[2],
                'salesTaxes' => $price[3],
                'finalPrice' => $price[4],
            ];
            $this->view('Cart/checkout', $data); // returns a $data
        } else {
            $province = $_POST['province'];
            $address = $_POST['address'];
            $postalcode = $_POST['postalcode'];
            $address = $address .", ". $province . ", " . $postalcode;
            $data = [
                'cartID' => $cart->cartID,
                'fname' => $_POST['firstname'],
                'lname' => $_POST['lastname'],
                'email' => $_POST['email'],
                'totalprice' => $cart->totalprice,
                'paymentMethod' => $_POST['paymentMethod'],
                'address' => $address,
                'cardname' => $_POST['cardname'],
                'cardnumber' => $_POST['cardnumber'],
                'expiration' => $_POST['expiration'],
                'cvv' => $_POST['cvv'],
                'items' => $items,
            ];

            $this->placeOrder($cart, $data);
        }
    }

    /*
     * Creates an order
     */
    public function placeOrder($cart, $data)
    {
        // create order
        if ($this->orderModel->createOrder($data)) {
            // update the book quantity
            $this->updateBookQuantity($data); // send the items to be updated

            // create a new cart
            $this->cartModel->createCart($_SESSION['user_id']);
            // show the success page
            $this->view('Order/success');
            echo '<meta http-equiv="Refresh" content="8; url=/EcommerceProject/Bookstore/User/index">';
        }
    }

    /*
     * Updates the book quantity
     */
    public function updateBookQuantity($data)
    {
        foreach ($data['items'] as $item) {
            $availableQty = $item->availablequantity; // available quantity of the book
            $cartItemQty = $item->quantity; // get quantity chosen by the user

            // subtract the bought quantity from teh available quantity
            $updatedQuantity = $availableQty - $cartItemQty;

            $data = [
                'bookID' => $item->bookID,
                'updatedQuantity' => $updatedQuantity,
            ];

            $this->bookModel->updateBookQuantity($data); // call method of bookModel
        }
    }
} ?>

