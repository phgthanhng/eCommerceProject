<?php
    class reviewModel{
        public function __construct(){
            $this->db = new Model;
        }

        public function getAllReviews() {
            $this->db->query(
            "SELECT * FROM user
            WHERE userID = :userID"
            );
            $this->db->bind(':userID', $_SESSION['user_id']);

            return $this->db->execute();
        }
    }
?>