<?php
session_start();
$conn = mysqli_connect("localhost","root","","rcc");
$username=$_POST['username'];
$password=$_POST['password'];

$a = "SELECT username,password FROM signup WHERE username='$username' AND password='$password'";
$result1 = mysqli_query($conn,$a);
if(mysqli_num_rows($result1)==0)
{
	header("Location: /dbms project/login.html");
}
else
{
    $cookie_value = $username;
	$cookie_name = "abc";
	setcookie($cookie_name, $cookie_value, 0, "/");

	header("Location: /dbms project/profile.php");
}
mysqli_close($conn);
?>
