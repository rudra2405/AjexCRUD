<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "ajex2";

$conn = mysqli_connect($servername,$username,$password,$db_name);

$sql = "SELECT * FROM employee where id = '".$_POST['id']."' ";

$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);

echo json_encode($row);

?>
