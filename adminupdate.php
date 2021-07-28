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
<h2 align="right" style="color:red"><?php echo 'Welcome Admin '.$result['username'];?></h2>

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

<form action="" method="GET">
<table width=50% border="0">
  <tr>
    <td width="35%" class= "drop">Officer Id</td>
    <td width="65%"><input type="text"  class = "lb" value="<?php echo $_GET['off_id']; ?>" placeholder="Enter Here" maxlength="5" name="off_id" /></td>
  </tr>
  <tr>
    <td width="35%" class= "drop">Officer Name</td>
    <td><input type="text"  class = "lb" value="<?php echo $_GET['off_name']; ?>" placeholder="Enter Here" maxlength="20" name="off_name" /></td>
  </tr>
  <tr>
    <td width="35%" class= "drop">Officer Address</td>
    <td><textarea name="off_address" class="lb" placeholder="Enter Here"maxlength="50"><?php echo $_GET['off_address'];?></textarea></td>
  </tr>
  <tr>
    <td width="35%" class= "drop">Officer Mobile No.</td>
    <td><input name="off_mobno" type="text"  class = "lb" value="<?php echo $_GET['off_mobno']; ?>" placeholder="Enter Here" maxlength="10" /></td>
  </tr>
  <tr>
    <td width="35%" class= "drop">Officer Password</td>
    <td><input name="off_pass" type="password" class="lb" placeholder="Enter Here" value="<?php echo $_GET['off_pass']; ?>" /></td>
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

<?php
if($_GET['submit']){
	$off_id = $_GET['off_id'];
	$off_name = $_GET['off_name'];
	$off_address = $_GET['off_address'];
	$off_mobno = $_GET['off_mobno'];
	$off_pass = $_GET['off_pass'];
		
	$query = "Update addofficer set off_id='$off_id', off_name='$off_name', off_address='$off_address', off_mobno='$off_mobno', off_pass='$off_pass' where off_id='$off_id' ";
	$data = mysqli_query($conn, $query);
	if($data)
	{
		echo "<script>alert('Record Updated Successfully')</script>";
		?>
	<Meta HTTP-EQUIV="Refresh" content="0; url=adminedit.php">
	<?php
		}
	else
	{
		echo "<font color='red' size = '5pt'> Record Not Updated </font>";
	}
	
}
else
{
	echo "<font color='red' size = '5pt'> Click on Update Button to save the changes</font>";
}
?>
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
