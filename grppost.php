<?php
	$conn = mysqli_connect("localhost","root","","rcc");
	$cookie_name1 = "pqr";
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

	$pst = $_POST['posts'];
	
	$a = "INSERT INTO groups(gname,postsby,posts) VALUES('$c','$b','$pst')";
	mysqli_query($conn,$a);
	mysqli_close($conn);
	header("Location: /dbms project/groupinfo.php");
?>
