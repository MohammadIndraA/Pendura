<?php
    class Nodemcu_log{

        // Connection
        private $conn;

        // Table
        private $db_table = "udaras";

        // Columns
        public $id;
        public $mq_135;
        public $mq_09;
        public $mq_07;
        public $created_at;

        // Db connection
        public function __construct($db){
            $this->conn = $db;
        }

        // CREATE
        public function createLogData(){
            $sqlQuery = "INSERT INTO
                        ". $this->db_table ."
                    SET
                    mq_135 = :mq_135, 
                    mq_07 = :mq_07, 
                    mq_09 = :mq_09";
            $stmt = $this->conn->prepare($sqlQuery);
        
            // sanitize
            $this->mq_135=htmlspecialchars(strip_tags($this->mq_135));
            $this->mq_09=htmlspecialchars(strip_tags($this->mq_09));
            $this->mq_07=htmlspecialchars(strip_tags($this->mq_07));
        
            // bind data
            $stmt->bindParam(":mq_135", $this->mq_135);
            $stmt->bindParam(":mq_09", $this->mq_09);
            $stmt->bindParam(":mq_07", $this->mq_07);
            if($stmt->execute()){
               return true;
            }
            return false;
        }
    }
?>
