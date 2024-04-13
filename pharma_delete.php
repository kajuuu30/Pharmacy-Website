<head>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<?php
if(isset($_GET['x']))
{
     $sno=$_GET['x'];
$con=mysqli_connect("localhost","root","","project");
$x="Delete from pharmacy where sno='$sno'";
$y=mysqli_query($con,$x);
if($y)
{
	echo"Deleted";
}
else
{
	echo"Not deleted".mysqli_error($con);
	
}
}
?>