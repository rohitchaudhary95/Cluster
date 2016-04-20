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
      		form,div.e
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
			div.al
			{
				color: WHITE;
				background-color: #003399;
				padding-top: 100 px;
				text-align:centre;
        		font-family: cursive;
        		font-style: serif;	
        		text-decoration: none;
        		position: relative;
        		float:center;	
        		left:300px;
        		top:200px;
        		width:800px;
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
   				left: 200px;
   				top: 300px;
   				width: 800px;
			}
			div.d
			{

				background-color:#9966ff;
   	 			text-align:center;
   				position: absolute;
   				left: 650px;
   				width: 350px;
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
				$a1 = "SELECT * FROM about WHERE aid in (select aid from signup where username='$b')";
				$a2 = "SELECT * FROM interest WHERE iid in (select iid from signup where username='$b')";
				$res = mysqli_query($conn,$a);
				$res1 = mysqli_query($conn,$a1);
				$res2 = mysqli_query($conn,$a2);
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
				<li> <a href="profile.php"> PROFILE</a> </li><br>
				<li> <a href="upload.php">UPDATE</a> </li><br>
				<li> <a href="chat.html">CHAT</a></li><br>
				<li> <a href="groups.php">GROUPS</a></li><br>
				<li> <a href="logout.php">LOG OUT</a></li><br>
			</ul>
		</div>
		<div class="c">
			<form action="post1.php" method="post" id="alpha">
				 WHATS ON YOUR MIND <br> <input type="text" name="share"> <br>
					<input type="submit" value="share it!"/>
			</form>

		</div>
			<?php 
			 $sql2="SELECT * FROM post WHERE uid='$b' ORDER BY dop desc , tme DESC"; 
			 	$r = mysqli_query($conn,$sql2);
			 	if (mysqli_num_rows($r) > 0) 
				{
    				// output data of each row
    				echo "<ul>";
	    			while($roe = mysqli_fetch_assoc($r))
	    			{
	    				$cookie_name1 = "hola";
						$cookie_value1 = $roe["pid"];
						setcookie($cookie_name1, $cookie_value1, 0, '/'); // 86400 = 1 day
	    				echo "<li>";
	    				echo "<div class='al'>" . "<h3>" . $row['firstname'] ." " . $row['lastname'] . "</h3>" ."      " ;
	    				echo "<h4>" . $roe['data'] . "<br>";
	    				echo "Date: " . $roe['dop'] . "  " ;
	    				echo "Time: " . $roe['tme'] . "</h4>" ;
	    				echo "<a href='postup.php'>" . "update" . "</a>" . "   ";
	    				echo "<a href='postdel.php'>" . "delete" . "</a>";
	    				echo "<br>" . "<br>" . "</div>" ."</li>" ;
					}
					echo "</ul>";
	    		}
	    	?>
	</body>
</html>


