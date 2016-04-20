<?php
$conn = mysqli_connect("localhost","root","","rcc");
$likes= "create table like
		(
			lkid int primary key AUTO_INCREMENT,
			uid varchar(40),
			foreign key(uid) references signup(username)
		)";

$postlike ="create table postlike
			(
				lid int,
				pid int,
				foreign key(lid) references like(lid),
				foreign key(pid) references pt(pid)
			)";
mysqli_query($conn, $likes);
mysqli_query($conn, $postlike);
mysqli_close($conn);

?>