<?php

class Dbconnect {

    private $server_name = "localhost";
    private $user_name = "root";
    private $password = "";
    private $db_name = "ecommerceapp";
    private $conn = null;

    public function connect()
    {
        $this->conn = new mysqli($this->server_name, $this->user_name, $this->password, $this->db_name);
        if ($this->conn->connect_error) {
            die("Connection failed: ". $this->conn->connect_error);
        } 
        return $this->conn;

    }
}

