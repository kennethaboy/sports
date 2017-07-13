<?php 

include('../dist/includes/dbcon.php');

	$name = $_POST['name'];
	$desc = $_POST['desc'];
	$qty = $_POST['qty'];
			
			mysqli_query($con,"INSERT INTO equipment(equipment_name,equipment_desc,qty) VALUES('$name','$desc','$qty')")or die(mysqli_error($con));

			echo "<script type='text/javascript'>alert('Successfully added new Equipment!');</script>";
					  echo "<script>document.location='equipment.php'</script>";  
	
?>