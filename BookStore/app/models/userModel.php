<?php

    class userModel{
        public function __construct(){
            $this->db = new Model;
        }
        public function getUsers(){
            $this->db->query("SELECT * FROM user");
            return $this->db->getResultSet();
        }

        public function getUser($userID){
            $this->db->query("SELECT * FROM user WHERE ID = :userID");
            $this->db->bind(':user_id',$userID);
            return $this->db->getSingle();
        }

        public function editProfile() {
            $this->db->query("UPDATE user SET firstname=:firstname,
            lastname=:lastname, phone=:phone, address=:address, newsletter=:newsletter WHERE userID=:userID");
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