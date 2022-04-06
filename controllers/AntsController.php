<?php
include 'connect.php';

class AntsController extends dbConnect
{
    public function actionAdd() {
        if (empty($_POST['username']) or (empty($_POST['email']))) exit("Поле 'Имя' и 'email' не заполнены");
        else {
            $queryAdd = "INSERT INTO `Ant_Store`.`users` (`username`, `email`) VALUES ('{$_POST['username']}', '{$_POST['email']}');";
            $this->connect()->query($queryAdd);
        }
    }
    public function actionIndex() {
        return;
    }
    public function actionShow() {
        $queryShow = "SELECT * FROM users";
        $resultShow = $this->connect()->query($queryShow);
        $numRows = $resultShow->num_rows;
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