<?php

class Wishlist extends Controller
{
    
    public function __construct()
    {
        $this->wishlistModel = $this->model('wishlistModel');
    }

    public function index()
    {
        $this->view('Wishlist/index');
        getAllWishlistItems();  
    }

    public function createWishlist() {
        
    }

    /*
     * Retrieves and displays all wishlist items
     */
    public function getAllWishlistItems() {
        // use $_SESSION['user_id] so you dont need to pass it as parameter when retrieving 
        $this->wishlistModel->getWishlistItem();
        // 
    }

    /*
     * Creates a wishlist item
     */
    public function addWishlistItem($bookID) {
        echo "Wishlist added message test";
        //header('Location: /eCommerceProject/BookStore/Book/bookdetail/'. $bookID);  // redirects to the same page
    }

    /*
     * Removes a specific item from the wishlist
     */
    public function deleteWishlistItem($bookID) {

    }


    public function createWishlistSession() {

    }
    
}