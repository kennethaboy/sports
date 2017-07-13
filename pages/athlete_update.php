<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../dist/includes/dbcon.php');
	$id = $_POST['id'];
	$name = $_POST['name'];
	$sport = $_POST['sport'];
	$sem = $_POST['sem'];
	$sy = $_POST['sy'];
	
	mysqli_query($con,"update athlete set member_id='$name',sports_id='$sport',sem='$sem',sy='$sy' where athlete_id='$id'")or die(mysqli_error());
	
	echo "<script type='text/javascript'>alert('Successfully updated athlete details!');</script>";
	echo "<script>document.location='athlete.php'</script>";  
	
?>
