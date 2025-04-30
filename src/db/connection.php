<?php
class Database
{
    private $host = "db"; // ganti dari 127.0.0.1 jadi nama servicenya
    private $username = "root";
    private $password = "root";
    private $db = "acs";
    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db);
        if ($this->conn->connect_error) {
            die("Koneksi gagal: " . $this->conn->connect_error);
        }
    }
}
