<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "ajex2";

$conn = mysqli_connect($servername,$username,$password,$db_name);

$id = $_POST['id'];

$sql = "DELETE FROM `employee` WHERE id = '$id'";
$data = mysqli_query($conn,$sql);

if($data){
    echo "data deleted successfully";
 }
 else{
    echo "not delete";
 }

?>