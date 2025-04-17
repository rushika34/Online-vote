<?php
  include("connect.php");
  $name = $_POST['name'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];
  $role = $_POST['role'];
  $address = $_POST['address'];
  

 
  
    
     $insert = mysqli_query($connect,"INSERT INTO user(name,mobile,password,address,role,status,votes) 
     VALUES ('$name','$mobile','$password','$address','$role',0,0)");
     if($insert)
     {
        echo '
    <script>
       alert("Registration Successfull!");
       window.location = "../";
    </script>
   ';
     }
     else
     {
        echo '
    <script>
       alert("Some error occured!");
       window.location = "../routes/register.html";
    </script>
   ';
     }
  
?>