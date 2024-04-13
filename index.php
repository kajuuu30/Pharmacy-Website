<?php
session_start();
?>
<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="zxx">

<!-- Head -->
<head>

    <title> Signin Form </title>

    <!-- Meta-Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- style CSS -->
    <link rel="stylesheet" href="login/css/style.css" type="text/css" media="all">

    <!-- fontawesome -->
    <link rel="stylesheet" href="login/css/font-awesome.min.css" type="text/css" media="all">

    <!-- google fonts -->
    <link href="login//fonts.googleapis.com/css?family=Mukta:300,400,500" rel="stylesheet">

</head>
<!-- //Head -->

<!-- Body -->
<body>

    <section class="main">

        <div class="bottom-grid">
            <div class="logo">
                <h1> <a href="user_panel.php">login form</a></h1>
            </div>
        </div>
        <div class="content-w3ls">
            <div class="text-center icon">
                <span class="fa fa-meetup"></span>
            </div>
	

            <div class="content-bottom">
                <form  method="post">
                    <div class="field-group">
				
                        <span class="fa fa-user" aria-hidden="true"></span>
                        <div class="wthree-field">
                            <input name="text1" id="text1" type="email" value="" placeholder="email id" required>
                        </div>
                    </div>
                    <div class="field-group">
                        <span class="fa fa-lock" aria-hidden="true"></span>
                        <div class="wthree-field">
                            <input name="password" id="myInput" type="Password" placeholder="Password">
                        </div>
                    </div>
                    <div class="wthree-field">
                        <button type="submit" class="btn" name="sub">login here</button>
                    </div>
                    <ul class="list-login">
                        <li class="switch-agileits">
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                                keep Logged in
                            </label>
                        </li>
                        <li>
                            <a href="forget.php" class="text-right">forgot password?</a>
                        </li>
                        <li class="clearfix"></li>
                    </ul>
                    <ul class="list-login-bottom">
                        <li class="">
                            <a href="#url" class="">Create Account</a>
                        </li>
                        <li class="">
                            <a href="#url" class="text-right">Need Help?</a>
                        </li>
                        <li class="clearfix"></li>
                    </ul>
                </form>
				
				<?php
if (isset($_POST['sub']))
{
	$em=$_POST['text1'];
	$pass=$_POST['password'];
$con=mysqli_connect("localhost","root","","project");
$x="select * from admin where email_id='$em' and password='$pass'";
$y=mysqli_query($con,$x);
$c=mysqli_fetch_array($y);
$n=mysqli_num_rows($y);
if($n>0)
{
	//echo"login successfull";
	
	
	$_SESSION['sno']=$c['sno'];
	//echo $_SESSION['sno'];
	header("location:dash_board.php");
}
else
{
	echo"<div class='alert alert-danger' role='alert'>oops!
	wrong email id and password</div>";
}
}
?>
				
				
            </div>
        </div>
        <div class="copyright">
            <p>© 2021 login form. All rights reserved | Design by kajal yadv</p>
        </div>
    </section>

</body>
<!-- //Body -->

</html>
