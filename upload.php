
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
          top: 300px;
          width: 750px;
          bottom: 800px;
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
        $b = $_COOKIE[$cookie_name];
        $flag=0;
        $flag1=0;
        $flag2=0;
        $a = "SELECT username,firstname,lastname,email,gender FROM signup WHERE username='$b'";
        $a1 = "SELECT * FROM about WHERE uid='$b'";
        $a2 = "SELECT * FROM interest WHERE uid='$b'";
        $res = mysqli_query($conn,$a);
        $res1 = mysqli_query($conn,$a1);
        $res2 = mysqli_query($conn,$a2);
        if (mysqli_num_rows($res) > 0) 
        {
            
            $flag=1;
            $row = mysqli_fetch_assoc($res);
        }
        if (mysqli_num_rows($res1) > 0) 
        {
            $flag1=1;
            $row1 = mysqli_fetch_assoc($res1);
        }
        if (mysqli_num_rows($res2) > 0) 
        {
            $flag2=1;
            $row2 = mysqli_fetch_assoc($res2);
          }
      }
        $cookie_value = $flag1;
        $cookie_name = "a1";
        setcookie($cookie_name, $cookie_value, 0, "/");
        $cookie_value1 = $flag2;
        $cookie_name1 = "a2";
        setcookie($cookie_name1, $cookie_value1, 0, "/");
        
      echo $flag;
      echo $flag1;
      echo $flag2;
    ?>
    <title> update profile <?php echo $row["username"]; ?> </title>
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
     <form action="update1.php" method="post">
          <fieldset>
            <h1>PERSONAL DETAILS</h1> 
            USERNAME:  <input type="text" name="username" value=<?php echo $row["username"] ?>><br>
            FIRSTNAME: <input type="text" name="firstname" value=<?php echo $row["firstname"] ?>><br>
            LASTNAME:  <input type="text" name="lastname" value=<?php echo $row["lastname"] ?>><br>
            GENDER:    <input type="text" name="gender" value=<?php echo $row["gender"] ?>><br>
            EMAIL-ID:  <input type="email" name="email" value=<?php echo $row["email"] ?>><br>
            <h1> INTEREST</h1>
            <?php
             if($flag2!=1)
             { 
                echo "SPORTS:  <input type='number' name='sports' value='NULL'>" ;
                echo "<br>" ;
                echo "MOVIES:  <input type='number' name='movies' value='NULL'>" ;
                echo "<br>";
                echo " SITCOMS:  <input type='number' name='sitcoms' value='NULL'>";
                echo "<br>";
                echo " READING:  <input type='number' name='reading' value='NULL'>";
                echo "<br>";
                echo " DANCE:  <input type='number' name='dance' value='NULL'>";
                echo "<br>";
                echo " MUSIC:  <input type='number' name='music' value='NULL'>";
                echo "<br>";
                echo " CODING:  <input type='number' name='coding' value='NULL'>";
                echo "<br>";
            }
            ?>
            <?php
            
            if($flag2==1)
            {
              $q1=$row2["sports"];
            $q2=$row2["movies"];
            $q3=$row2["sitcoms"];
            $q4=$row2["reading"];
            $q5=$row2["dance"];
            $q6=$row2["music"];
            $q7=$row2["coding"];

              echo "SPORTS:  <input type='number' name='sports' value='$q1'>";
              echo "<br>";
              echo " MOVIES:  <input type='number' name='movies' value='$q2'>";
              echo "<br>";
              echo " SITCOMS:  <input type='number' name='sitcoms' value='$q3'>";
              echo "<br>";
              echo " READING:  <input type='number' name='reading' value='$q4'>";
              echo "<br>";
              echo " DANCE:  <input type='number' name='dance' value='$q5'>";
              echo "<br>";
              echo " MUSIC:  <input type='number' name='music' value='$q6'>";
              echo "<br>";
              echo " CODING:  <input type='number' name='coding' value='$q7'>";
              echo "<br>";
            } ?>
            <h1> ABOUT</h1>
            <?php
             if(!$flag1==1)
             { 
                echo "AGE:  <input type='number' name='age' value='NULL'>" ;
                echo "<br>" ;
                echo "DOB:  <input type='date' name='dob' value='NULL'>" ;
                echo "<br>";
                echo " SCHOOL:  <input type='text' name='school' value='NULL'>";
                echo "<br>";
                echo " COLLEGE:  <input type='text' name='college' value='NULL'>";
                echo "<br>";
                echo " CITY:  <input type='text' name='city' value='NULL'>";
                echo "<br>";
                echo " STATUS:  <input type='text' name='status' value='NULL'>";
                echo "<br>";
            }
            ?>
            <?php
            if($flag1==1)
            {
              $w1=$row1["age"];
              $w2=$row1["dob"];
               $w3=$row1["school"];
                $w4=$row1["college"];
                 $w5=$row1["city"];
                  $w6=$row1["status"];
              echo "AGE:  <input type='number' name='age' value='$w1'>";
              echo "<br>";
              echo " DOB:  <input type='date' name='dob' value='$w2'>";
              echo "<br>";
              echo " SCHOOL:  <input type='text' name='school' value='$w3'>";
              echo "<br>";
              echo " COLLEGE:  <input type='text' name='college' value='$w4'>";
              echo "<br>";
              echo " CITY:  <input type='text' name='city' value='$w5'>";
              echo "<br>";
              echo " STATUS:  <input type='text' name='status' value='$w6'>";
              echo "<br>";
            } ?>
          
          <input type="submit" value="save changes">
        </fieldset>
      </form>
    </div>
    <?php   mysqli_close($conn);?>
  </body>
</html> 