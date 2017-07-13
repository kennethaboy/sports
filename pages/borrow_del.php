<?php
include("../dist/includes/dbcon.php");
$borrow_id = $_POST['borrow_id'];
$equipment = $_POST['eid'];
$borrower = $_POST['borrower'];
$qty = $_POST['qty'];

	$result=mysqli_query($con,"DELETE FROM borrow WHERE borrow_id ='$borrow_id'")
	or die(mysqli_error());

	mysqli_query($con,"UPDATE equipment SET qty=qty+'$qty' where equipment_id='$equipment'") or die(mysqli_error($con)); 
	
echo "<script>document.location='borrow.php?borrower=$borrower'</script>";  
?>
