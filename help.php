<?php
include("config.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="mystyle.css"> 
<title>Help</title>
<style>
th {
  font-family: "Trebuchet MS", Arial, Verdana;
  font-size: 16px;
  padding: 5px;
  border-style: solid;
  border-color: #000;
  color:#000;
}	
u {
	font-size: 72px;
	text-decoration-line: underline;
	text-decoration-style: double;
	color: #000;
}
table.a {
	border-style:solid;
}
img {
	border-color:#000;
	border-width:5px;
}
.drop {
	font-size: 24px;
	text-decoration:bold;
}
.label
{
	font-weight:bold;
}

</style>
</head>

<body>
<table width="100%" height="30%" >
  <tr>
    <td width="20%" height="254"><a href="home.php"><img src="survey1.jpg" border="1px" height="225" width="230"> </a></td>
    <td width="*">
    <table width="1113">
      <tr>
        <td height="189" colspan="6"><marquee behavior="alternate" direction="right"><u>Survey Spot.com</u></marquee></td>
        </tr>
        </table>
        <table class="a" width="1113" rules="groups" >
      <tr>
        <th width="132"> <a href="home.php">Home</a></th>
        <th width="148"> <a href="report.php">Report</a></th>
         <th width="107"> <a href="help.php">Help</a></th>
        <th width="196"> <a href="feedback.php">Feedback</a></th>
        <th width="260"><a href="officer.php">Officer Login</a></th>
        <th width="244"><a href="admin.php">Admin Login</a></th>
      </tr>
    </table>  
  </tr>
  </table>
  <center>
  <?php
if($_GET['submit'])
{
	$email = $_GET['email'];
	$mobile = $_GET['mobile'];
	$name = $_GET['name'];
	if($email!="" &&  $mobile!="" && $name!="")
	{
		$query = "Insert into help (email_id, mob_no, name) values('$email','$mobile','$name')";
		$data = mysqli_query($conn, $query);
		
		if($data)
		{
		echo "<p> <font color=red size='6pt'><b> <center> Your Data Uploaded Successfully </b></font></p> ";
		}
	}
	else
	{
		echo"<p> <font color=red size='6pt'><b> Opps! All  fields are mandatory. </b></font></p>";
	}
}
?>
<form  method="GET" action="">
  <label for="Email"><b><font color="white"> Email Id</font></b></label>
  <input name="email" type="text" id="Email" value="" maxlength="40"><br><br>
  <label for="mobile"><b><font color="white">Mobile No.</font></b></label>
  <input name="mobile" type="text" id="mobile" value="" maxlength="10"><br><br>
  <label for="name"><b><font color="white">Full Name</font></b></label>
  <input name="name" type="text" id="name" value="" maxlength="15"><br><br>
  <input type="submit" name="submit" id="login" value="Submit" style="height:35px; width:80px;">&nbsp;
  <input type="reset" name="reset" id="reset" value="Reset" style="height:35px; width:80px;">
</form>
</center>
<br>
<center>
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-youtube"></a>
<a href="#" class="fa fa-instagram"></a>
<br>
<br>
<font color="white">&copy; Project | Designed by Sajal Bansal & Vipul Goyal</font>
</center>
</body>
</html>
