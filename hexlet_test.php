<?php
class dbConnect
{
    private $hostname = "localhost";

    private $port = "5432";

    private $database = "ants";

    private $username = "admin";

    private $password = "admin";

    public function __construct()
    {
        $conn = pg_connect("$this->hostname, $this->port, $this->username, $this->password, $this->database");
        var_dump($conn);
        return $conn;
    }
}