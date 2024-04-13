<?php
$con=mysqli_connect("localhost","root","","project");
$x="create table query(name varchar(300),email_id varchar(300),message varchar(300))";
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