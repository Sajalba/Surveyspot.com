<?php
include('config.php');
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

.td1{
	 font-family: "Trebuchet MS", Arial, Verdana;
  font-size: 16px;
  background-color:white;
  border-style: solid;
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
        <td height="189" colspan="6"><marquee behavior="alternate" direction="right"><u><?php echo strtoupper("$_GET[district]"); ?></u></marquee></td>
        </tr>
        </table>
        <table class="a" width="1113" rules="groups" >
      <tr>
        <th width="132"><a href="home.php">Home</a></th>
        <th width="148"><a href="report.php">Report</a></th>
        <th width="107"><a href="help.php">Help</a></th>
        <th width="196"><a href="feedback.php">Feedback</a></th>
        <th width="260"><a href="officer.php">Officer Login</a></th>
        <th width="244"><a href="admin.php">Admin Login</a></th>
      </tr>
    </table>  
  </tr>
  </table>
</div>
<br>
 <center> <table width="100%">
  <tr class="th1">
    <th width="6%">Rank</th>
    <th width="8%">Type</th>
    <th width="10%">Name</th>
    <th width="15%">Address</th>
    <th width="10%">District</th>
    <th width="8%">Total Intake (Engineering)</th>
    <th width="8%">Total Intake (Honrs.)</th>
    <th width="12%">Courses</th>
    <th width="15%">Affilated University</th>
    <th width="8%">Website</th>
    </tr>
	
<?php
		$dis = $_GET['district'];
		$query = "SELECT * FROM college where district ='$dis'";
		$data = mysqli_query($conn, $query);
		$total = mysqli_num_rows($data);
		
	if($total!=0)
	{
		while($result = mysqli_fetch_assoc($data))
		{
			echo "<tr class='th1'>
				<th width=6%>".$result['rank']."</th>
				<th width=8%>".$result['type']."</th>
				<th width=10%>".$result['name']."</th>
				<th width=15%>".$result['address']."</td>
				<th width=10%>".$result['district']."</th>
				<th width=8%>".$result['engg_intake']."</th>
				<th width=8%>".$result['hon_intake']."</th>
				<th width=12%>".$result['courses']."</th>
				<th width=15%>".$result['univ']."</th>
				<th width=8%>" ?><a target=_blank href="http://<?php echo "$result[web]" ?> "><?php echo "Click Here</a> </th>
				</tr>";
		}
	}
	else
	{
		echo "<p> <font color=green size='6pt'><b> <center> No Record Found </b></font></p>";
	}

?> 
 </table>
 <center>
<br>
<button onClick="goBack()" style="height:35px; width:60px;">Back</button>&nbsp;&nbsp;
<button onclick="myFunction()" style="height:35px; width:60px;">Print</button>
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
function goBack() {
  window.history.back();
}
</script>