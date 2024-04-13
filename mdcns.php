<?php

$con=mysqli_connect("localhost","root","","project");
$x="select * from pharmacy";
$y=mysqli_query($con,$x);
while($c=mysqli_fetch_array($y))
{
	
	echo"<a href=single_details.php?x=$c[0]>";
	?>
	<img src="<?php echo 'admin/php/'.$c[4]    ?>" height="200px" width="200px">

<?php
echo"</a>";
echo $c[2];
echo "Price".$c[5];


}

?>