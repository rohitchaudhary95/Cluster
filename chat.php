<?php
		if($_SERVER["REQUEST_METHOD"]=="POST")
	{
			$q=$_POST['msgtouser'];
			$cookies="xyz";
			$cookieval=$q;
			setcookie($cookies,$cookieval,0,'/');
     }
			$conn = mysqli_connect("localhost","root","","rcc");
			$cookie_name = "abc";
			if(!isset($_COOKIE["xyz"])) 
			{
				
			} 
			else 
			{
  	 			$q = $_COOKIE["xyz"];
			}
			if(!isset($_COOKIE[$cookie_name])) 
			{
				
			} 
			else 
			{
  	 			$b = $_COOKIE[$cookie_name];
			}
     
?>
<html>
<head>
<title>chat box!</title>
</head>
<body>
<h2>messaging with <?php echo $q; ?></h2>
<br>
<br>
<form action="sendmsg.php" method="post">
	message - <input type="text" name="message"></br>
	<input type="submit" value="send msg" name="sendmsg">
</form>
<br> <a href="profile.php"> back to profile </a>
<br><br>
<?php
	$a = "SELECT sender,reciever,content FROM chat WHERE (sender='$b' AND reciever='$q') OR (sender='$q' AND reciever='$b') ORDER BY mid desc";
$result = mysqli_query($conn,$a);
if(mysqli_num_rows($result)==0)
{
	echo "no previous chats";
}
if(mysqli_num_rows($result)!=0)
{
	
while($row = mysqli_fetch_assoc($result)) {
        echo $row["sender"]. " : " . $row["content"]. "<br>";
    }
}

?>
</body>
</html>

