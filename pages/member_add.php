<?php 

include('../dist/includes/dbcon.php');

	$last = $_POST['last'];
	$first = $_POST['first'];
	$type = $_POST['type'];
	$course = $_POST['course'];
	$address = $_POST['address'];
	$ys = $_POST['ys'];
	$gender = $_POST['gender'];
	
			mysqli_query($con,"INSERT INTO member(member_last,member_first,member_type,course,ys,address,gender) VALUES('$last','$first','$type','$course','$ys','$address','$gender')")or die(mysqli_error($con));

			echo "<script type='text/javascript'>alert('Successfully added new member!');</script>";
			echo "<script>document.location='member.php'</script>";  
	
?>