<?php 
	$conn = mysqli_connect("localhost","root","","rcc");
	$DATA=$_POST['share'];
	$DOP=date("Y-m-d");
	$T=date("h:i:sa");
	$cookie_name1 = "hola";
			if(!isset($_COOKIE[$cookie_name1])) 
			{
				echo "cookie not set error!";
    			echo "Cookie named '" . $cookie_name1 . "' does not exist!";
			} 
			else 
			{
  	 			// echo "Cookie is named: " . $cookie_name . "<br>Value is: " . $_COOKIE[$cookie_name];
				$b1 = $_COOKIE[$cookie_name1];
				$com="UPDATE post (data,uid,tme,dop) 
			VALUES('$DATA','$b','$T','$DOP') 
				WHERE pid='$b1";
		$comres=mysqli_query($conn,$com);
	}
	$cookie_name = "abc";
	header("Location: /dbms project/post.php");
?>