<?php 

include('../dist/includes/dbcon.php');

	$id = $_POST['id'];
	$award = $_POST['award'];
			
			mysqli_query($con,"INSERT INTO award(athlete_id,award) VALUES('$id','$award')")or die(mysqli_error($con));

			echo "<script type='text/javascript'>alert('Successfully added an award!');</script>";
	        echo "<script>document.location='athlete.php'</script>";  
	
?>