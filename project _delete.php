<?php
if(isset($_GET['x']))
{
	$sno=$_GET['x'];
$con=mysqli_connect("localhost","root","","project");
$x="Delete from registration where sno='$sno'";
$y=mysqli_query($con,$x);
if($y)
{
	echo"Deleted";
}
else
{
	echo"Not deleted"mysqli_error($con);
	
}
}
?>