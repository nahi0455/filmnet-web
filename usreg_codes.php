<?php
include('connection.php');


$email =$_POST['email'];
$password =$_POST['password'];

 
 

$save=mysql_query("INSERT INTO admin(email, password, date)
  VALUES ('$email','$password',now())");
  if(!$save)
  {
    die(mysql_error());
    }
  echo"<script>alert('Thanks! You have registered successfully! ')</script>";
  echo"<script>window.open('ushome.php','_self')</script>";
  exit();
?>