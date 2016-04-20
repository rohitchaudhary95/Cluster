
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
				background-color:#9966ff;
   	 			text-align:center;
   				position: absolute;
   				left: 250px;
   				top: 200px;
   				width: 350px;
			}
			div.d
			{

				background-color:#9966ff;
   	 			text-align:center;
   				position: absolute;
   				left: 650px;
   				width: 350px;
   				top:250px;
			}
			div.e
			{
				background-color:#9966ff;
   	 			text-align:center;
   				position: absolute;
   				left: 450px;
   				top:500px;
   				width:300px;
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
			}
		?>
		</title>
		</head>
		
		<body>
		<div class="e">
		<h1>SEARCH OPTIONS</h1>
		<form action="search1.php" method="post">
		search by city <input type="submit" name="search1">
		</form>
		<br><br>
		<form action="search2.php" method="post">
		range of age <input type="submit" name="search2">
		</form>
		<br><br>
		<form action="search3.php" method="post">
		user with max post<input type="submit" name="search3">
		</form>
		<br><br>
		<form action="search4.php" method="post">
		member count in each group<input type="submit" name="search4">
		</form>
		<br><br>
		<form action="search5.php" method="post">
		customised liking<br>
		likes<input type="text" name="like"> not likes<input type="text" name="notlike"> 
		<input type="submit" name="search5">
		</form>
		<br><br>
		<form action="search6.php" method="post">
		user in max grp <input type="submit" name="search6">
		</form>
		<a href="profile.php"> back to profile</a>
		 </div>
		 </body>
		 </html>
