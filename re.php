<?php
include('config.php');
?>
<!DOCTYPE html>
<head>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="mystyle.css"> 
<title>Agra Report</title>
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
        <td height="189" colspan="6"><marquee behavior="alternate" direction="right"><u>Agra</u></marquee></td>
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
 <table width="100%">
  <tr class="th1">
    <th width="3%">Rank</th>
    <th width="6%">Type</th>
    <th width="20%">Name</th>
    <th width="18%">Address</th>
    <th width="10%">Total Intake(Engineering)</th>
    <th width="10%">Total Intake(Honrs)</th>
    <th width="9%">Courses</th>
    <th width="11%">Affilated University</th>
    <th width="9%">Website</th>
  </tr>
  <tr class="td1">
    <td>84</td>
    <td>Private</td>
    <td>DayalBagh Educational Institute </td>
    <td>Dayal Bagh Rd, DayalBagh, Agra, Uttar Pradesh 282005</td>
    <td>640</td>
    <td>00</td>
    <td>B-Tech, M-Tech</td>
    <td>Deemed University</td>
    <td><a href="https://www.dei.ac.in/dei/">Click Here</a></td>
   </tr>
   <tr class="td1">
   <td>220</td>
    <td>Private</td>
    <td>ACE COLLEGE OF ENGINEERING & MANAGEMENT </td>
    <td>17 KM STONE, AGRA-KANPUR ROAD, NH-2 ETMADPUR, AGRA 283202</td>
    <td>240</td>
    <td>00</td>
    <td>B-Tech</td>
    <td>AKTU</td>
    <td><a href="http://www.acecollegeagra.com">Click Here</a></td>
    </tr>
    <tr class="td1">
   <td>151</td>
    <td>Private</td>
    <td>AGRA PUBLIC INSTITUTE OF TECH. & COMPUTER EDUCATION,AGRA </td>
    <td>Heera lal ki pyau, Artoni,Agra - 282007</td>
    <td>1020</td>
    <td>00</td>
    <td>B.Pharm,M.Pharma,</td>
    <td>AKTU</td>
    <td><a href="http://www.agrapublic.com">Click Here</a></td>
    </tr>
    <tr class="td1">
   <td>51</td>
    <td>Private</td>
    <td>DR. BHIMRAO AMBEDKAR UNIVERSITY, AGRA</td>
    <td>Paliwal Park, Park Rd, Agra, Uttar Pradesh 282004</td>
    <td>1560</td>
    <td>1220</td>
    <td>B.Tech, M.Tech, B.Com(Honors), BSC. (Honors)</td>
    <td>Self  University</td>
    <td><a href="https://www.dbrau.org.in">Click Here</a></td>
    </tr>
     <tr class="td1">
   <td>160</td>
    <td>Private</td>
    <td>ANAND-ENGG.COLLEGE,AGRA (001)</td>
    <td>18 KM Milestone, Agra - Mathura National Highway No. 2, Keetham, Agra- 282007</td>
    <td>1220</td>
    <td>00</td>
    <td>B.Tech,M.Tech,MBA,</td>
    <td>AKTU</td>
    <td><a href="http://www.aecagra.org">Click Here</a></td>
    </tr>
</table>
<center>
<br>
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
</script>