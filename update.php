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
<?php
include("config.php");
error_reporting(0);
$courses1 = $_GET['courses'];
$a=(explode(",",$courses1));
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
<h2 align="right" style="color:red"><?php echo 'Welcome '.$result['off_name'];?></h2>
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
<font color="white">
<center>

<?php
if($_GET['submit'])
{
}
?>
<form method="GET" action="">
<table width=64% border="0">
  <tr>
    <td width="35%" class= "drop">College Rank</td>
    <td width="40%"><input type="text"  class = "lb" name="rank" value= "<?php echo $_GET['rank']; ?>" placeholder="Enter Here" /></td>
  </tr>
  <tr>
	   <td width="35%" class= "drop">College Type</td>
       <td> <select class= "lb" name="type" value="<?php ?>">
        	<option hidden>Choose here</option>
      <option value="Private"
	  <?php 
	  if($_GET['type']=='Private')
	  { echo "selected";
	  }
	  ?> >Private</option>
      <option value="Regular"
	  <?php 
	  if($_GET['type']=='Regular')
	  { echo "selected";
	  }
	  ?> >Regular</option>
        </select>
        </td>
  </tr>
  
  <tr>
    <td width="35%" class= "drop">College Name</td>
    <td><input name="name" value="<?php echo $_GET['name']; ?>" type="text"  class = "lb"  placeholder="Enter Here" maxlength="30" /></td>
  </tr>
  
   <tr>
    <td width="35%" class= "drop">College Address</td>
    <td><textarea name="address" class="lb" placeholder="Enter Here" maxlength="100"><?php echo $_GET['address'];?></textarea>  </tr>
  </tr>
  <tr>
    <td width="35%" class= "drop">District</td>
    <td> <select class= "lb" name="district" value="<?php ?>">
        	<option hidden>Choose here</option>
      <option value="Agra"
	  <?php 
	  if($_GET['district']=='Agra')
	  { echo "selected";
	  }
	  ?> >Agra</option>
      <option value="Aligarh"
	  <?php 
	  if($_GET['district']=='Aligarh')
	  { echo "selected";
	  }
	  ?>>Aligarh</option>
      <option value="Bulandshahr"
	  <?php 
	  if($_GET['district']=='Bulandshahr')
	  { echo "selected";
	  }
	  ?>>Bulandshahr</option>
        <option value="Meerut"
	  <?php 
	  if($_GET['district']=='Meerut')
	  { echo "selected";
	  }
	  ?>>Meerut</option>
        <option value="Ghaziabad"
	  <?php 
	  if($_GET['district']=='Ghaziabad')
	  { echo "selected";
	  }
	  ?>>Ghaziabad</option>
        </select></td>
    </tr>
  <tr>
    <td width="35%" class= "drop">Total Intake (Engineering)</td>
    <td><input name="engg_intake" value="<?php echo $_GET['engg_intake'];?>" type="text"  class = "lb"  placeholder="Enter Here" maxlength="3" /></tr>
  </tr>
    
  <tr>
    <td width="35%" class= "drop">Total Intake (Honrs.)</td>
    <td><input name="hon_intake" value="<?php echo $_GET['hon_intake'];?>" type="text"  class = "lb"  placeholder="Enter Here" maxlength="3" /></td>
  </tr>
  <tr>
    <td width="35%" class= "drop">Courses</td>
  <td class="lb">
      <input type="checkbox" name="courses[]" value="B-TECH" /
	  <?php
		if(in_array("B-Tech",$a)){
		echo "checked";}
	?>
	  
	  >B-TECH &nbsp; &nbsp;
		<input type="checkbox" name="courses[]" value="B.Sc" /
		<?php
		if(in_array("M-Tech",$a)){
		echo "checked";}
	?>
		
		
		>M-Tech &nbsp;</td>  	
  </tr>
  <tr>
    <td width="35%" class= "drop">Affilated University</td>
    <td><input name="univ" value="<?php echo $_GET['univ'];?>" type="text"  class = "lb"  placeholder="Enter Here" maxlength="30" /></td>
  </tr>
  <tr>
    <td width="35%" class= "drop">Website</td>
    <td><input name="web" value="<?php echo $_GET['web'];?>" type="text"  class = "lb"  placeholder="Enter Here" maxlength="30" /></td>
  </tr>    
<tr>
<td colspan="2" class= "drop">
  <center><input name="submit1" type="submit" value="Submit" style="height:40px; width:70px;"/>&nbsp; &nbsp;
  <input name="Reset" type="reset" value="Reset" style="height:40px; width:70px;"/></center></td>
</tr>  
</table>
</form>

<?php
if($_GET['submit1']){
	$rank = $_GET['rank'];
	$type = $_GET['type'];
	$name = $_GET['name'];
	$address = $_GET['address'];
	$district = $_GET['district'];
	$engg_intake = $_GET['engg_intake'];
	$hon_intake = $_GET['hon_intake'];
	$courses = $_GET['courses'];
	$a = implode(",",$courses);
	$univ = $_GET['univ'];
	$web = $_GET['web'];
	
	
	$query = "Update college set rank='$rank', type='$type', name='$name', address='$address', district='$district', engg_intake='$engg_intake', hon_intake='$hon_intake', courses='$a', univ='$univ', web='$web' where rank='$rank' ";
	$data=mysqli_query($conn, $query);
	if($data)
	{
		echo "<script>alert('Record Updated Successfully')</script>";
		?>
	<Meta HTTP-EQUIV="Refresh" content="0; url=edit.php">
    <?php }
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
<br/>
&copy; Project | Designed by Sajal Bansal and Vipul Goyal
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