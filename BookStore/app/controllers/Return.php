<?php
    class returnModel{
        public function __construct()
        {
            $this->db = new Model;
        }

        /*
         * Creates a new order in the database 
         */
        public function createReturnedOrder($data) {
            $this->db->query(
                "INSERT INTO return(orderID, reason, returndate, returnstatus)
                VALUES (:orderID, :reason, now(), :returnstatus");

            $this->db->bind(':orderID', $data['orderID']);
            $this->db->bind(':reason', $data['reason']);
            $this->db->bind(':returnstatus', $data['returnstatus']);

            return $this->db->execute();
        }
    }
