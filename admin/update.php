<?php 

include '../connection.php';

		
			$id = $_GET['id'];	
			$name = $_POST['name'];
			$email = $_POST['email'];
			$city = $_POST['city'];
			$contact = $_POST['contact'];

			$sql = "UPDATE customer SET name=$name ,  email =$email, city=$city , contact= $contact WHERE id =$id";
			
			mysqli_query($con , $sql);

			header('location:datalist.php');
				
?>
