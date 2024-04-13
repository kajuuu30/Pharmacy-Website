<head>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<?php
if(isset($_GET['x']))
{
     $sno=$_GET['x'];
?>
<form  method="post">
Name<input type="text" name="user" class="form-control"><br>
message<input type="text" name="pass" class="form-control"><br>
<input type="submit" name="sub"class="btn  btn-primary"><br>
</form>
<?php
if(isset($_POST['sub']))
{
	$name=$_POST['user'];
	$message=$_POST['pass'];
	
$con=mysqli_connect("localhost","root","","project");
$x="update query set name='$name',message='$text' where sno='$sno'";
$y=mysqli_query($con,$x);
if($y)
{
header("location:query_select.php");
//echo"updated";
}
else
{
echo"not updated".mysqli_error($con);
}
}
}

?>