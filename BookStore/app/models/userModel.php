<?php
    class userModel {

        /*
         * Default construtor of the userModel class
         */
        public function __construct(){
            $this->db = new Model;
        }

        /*
         * Retrieves all users
         */
        public function getUsers(){
            $this->db->query("SELECT * FROM user where userID > 3");
            return $this->db->getResultSet();
        }

        /*
         * Retrives a specific user based on the user ID
         */
        public function getUser($userID){
            $this->db->query("SELECT * FROM user WHERE userID = :userID");
            $this->db->bind(':userID', $userID);
            return $this->db->getSingle();
        }

        /*
         * Updates a user profile of the user
         */
        public function editProfile($data) {
            $this->db->query("UPDATE user SET username = :username, email =:email, firstname=:firstname,
            lastname=:lastname, phone=:phone, address=:address, newsletter=:newsletter WHERE userID=:userID");
            $this->db->bind(':firstname',$data['fname']);
            $this->db->bind(':username',$data['username']);
            $this->db->bind(':lastname',$data['lname']);
            $this->db->bind(':phone',$data['phone']);
            $this->db->bind(':address',$data['address']);
            $this->db->bind(':newsletter',$data['newsletter']);
            $this->db->bind(':email',$data['email']);
            $this->db->bind(':userID',$data['userID']);
            return $this->db->execute();
        }

        /*
         * Updates user password
         */
        public function editPassword($data) {
            $this->db->query("UPDATE user SET password=:password WHERE userID=:userID");
            $this->db->bind(':password', $data['pass_hash']);
            $this->db->bind(':userID',$data['userID']);
            return $this->db->execute();
        }

        /*
         * Deletes a user from the database
         */
        public function delete($data){
            $this->db->query(
                "DELETE 
                FROM user
                WHERE userID = :userID");
            $this->db->bind('user_id', $data['ID']);

            return $this->db->execute();

        }
    }
?>