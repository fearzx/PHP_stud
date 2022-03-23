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
class myQuery extends dbConnect {
    public function getAllUsers() {
        $sql = "SELECT * FROM users";
        $result = $this->connect()->query($sql);
        $numRows = $result->num_rows;
        if ($numRows > 0) {
            while ($row = $result->fetch_assoc()) {
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
//
$query = new myQuery;
$query->getAllUsers();
echo
'<html>
<form action="index.php" method="post">
    <input type="submit" value="Вернуться">
</form>
</html>';