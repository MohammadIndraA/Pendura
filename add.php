<?php
    class Nodemcu_log{

        // Connection
        private $database;

        // Table
        private $db_table = "mq";

        // Columns
        public $id;
        public $mq135;
        // public $kelembaban;
        public $created_at;

        // Db connection
        public function __construct($db){
            $this->database = $db;
        }

        // CREATE
        public function createLogData(){
            $sqlQuery = "INSERT INTO
                        ". $this->db_table ."
                    SET
                        mq135 = :mq135";
            $stmt = $this->database->prepare($sqlQuery);
        
            // sanitize
            $this->mq135=htmlspecialchars(strip_tags($this->mq135));
            // $this->kelembaban=htmlspecialchars(strip_tags($this->kelembaban));
        
            // bind data
            $stmt->bindParam(":mq135", $this->mq135);
            // $stmt->bindParam(":kelembaban", $this->kelembaban);
            if($stmt->execute()){
               return true;
            }
            return false;
        }
    }
?>