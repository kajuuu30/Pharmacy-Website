<?php

$con=mysqli_connect("localhost","root","","project");
if(isset($_GET['x']))
{
	$sno=$_GET['x'];
$x="select * from pharmacy where sno='$sno'";
$y=mysqli_query($con,$x);
while($c=mysqli_fetch_array($y))
{
	?>
	<img src="<?php echo 'admin/php/'.$c[4]    ?>" height="200px" width="200px">

<?php
echo "Brand".$c[2]."<br>";
echo "Medicine Name".$c[3]."<br>";
echo "Purpose".$c[4]."<br>";
echo "Price".$c[5];

}
}

?>