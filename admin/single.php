<?php

require '../connection.php';

$id = $_GET['id'];

$sql ="SELECT * FROM customer WHERE id =$id";

$result = mysqli_query($con , $sql);

$customer = mysqli_fetch_assoc($result);

?>


<ul style="font-size:2rem;">
	<li><strong>ID 			:</strong>	<?php echo $customer['id']; ?></li>
	<li><strong>Service 	:</strong>	<?php echo $customer['service']; ?></li>
	<li><strong>Name 		:</strong>	<?php echo $customer['name']; ?></li>
	<li><strong>Email 		:</strong>	<?php echo $customer['email']; ?></li>
	<li><strong>City 		:</strong>	<?php echo $customer['city']; ?></li>
	<li><strong>Contact 	:</strong>	<?php echo $customer['contact']; ?></li>
</ul>

