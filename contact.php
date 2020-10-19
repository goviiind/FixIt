<?php 

include 'connection.php';





$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['msg'];

$query = "insert into contact(name,email,message)
values('$name','$email','$msg')";

mysqli_query($con,$query);

header('location:index.php')

 ?>