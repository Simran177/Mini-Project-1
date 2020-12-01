<?php
session_start();
header('location:login.php');
 $con= mysqli_connect('localhost','root');
  if($con){
      echo "connection successful";
  }
  else{
      echo "No connection";
  }
   mysqli_select_db($con, 'minipro1');
  
   $email_id= $_POST['email_id'];
   $password= $_POST['password'];
   
   $query = "Select * from signin where email_id='$email_id' && password='$password'";
   $result= mysqli_query($con, $query);
   $num= mysqli_num_rows($result);
    
   if($num>0){
    header('location:signup.php?error');
}
else{
    $query2= "Insert into signin(email_id,password) values ('$email_id','$password')";
    mysqli_query($con, $query2);
    header('location:login.php');
}
?>