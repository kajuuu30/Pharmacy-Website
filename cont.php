
<p style="color:red"></p>
<form method="post"  >
<table align="center">
<tr height="50">
<td> Contact:</td>
<td><input type="number" name="numb" id="email"></td>
</tr><tr align="center" >
<td><input type="submit" name="sub" ></td>
</tr>
</table>
</form>
<?php
$con=mysqli_connect("localhost","root","","project");
if(isset($_POST['sub']))
{
	$number=$_POST['numb'];
	$a="select * from registration_form2 where Contact='$number' ";
$p=mysqli_query($con,$a);
$num=mysqli_num_rows($p);
if($num)
{
	while($qq=mysqli_fetch_array($p))
	{
		echo"Your Password is:".$qq['Password'];
	}
	
}
	
	else
	{
		echo"not mached";
	}

}

?>
