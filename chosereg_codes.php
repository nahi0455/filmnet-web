<?php
include('connection.php');


$movie=$_POST['movie'];
$name=$_POST['name'];
$usernametelegram=$_POST['usernametelegram'];
$password=$_POST['password'];
$File=$_POST['File'];


$save=mysql_query("INSERT INTO pyment(movie,name,usernametelegram, password,File,  date)
  VALUES ('$movie','$name','$usernametelegram','$password','$File',now())");
  if(!$save)
  {
    die(mysql_error());
    }
  echo"<script>alert('Thanks! You have sebmite choise successfully! ')</script>";
  echo"<script>window.open('home.php','_self')</script>";
  exit();
?>