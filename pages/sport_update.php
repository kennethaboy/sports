<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../dist/includes/dbcon.php');
	$id = $_POST['id'];
	$name =$_POST['name'];
	$type =$_POST['type'];
	$category =$_POST['category'];
	
	mysqli_query($con,"update sports set sports_name='$name',sports_type='$type',sports_gender='$category' where sports_id='$id'")or die(mysqli_error($con));
	
	echo "<script type='text/javascript'>alert('Successfully updated sports details!');</script>";
	echo "<script>document.location='sports.php'</script>";  

	
?>
