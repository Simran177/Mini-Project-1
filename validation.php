<?php
session_start();
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
    $_SESSION['username']=$email_id;  //storing user_id in a variable
    header('location:homepage.php');
}
else{
     header('location:login.php?error');
}
?>