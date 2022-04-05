<?php
    class loginModel{
        public function __construct(){
            $this->db = new Model;
        }

        /*
         * Gets a single customer 
         */
        public function getUser($username){
            $this->db->query("SELECT * FROM user WHERE username = :username");
            $this->db->bind(':username',$username);
            return $this->db->getSingle();
        }

      
        /*
         * Create a customer
         */ 
        public function createUser($data){
            $this->db->query("INSERT INTO user (username, password, firstname, lastname, phone, address, email, newsletter) values (:username, :password, :firstname, :lastname, :phone, :address, :email, :newsletter)");
            $this->db->bind(':username', $data['username']);
            $this->db->bind(':password', $data['pass_hash']);
            $this->db->bind(':firstname', $data['fname']);
            $this->db->bind(':lastname', $data['lname']);
            $this->db->bind(':phone', $data['phone']);
            $this->db->bind(':address', $data['address']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':newsletter', $data['newsletter']);

            return ($this->db->execute());
        }

    }
?>