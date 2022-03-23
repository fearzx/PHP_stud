<?php
include_once 'connect.php';
$conn_new = new DB_Connect();
$sql = "SELECT * FROM new_table";

$result = mysqli_query($conn_new->Connect(), $sql);
$array = $result->fetch_array();
var_dump ($array);
<table>
    <tr>
        <td>1</td>
        <td>1</td>
    </tr>
    <tr>
        <td>1</td>
        <td>1</td>
    </tr>
    <tr>
        <td>1</td>
        <td>1</td>
    </tr>
</table>