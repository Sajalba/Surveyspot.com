<?php
include('config.php');
session_start();
error_reporting(0);
$adminname = $_SESSION['user_name'];
if($adminname==true)
{
	
}
else
{
	header('location:admin.php');
}
$query = "Select * from admin_login where username = '$adminname'";
$data = mysqli_query($conn, $query);
$result = mysqli_fetch_assoc($data);
?>
<h2 align="right" style="color:red"><?php echo 'Welcome Admin '.strtoupper($result['username']);?></h2>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="mystyle.css"> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Login</title>
</head>
<style>
.z{
	height:310px;
	}
.y{
	color:blue;
	text-align:center;
	padding:4px;
	border-bottom:1px solid #afafaf;
	font-family:Arial, Helvetica, sans-serif;
	font-size:24px;
}
.content{
	width:240px;
	border:1px solid #000;
	box-shadow:1px 1px 10px 2px #333;
	border-radius:5px;
	overflow:hidden;
}
.header{
	margin:0px;
	background:red;
	border-bottom:1px solid #000;
	padding:15px 0px;
	}


table.a {
	border-style:solid;
}
u {
	font-size:72px;
	text-decoration-line:underline;
	text-decoration-style:double;
}
img {
	border-color:#000;
	border-width:5px;
}
th {
  font-family: "Trebuchet MS", Arial, Verdana;
  font-size: 16px;
  padding: 5px;
  border-style: solid;
  border-color: #000;
  color:#000;
}	
table.a {
	border-style:solid;
}
</style>
<body>
<table width="100%" height="30%" >
  <tr>
    <td width="20%" height="254"><a href="home.php"><img src="survey1.jpg" border="1px" height="225" width="230"> </a></td>
    <td width="*">
    <table width="1113">
      <tr>
        <td height="189" colspan="6"><marquee behavior="alternate" direction="right"><u>Admin Login</u></marquee></td>
        </tr>
        </table>
        <table class="a" width="1056" rules="groups" >
      <tr>
        <th width="148"> <a href="home.php">Home</a></th>
        <th width="164"> <a href="report.php">Report</a></th>
        <th width="123"> <a href="help.php">Help</th>
        <th width="212"> <a href="feedback.php">Feedback</th>
        <th width="379"> <a href="adminlogout.php">Admin Logout <img src="icons8-shutdown-48.png" width="18" height="18" /></a></th>
        </tr>
    </table>  
  </tr>
  </table>
<br>
<center>
<table width="100%" border="0">
  <tr>
    <td width="21%">
    <div class="content">
	<h1 class="header" align="center"> Activity </h1>
	<div class="z">
    <div class="y"><a href="adminfull.php">Show Data</a></div>
	<div class="y"><a href="adminreport.php">Show Officer</a></div>
	<div class="y"><a href="adminadd.php">Add Officer</a></div>
	<div class="y"><a href="adminedit.php">Edit Officer</a></div>
	<div class="y"><a href="admindelete.php">Delete Officer</a></div>
    <div class="y"><a href="adminlogout.php">Log Out</a></div>
    </div>
    </td>
    <td width="79%">&nbsp;</td>
  </tr>
</table>
<br />
<center>
<font color="white">
&copy; Project | Designed by Sajal Bansal & Vipul Goyal
<br>
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-youtube"></a>
<a href="#" class="fa fa-instagram"></a>
</font>
</center>

</body>
</html>
