<!DOCTYPE html>
<head>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="mystyle.css"> 
<title>Home</title>
<style>
.content{
	width:300px;
	border:1px solid #000;
	box-shadow:1px 1px 10px 2px #333;
	border-radius:5px;
	overflow:hidden;
}
.header{
	margin:0px;
	background:red;
	border-bottom:1px solid #000;
	animation:blinkingText 4s infinite;
	padding:15px 0px;
	}
@keyframes blinkingText{
    0%{     color: voilet;    }
    20%{    color: Blue; }
    40%{    color: white; }
    60%{    color:Yellow;  }
    80%{   color: skyblue;    }
	100%{	color: Black;}
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
.moving-body{
	padding:4px;
	height:300px;
	padding:2px;
}
.m-par{
	text-align:center;
	padding:4px;
	border-bottom:1px solid #afafaf;
}
#outerbox{
	width:700px;
	overflow:hidden;
	border:2px solid #000;
}
#sliderbox{
	position:relative;
	width:4200px;
	animation:sajal 30s infinite;
}
#sliderbox img{
	float:left;
}
@keyframes sajal{
	0%
	{
		left:0px;
	}
	13.33%
	{
		left:0px;
	}
	16.66%
		{
		left:-700px;
	}
	30%
		{
		left:-700px;
	}
	33.33%
		{
		left:-1400px;
	}
	46.67%
		{
		left:-1400px;
	}
	50%
		{
		left:-2100px;
	}
	63.33%
		{
		left:-2100px;
	}
	66.67%
		{
		left:-2800px;
	}
	80%
		{
		left:-2800px;
	}
	83.33%
		{
		left:-3500px;
	}
	96.67%
		{
		left:-3500px;
	}
	100%
	{left:-4200%px;
	}
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
u {
	font-size:72px;
	text-decoration-line:underline;
	text-decoration-style:double;
}
img {
	border-color:#000;
	border-width:5px;
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
<table width="100%" border="0">
  <tr>
    <td width="300px">
    <div class="content">
<h1 class="header" align="center"> News </h1>
<font color="white">
<marquee behavior="scroll" direction="up" scrollamount="3"   
onMouseOver="this.setAttribute('scrollamount',0,0); this.stop(); "
onMouseOut="this.setAttribute('scrollamount',2,0); this.start(); "
class="moving-body">
<script>
for(var i=0; i<=5; i++){
	document.write('<p class="m-par"> Moving Element:'+i+' add here more</p>')
}
</script>
</marquee>
</font>
</div>

    </td>
    <td align="center"><div id="outerbox">
<div id="sliderbox">
<img src="1.jpg"/>
<img src="3.jpg"/>
<img src="2.jpg"/>
<img src="6.jpg"/>
<img src="5.jpg"/>
<img src="7.jpeg"/>

</div>
</div>
</td>
    <td width="300px">
    <div class="content">
<h1 class="header" align="center"> Important Links </h1>
<div class="z">
<div class="y"><a href="https://www.india.gov.in/" target="_blank">Central Gov Site</a> </div>
<div class="y"><a href="https://bulandshahar.nic.in/" target="_blank">Bulandshahr Dm Site</a></div>
<div class="y"><a href="https://ghaziabad.nic.in" target="_blank">Ghaziabad Dm Site</a></div>
    </h2>
    </div>
    </td>
  </tr>
</table>
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
