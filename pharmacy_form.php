<?php
error_reporting(0);
?>
<head>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<form method="post" enctype="multipart/form-data">
<div>
<center><h1>PHARMACY FORM</h1></center>
<hr>
<center>Brand: <input type="text" name="brand" class="form-control" /><br /></center>
<center><br>Medicine name: <input type="text" name="medicine_name" class="form-control" /><br /></center>
<center><br>Purpose: <input type="text" name="purpose" class="form-control" /><br /></center>
<center><br>description<textarea name="description" class="form-control"></textarea><br></center>
<center><br>Image: <input type="file" name="img" class="form-control" /><br /></center>
<center><br>price: <input type="text" name="price" class="form-control" /><br /></center>
<center><br><input type="submit"  name="submit" class="btn  btn-primary"/>
<hr>
</div>
</form>
<?php
$con=mysqli_connect("localhost","root","","project");
if(isset($_POST['submit'])){
	
   $brand=$_POST['brand'];
   $medicine_name=$_POST['medicine_name'];
   $purpose=$_POST['purpose'];
   $description=$_POST['description'];
   $price=$_POST['price'];
   
   $name=$_FILES['img']['name'];
	$type=$_FILES['img']['type'];
	$size=$_FILES['img']['size'];
	$temp=$_FILES['img']['tmp_name'];
	$path='php/'.$name;
	$st=strtr($description,0,1);
$m=move_uploaded_file($temp,$path);


$x="insert into pharmacy(brand,medicine_name,purpose,description,image,price)values('$brand','$medicine_name','$purpose','$st','$name','$price')";
$y=mysqli_query($con,$x);
if($y)
	{	
         echo "inserted";
}
     else
 {
     echo"not inserted".mysqli_error($con);
 }
}
   

?>