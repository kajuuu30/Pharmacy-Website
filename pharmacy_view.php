<head>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<table  class="table table-striped table-hover">
<tr>
<th>brand</th>
<th>medicine_name</th>
<th>purpose</th>
<th>discription</th>
<th>image</th>
<th>price</th>
</tr>
<?php
$con=mysqli_connect("localhost","root","","project");
$x="select * from pharmacy";
$y=mysqli_query($con,$x);
while($c=mysqli_fetch_array($y))
{
	echo"<tr>";
	/*echo"<td>$c[0]</td>";
	echo"<td>$c[1]</td>";
	*/
	echo"<td>".$c['brand']."</td>";
	echo"<td>".$c['medicine_name']."</td>";
	echo"<td>".$c['purpose']."</td>";
	echo"<td>".$c['discription']."</td>";
	echo"<td>".$c['image']."</td>";
	echo"<td>".$c['price']."</td>";
	echo"</tr>";	
}
?>
</table>