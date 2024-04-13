<?php
session_start();
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html>
<head>
<title> Login Form</title>
<!-- For-Mobile-Apps -->
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Lucid Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //For-Mobile-Apps -->
<!-- Style --> <link rel="stylesheet" href="user login temp/css/style.css" type="text/css" media="all" />
</head>
<body>
<div class="container">
<h1>LOGIN FORM</h1>
	<div class="signin">
     	<form method="post">
	      	<input type="text" name="text1" class="user" value="Enter name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'rachelgreen';}" />
	      	<input type="password" name="password" class="pass" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" />
	      	<label>
		  		<input type="checkbox" value="Remember-Me" /> Remember Me?
		  	</label>
          	<input type="submit" name="sub" value="LOGIN" />
	 	</form>
		<?php
if (isset($_POST['sub']))
{
	$em=$_POST['text1'];
	$pass=$_POST['password'];
$con=mysqli_connect("localhost","root","","project");
$x="select * from registration where email_id='$em' and password='$pass'";
$y=mysqli_query($con,$x);
$c=mysqli_fetch_array($y);
$n=mysqli_num_rows($y);
if($n>0)
{
	//echo"login successfull";
	
	
	$_SESSION['sno']=$c['sno'];
	//echo $_SESSION['sno'];
	header("location:user_panel.php");
}
else
{
	echo"<div class='alert alert-danger' role='alert'>oops! wrong email id and password</div>";
}
}
?>
		
	</div>
</div>
<div class="footer">
     <p>Copyright &copy; 2021 Login Form. All Rights Reserved | Design by <a href="http://w3layouts.com">kajal yadav</a></p>
</div>
</body>
</html>