<head>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<form method="post">
email id<input type="email" name="email" class="form-control"><br>
password<input type="password" name="pass" class="form-control"><br>
<input type="submit" name="sub" class="btn  btn-primary"><br>
</form>
<?php
if (isset($_POST['sub']))
{
	$em=$_POST['email'];
	$pass=$_POST['pass'];
$con=mysqli_connect("localhost","root","","project");
$x="select * from admin where email_id='$em' and password='$pass'";
$y=mysqli_query($con,$x);
$n=mysqli_num_rows($y);
if($n>0)
{
	//echo"login successfull";
	header("location:dash_board.php");
}
else
{
	echo"wrong email id and password";
}
}
?>