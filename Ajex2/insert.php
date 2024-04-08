<?php
// include 'connection.php';
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "ajex2";

$conn = mysqli_connect($servername,$username,$password,$db_name);

// $id = $_POST['id']
$name = $_POST['name'];
$email = $_POST['email'];
$mobileno = $_POST['mobileno'];
$password = $_POST['password'];

if(isset($_POST['update_id']) && $_POST['update_id'] !== "")
{
  $sql = "UPDATE `employee` SET `name`= '$name',`email`='$email',`mobileno` = '$mobileno',`password`='$password' WHERE id = '".$_POST['update_id']."' ";
  $result = mysqli_query($conn,$sql);
  if($result){
    echo "Data Has Been Updated";
  }
  else{
    echo "Error in Update data";
  }
}
else{

$sql = "INSERT INTO `employee`(`name`, `email`, `mobileno`, `password`) VALUES ('$name','$email','$mobileno','$password')";

$data = mysqli_query($conn,$sql);

if($data){
    echo "data added successfully";
}
else{
    echo "data not added";
}
 }
?>