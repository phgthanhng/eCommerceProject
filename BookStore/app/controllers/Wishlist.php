<?php

class Wishlist extends Controller
{
    public function __construct()
    {
        $this->wishlishModel = $this->model('wishlishModel');  
        $this->bookModel = $this->model('bookModel');
    }

    public function index()
    {
        $this->getAllWishlishItems();
        // $this->view('Wishlist/index');
    }

    /*
     * Retrieve all wishlist items of user in the database
     */
    public function getAllWishlishItems() {
        // call the getUserWishlish to create wishlist and a session 
        $this->getUserWishlist();

        if (!empty($this->wishlistModel->getAllWishlistItems())) {
        // will call the view to show all wishlistitems
            $items = $this->wishlistModel->getAllWishlistItems(); 
            $data = [  
                'items' => $items
            ];  
        }else {
            $data = [
             'msg' => "There is no items in the wishlish"
            ];
        }
        $this->view('Wishlist/index', $data);
    }

    /*
     * Retrieve the user wishlist 
     */
    public function getUserWishlist() {
        // If there is no wishlist in the database then create a wishlist for the user
        if (!$this->wishlistModel->getUserWishlist()) { // if return is false then create a wishlist
            $this->createWishlist();  
        }
        // else
        //retrieve, createsession and return the existing wishlist
        $wishlist = $this->wishlistModel->getUserWishlist();
        $this->createSession($wishlist); // wishlist object for the user
        return $wishlist;
    }

    /*
     * Create a wishlist object
     */
    public function createWishlist() {
        $this->wishlistModel->createWishlist();
    }

    /*
     * Creates a session of the user wishlist
     */
    public function createSession($wishlist) {
        $_SESSION['wishlist_id'] = $wishlist->wishlistID;
    }


     /*
     * Adds an item to the wishlist
     */
    public function addWishlistItem($bookID) {
        // Step 1: Get user wishlist from the wishlist table
        $wishlist = $this->getUserWishlist();

        $isItemInWishlist = $this->wishlistModel->isExistInWishlistItem($bookID);
    
        if (!$isItemInWishlist) { 
            // Step 2: Add item to WishlistItems table (associate book item with $userID)
            // Create wishlistitem first
            $this->createWishlistItem($bookID);
            header('Location: /eCommerceProject/BookStore/Book/bookdetail/'. $bookID);
        }else {
            header('Location: /eCommerceProject/BookStore/wishlist/index');
        }
    }

    /*
     * Removes a specific wishlist item based on the wishlist item ID
     */ 
    public function removeWishlistItem($wishlistitemID) {
        $this->wishlistModel->deleteWishlistItem($wishlistitemID);

        header('Location: /eCommerceProject/BookStore/Wishlist/index');
        // NOTE: put msg here to be sent to view
    }

    /*
     * Create wishlistItem 
     */
    public function createWishlistItem($bookID) {

        $data = [
            'wishlistID' => $_SESSION['wishlist_id'],
            'bookID' => $bookID,
        ];
        
        return $this->wishlistModel->createWishlistItem($data); // pass the bookID 
    }


}
