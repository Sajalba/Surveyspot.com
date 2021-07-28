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
<title>Edit Officer</title>
</head>
<style>


.d1 {
    background-color:lightgrey;
    line-height : 40px;
    font-size: 18px;
    font-family:arial, sans-serif;
    padding: 15px;
    padding-left:20px;
    padding-right:20px;
	padding-top:6px;
	padding-bottom:6px;

    box-shadow: -16px 0 +16px /* box shadow is emulating padding liek a charme */

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
	text-decoration: bold;
	text-align: right;
}
.lb{
	height:30px;
	width:200px;
}
.th1{
	 font-family: "Trebuchet MS", Arial, Verdana;
  font-size: 16px;
  padding: 0px;
  background-color:red;
  border-style: solid;
  border-color: #000;
}

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
</style>
<body>
<h2 align="right" style="color:red"><?php echo 'Welcome Admin '.strtoupper($result['username']);?></h2>

<table width="100%" height="30%" >
  <tr>
    <td width="20%" height="254"><a href="home.php"><img src="survey1.jpg" border="1px" height="225" width="230"> </a></td>
    <td width="*">
    <table width="1113">
      <tr>
        <td height="189" colspan="6"><marquee behavior="alternate" direction="right"><u>Edit Officer</u></marquee></td>
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
<form method="POST" action="" style="margin-top:-370px; margin-left:100px";>
<table width=64% border="0">
  <tr>
    <td width="35%" class= "drop" align="center">Officer Id</td>
    <td><input name="officerid" type="text"  class = "lb" value="" placeholder="Enter Here" maxlength="3" /></td>
  </tr>
  <tr>
    <td colspan="2" align="center">
    	<p>
    	  <input name="submit" type="submit" value="Search" style="height:30px; width:90px;"/>
  	  </p>
    </td>
  </tr>
 </table>
 <br />
 <br /><br /><br /><br /><br /><br /><br /><br />
 </form>
 <?php
 $officerid=$_POST['officerid'];
	if(isset($_POST['submit'])){
		$query = "SELECT * FROM addofficer WHERE off_id = $officerid";
		$data = mysqli_query($conn, $query);
		$total = mysqli_num_rows($data);
?>
 <center>
    <table width="76%" border="0" style="margin-left:250px;">
	<tr class="th1">
    <th width="14%">Id</th>
    <th width="20%">Name</th>
    <th width="30%">Address</th>
    <th width="12%">Mobile No.</th>
    </tr>	
 <?php
		if($total!=0)
			{
		while($result = mysqli_fetch_assoc($data))
		{
			echo "<tr class=th1>
				<th width=14%>".$result['off_id']."</th>
				<th width=20%>".$result['off_name']."</th>
				<th width=30%>".$result['off_address']."</th>
				<th width=12%>".$result['off_mobno']."</td>
				</tr>";
		}
?>
<br />
 <?php
	   $officerid=$_POST['officerid'];
		$query = "SELECT * FROM addofficer  WHERE off_id = $officerid";
		$data = mysqli_query($conn, $query);
		$total = mysqli_num_rows($data);
		$result1 = mysqli_fetch_assoc($data);
		?><p style="margin-top:-180px;">
<a href="adminupdate.php?off_id=<?php echo $result1[off_id];?>&off_name=<?php echo $result1[off_name];?>&off_address=<?php echo 			$result1[off_address];?>&off_mobno=<?php echo $result1[off_mobno];?>&off_pass=<?php echo $result1[off_pass];?>" class="d1"><font color="black" >EDIT</font></a></p>
	  <?php
	  	}
	else
	{
		echo "<p style='margin-top:-180px'> <font color=green size='6pt'><b> <center> No Record Found </b></font></p>";
	}
	}
?></table>

	</center>
<br />   <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />   <center>
&copy; Project | Designed by Sajal Bansal & Vipul Goyal
<br>
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-youtube"></a>
<a href="#" class="fa fa-instagram"></a>
</center>
</font>
  
  </body>
  </html>