
<?php

include '../connection.php';


$id = $_GET['id'];

$sql = "DELETE FROM customer WHERE id=$id";
mysqli_query($con,$sql);


header("location:datalist.php")
?>