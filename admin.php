<?php
include("config.php");
error_reporting(0);
session_start();
?>
<!DOCTYPE html><head>
<title>Admin Login</title>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="mystyle.css">
<style>
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
u {
	font-size:72px;
	text-decoration-line:underline;
	text-decoration-style:double;
}
img {
	border-color:#000;
	border-width:5px;
}
.content{
	width:500px;
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
.z{
	height:350px;
	}
.y{
	color:blue;
	text-align:center;
	padding:4px;
	font-family:Arial, Helvetica, sans-serif;
	font-size:24px;
}
</style>
</head>
</style>
</head>
<body">

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
        <th width="260"><a href="officer.php" target="officerlogin">Officer Login</a></th>
        <th width="244"><a href="admin.php" target="adminlogin">Admin Login</a></th>
      </tr>
    </table>  
  </tr>
  </table>
<center>
  <div class="content">
<h1 class="header" align="center"> Admin Login </h1>
<div class="z">
<div class="y">
<br><br>
  
<form action="" method="post">
Username: <input name="user" type="text" value="" maxlength="10" style="height:20px;"/><br><br><br>
Password: <input name="pass" type="password" value="" maxlength="10" style="height:20px;"/><br><br><br>
<input type="submit" name="submit" value="Login" style="height:35px; width:80px;"/>&nbsp; &nbsp;
<input type="reset" name="reset"  value="Reset" style="height:35px; width:80px;"/>&nbsp;
</form>
       
<?php
if(isset($_POST['submit']))
{
	$user = $_POST['user'];
	$pwd = $_POST['pass'];
	$query = "SELECT * FROM admin_login WHERE username='$user' && password='$pwd'";
	$data = mysqli_query($conn, $query);
	$total = mysqli_num_rows($data);
	if($total==1)
	{
		$_SESSION['user_name']=$user;
		header('location:al.php');
	}
	else
	{
		echo 'Login Failed';
	}
}

?>
</div>
</div>
<br>
</center>
</br>
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