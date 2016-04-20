<html>
<body>
<?php
		if($_SERVER["REQUEST_METHOD"]=="POST")
	{
			$gname=$_POST['group'];
			$cookies="pqr";
			$cookieval=$gname;
			setcookie($cookies,$cookieval,0,'/');
     }
			
		$conn = mysqli_connect("localhost","root","","rcc");
		$cookie_name = "abc";
		if(!isset($_COOKIE[$cookie_name])) 
		{
		}
		else 
		{
  	 			$b = $_COOKIE[$cookie_name];
				$gname=$_COOKIE["pqr"];

				if($gname=='sports')
				{	
				 $a = "SELECT uid FROM interest WHERE sports=1";
				}
				if($gname=='movies')
				{	
				 $a = "SELECT uid FROM interest WHERE movies=1";
				}
				if($gname=='sitcoms')
				{	
				 $a = "SELECT uid FROM interest WHERE sitcoms=1";
				}
				if($gname=='reading')
				{	
				 $a = "SELECT uid FROM interest WHERE reading=1";
				}
				if($gname=='dance')
				{	
				 $a = "SELECT uid FROM interest WHERE dance=1";
				}
				if($gname=='music')
				{	
				 $a = "SELECT uid FROM interest WHERE music=1";
				}
				if($gname=='coding')
				{	
				 $a = "SELECT uid FROM interest WHERE coding=1";
				}
				$res = mysqli_query($conn,$a);
				if (mysqli_num_rows($res) > 0) 
				{
    				while($row = mysqli_fetch_assoc($res))
    				{
    					echo $row["uid"]."<br>";
    				}
	    			
       			}
		}
?>
<h2>post on <?php echo $gname; ?></h2>
<br>
<br>
<form action="grppost.php" method="post">
	post - <input type="text" name="posts"></br>
	<input type="submit" value="post msg" name="postmsg">
</form>

<br> <a href="profile.php"> back to profile </a>
<br><br>
<?php
	$a = "SELECT postsby,posts FROM groups WHERE gname='$gname' ORDER BY xid desc";
$result = mysqli_query($conn,$a);
if(mysqli_num_rows($result)==0)
{
	echo "no previous posts";
}
if(mysqli_num_rows($result)!=0)
{
	
while($row = mysqli_fetch_assoc($result)) {
        echo $row["postsby"]. " : " . $row["posts"]. "<br>";
    }
}

?>
</body>
</html>

