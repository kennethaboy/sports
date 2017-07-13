<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../dist/includes/dbcon.php');

	$sem = $_POST['sem'];
	$sy = $_POST['sy'];
	
	mysqli_query($con,"update settings set sem='$sem',sy='$sy'")or die(mysqli_error());
	
	echo "<script type='text/javascript'>alert('Successfully set semester and school year!');</script>";
	echo "<script>document.location='settings.php'</script>";  
	
?>
