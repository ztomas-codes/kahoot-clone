<?php

namespace Database;

use PDO;
use PDOException;

class Database
{
    private $host;
    private $username;

    /**
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return PDO
     */
    public function getConn()
    {
        return $this->conn;
    }
    private $password;
    private $conn;

    public function __construct($username, $password, $host )
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=kahoot", $this->username, $this->password);
            // set the PDO error mode to exception
            $this->getConn()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

}
