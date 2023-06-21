<?php
    class User{
        // Connection
        private $conn;
        // Table
        private $db_table = "users";
        // Columns
        public $id;
        public $name;
        public $temp;
        public $lightLevel;
        public $waterLevel;
        public $happyness;
        // Db connection
        public function __construct($db){
            $this->conn = $db;
        }
        // GET ALL
        public function getUsers(){
            $sqlQuery = "SELECT id, name, temp, lightLevel, waterLevel, happyness FROM " . $this->db_table . "";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->execute();
            return $stmt;
        }
        // CREATE
        public function createUser(){
            $sqlQuery = "INSERT INTO
                        ". $this->db_table ."
                    SET
                        name = :name, 
                        temp = :temp, 
                        lightLevel = :lightLevel, 
                        waterLevel = :waterLevel, 
                        happyness = :happyness";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            // sanitize
            $this->name=htmlspecialchars(strip_tags($this->name));
            $this->temp=htmlspecialchars(strip_tags($this->temp));
            $this->lightLevel=htmlspecialchars(strip_tags($this->lightLevel));
            $this->waterLevel=htmlspecialchars(strip_tags($this->waterLevel));
            $this->happyness=htmlspecialchars(strip_tags($this->happyness));
        
            // bind data
            $stmt->bindParam(":name", $this->name);
            $stmt->bindParam(":temp", $this->temp);
            $stmt->bindParam(":lightLevel", $this->lightLevel);
            $stmt->bindParam(":waterLevel", $this->waterLevel);
            $stmt->bindParam(":happyness", $this->happyness);
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }
        // READ single
        public function getSingleUser(){
            $sqlQuery = "SELECT
                        id, 
                        name, 
                        temp, 
                        lightLevel, 
                        waterLevel, 
                        happyness
                      FROM
                        ". $this->db_table ."
                    WHERE 
                       id = ?
                    LIMIT 0,1";
            $stmt = $this->conn->prepare($sqlQuery);
            $stmt->bindParam(1, $this->id);
            $stmt->execute();
            $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);
            
            $this->name = $dataRow['name'];
            $this->temp = $dataRow['temp'];
            $this->lightLevel = $dataRow['lightLevel'];
            $this->waterLevel = $dataRow['waterLevel'];
            $this->happyness = $dataRow['happyness'];
        }        
        // UPDATE
        public function updateUser(){
            $sqlQuery = "UPDATE
                        ". $this->db_table ."
                    SET
                        name = :name, 
                        temp = :temp, 
                        lightLevel = :lightLevel, 
                        waterLevel = :waterLevel, 
                        happyness = :happyness
                    WHERE 
                        id = :id";
        
            $stmt = $this->conn->prepare($sqlQuery);
        
            $this->name=htmlspecialchars(strip_tags($this->name));
            $this->temp=htmlspecialchars(strip_tags($this->temp));
            $this->lightLevel=htmlspecialchars(strip_tags($this->lightLevel));
            $this->waterLevel=htmlspecialchars(strip_tags($this->waterLevel));
            $this->happyness=htmlspecialchars(strip_tags($this->happyness));
            $this->id=htmlspecialchars(strip_tags($this->id));
        
            // bind data
            $stmt->bindParam(":name", $this->name);
            $stmt->bindParam(":temp", $this->temp);
            $stmt->bindParam(":lightLevel", $this->lightLevel);
            $stmt->bindParam(":waterLevel", $this->waterLevel);
            $stmt->bindParam(":happyness", $this->happyness);
            $stmt->bindParam(":id", $this->id);
        
            if($stmt->execute()){
               return true;
            }
            return false;
        }
        // DELETE
        function deleteUser(){
            $sqlQuery = "DELETE FROM " . $this->db_table . " WHERE id = ?";
            $stmt = $this->conn->prepare($sqlQuery);
        
            $this->id=htmlspecialchars(strip_tags($this->id));
        
            $stmt->bindParam(1, $this->id);
        
            if($stmt->execute()){
                return true;
            }
            return false;
        }
    }
?>