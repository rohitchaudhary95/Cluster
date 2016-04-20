<?php
$cookie_name = "abc";
$a = $_COOKIE[$cookie_name];
setcookie($cookie_name,$a,time()-3600,'/');

$cookie_name1 = "xyz";
$b = $_COOKIE[$cookie_name1];
setcookie($cookie_name,$b,time()-3600,'/');

header("Location: /dbms project/login.html");
?>