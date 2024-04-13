<head>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<html>
<head>
<title>admin form</title>
<center><b><h1>Admin Form</h1></b></center>
<form method="post" >
<table>
<center>
<input type="text" name="user" placeholder="enter your name" class="form-control"><br><br>
<input type="password" name="pass" placeholder="enter your password" required class="form-control"><br><br>
<input type="email" name="mail" placeholder="enter your email"required class="form-control"><br><br>
<input type="submit" name="sub" class="btn  btn-primary"><br>
</center>
</table>
</form>
<?php
if(isset($_POST['sub']))
{
	$name=$_POST['user'];
	$pass=$_POST['pass'];
	$email=$_POST['mail'];

$con=mysqli_connect("localhost","root","","project");

$s="insert into admin(name,password,email_id)values('$name','$pass','$email')";
$d=mysqli_query($con,$s);
if($d)
{
	
	echo"inserted";
}
else
{
	echo"not inserted".mysqli_error($con);
}
}
?>