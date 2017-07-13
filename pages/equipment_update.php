<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../dist/includes/dbcon.php');
	$id = $_POST['id'];
	$name =$_POST['name'];
	$desc =$_POST['desc'];
	$qty = $_POST['qty'];
	
	mysqli_query($con,"update equipment set equipment_name='$name',equipment_desc='$desc',qty='$qty' where equipment_id='$id'")or die(mysqli_error());
	
	echo "<script type='text/javascript'>alert('Successfully updated equipment details!');</script>";
	echo "<script>document.location='equipment.php'</script>";  

	
?>
