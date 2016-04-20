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
				$a = "SELECT username,firstname,lastname,email,gender 
						FROM signup 
						WHERE username='$b'";
				$a1 = "SELECT age,dob,status,school,college,city 
						FROM about 
						WHERE aid in (select aid from signup where username='$b')";
				$a2 = "SELECT sports,movies,sitcoms,reading,dance,music,coding 
						FROM interest 
						WHERE iid in (select iid from signup where username='$b')";
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
				<li> <a href="fcustom.php">FIND CUSTOM</a></li><br>
				<li> <a href="post.php"> POST</a> </li><br>
				<li> <a href="upload.php">UPDATE</a> </li><br>
				<li> <a href="chat.html">CHAT</a></li><br>
				<li> <a href="groups.php">GROUPS</a></li><br>
				<li> <a href="logout.php">LOG OUT</a></li><br>
			</ul>
		</div>
		<div class="c">
		 	<h1>PERSONAL DETAILS</h1>
		 	<ul class="b">	
		 		<li> <h3>USERNAME : <?php echo $row["username"] ?> </h3> </li>
		 		<li> <h3>NAME : <?php echo $row["firstname"] . " " . $row["lastname"]?> </h3> </li>
		 		<li> <h3>E-MAIL : <?php echo $row["email"] ?> </h3> </li>
		 		<li> <h3>GENDER : <?php echo $row["gender"] ?> </h3> </li>
		 	</ul>
		</div>
		<div class="e">
		 	<h1> INTERESTS</h1>
		 	<?php 
		 			$a2 = "SELECT sports,movies,sitcoms,reading,dance,music,coding 
						FROM interest 
						WHERE uid='$b'";
		 		$res2 = mysqli_query($conn,$a2);
		 		 $row2 = mysqli_fetch_assoc($res2);

		 		 	$flg=0;
		 			 if($row2["sports"]==1)
		 			 {
		 			 		$flg=1;
		 					echo "<h3>"."sports >>"."</h3>";
		 			 }
		 					
		 			 if($row2["movies"]==1)
		 			 {
		 			 	$flg=1;
		 					echo "<h3>"."movies >>"."</h3>";
		 			 }

		 			 if($row2["sitcoms"]==1)
		 			 {
		 			 		$flg=1;
		 					echo "<h3>"."sitcoms >>"."</h3>";
		 			 }

		 			 if($row2["reading"]==1)
		 			 {
		 			 		$flg=1;
		 					echo "<h3>"."reading >>"."</h3>";
		 			 }

					 if($row2["dance"]==1)
					 {
					 	$flg=1;
		 					echo "<h3>"."dance >>"."</h3>";
					 }
					 
					 if($row2["music"]==1)
					 {
					 	$flg=1;
		 					echo "<h3>"."music >>"."<h3>";
					 }
		 			 
		 			 if($row2["coding"]==1)
		 			 {
		 			 	$flg=1;
		 					echo "<h3>"."coding >>"."</h3>";
		 			 }
		 			 if($flg==0)
		 			 {
		 			 	echo "<h3>"."no interests added yet!"."</h3>";	
		 			 }
		 		?>
		 		
		 	?>
		 </div>
		 <div class="d">
		 	<h1> ABOUT </h1>
		 	<?php 
		 			$a1 = "SELECT age,dob,status,school,college,city 
						FROM about 
						WHERE uid='$b'";
		 		$res1 = mysqli_query($conn,$a1);
		 		if(!(mysqli_num_rows($res1)))
		 		{
		 			echo "<h3>no information about you!</h3>";
		 		}
				else		 	
	 		 	{
		 		 	$row1 = mysqli_fetch_assoc($res1);
		 		 	echo "AGE: " .$row1["age"] . "<br>";
		 		 	echo "SCHOOL: " .$row1["school"] . "<br>";
		 		 	echo "CITY: " .$row1["city"] . "<br>";
		 		 	echo "COLLEGE: " .$row1["college"] . "<br>";
		 		 	echo "STATUS: " .$row1["status"] . "<br>";
		 		 	echo "DOB: " .$row1["dob"] . "<br>";
				}
		 	?>
		 </div>
		<?php 	mysqli_close($conn);?>
	</body>
</html>  