<?php 

include('../dist/includes/dbcon.php');

	$course = $_POST['course'];
	$title = $_POST['title'];
	
			
			mysqli_query($con,"INSERT INTO course(course,course_title) VALUES('$course','$title')")or die(mysqli_error($con));

			echo "<script type='text/javascript'>alert('Successfully added new course!');</script>";
					  echo "<script>document.location='course.php'</script>";  
	
?>