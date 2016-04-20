<?php 
	$conn = mysqli_connect("localhost","root","","rcc");
	$DATA=$_POST['share'];
	$DOP=date("Y-m-d");
	$T=date("h:i:sa");
	$cookie_name = "abc";
	if(!isset($_COOKIE[$cookie_name])) 
	{
		echo "cookie not set error!";
    	echo "Cookie named '" . $cookie_name . "' does not exist!";
	} 
	else 
	{
  	 	// echo "Cookie is named: " . $cookie_name . "<br>Value is: " . $_COOKIE[$cookie_name];
		$b = $_COOKIE[$cookie_name];
		$com="INSERT INTO post (data,uid,tme,dop) VALUES('$DATA','$b','$T','$DOP') ";
		$comres=mysqli_query($conn,$com);
	}
	header("Location: /dbms project/post.php");
?>