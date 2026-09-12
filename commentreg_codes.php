<?php
include('connection.php');


$comment =$_POST['comment'];


 
 

$save=mysql_query("INSERT INTO comment(comment,  date)
  VALUES ('$comment',now())");
  if(!$save)
  {
    die(mysql_error());
    }
  echo"<script>alert('Thanks! You have login successfully! ')</script>";
  echo"<script>window.open('home.php','_self')</script>";
  exit();
?>