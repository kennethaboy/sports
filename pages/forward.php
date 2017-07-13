<?php 

	include('../dist/includes/dbcon.php');

	$sem = $_POST['sem'];
	$sy = $_POST['sy'];
	$id = $_POST['id'];

		$query=mysqli_query($con,"select * from athlete where athlete_id='$id'")or die(mysqli_error($con));
		    $row=mysqli_fetch_array($query);
		    	$member_id=$row['member_id'];
		    	$sports_id=$row['sports_id'];

		    	$check=mysqli_query($con,"select * from athlete where member_id='$member_id' and sy='$sy' and sem='$sem'")or die(mysqli_error($con));
						$count=mysqli_num_rows($check);				    			

				    	if ($count>0)
				    	{
				    		echo "<script type='text/javascript'>alert('Athlete already forwarded!');</script>";
							echo "<script>document.location='athlete.php'</script>";  
				    	}
				    	else
				    	{
				    		mysqli_query($con,"INSERT INTO athlete(member_id,sports_id,sem,sy) VALUES('$member_id','$sports_id','$sem','$sy')")or die(mysqli_error($con));	

				    		echo "<script type='text/javascript'>alert('Successfully forwarded athlete!');</script>";
							echo "<script>document.location='athlete.php'</script>";  
				    	}
		    	
			
			
	
?>