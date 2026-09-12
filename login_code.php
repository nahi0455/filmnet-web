<?php
Session_start();
$username=$_POST['username'];
$password=$_POST['password'];

if($username&&$password)
{
$connect=mysql_connect("localhost","root","")or die("couldn't connect!");
mysql_select_db("test")or die("couldn't find database");
$query=mysql_query("SELECT*FROM filmnet WHERE username='$username'");
$numrows=mysql_num_rows($query);
if($numrows!=0)
{
while($row=mysql_fetch_assoc($query))
{
$dbusername=$row['username'];
$dbpassword=$row['password'];
}
if($username==$dbusername&&$password==$dbpassword)
{
header('location:home_modern.php');
$_SESSION['username']=$username;
}
else{
echo"incorrect password";
}
}
else{
echo"sorry that user doesn't exist";
}
}
else
echo "you entered incorrect passowrd<br> <b>Warnning:</b><br> please admin dont forget your user name as well as password since you are handling big system
!";
echo "<br>";
echo "<br>";
echo '<a href="reg_code.php"/>BACK TO LOGIN</a>';

?>