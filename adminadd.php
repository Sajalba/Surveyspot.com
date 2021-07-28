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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="mystyle.css"> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Officer</title>
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

.header{
	margin:0px;
	background:red;
	border-bottom:1px solid #000;
	padding:15px 0px;
	}
	
.content{
	width:240px;
	border:1px solid #000;
	box-shadow:1px 1px 10px 2px #333;
	border-radius:5px;
	overflow:hidden;
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

.drop {
	font-size: 24px;
	text-decoration:bold;
	text-align:left;
}
.lb{
	height:30px;
	width:200px;
}
</style>
<body>
<h2 align="right" style="color:red"><?php echo 'Welcome Admin '.strtoupper($result['username']);?></h2>

<table width="100%" height="30%" >
  <tr>
    <td width="20%" height="254"><a href="home.php"><img src="survey1.jpg" border="1px" height="225" width="230"> </a></td>
    <td width="*">
    <table width="1113">
      <tr>
        <td height="189" colspan="6"><marquee behavior="alternate" direction="right"><u>Add Officer</u></marquee></td>
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
<font color="white">
<?php

if($_GET['submit'])
{
	$off_id = $_GET['off_id'];
	$off_name = $_GET['off_name'];
	$off_address = $_GET['off_address'];
	$off_mobno = $_GET['off_mobno'];
	$off_pass = $_GET['off_pass'];
	if($off_id!="" &&  $off_name!="" && $off_address!="" && $off_mobno!="" && $off_pass!="")
	{
		$query = "Insert into addofficer values('$off_id','$off_name','$off_address','$off_mobno','$off_pass')";
		$data = mysqli_query($conn, $query);
		
		if($data)
		{
		echo "<p> <font color=red size='6pt'><b> <center> Data Inserted Successfully </b></font></p> ";
		}
	}
	else
	{
		echo"<p> <font color=red size='6pt'><b>  All  fields are mandatory </b></font></p>";
	}
}
?>
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
<form action="" method="GET" style="margin-top:-370px; margin-left:100px">
<table width=50% border="0">
    
  
  <tr>
    <td width="35%" class= "drop">Officer Id</td>
    <td width="65%"><input type="text"  class = "lb"  placeholder="Enter Here" maxlength="5" name="off_id" /></td>
  </tr>
  <tr>
    <td width="35%" class= "drop">Officer Name</td>
    <td><input type="text"  class = "lb"  placeholder="Enter Here" maxlength="20" name="off_name" /></td>
  </tr>
  <tr>
    <td width="35%" class= "drop">Officer Address</td>
    <td><textarea name="off_address" class="lb" placeholder="Enter Here" maxlength="50"></textarea></td>
  </tr>
  <tr>
    <td width="35%" class= "drop">Officer Mobile No.</td>
    <td><input name="off_mobno" type="text"  class = "lb"  placeholder="Enter Here" maxlength="10" /></td>
  </tr>
  <tr>
    <td width="35%" class= "drop">Officer Password</td>
    <td><input name="off_pass" type="password"  class = "lb"  placeholder="Enter Here" maxlength="15" /></td>
  </tr>
  <tr>
    <td colspan="2" align="center">
      <p>
        <input name="submit" type="submit" value="Submit" onclick="return confirm('Are you sure you want to submit?');" style="height:30px; width:90px;"/>
        &nbsp; &nbsp;<input name="Reset" type="reset" value="Reset" style="height:30px; width:90px;"/>
        </p>
      </td>
  </tr>
</table>
</form>
<br />
<br>
<center>
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-youtube"></a>
<a href="#" class="fa fa-instagram"></a>
<br>
<br>
&copy; Project | Designed by Sajal Bansal & Vipul Goyal
</center>
</font>
</body>
</html>
