<?php

class Wishlist extends Controller
{
    /*
     * Default wishlist constructor
     */
    public function __construct()
    {
        $this->wishlistModel = $this->model('wishlistModel');
        $this->bookModel = $this->model('bookModel');
    }

    /*
     * Retrieves all the wishlist items
     */ 
    public function index()
    {
        $this->getAllWishlistItems();
    }

    /*
     * Retrieves and displays all wishlist items
     */
    public function getAllWishlistItems()
    {
        $wishlist = $this->getUserWishlist();

        if (!empty($this->wishlistModel->getAllWishlistItems($wishlist->wishlistID))) { //model
            // will call the view to show all wishlistitems
            $items = $this->wishlistModel->getAllWishlistItems($wishlist->wishlistID);
            $data = [
                'items' => $items
            ];
        } else {
            $data = [
                'msg' => "There is no items in the wishlist"
            ];
        }
        $this->view('Wishlist/index', $data);

        return $data;
    }

    /*
     * Retrieves the user wishlist 
     */
    public function getUserWishlist()
    {
        // If there is no wishlist in the database then create a wishlist for the user
        if (!$this->wishlistModel->getUserWishlist()) { // if return is false then create a wishlist
            $this->createWishlist($_SESSION['user_id']);
        }
        $wishlist = $this->wishlistModel->getUserWishlist();
        return $wishlist;
    }

    /*
     * Create a wishlist object
     */
    public function createWishlist($userID)
    {
        $this->wishlistModel->createWishlist($userID);
    }


    /*
     * add a wishlist item
     */
    public function addWishlistItem($bookID)
    {
        // Step 1: Get user wishlist from the wishlist table
        $wishlist = $this->getUserWishlist();
        $data = [
            'wishlistID' => $wishlist->wishlistID,
            'bookID' => $bookID
        ];
        $isItemInWishlist = $this->wishlistModel->isExistInWishlistItem($data);
        if (!$isItemInWishlist) {
            // Step 2: Add item to wishlistItems table (associate book item with $userID)
            // Create wishlistitem first
            $this->createWishlistItem($wishlist->wishlistID, $bookID);
            $msg = "Book added in the wishlist";
            $color = "success";
            header("Location: /eCommerceProject/BookStore/Book/bookdetail/$bookID?variable=$msg&newVariable=$color");
        } else {
            $msg = "Book already in the wishlist";
            $color = "warning";
            header("Location: /eCommerceProject/BookStore/Book/bookdetail/$bookID?variable=$msg&newVariable=$color");
        }
    }

    
    /*
     * Create wishlistitem 
     */
    public function createWishlistItem($wishlistID, $bookID) {
      
        $data = [
            'wishlistID' => $wishlistID,
            'bookID' => $bookID
        ];
        
        return $this->wishlistModel->createwishlistItem($data); // pass the bookID 
    }

    /*
     * Removes a specific item from the wishlist iten
     */
    public function removeWishlistItem($wishlist_itemID)
    {
        $this->wishlistModel->deleteWishlistItem($wishlist_itemID);

        header('Location: /eCommerceProject/BookStore/Wishlist/index');
        // NOTE: put msg here to be sent to view
    }
}
