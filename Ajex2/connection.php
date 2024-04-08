<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "ajex2";

$conn = mysqli_connect($servername,$username,$password,$db_name);


if(!$conn){
    echo "database is not connected";
}
else{
    echo "database is connected";
}
