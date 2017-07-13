<?php 

include('../dist/includes/dbcon.php');

	$sy = $_POST['sy'];
	
			mysqli_query($con,"INSERT INTO sy(sy) VALUES('$sy')")or die(mysqli_error($con));

			echo "<script type='text/javascript'>alert('Successfully added new school year!');</script>";
			echo "<script>document.location='sy.php'</script>";  
	
?>