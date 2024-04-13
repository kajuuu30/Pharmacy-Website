<head>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<?php
if(isset($_GET['x']))
{
     $sno=$_GET['x'];
?>
<form  method="post">
Medicine name<input type="text" name="user" class="form-control"><br>
price<input type="text" name="price" class="form-control"><br>
<input type="submit" name="sub" class="btn  btn-primary"><br>
</form>
<?php
if(isset($_POST['sub'])) 
{
	$medicine_name=$_POST['user'];
	$price=$_POST['price'];
	
$con=mysqli_connect("localhost","root","","project");
$x="update pharmacy set medicine_name='$medicine_name',price='$price' where sno='$sno'";
$y=mysqli_query($con,$x);
if($y)
{
header("location:pharmacy_select.php");
//echo"updated";
}
else
{
echo"not updated".mysqli_error($con);
}
}
}

?>