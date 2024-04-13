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
<tr height="50">
<td>Email_id :</td>
<td><input type="text" name="email" id="email"></td>
</tr>
<tr height"50">
<td>old password :</td>
<td><input type="password" name="pass" id="pass"></td>
<tr height"50">
<td>new password :</td>
<td><input type="password" name="npwd" id="npwd"></td>
<tr height"50">
<td>confirm password :</td>
<td><input type="password" name="cpwd" id="cpwd"></td>
</tr>
<tr>
<td><a href="select.php">back to login page</a></td>
<td><input type="submit" name="submit" id="change password" /></td>
</body>
</html>