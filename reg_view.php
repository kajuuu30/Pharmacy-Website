<head>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<table class="table table-striped table-hover">
<tr>
<th>Name</th>
<th>password</th>
<th>contact_number</th>
<th>Email_id</th>
<th>city</th>
<th>DOB</th>
<th>state</th>
<th>address</th>
</tr>
<?php
$con=mysqli_connect("localhost","root","","project");
$x="select * from registration";
$y=mysqli_query($con,$x);
while($c=mysqli_fetch_array($y))
{
	echo"<tr>";
	/*echo"<td>$c[0]</td>";
	echo"<td>$c[1]</td>";
	*/
	echo"<td>".$c['name']."</td>";
	echo"<td>".$c['password']."</td>";
	echo"<td>".$c['contact_number']."</td>";
	echo"<td>".$c['email_id']."</td>";
	echo"<td>".$c['city']."</td>";
	echo"<td>".$c['DOB']."</td>";
	echo"<td>".$c['state']."</td>";
	echo"<td>".$c['address']."</td>";
	echo"</tr>";	
}
?>
</table>