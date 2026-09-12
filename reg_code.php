<?php
include('connection.php');

$fname =$_POST['fname'];
$lname =$_POST['lname'];
$username =$_POST['username'];
$password =$_POST['password'];
$email =$_POST['email'];

 
 

$save=mysql_query("INSERT INTO filmnet(fname, lname, username, password,email, date)
  VALUES ('$fname','$lname','$username','$password','$email',now())");
  if(!$save)
  {
    die(mysql_error());
    }
  echo"<script>alert('Thanks! You have registered successfully! ')</script>";
  echo"<script>window.open('login_page_modern.php','_self')</script>";
  exit();
?>