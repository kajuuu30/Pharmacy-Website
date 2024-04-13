<form method="post">
Old password<input type="password" name="old"><br>
New password<input type="password" name="new"><br>
Re-Enter password<input type="password" name="conf"><br>
<input type="submit" name="sub">
</form>
<?php

$con=mysqli_connect("localhost","root","","ac34");
if(isset($_POST['sub']))
{
	$old=$_POST['old'];
	
	$new=$_POST['new'];
	$conf=$_POST['conf'];
	$x="select * from class where password='$old'";
	$y=mysqli_query($con,$x);
	$n=mysqli_num_rows($y);
	if($n>0)
	{
	$up="update class set password='$new'";
	$qu=mysqli_query($con,$up);
	if($qu)
	{
		echo"updated";
	}
		else
		{
			echo"not updated";	
		}
	}	
	else
	{echo"password not found";
	}	
}
?>