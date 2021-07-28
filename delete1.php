<?php
include("config.php");
$rank = $_GET['rank'];
$query = "Delete from college where rank = '$rank'";
$data = mysqli_query($conn , $query);
if($data)
{
	echo "<script>alert('Record Deleted Successfully')</script>";
	?>
	<Meta HTTP-EQUIV="Refresh" content="0; url=delete.php">
	<?php
	
}
else
{
	echo "Delete Process Failed";
}
?>