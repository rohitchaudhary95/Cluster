<?php
include("upload.php");
$d=basename($_FILES["fileToUpload"]["name"]);
$cookie_name="abc";
$b = $_COOKIE[$cookie_name];
$status=$_POST['status'];
$school=$_POST['school'];
$college=$_POST['college'];
$company=$_POST['company'];
$about=$_POST['about'];
$conn = mysqli_connect("localhost","root","","rcc");
$c = "INSERT INTO completeprofile(username,status,school,college,company,about,image) VALUES('$b','$status','$school','$college','$company','$about','$d')";
mysqli_query($conn, $c);
$d = "SELECT firstname, lastname FROM signup WHERE username='$b'";
$result = mysqli_query($conn,$a);
if (mysqli_num_rows($result) > 0) {
	$row = mysqli_fetch_assoc($result);
}

//$name = $_POST['interests'];
//foreach ($name as $interests){
//		$d = "INSERT INTO interests(username,interest) VALUES('$b','$interests')";
//		mysqli_query($conn,$d);    
//		}

mysqli_close($conn);
?>
<html>
<body>
	<img src=<?php echo $d ?> alt="no pic" style="width:304px;height:228px">
    <?php echo $row["firstname"] . " " . $row["lastname"]; ?> <br> <br>
    Status - <?php echo $status; ?> <br>
    School - <?php echo $school; ?> <br>
    Collge - <?php echo $college; ?> <br>
    Company - <?php echo $company; ?> <br>
</body>
</html>