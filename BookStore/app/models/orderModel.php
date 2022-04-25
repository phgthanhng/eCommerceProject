<?php
    class orderModel{
        public function __construct()
        {
            $this->db = new Model;
        }

        /*
         * Creates a new order in the database 
         */
        public function createOrder($data) {
            $this->db->query(
                "INSERT INTO ordertbl(userID, cartID, firstname, lastname, email, orderdate, orderstatus, 
                shippingaddress, totalprice, paymentmethod, cardname, cardnumber, cardcvv, expiration)
                VALUES (:userID, :cartID, :firstname, :lastname, :email, now(), :orderstatus, 
                :shippingaddress, :totalprice, :paymentmethod, :cardname, :cardnumber, :cardcvv, :expiration)");

            $this->db->bind(':userID', $_SESSION['user_id']);
            $this->db->bind(':cartID', $data['cartID']);
            $this->db->bind(':firstname', $data['fname']);
            $this->db->bind(':lastname', $data['lname']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':orderstatus', 'unshipped');
            $this->db->bind(':shippingaddress', $data['address']);
            $this->db->bind(':totalprice', $data['totalprice']);
            $this->db->bind(':paymentmethod', $data['paymentMethod']);
            $this->db->bind(':cardname', $data['cardname']);
            $this->db->bind(':cardnumber', $data['cardnumber']);
            $this->db->bind(':cardcvv', $data['cvv']);
            $this->db->bind(':expiration', $data['expiration']);

            return $this->db->execute();
        }

        // /*
        //  * Creates a new order in the database 
        //  */
        // public function createOrder($data) {
        //     $this->db->query(
        //         "INSERT INTO order (userID, cartID, orderdate, orderstatus, shippingaddress, total price, paymentmethod)
        //         values (:userID, :cartID, now(), :orderstatus, :shippingaddress, :total price, :paymentmethod)");

        //     $this->db->bind(':userID', $_SESSION['user_id']);
        //     $this->db->bind(':cartID', $_SESSION['cart_id']);
        //     $this->db->bind(':orderstatus', "unshipped");
        //     $this->db->bind(':shippingaddress', $data['shippingaddress']);
        //     $this->db->bind(':total price', $data['totalprice']);
        //     $this->db->bind(':paymentmethod', $data['paymentmethod']);

        //     return $this->db->execute();
        // }

        /*
         * Cancels the order by updating the order status to canceled
         */
        public function cancelOrder($orderID) {
            $this->db->query(
                "UPDATE order 
                SET orderstatus=:orderstatus
                WHERE orderID=:orderID");
                
            $this->db->bind(':orderstatus', "cancelled");
            $this->db->bind(':orderID', $data['orderID']);

            return $this->db->execute();
        }

        /*
         * Deletes an order
         */
        public function deleteOrder($orderID) {
            $this->db->query(
                "DELETE 
                FROM order 
                WHERE orderID=:orderID");
            $this->db->bind(':orderID', $orderID);

            return $this->db->execute();
        }

        /*
         * Retrieves a single order based on the orderID
         */
        public function getSingleOrder($orderID) {
            $this->db->query(
                "SELECT * 
                FROM order 
                WHERE orderID = :orderID");

            $this->db->bind(':orderID', $orderID);

            return $this->db->getSingle();
        }

        /*
         * Retrives all orders of a specific user
         */
        public function getAllUserOrders() {
            $this->db->query(
                    "SELECT * 
                    FROM order 
                    WHERE userID = :userID");
            $this->db->bind(':userID', $_SESSION['user_id']);
            return $this->db->getResultSet();
        }

        /*
         * Retrieves all orders (for admin usage)
         */
        public function getAllOrders() {
            $this->db->query(
                "SELECT * 
                FROM book");
            return $this->db->getResultSet();
        }

        /*
         * Updates order status (for admin usage)
         */
        public function updateOrderStatus($data) {
            $this->db->query(
                "UPDATE order 
                SET orderstatus=:orderstatus
                WHERE orderID=:orderID");
            $this->db->bind(':orderstatus', $data['orderstatus']);
            $this->db->bind(':orderID', $data['orderID']);

            return $this->db->execute();
        }
    }

?>