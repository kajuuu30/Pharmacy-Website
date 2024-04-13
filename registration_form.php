<head>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<?php //session_start();?>
<html>
<head>
<title>REGISTRATION FORM</title>
</head>
<body>

<form method="post" enctype="multipart/form-data"> 
<div class="container">
<center><h1>Register Here</h1></center>
<center><p>Please fill in the details to create an account with us.</p></center>
<hr>
<p>
<center><label for="Name"><b></b></label>
<input type="text" placeholder="Enter name" name="name" class="form-control"><br></center>
<p>
<p>
<center><label for="email" ><b></b></label>
<input type="text" placeholder="Enter Email" name="email" class="form-control"><br></center>
<p>
<p>
<center><label for="pwd"><b></b></label>
<input type="password" placeholder="Enter Password" name="pwd" class="form-control"><br></center>
<p>
<p>
<center><label for="confirm"><b></b></label>
<input type="password" placeholder="Confirm Password" name="confirm" class="form-control"><br></center>
<p>
<p>
<center><label for="contact"><b></b></label>
<input type="count" placeholder="Enter your contact number" name="contact"class="form-control"><br></center>
<p>
<p>
<center><label for="Name"><b></b></label>
<input type="text" placeholder="Enter city" name="city" class="form-control"><br></center>
<p>
<p>
<center><label for="birthday"></label>
<input type="date" id="birthday" name="birthday" class="form-control"><br></center>
<p>
</div>
<p>
<center><select name="state" placeholder="Enter state" class="form-control">
<option>punjab</option>
<option>up</option>
<option>mp</option>
<option>hr</option> 
</select><br></center>
<p>
<p>
<center><br><textarea name="add" placeholder="Enter address" class="form-control"></textarea><br></center>
<p>
<center><input type="submit" name="sub" class="btn  btn-primary"><br></center>
<hr>
</div>
<div class="container signin">
<p>Already have an account? <a href="#">Sign in</a>.</p>
<a href="login.php">login here</a>
</div>
</form>

<?php 

$con=mysqli_connect("localhost","root","","project");
if(isset($_POST['sub'])){
   $name=$_POST['name'];
   $email=$_POST['email'];
   $pass=$_POST['pwd'];
   $cpwd=$_POST['confirm'];
   $contact_number=$_POST['contact'];
   $city=$_POST['city'];
   $DOB=$_POST['birthday'];
   $state=$_POST['state'];
   $address=$_POST['add'];
   
$query=mysqli_query($con, "select * from registration where email_id='$email'");
//$y=mysqli_query($con,$x);
$n=mysqli_num_rows($query); 
if($n>0)
        {
            	echo "email already exists";
        }

else{		

$x="insert into registration(name,password,email_id,contact_number,city,DOB,state,address)values('$name','$pass','$email','$contact_number','$city','$DOB','$state','$address')";
$y=mysqli_query($con,$x);
if($y)
{                                     
	echo"details inserted";
	//header("location:login.php");
}
else
{
	echo"details  not inserted".mysqli_error($con);
}

}
}

?>