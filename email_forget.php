<head>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<p style="color:red"></p>
<form method="post"  >
<table align="center">
<tr height="50">
<th>Enter Email_id:</th>
<th><input type="text" name="email" id="email"></th>
</tr><tr align="center" >
<th><input type="submit" name="sub" class="btn  btn-primary"></th>
</tr>
</table>
</form>
<?php
$con=mysqli_connect("localhost","root","","project");
if(isset($_POST['sub']))
{
	$email=$_POST['email'];
	$a="select * from registration where Email_id='$email' ";
$p=mysqli_query($con,$a);
$num=mysqli_num_rows($p);
if($num>0)
{
	while($qq=mysqli_fetch_array($p))
	{
		echo"YourPassword is:".$qq['password'];
	}
	
}
	
	else
	{
		echo"not mached";
	}

}

?>