<?php
require_once 'connect.php';

class AntsController extends dbConnect
{
    public function actionAdd() {
        echo 'add';
    }
    public function actionShow() {
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