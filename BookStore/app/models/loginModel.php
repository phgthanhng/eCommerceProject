<?php
    class loginModel{
        public function __construct(){
            $this->db = new Model;
        }

        /*
         * Gets a single customer 
         */
        public function getCustomer($username){
            $this->db->query("SELECT * FROM customer WHERE username = :username");
            $this->db->bind(':username',$username);
            return $this->db->getSingle();
        }

        /*
         * Create a customer
         */ 
        public function createCustomer($data){
            $this->db->query("INSERT INTO customer (username, password, firstname, lastname, phone, address, email) values (:username, :password, :firstname, :lastname, :phone, :address, :email)");
            $this->db->bind(':username', $data['username']);
            $this->db->bind(':password', $data['pass_hash']);
            $this->db->bind(':firstname', $data['fname']);
            $this->db->bind(':lastname', $data['lname']);
            $this->db->bind(':phone', $data['phone']);
            $this->db->bind(':address', $data['address']);
            $this->db->bind(':email', $data['email']);

            return ($this->db->execute());
        }

    }
?>