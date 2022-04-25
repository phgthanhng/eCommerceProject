<?php
    class wishlistModel {
        public function __construct(){
            $this->db = new Model;
        }

        /*
         * Creates a user wishlist
         */
        public function createWishlist($userID) {
            $this->db->query(
                "INSERT INTO wishlist(userID)
                values(:userID");

            $this->db->bind(':userID', $userID);
            

            return $this->db->execute();
            
        }

         /*
         * Retrieves wishlist based on the userID
         */
        public function getUserWishlist() {
            $this->db->query(
                "SELECT * 
                FROM wishlist 
                WHERE userID = :userID;");

            $this->db->bind(':userID',  $_SESSION['user_id']);

            return $this->db->getSingle();
        }

        /*
         * Adds a wishlist item to wishlist
         */
        public function createWishlistItem($data) {
            $this->db->query(
                "INSERT INTO wishlistitem(wishlistID, bookID) 
                values (:wishlistID, :bookID)");

            $this->db->bind(':wishlistID', $data['wishlistID']);
            $this->db->bind(':bookID', $data['bookID']);

            return $this->db->execute();
        }

        /*
         * Retrieves all wishlist items based on the wishlist ID
         */
        public function getAllWishlistItems($wishlistID) {
            $this->db->query(
                "SELECT wishlist.wishlistID, 
                wishlistitem.wishlistitemID, wishlistitem.wishlistID, wishlistitem.bookID, 
                book.bookID, book.bookname, book.retailprice, book.image
                FROM wishlist
                JOIN wishlistitem
                ON wishlistitem.wishlistID = wishlist.wishlistID
                JOIN book
                ON wishlistitem.bookID = book.bookID
                WHERE wishlistitem.wishlistID = :wishlistID");

            $this->db->bind(':wishlistID', $wishlistID);

            return $this->db->getResultSet(); 
        }


        /*
         * Checks if a wishlistitem exist already in the wishlistitem table
         */
        public function isExistInWishlistItem($data) {
            $this->db->query(
                "SELECT * 
                FROM wishlistitem 
                WHERE (wishlistID = :wishlistID) 
                AND (bookID = :bookID)");
            
            $this->db->bind(':wishlistID', $data['wishlistID']);
            $this->db->bind(':bookID', $data['bookID']);

            return $this->db->getSingle();  // returns a wishlistitem object
        }

        /*
         * Deletes a wishlist item from a specific wishlist 
         */
        public function deleteWishlistItem($wishlistitemID) {
            $this->db->query(
                "DELETE 
                FROM wishlistitem 
                WHERE wishlistitemID=:wishlistitemID");

        $this->db->bind(':wishlistitemID', $wishlistitemID);

        return $this->db->execute();
        }

  
    }
?>