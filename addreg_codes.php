<?php
include('connection.php');


$username =$_POST['username'];
$password =$_POST['password'];

 
 

$save=mysql_query("INSERT INTO user_db (username, password)
  VALUES ('$username','$password',now())");
  if(!$save)
  {
    die(mysql_error());
    }
  echo"<script>alert('Thanks! You have registered successfully! ')</script>";
  echo"<script>window.open(admin page.php','_self')</script>";
  exit();
?>