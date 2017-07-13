<?php 

include('../dist/includes/dbcon.php');

	$name = $_POST['name'];
	$sport = $_POST['sport'];
	$sem = $_POST['sem'];
	$sy = $_POST['sy'];
	
			mysqli_query($con,"INSERT INTO athlete(member_id,sports_id,sem,sy) VALUES('$name','$sport','$sem','$sy')")or die(mysqli_error($con));

			echo "<script type='text/javascript'>alert('Successfully added new athlete!');</script>";
			echo "<script>document.location='athlete.php'</script>";  
	
?>