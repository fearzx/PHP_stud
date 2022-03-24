<?php
class dbConnect {
    private $hostname = "mysql";
    private $username = "root";
    private $password = "password";
    private $database = "Ant_Store";

    protected function connect()
    {
        $conn = new mysqli($this->hostname, $this->username, $this->password, $this->database);
        return $conn;
    }
}