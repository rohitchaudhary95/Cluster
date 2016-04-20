<?php
// Create connection
$conn = mysqli_connect("localhost","root","") or die("wont work");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$a = "CREATE DATABASE rcc";
$b = "USE rcc";
$sql = "CREATE TABLE signup(username VARCHAR(20) PRIMARY KEY, 
		firstname VARCHAR(30) NOT NULL,
		lastname VARCHAR(30) NOT NULL,
		email VARCHAR(50),
		password VARCHAR(20),
		gender char,
		index(username)
		)engine InnoDB";

$abt= "CREATE TABLE about
		(
		aid int PRIMARY KEY AUTO_INCREMENT,
		uid varchar(40),
		age int,
		dob date,
		school varchar(40),
		college VARCHAR(40),
		city VARCHAR(40),
		status VARCHAR(40),
		dp varchar(50),
		bkpic varchar(50),
		foreign key(uid) references signup(username) ON UPDATE CASCADE ,
		index(aid)
	  	)engine InnoDB";
$pt= "Create TABLE post
		(
			pid int PRIMARY KEY AUTO_INCREMENT,
			data varchar(50),
			uid varchar(50),
			tme time,
			dop date,
			index(pid),
			foreign key(uid) references signup(username) ON UPDATE CASCADE 
			)engine InnoDB";
$interest= "create Table interest
			(
				sports int,
				uid varchar(40),
				movies int default 0,
				sitcoms int,
				reading int,
				dance int,
				music int,
				coding int,
				iid int primary key AUTO_INCREMENT,
				foreign key(uid) references signup(username) ON UPDATE CASCADE ,
				index(iid)
			)engine InnoDB";
$i1="alter table interest
	 alter sitcoms set default 0";
$i2="alter table interest
	 alter sports set default 0";
$i3="alter table interest
	 alter reading set default 0";
$i4="alter table interest
	 alter movies set default 0";
$i5="alter table interest
	 alter coding set default 0";
$i6="alter table interest
	 alter dance set default 0";
$i7="alter table interest
	 alter music set default 0";

$likes= "create table lke
		(
			lid int primary key AUTO_INCREMENT,
			uid varchar(40),
			index(lid),
			foreign key(uid) references signup(username) ON UPDATE CASCADE
		)engine InnoDB";

$postlike ="create table postlike
			(
				plid int primary key auto_increment,
				lid integer,
				pid integer,
				foreign key(lid) references lke(lid) ON UPDATE CASCADE ,
				foreign key(pid) references post(pid) ON UPDATE CASCADE 
			)engine InnoDB";

$fm="create table family 
	( 
		uid varchar(40), 
		frid varchar(40), 
		relation varchar(20), 
		relid int primary key auto_increment, 
		foreign key (uid) references signup(username), 
		foreign key (frid) references signup(username) 
	)";
$x= "CREATE TABLE chat(
		mid int PRIMARY KEY AUTO_INCREMENT,
		sender varchar(30),
		reciever varchar(30),
		content varchar(250)
	)";
$y= "CREATE TABLE groups(
		xid int AUTO_INCREMENT,
		gname varchar(30),
		postsby varchar(30),
		posts varchar(250),
		PRIMARY KEY(xid,gname,postsby,posts),
		foreign key(postsby) references signup(username)
	)";
mysqli_query($conn, $a);
mysqli_query($conn, $b);
mysqli_query($conn, $sql);
mysqli_query($conn, $abt);
mysqli_query($conn, $pt);
mysqli_query($conn, $interest);
mysqli_query($conn, $i1);
mysqli_query($conn, $i2);
mysqli_query($conn, $i3);
mysqli_query($conn, $i4);
mysqli_query($conn, $i5);
mysqli_query($conn, $i6);
mysqli_query($conn, $i7);
mysqli_query($conn, $likes);
mysqli_query($conn, $fm);
mysqli_query($conn, $postlike);
mysqli_query($conn,$x);
mysqli_query($conn,$y);
mysqli_close($conn);

?>