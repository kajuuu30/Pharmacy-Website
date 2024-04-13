<head>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<head>
<script>
function abc()
{
	a=document.getElementById('rdio');
	b=document.getElementById('rio');
	if(a.checked==true)
	{
		window.location='email_forget.php';
	}
	else if(b.checked==true)
	{
		window.location='con_forget_pass.php';
	}
}
</script>
</head>
<center>
<form>
<p><b>SELECT WAY THAT YOU CAN GET YOUR PASSWORD</B></P>
<input type="radio" name="gend" id="rdio" onclick="abc()">Email_id<br>
<input type="radio" name="gend" id="rio" onclick="abc()">Contact_no

</form>