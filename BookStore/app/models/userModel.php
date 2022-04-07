<?php

    class userModel{
        public function __construct(){
            $this->db = new Model;
        }
        public function getUsers(){
            $this->db->query("SELECT * FROM user where userID > 3");
            return $this->db->getResultSet();
        }

        public function getUser($userID){
            $this->db->query("SELECT * FROM user WHERE userID = :userID");
            $this->db->bind(':userID',$userID);
            return $this->db->getSingle();
        }

        public function editProfile($data) {
            $this->db->query("UPDATE user SET email =:email, firstname=:firstname,
            lastname=:lastname, phone=:phone, address=:address, newsletter=:newsletter WHERE userID=:userID");
            $this->db->bind(':firstname',$data['fname']);
            $this->db->bind(':lastname',$data['lname']);
            $this->db->bind(':phone',$data['phone']);
            $this->db->bind(':address',$data['address']);
            $this->db->bind(':newsletter',$data['newsletter']);
            $this->db->bind(':email',$data['email']);
            $this->db->bind(':userID',$data['userID']);
            return $this->db->execute();
        }

        public function delete($data){
            $this->db->query("DELETE FROM users WHERE ID=:user_id");
            $this->db->bind('user_id',$data['ID']);

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }
    }

?>