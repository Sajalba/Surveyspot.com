<?php
include('config.php');
session_start();
error_reporting(0);
$officername = $_SESSION['user_name'];
if($officername==true)
{
	
}
else
{
	header('location:officer.php');
}
$query = "Select * from addofficer where off_id = '$officername'";
$data = mysqli_query($conn, $query);
$result = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="mystyle.css"> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Data</title>
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
    box-shadow: -16px 0 +16px; /* box shadow is emulating padding liek a charme */

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
.th1{
	 font-family: "Trebuchet MS", Arial, Verdana;
  font-size: 16px;
  padding: 0px;
  background-color:red;
  border-style: solid;
  border-color: #000;
}
</style>
<body>
<h2 align="right" style="color:red"><?php echo 'Welcome '.strtoupper($result['off_name']);?></h2>
<table width="100%" height="30%" >
  <tr>
    <td width="20%" height="254"><a href="home.php"><img src="survey1.jpg" border="1px" height="225" width="230"> </a></td>
    <td width="*">
    <table width="1113">
      <tr>
        <td height="189" colspan="6"><marquee behavior="alternate" direction="right"><u>Edit Data</u></marquee></td>
        </tr>
      </table>
        <table class="a" width="1056" rules="groups" >
      <tr>
        <th width="148"> <a href="home.php" target="_blank">Home</a></th>
        <th width="164"> <a href="report.php" target="_blank">Report</a></th>
        <th width="123"> <a href="help.php" target="_blank">Help</th>
        <th width="212"> <a href="feedback.php" target="_blank">Feedback</th>
        <th width="379"> <a href="officer.php">Officer Logout <img src="icons8-shutdown-48.png" width="18" height="18" /></a></th>
        </tr>
    </table>  
  </tr>
</table>
<br>
<center>
<table width="20%" border="0" align="left">
  <tr>
    <td width="21%">
    <div class="content">
	<h1 class="header" align="center"> Activity </h1>
	<div class="z">
    <div class="y"><a href="data.php">Show Data</a></div>
	<div class="y"><a href="add.php">Add Data</a></div>
	<div class="y"><a href="edit.php">Edit Data</a></div>
	<div class="y"><a href="delete.php">Delete Data</a></div>
    <div class="y"><a href="logout.php">Log Out</a></div>
    </div>
    </td>
    <td width="79%">&nbsp;</td>
  </tr>
</table>
<form method="POST" action"">
<font color="white">
<table width=64% border="0">
  <tr>
    <td width="35%" class= "drop">Enter Rank</td>
    <td><input name="rank" value="" type="text"  class = "lb"  placeholder="Enter Here" maxlength="3" /></td>
  </tr>
  <tr>
    <td colspan="2" align="center">
    	<p>
    	  <input name="submit" type="submit" value="Search" style="height:30px; width:90px;"/>
  	  </p>
    </td>
  </tr>
 </table>
 </form>
 <?php
 $rank = $_POST['rank'];

	if(isset($_POST['submit'])){
		$query = "SELECT * FROM college WHERE rank = $rank && off_id =($result[off_id]) ";
		$data = mysqli_query($conn, $query);
		$total = mysqli_num_rows($data);
		
		
?>
    <table width="79%" border="0">
  <tr class="th1">
    <th width="5%">Rank</th>
    <th width="8%">Type</th>
    <th width="8%">Name</th>
    <th width="15%">Address</th>
    <th width="8%">District</th>
    <th width="5%">Total Intake(Engineering)</th>
    <th width="5%">Total Intake (Honrs.)</th>
    <th width="10%">Courses</th>
    <th width="10%">Affilated University</th>
    <th width="5%">Website</th>
    </tr>
 
 <?php
		if($total!=0)
			{
		while($result = mysqli_fetch_assoc($data))
		{
			echo "<tr class=th1>
				<th width=5%>".$result['rank']."</th>
				<th width=8%>".$result['type']."</th>
				<th width=8%>".$result['name']."</th>
				<th width=15%>".$result['address']."</th>
				<th width=8%>".$result['district']."</th>
				<th width=5%>".$result['engg_intake']."</th>
				<th width=5%>".$result['hon_intake']."</th>
				<th width=10%>".$result['courses']."</th>
				<th width=10%>".$result['univ']."</th>
				<th width=5%>".$result['web']."</th>
				</tr>";
	 
	   }
	   
	   ?>
	   <?php
		$query = "SELECT * FROM college  WHERE rank = $rank";
		$data = mysqli_query($conn, $query);
		$total = mysqli_num_rows($data);
		$result1 = mysqli_fetch_assoc($data);
		?>
	   <a href="update.php?rank=<?php echo $result1[rank];?>&type=<?php echo $result1[type];?>&name=<?php echo $result1[name];?>&address=<?php echo $result1[address];?>&district=<?php echo $result1[district];?>&engg_intake=<?php echo $result1[engg_intake];?>&hon_intake=<?php echo $result1[hon_intake];?>&courses=<?php echo $result1[courses];?>&univ=<?php echo $result1[univ];?>&web=<?php echo $result1[web];?>" class="d1"><font color="black">EDIT</font></a>
	   <?php
	   
	}
	else
	{
		echo "<p> <font color=green size='6pt'><b> <center> No Record Found </b></font></p>";
	}
	}
	
	?>
	   
	   
	
</table>
<br />
 <br />
<center>
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