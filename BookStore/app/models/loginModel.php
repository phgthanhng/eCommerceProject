<?php

    class loginModel{
        public function __construct(){
            $this->db = new Model;
        }
    
        public function getUser($username){
            $this->db->query("SELECT * FROM credentials WHERE username = :username");
            $this->db->bind(':username',$username);
            return $this->db->getSingle();
        }

        public function createUser($data){
            $this->db->query("INSERT INTO credentials (username, pass_hash) values (:username, :pass_hash)");
            $this->db->bind(':username', $data['username']);
            $this->db->bind(':pass_hash', $data['pass_hash']);


            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }

        public function updateUser($data){
            $this->db->query("UPDATE credentials SET secret = :secret WHERE id = :userid");
            $this->db->bind(':userid', $_SESSION['user_id']);
            $this->db->bind(':secret', $data['secret']);


            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }


    }
?>