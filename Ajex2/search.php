<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "ajex2";

$conn = mysqli_connect($servername,$username,$password,$db_name);

$searchText = $_POST['search_data'];
$sql = "SELECT * FROM `employee` WHERE `name` LIKE '%".$searchText."%' OR  `email` LIKE '%".$searchText."%' ORDER BY id DESC";
$data = mysqli_query($conn,$sql);
if(mysqli_num_rows($data)==0){
    echo "<tr><td colspan=6>No data available for that name specified</td></tr>";
}
else{
    $output = "";
    while($row = mysqli_fetch_assoc($data)){
        $output .= "<tr><td>".$row['id']. "</td><td>" .$row['name']. "</td> <td>" .$row['email']. "</td><td>" .$row['mobileno']. "</td><td>" .$row['password']."</td</tr>";
    }
    echo $output;
}
?>