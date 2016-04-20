<?php
	$conn = mysqli_connect("localhost","root","","rcc");
	$cookie_name1 = "xyz";
			if(!isset($_COOKIE[$cookie_name1])) 
			{
				echo "cookie not set error!";
    			echo "Cookie named '" . $cookie_name . "' does not exist!";
			} 
			else 
			{
  	 			$c = $_COOKIE[$cookie_name1];
			}
	$cookie_name = "abc";
			if(!isset($_COOKIE[$cookie_name])) 
			{
				echo "cookie not set error!";
    			echo "Cookie named '" . $cookie_name . "' does not exist!";
			} 
			else 
			{
  	 			$b = $_COOKIE[$cookie_name];
			}		

	$msg = $_POST['message'];
	
	$a = "INSERT INTO chat(sender,reciever,content) VALUES('$b','$c','$msg')";
	mysqli_query($conn,$a);
	mysqli_close($conn);
	header("Location: /dbms project/chat.php");
?>
