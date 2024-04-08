$(document).ready(function(){
 
load_data();

$("#btnadd").click(function(){
     console.log("btn is clicked"); 

  let id = $("#stid").val();
  let nm = $('#nameid').val();
  let em = $('#emailid').val();
  let mn = $('#mobileid').val();
//   let st = $('#statusid').val();
  let ps = $('#passwordid').val();

  let mydata = {update_id:id,name:nm,email:em,mobileno:mn,password:ps};

  $.ajax({
     url:'insert.php',
     type:'post',
     data:mydata,
     success:function(data){
     $("#msg").html(data);
     load_data();
     }
  });
  $("#form")[0].reset();

});
    
});

function load_data(){
$.ajax({
       url:'load.php',
       type:'post',
       success:function(data){
          // console.log(data);
       $("#table_body").html(data);
      }
    });
}

$("#search").on("keyup",function(){
     var search_id = $(this).val();
     $.ajax({
        url:"search.php",
        type:"post",
        data:{search_data:search_id},
        success:function(data){
         $("#table_body").html(data);
        }
     })
});