<?php

class dbConnect
{
    private $hostname = "localhost";

    private $port = "5432";

    private $database = "ants";

    private $username = "admin";

    private $password = "admin";

    public function connect()
    {
        $conn = pg_connect("$this->hostname, $this->port, $this->username, $this->password, $this->database");
        if ($conn) {
            echo "connected";
        }

        return $conn;
    }

    public function actionShow()
    {
        $queryShow  = "SELECT * FROM users";
        $resultShow = pg_query($this->connect(), $queryShow);
        $numRows    = $resultShow->num_rows;
        if ($numRows > 0) {
            while ($row = $resultShow->fetch_assoc()) {
                $data[] = $row;
            }
        }
        echo '<table>';
        foreach ($data as $key) {
            echo '<tr>';
            echo '<td>';
            echo $key['user_id'];
            echo '</td>';
            echo '<td>';
            echo $key['username'];
            echo '</td>';
            echo '<td>';
            echo $key['email'];
            echo '</td>';
            echo '<td>';
            echo $key['Surname'];
            echo '</td>';
            echo '<td>';
            echo $key['name'];
            echo '</td>';
            echo '</tr>';
        }
        echo '</table>';
    }
}

$show = new dbConnect();
$show->connect();