<?php
    class wishlistModel{
        public function __construct()
        {
            $this->db = new Model;
        }

        /*
         * Creates a wishlish for a user
         */
        public function createWishlish() {
            $this->db->query("INSERT INTO wishlish(userID) values(:userID)");
            $this->db->bind(':userID', $_SESSION['user_id']);
           
            return ($this->db->execute());
        }

        /*
         * Retrieves wishlish based on the userID
         */
        public function getUserWishlish() {
            $this->db->query("SELECT * FROM wishlish WHERE userID = :userID");
            $this->db->bind(':userID',  $_SESSION['user_id']);
            return $this->db->getSingle();
        }

        /*
         * Create a wishlish item
         */
        public function createWishlishItem($data) {
            $this->db->query("INSERT INTO wishlishitem(wishlishID, bookID) 
            values (:wishlishID, :bookID)");

            $this->db->bind(':wishlishID', $_SESSION['wishlish_id']);
            $this->db->bind(':bookID', $data['bookID']);
         
            return $this->db->execute();
        }

        /*
         * Retrieves all wishlish items based on the wishlish ID
         */
        public function getAllWishlishItems() {
            $this->db->query(
                    "SELECT wishlish.wishlishID, 
                    wishlishitem.wishlishitemID, wishlishitem.wishlishID, wishlishitem.bookID, 
                    book.bookID, book.bookname, book.retailprice, book.image
                    FROM wishlish
                    JOIN wishlishitem
                    ON wishlishitem.wishlishID = wishlish.wishlishID
                    JOIN book
                    ON wishlishitem.bookID = book.bookID
                    WHERE wishlishitem.wishlishID = :wishlishID");

            $this->db->bind(':wishlishID', $_SESSION['wishlish_id']);
            return $this->db->getResultSet(); 
        }

        /*
         * Checks if a wishlishitem exist already in the wishlishitem table
         */
        public function isExistInWishlishItem($bookID) {
            $this->db->query(
                "SELECT * 
                FROM wishlishitem 
                WHERE (wishlishID = :wishlishID) 
                AND (bookID = :bookID)");
            
            $this->db->bind(':wishlishID', $_SESSION['wishlish_id']);
            $this->db->bind(':bookID', $bookID);
            return $this->db->getSingle();  // returns a wishlishitem object
        }

      

        /*
         * Get a specific wishlishitem based on the wishlishitemid
         */
        public function getWishlishItem($wishlishItemID) {
            $this->db->query("SELECT * FROM wishlishitem WHERE wishlishitemID = :wishlishitemID");
            $this->db->bind(':wishlishitemID', $wishlishItemID);
        
            return $this->db->getSingle();
        }

       

        /*
         * Deletes a wishlish item from the wishlish
         */
        public function deleteWishlishItem($wishlishitemID) {
            $this->db->query(
                    "DELETE 
                    FROM wishlishitem 
                    WHERE wishlishitemID=:wishlishitemID");
            $this->db->bind(':wishlishitemID', $wishlishitemID);
            return $this->db->execute();
        }

    }

?>