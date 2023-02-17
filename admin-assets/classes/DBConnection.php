<?php
class DBConnection{
    
    private $servername = "localhost";
    private $username = "root";
    private $password = "Aclan*2020";
    private $db_name = "pess_db";
    
    public $conn;
    
    public function __construct(){
        
        if (!isset($this->conn)) {
            
            $this->conn = new mysqli($this->servername,$this->username,$this->password,$this->db_name) or die("Could not connect to mysql").mysqli_error($conn);
        }
        
    }
    public function __destruct(){
        $this->conn->close();
    }
}

?>