<?php
$username=$_POST['username'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$conn = mysqli_connect("localhost","root","","rcc");
$c = "INSERT INTO signup(username,firstname,lastname,password,email,gender) VALUES('$username','$firstname','$lastname','$password','$email','$gender')";
$c1 = "INSERT INTO about(uid) VALUES ('$username')";
$c2 = "INSERT INTO interest (uid) VALUES ('$username')";

 #$pr= " delimiter $$
#		create procedure one(IN us varchar(40),IN pic varchar(200),IN bk varchar(200))
#			begin
#				update about
#				set dp=pic
#				where uid=us;
#				update about
#				set bkpic=bk
#				where uid=us;
#				end $$
#		delimiter ;";
#if( $gender =='f')
#{	
#	echo "fwv, nlnlnlwefnwlegkn3olrhnrk blbnorlgnlekw w;lgn wk gwoelsssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss v,ngo;nj llllwgwegnlwg";
#	#$e="CALL one($username , $female , $bk)";
#}
#else 
#{	
#	echo "m";
	#$e="call one($username,$male,$bk)";			# code...
#}		
mysqli_query($conn, $c);
mysqli_query($conn, $c1);
mysqli_query($conn, $c2);
#mysqli_query($conn, $e);
$cookie_value = $username;
	$cookie_name = "abc";
	setcookie($cookie_name, $cookie_value, 0, "/");
	header("Location: /dbms project/profile.php");

mysqli_close($conn);
?>