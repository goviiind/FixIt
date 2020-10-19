<?php 


include '../connection.php';




$name = $_POST['name'];
$email = $_POST['email'];
$city = $_POST['city'];
$contact = $_POST['contact'];



if (isset($_POST ['ad-plum'])) {

	


	$query = "insert into customer (service,name,email,city,contact)
	values ('Plumber','$name','$email','$city','$contact')";
	
	
	
}
else{
	


	$query = "insert into customer (service,name,email,city,contact)
	values ('Electrician','$name','$email','$city','$contact')";
	
}



mysqli_query($con,$query);

header('location:admin.php');



 ?>