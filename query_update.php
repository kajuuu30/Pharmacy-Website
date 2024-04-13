<?php
if(isset($_GET['x']))
{
     $sno=$_GET['x'];
?>
<form  method="post">
Name<input type="text" name="user"><br>
Password<input type="password" name="pass"><br>
<input type="submit" name="sub"><br>
</form>
<?php
if(isset($_POST['sub']))
{
	$name=$_POST['user'];
	$pass=$_POST['pass'];
	
$con=mysqli_connect("localhost","root","","project");
$x="update query set name='$name',password='$pass' where s_no='$sno'";
$y=mysqli_query($con,$x);
if($y)
{
header("location:query select.php");
//echo"updated";
}
else
{
echo"not updated".mysqli_error($con);
}
}
}

?>