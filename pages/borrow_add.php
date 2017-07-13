<?php 

include('../dist/includes/dbcon.php');

	$equipment = $_POST['equipment'];
	$qty = $_POST['qty'];
	$borrower = $_POST['borrower'];
	$date = date("Y-m-d H:i:s");
	
			mysqli_query($con,"UPDATE equipment SET qty=qty-'$qty' where equipment_id='$equipment'") or die(mysqli_error($con)); 
			
			mysqli_query($con,"INSERT INTO borrow(equipment_id,borrow_qty,date_borrowed,member_id) VALUES('$equipment','$qty','$date','$borrower')")or die(mysqli_error($con));

			echo "<script type='text/javascript'>alert('Successfully borrowed equipment/s!');</script>";
	        echo "<script>document.location='borrow.php?borrower=$borrower'</script>";  
	
?>