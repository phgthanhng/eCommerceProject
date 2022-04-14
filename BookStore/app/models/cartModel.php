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
    }

?>