<?php
session_start();
 $con= mysqli_connect('localhost','root');
  if($con){
      
  }
  else{
      echo "No connection";
  }
   mysqli_select_db($con, 'minipro1');
  
 
 
if(isset($_POST['send'])){
    
    $name= $_POST['name'];
    $email_id =$_POST['email_id'];
    $subject =$_POST['subject'];
    $message =$_POST['message'];
    
    
    if(empty($name) || empty($email_id) || empty($subject) || empty($message))
    {
        header('location:contactUs.php?error');
    }
    else{
         $query2= "Insert into contactus(name,email_id,subject,message) values ('$name','$email_id','$subject','$message')";
       mysqli_query($con, $query2);
        
       }
}
else{
    header('location:contactUs.php');
}
?>