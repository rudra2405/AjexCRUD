<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "ajex2";

$conn = mysqli_connect($servername,$username,$password,$db_name);

$sql = "SELECT * FROM employee ORDER BY employee.id DESC";

$data = mysqli_query($conn,$sql);

$output = "";
$i = "1";
while($row = mysqli_fetch_assoc($data)){
   
    $output .= "<tr>
                      <td>".$i. "</td>
                      <td>" .$row['name']. "</td> 
                      <td>" .$row['email']. "</td>
                      <td>" .$row['mobileno']. "</td>
                      <td>" .$row['password']."</td> 
                      <td><button class='btn btn-success btnedit' update_id = '".$row['id']."'>Update</button></td> 
                      <td><button class='btn btn-danger' id='btndel' delete_id = '".$row['id']."'>Delete</td>
               </tr>";
    $i++;
}
echo $output;
?>
<script>
$('.btnedit').click(function(){
   console.log("btn clicked");
    var uid = $(this).attr('update_id');
    $.ajax({
        url:"update.php",
        type:"POST",
        dataType:"JSON",
        data:{id:uid},
        success:function(data){
         console.log(data);
         $("#stid").val(data.id)
         $("#nameid").val(data.name);
         $("#emailid").val(data.email);
         $("#mobileid").val(data.mobileno);
         $("#passwordid").val(data.password);
        }
    });
});

$("#table_body").on("click","#btndel",function(){
   console.log("btn clicked");
    var id = $(this).attr('delete_id');
    $.ajax({
        url:"delete.php",
        type:"POST",
        data:{id:id},
        success:function(data){
        $('#msg').html(data);
        load_data();
        }
    });
});


</script>