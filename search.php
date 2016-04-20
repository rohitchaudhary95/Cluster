<html>
<head>
		<style>
			body
			{
				background-image: url("bkim.jpg");
			}
			h1.a
	      	{
        		color: white;
        		font-family: cursive;
        		font-style: serif;
        		font-size: 40px;
        		text-align: right;
        		padding-bottom: 50px;
      		}
      		h1.b
      		{
    			color:white;
        		font-family: cursive;
        		font-style: serif;
        		font-size: 25px;
        		text-align: left;
        		padding-bottom: 50px;
        	
      		}
      		form
      		{
      			color: WHITE;
        		font-family: cursive;
        		font-style: serif;
        		padding-bottom: 150px;	
        		text-decoration: none;
        		position: relative;
        		bottom: 130px;
      		}
      		h3.b
      		{
      			text-align: center;
      			color: red;
      			position:relative;
      			right: 250px;
      		}
			div.a 
			{
	    		background-color:#003399;
   	 			text-align:center;
   				padding:5px;
   				height: 70px;
			}
			div.b
			{
				background-color:#003399;
   	 			text-align:left;
   				padding:5px;
   				float: left;
   				width: 150px;
   				height:520px;
			}
			div.c
			{
   	 			text-align:center;
   				position: absolute;
   				left: 250px;
   				top: 200px;
   				width: 800px;
			}
			ul.b
			{
				list-style-type: none;
			}
			/* unvisited link */
			a:link 
			{
    			color: white;
			}

			/* visited link */
			a:visited 
			{
    			color: red;
			}

			/* mouse overflow: link */
			a:hover 
			{
    			color: black;
			}

			/* selected link */
			a:active 
			{
    			color: #0000FF;
			}
			ul.a
			{
				color:white;
        		font-family: cursive;
        		font-style: serif;
        		font-size: 15px;
        		text-align: centre;
        		padding-bottom: 50px;	
			}
		</style>
		<?php
			$conn = mysqli_connect("localhost","root","","rcc");
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
				//echo "string". $b;
				$a = "SELECT username,firstname,lastname,email,gender FROM signup WHERE username='$b'";
				$res = mysqli_query($conn,$a);
				if (mysqli_num_rows($res) > 0) 
				{
    				// output data of each row
	    			$row = mysqli_fetch_assoc($res);
       				// echo $row["username"]. $row["firstname"]. $row["lastname"]. "<br>";
    			}

			}
		?>
		<title> Welcome <?php echo $row["username"]; ?> </title>
	</head>
	<body>
		<div class="a">  
			<h1 class="a">
				ClusTer..	
			</h1> 
			<form action="search.php" method="post">
        		SEARCH BY USERNAME: <input type="text" name="username">
       			<input type="submit" value="GO">
       		</form>
		</div>
		<br>
		<div class="b">
			<h1 class="b"><?php echo $row["firstname"] ." " . $row["lastname"]; ?> </h1>
			<ul class="a">
				<li> <a href="fcustom.html">FIND CUSTOM</a></li><br>
				<li> <a href="profile.html"> PROFILE</a> </li><br>
				<li> <a href="upload.php">UPDATE</a> </li><br>
				<li> <a href="chat.html">CHAT</a></li><br>
				<li> <a href="photos.html">PHOTOS</a></li><br>
				<li> <a href="groups.html">GROUPS</a></li><br>
				<li> <a href="logout.html">LOG OUT</a></li><br>
			</ul>
		</div>
		<div class="c">
		<h2> FOUND MATCHES </h2>
		<?php 
			$uname=$_POST['username'];
			$sql1="SELECT username FROM signup WHERE username LIKE'%$uname%'";
			$res1=mysqli_query($conn,$sql1);
			if(mysqli_num_rows($res1)>0)
			{
				while($row1=mysqli_fetch_assoc($res1))
				{
					echo "<h4>" .$row1["username"]. "</h4>" . "<br>";
				}
			}
			else
			{
				echo "0 results";
			}
			mysqli_close($conn);
		?>
		</div>
	</body>
	</html>


