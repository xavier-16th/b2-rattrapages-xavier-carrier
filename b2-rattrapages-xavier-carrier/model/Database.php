<?php
class Database {
    private $host = "localhost";
    private $db_name = "mongoo";
    private $username = "root";
    private $password = "root";
    public $conn;

    public function getConnection() { // connect to the database by using PDO
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        } catch(PDOException $exception) {
            echo "Error : " . $exception->getMessage();// display if erro occurs
        }
        return $this->conn;
    }
}
?>