<?php
session_start();
include("config.php");
?>
<form action="" method="post">
Username: <input name="user" type="text" value=""/><br><br>
Password: <input name="pass" type="password" value=""/><br><br>
<input type="submit" name="submit" value="Login"/>
</form>
<?php
if(isset($_POST['submit']))
{
	$user = $_POST['user'];
	$pwd = $_POST['pass'];
	$query = "SELECT * FROM officer WHERE user='$user' && pass='$pwd'";
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