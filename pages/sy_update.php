<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../dist/includes/dbcon.php');
	$id = $_POST['id'];
	$sy =$_POST['sy'];
	
	mysqli_query($con,"update sy set sy='$sy' where sy_id='$id'")or die(mysqli_error($con));
	
	echo "<script type='text/javascript'>alert('Successfully updated school year details!');</script>";
	echo "<script>document.location='sy.php'</script>";  

	
?>
