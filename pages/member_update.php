<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../dist/includes/dbcon.php');
	$id = $_POST['id'];
	$last =$_POST['last'];
	$first = $_POST['first'];
	$type = $_POST['type'];
	$course = $_POST['course'];
	$ys = $_POST['ys'];
	$address = $_POST['address'];
	$gender = $_POST['gender'];
	
	
	mysqli_query($con,"update member set member_last='$last',member_first='$first',member_type='$type',course='$course',address='$address',gender='$gender',ys='$ys' where member_id='$id'")or die(mysqli_error());
	
	echo "<script type='text/javascript'>alert('Successfully updated member details!');</script>";
	echo "<script>document.location='member.php'</script>";  

	
?>
