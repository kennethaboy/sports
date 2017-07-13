<?php 

include('../dist/includes/dbcon.php');

	$category = $_POST['category'];
	
			mysqli_query($con,"INSERT INTO category(category_name) VALUES('$category')")or die(mysqli_error($con));

			echo "<script type='text/javascript'>alert('Successfully added new category!');</script>";
			echo "<script>document.location='category.php'</script>";  
	
?>