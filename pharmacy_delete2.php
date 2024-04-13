<head>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<table class="table table-striped table-hover">
<tr>
<th>brand</th>
<th>medicine_name</th>
<th>purpose</th>
<th>description</th>
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
	echo"<td>".$c['description']."</td>";
	?>
<td><img src="<?php echo 'php/'.$c['image'];  ?>" height="100px" width="100px"></td>
	<?php
	echo"<td>".$c['price']."</td>";
	echo"<td><a href=pharma_delete.php?x=$c[0]><span class='glyphicon glyphicon-trash'></span></a></td>";
	echo"</tr>";	
}
?>
</table>