<?php
Class DB_Connect {
    public $hostname = "mysql";
    public $username = "root";
    public $password = "password";
    public $database = "Ant_Store";
    public function Connect()  {
        return mysqli_connect($this->hostname,$this->username, $this->password, $this->database);
        }
    }
$conn_new = new DB_Connect();
$sql = "SELECT * FROM new_table";

$result = mysqli_query($conn_new->Connect(), $sql);
$row = $result->fetch_array();
foreach ($row as $ants) {
    echo $ants.'<br>';
    }
