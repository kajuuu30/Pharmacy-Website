<?php
$con=mysqli_connect("localhost","root","","project");
$x="create table registration(name varchar(300),password varchar(300),contact_number varchar(300),email_id varchar(300),city varchar(300),DOB varchar(300),state varchar(300),address varchar(300))";
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