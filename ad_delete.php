<?php 
$con=mysqli_connect("localhost","root","","project");
if(isset($_GET['x']))
{
	$sno=$_GET['x'];
$x="delete from admin where sno='$sno'";
$y=mysqli_query($con,$x);
if($y)
{
	echo"deleted";
	header("location:admin_delete.php");
}
else
{
	echo"not deleted";
}
}
?>
