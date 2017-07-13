<?php 

include('../dist/includes/dbcon.php');

	$name = $_POST['name'];
	$type = $_POST['type'];
	$category = $_POST['category'];
	$coach = $_POST['coach'];
	
			mysqli_query($con,"INSERT INTO sports(sports_name,sports_type,sports_gender,member_id) VALUES('$name','$type','$category','$coach')")or die(mysqli_error($con));

			echo "<script type='text/javascript'>alert('Successfully added new sport!');</script>";
			echo "<script>document.location='sports.php'</script>";  
	
?>