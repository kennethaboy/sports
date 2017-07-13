<?php 

include('../dist/includes/dbcon.php');

	$borrow_id = $_POST['borrow_id'];
	$borrower = $_POST['borrower'];
	$eid = $_POST['eid'];
	$date = date("Y-m-d H:i:s");
			
			mysqli_query($con,"UPDATE equipment SET qty=qty+'$qty' where equipment_id='$eid'") or die(mysqli_error($con)); 
			
			mysqli_query($con,"UPDATE borrow SET status='1',date_returned='$date' where borrow_id='$borrow_id'") or die(mysqli_error($con)); 

			echo "<script type='text/javascript'>alert('Successfully returned equipment!');</script>";
					  echo "<script>document.location='return.php'</script>";  
	
?>