<?php 

include('../dist/includes/dbcon.php');

	$name = $_POST['name'];
	$desc = $_POST['desc'];
	$date = date("Y-m-d H:i:s");
	
			mysqli_query($con,"INSERT INTO album(album_name,album_description,date_posted) VALUES('$name','$desc','$date')")or die(mysqli_error($con));

			echo "<script type='text/javascript'>alert('Successfully added new album!');</script>";
			echo "<script>document.location='gallery.php'</script>";  
	
?>