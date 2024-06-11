<?php
// Kết nối database
class Database {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "chuong_store";
    private $conn;
    private $stmt;

    public function __construct() {
        try {
            $this->conn = new PDO(
                "mysql:host={$this->servername};dbname={$this->dbname};charset=utf8",
                $this->username, $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function getAll($sql) {
        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Query failed: " . $e->getMessage();
            return false;
        }
    }
    function query($sql, $param = []){
        $this->stmt = $this->conn->prepare($sql);
        $this->stmt->execute($param);
        return $this->stmt;
    }
    function getOne($sql){
        $statement = $this->query($sql);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }
    function insert($sql, $param){
        $this->query($sql, $param);
        return $this->conn->lastInsertId();
    }

    function delete($sql, $param){
        $this->query($sql, $param);
    }

    function update($sql, $param){
        $this->query($sql, $param);
    }
}
?>
