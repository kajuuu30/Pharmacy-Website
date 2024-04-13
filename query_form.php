<head>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<form method="post" >
Name : <input type="text" name="user" placeholder="Enter Your Name" class="form-control"/><br />
Email_id : <input type="email" name="email" placeholder="Enter Your Email" class="form-control"/><br />
Message : <textarea name="text" class="form-control"></textarea><br/>
<input type="submit" value="Submit" name="submit" class="btn  btn-primary"/>
</form>
<?php
$con=mysqli_connect("localhost","root","","project");
if(isset($_POST['submit'])){
	
	$name=$_POST['user'];
	$email_id=$_POST['email'];
	$message=$_POST['text'];
	
	$x="insert into query(name,email_id,message)values('$name','$email_id','$message')";
	$y=mysqli_query($con,$x);
if($y)
{
	echo"inserted";
}
else
{
	echo"not inserted".mysqli_error($con);
}
	
}
?>