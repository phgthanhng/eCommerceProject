<?php
    class loginModel{
        public function __construct(){
            $this->db = new Model;
        }

        /*
         * Retrieves a specific user based on the username
         */
        public function getUser($username){
            $this->db->query(
                "SELECT * 
                FROM user 
                WHERE username = :username");

            $this->db->bind(':username', $username);
            
            return $this->db->getSingle();
        }

        /*
         * Creates a user
         */ 
        public function createUser($data){
            $this->db->query(
                "INSERT INTO user (username, password, firstname, lastname, phone, address, email, newsletter) 
                values (:username, :password, :firstname, :lastname, :phone, :address, :email, :newsletter)");

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

        /*
         * Updates a user secret
         */
        public function updateUser($data){
            $this->db->query("UPDATE user SET secret = :secret WHERE userID = :userid");
            $this->db->bind(':userid', $_SESSION['user_id']);
            $this->db->bind(':secret', $data['secret']);

           return $this->db->execute();
        }

    }
?>