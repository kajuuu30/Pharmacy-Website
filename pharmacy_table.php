<?php
$con=mysqli_connect("localhost","root","","project");
$x="create table pharmacy(brand varchar(300),medicine_name varchar(300),purpose varchar(300),image varchar(300),price varchar(300))";
$y=mysqli_query($con,$x);
if($y)
{
	echo"created";
}
else
{
	echo"not created".mysqli_error($con);
}
?>