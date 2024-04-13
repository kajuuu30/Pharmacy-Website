<head>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<table class="table table-striped table-hover">
<tr>
<th>Name</th>
<th>password</th>
<th>Email_id</th>
</tr>
<?php
$con=mysqli_connect("localhost","root","","project");
$x="select * from admin";
$y=mysqli_query($con,$x);
while($c=mysqli_fetch_array($y))
{
	echo"<tr>";
	/*echo"<td>$c[0]</td>";
	echo"<td>$c[1]</td>";
	*/
	echo"<td>".$c['name']."</td>";
	echo"<td>".$c['password']."</td>";
	echo"<td>".$c['email_id']."</td>";
	echo"<td><a href=admin_update.php?x=$c[0]><span class='glyphicon glyphicon-edit'></span></a></td>";
	echo"</tr>";	
}
?>
</table>