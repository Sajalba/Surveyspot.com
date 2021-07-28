<?php
include("config.php");
error_reporting(0);
?>
<!DOCTYPE html>
<head>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="mystyle.css"> 
<title>Report</title>
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
.th1{
	 font-family: "Trebuchet MS", Arial, Verdana;
  font-size: 16px;
  padding: 0px;
  background-color:red;
  border-style: solid;
  border-color: #000;
}

</style>
</head>

<body bgcolor=white>
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
  
  <?php
if($_POST['submit'])
{
	$district = $_POST['district'];
}
	?>
  
  
  
  <center>
  <form action="agra.php?district<?php echo $district;?>" method="GET">
    <label> 
    <span class="drop" style="font-weight:bold">District:</span> &nbsp;
      <select name="district" class="drop" id="district" style="height:35px; width:200px;">
      <option hidden>Choose here</option>
      <option value="Agra">Agra</option>
      <option value="Aligarh">Aligarh</option>
      <option value="Bulandshahr">Bulandshahr</option>
      <option value="Ghaziabad">Ghaziabad</option>
      <option value="Meerut">Meerut</option>
      </select>
    </label>
    <br><br>
    <input name="submit" type="submit" id = "submit" value="Generate Report" style="height:35px; width:120px":>&nbsp;&nbsp;
    <input name="reset" type="button" value="Reset" style="height:35px; width:80px";>
  </form>
</div>
<br>
<br>
<br>
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

<script>
function myFunction() {
  window.print();
}
</script>