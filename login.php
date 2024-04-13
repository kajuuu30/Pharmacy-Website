<form  method="post" enctype="multipart/form-data">
Email_id<input type="mail" name="mail"><br>
Password<input type="password" name="pass"><br>
<input type="submit" name="sub"><br>
<a href="login.php">forget password</a>
</form>
<?php
if(isset($_POST['sub']))
{
	$em=$_POST['mail'];
	
$con=mysqli_connect("localhost","root","","project");
$x="select * from registration where Email_id='$em' ";
$y=$y=mysqli_query($con,$x);
$n=mysqli_num_rows($y); 
if($n>0)
        {
            	echo "email already exists";
        }
else
{
	echo"account created";
}
}
?>