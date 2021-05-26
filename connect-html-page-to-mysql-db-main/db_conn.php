<?php  

$sname = "localhost";
$uname = "root";
$password = "123455moha@";

$db_name = "form";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
	exit();
}