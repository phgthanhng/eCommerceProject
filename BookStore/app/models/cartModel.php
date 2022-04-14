<?php
    class cartModel{
        public function __construct()
        {
            $this->db = new Model;
        }

        /*
         * Creates a cart for a user
         */
        public function createCart() {
            $this->db->query("INSERT INTO cart(userID, totalprice) values(:userID, :totalprice)");
            $this->db->bind(':userID', $_SESSION['user_id']);
            $this->db->bind(':totalprice', 0);

            return ($this->db->execute());
        }

        /*
         * Retrieves cart based on the userID
         */
        public function getUserCart() {
            $this->db->query("SELECT * FROM cart WHERE userID = :userID");
            $this->db->bind(':userID',  $_SESSION['user_id']);
            return $this->db->getSingle();
        }

        /*
         * Create a cart item
         */
        public function createCartItem($data) {
            $this->db->query("INSERT INTO cartitem(cartID, bookID, quantity, cartitemprice) 
            values (:cartID, :bookID, :quantity, :cartitemprice)");

            $this->db->bind(':cartID', $_SESSION['cart_id']);
            $this->db->bind(':bookID', $data['bookID']);
            $this->db->bind(':quantity', $data['quantity']);
            $this->db->bind(':cartitemprice', $data['subtotalPrice']);

            return ($this->db->execute());
        }

        /*
         * Retrieves all cart items based on the cart ID
         */
        public function getAllCartItem() {
            $this->db->query("SELECT * FROM cartitem WHERE cartID = :cartID");
            $this->db->bind(':cartID', $_SESSION['cart_id']);
            return $this->db->getResultSet(); 
        }
    }

?>