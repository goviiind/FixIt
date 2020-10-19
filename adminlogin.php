<?php


require 'connection.php';





	$username= $_POST['admin-user'];
	$password= $_POST['admin-pass'];

	

	$sql ="SELECT * FROM admin ";

	$result=mysqli_query($con , $sql);

	 if ( mysqli_num_rows($result) > 0)
	  {
		while ($user = mysqli_fetch_array($result)) 
		{
			if ($username == $user['Username'] && $password == $user['Password']) 
			{
				header('location: admin/admin.php');
			}else
			{
				header('location:./admin/login.php');
				echo "<script>alert('Username and password are incorrect');</script>";
				
			}
		}
	
	 }
	







?>
