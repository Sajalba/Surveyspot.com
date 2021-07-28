<?php
$host = "localhost";
$username= "root";
$password= "";
$dbname= "survey";

$conn = mysqli_connect($host, $username, $password, $dbname);
if($conn)
{
	echo "";
}
else
{
	die("Connection failed because ".mysqli_connect_error());
}
?>