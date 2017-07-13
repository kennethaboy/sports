<?php 

include('../dist/includes/dbcon.php');

	$name = $_POST['name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	
			mysqli_query($con,"INSERT INTO user_table(name,username,password) VALUES('$name','$username','$password')")or die(mysqli_error($con));

			echo "<script type='text/javascript'>alert('Successfully added new user!');</script>";
			echo "<script>document.location='user.php'</script>";  
	
?>