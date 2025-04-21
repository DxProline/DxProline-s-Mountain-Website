<?php
require_once 'secret.php';
// Database Connection
class Database {
    private $host = "localhost";
    private $db_name = "dlabal_eshop";
    private $username = "dlabal";
    private $password = DB_PASSWORD;
    public $conn;



    //zpracování chyb
    //implementováno v metodě getConnection() třídy Database.
    // Konkrétně se jedná o blok try-catch, který zachytává výjimky typu PDOException.
    // Pokud dojde k chybě při připojení k databázi, zobrazí se chybová zpráva pomocí echo.
    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>