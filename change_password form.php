<head>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<?php session_start();?>
<html>
<head>
<title>CHANGE PASSWORD</title>
</head>
<body>
<?php 

$con=mysqli_connect("localhost","root","","project");
if(isset($_POST['submit'])){
   $email_id=$_POST['email'];
   $pass=$_POST['pass'];
   $npwd=$_POST['npwd'];
   $cpwd=$_POST['cpwd'];
   
$query=mysqli_query($con, "select * from registration where email_id='$email_id' AND password='$pass'");
$num=mysqli_num_rows($query);
if($num>0)
{
$con=mysqli_query($con,"update registration set password='$npwd'where email_id='$email_id'");

} 
  
}

?>
<p style="color:red;"></p>
<form name="chngpwd" action="" method="post" onsubmit="return valid();">
<table align="center">
<tr height"50">
<th>old password :</th>
<th><input type="password" name="pass" id="pass" class="form-control"></th>
<tr height"50">
<th>new password :</th>
<th><input type="password" name="npwd" id="npwd" class="form-control"></th>
<tr height"50">
<th>confirm password :</th>
<th><input type="password" name="cpwd" id="cpwd" class="form-control"></th>
</tr>
<tr>
<th><a href="select.php"></a></th>
<th><input type="submit" name="submit" id="change password" class="btn  btn-primary" /></th>
</body>
</html>