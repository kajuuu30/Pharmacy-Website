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
Password<input type="password" name="pass" class="form-control"><br>
<center><input type="submit" name="sub" class="btn  btn-primary"></center><br>
</form>
<?php
if(isset($_POST['sub'])) 
{
	$name=$_POST['user'];
	$pass=$_POST['pass'];
	
$con=mysqli_connect("localhost","root","","project");
$x="update admin set name='$name',password='$pass' where sno='$sno'";
$y=mysqli_query($con,$x);
if($y)
{
header("location:admin_select.php");
//echo"updated";
}
else
{
echo"not updated".mysqli_error($con);
}
}
}

?>