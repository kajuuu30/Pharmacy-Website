<head>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<p style="color:red"></p>
<form method="post"  >
<table align="center">
<tr height="50">
<th>Contact_no:</th>
<th><input type="number" name="num" id="num" class="form-control"></th>
</tr><tr align="center" >
<th><input type="submit" name="sub" class="btn  btn-primary"></th>
</tr>
</table>
</form>
<?php
$con=mysqli_connect("localhost","root","","project");
if(isset($_POST['sub']))
{
	$Cont=$_POST['num'];
	$a="select * from registration where contact_number='$Cont' ";
$p=mysqli_query($con,$a);
$num=mysqli_num_rows($p);
if($num>0)
{
	while($qq=mysqli_fetch_array($p))
	{
		echo"Your password is:".$qq['password'];
	}
	
}
	
	else
	{
		echo"not mached";
	}

}

?>