<html>
<head>
<title>groups</title>
</head>
<body>
<h1>cluster</h1>
<h4>helping u meeting ppl with something similar</h4>
<br><br>
<p>groups you are present:</p>

<?php
			
			$conn = mysqli_connect("localhost","root","","rcc");
			$cookie_name = "abc";
			if(!isset($_COOKIE[$cookie_name])) 
			{
				echo "cookie not set error!";
    		} 
			else 
			{
  	 			$b = $_COOKIE[$cookie_name];
				
				$a = "SELECT sports,movies,sitcoms,reading,dance,music,coding FROM interest
				WHERE uid='$b'";
				$res = mysqli_query($conn,$a);
				if(mysqli_num_rows($res)!=0) 
				{
    				$row = mysqli_fetch_assoc($res);
  					if($row["sports"]==1)
  					{
  						echo "<form action='groupinfo.php' method='post'>
  								<input type='submit' name='group' value='sports'>
  								</form>";
  					}
  					if($row["movies"]==1)
  					{
  						echo "<form action='groupinfo.php' method='post'>
  								<input type='submit' name='group' value='movies'>
  								</form>";
  					}
  					if($row["sitcoms"]==1)
  					{
  						echo "<form action='groupinfo.php' method='post'>
  								<input type='submit' name='group' value='sitcoms'>
  								</form>";
  					}
  					if($row["reading"]==1)
  					{
  						echo "<form action='groupinfo.php' method='post'>
  								<input type='submit' name='group' value='reading'>
  								</form>";
  					}
  					if($row["dance"]==1)
  					{
  						echo "<form action='groupinfo.php' method='post'>
  								<input type='submit' name='group' value='dance'>
  								</form>";
  					}
  					if($row["music"]==1)
  					{
  						echo "<form action='groupinfo.php' method='post'>
  								<input type='submit' name='group' value='music'>
  								</form>";
  					}
  					if($row["coding"]==1)
  					{
  						echo "<form action='groupinfo.php' method='post'>
  								<input type='submit' name='group' value='coding'>
  								</form>";
  					}     				
       			}
			}
			mysqli_close($conn);	
		?>
</body>
</html>
