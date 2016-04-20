<?php
$conn = mysqli_connect("localhost","root","","rcc");
$USERNAME=$_POST['username'];
$FIRSTNAME=$_POST['firstname'];
$LASTNAME=$_POST['lastname'];
$GENDER=$_POST['gender'];
$EMAIL=$_POST['email'];
$SPORTS=$_POST['sports'];
$MOVIES=$_POST['movies'];
$SITCOMS=$_POST['sitcoms'];
$READING=$_POST['reading'];
$DANCE=$_POST['dance'];
$MUSIC=$_POST['music'];
$CODING=$_POST['coding'];
$AGE=$_POST['age'];
$DOB=$_POST['dob'];
$SCHOOL=$_POST['school'];
$COLLEGE=$_POST['college'];
$CITY=$_POST['city'];
$STATUS=$_POST['status'];
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
        $usu = "UPDATE signup 
                SET username='$USERNAME', firstname='$FIRSTNAME' , lastname='$LASTNAME' ,gender='$GENDER'
                WHERE username='$b'";
        mysqli_query($conn, $usu);
      }
$cookie_name = "a1";
if(!isset($_COOKIE[$cookie_name])) 
{
  echo "cookie not set error!";
  echo "Cookie named '" . $cookie_name . "' does not exist!";
} 
else 
{
  $b1 = $_COOKIE[$cookie_name];
  $c1 = "UPDATE about 
         SET age='$AGE', dob='$DOB' , school='$SCHOOL' ,college='$COLLEGE' , city='$CITY' , status='$STATUS'
         WHERE uid='$b'";
   mysqli_query($conn, $c1);
  echo "connect";
 
}
  
  $b2=$_COOKIE["abc"];
  $c2="UPDATE interest 
        SET sports= '$SPORTS' , movies='$MOVIES', sitcoms='$SITCOMS' ,reading='$READING',dance='$DANCE',music='$MUSIC',coding='$CODING'
        WHERE uid='$b2'";
  mysqli_query($conn, $c2);

  header("Location: /dbms project/profile.php");
mysqli_close($conn);
?>

