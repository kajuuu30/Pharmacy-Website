<head>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<p style="color:red"></p>
<form method="post"  >
<table align="center">
<tr height="50">
<td>Contact no:</td>
<td><input type="cont" name="cont" id="cont" class="form-control"></td>
</tr><tr align="center" >
<td><input type="submit" name="sub" class="btn  btn-primary"></td>
</tr>
</table>
</form>
<?php
$con=mysqli_connect("localhost","root","","project");
if(isset($_POST['sub']))
{
	$cont=$_POST['cont'];
	$a="select * from registration where Cont='$cont' ";
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