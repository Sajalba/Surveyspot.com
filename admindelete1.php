<?php
include("config.php");
$off_id = $_GET['off_id'];
$query = "Delete from addofficer where off_id = '$off_id'";
$data = mysqli_query($conn , $query);
if($data)
{
	echo "<script>alert('Record Deleted Successfully')</script>";
	?>
	<Meta HTTP-EQUIV="Refresh" content="0; url=admindelete.php">
	<?php
	
}
else
{
	echo "Delete Process Failed";
}
?>