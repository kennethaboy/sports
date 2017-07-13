<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../dist/includes/dbcon.php');
	$id = $_POST['id'];
	$sender = $_POST['sender'];
	$receiver = $_POST['receiver'];
	$title = $_POST['title'];
	$desc = $_POST['desc'];
	$cat = $_POST['cat'];
	$type = $_POST['type'];
	
	mysqli_query($con,"update document set sender='$sender',receiver='$receiver',title='$title',description='$desc',category='$cat',type='$type' where document_id='$id'")or die(mysqli_error());
	
	echo "<script type='text/javascript'>alert('Successfully updated document details!');</script>";
	echo "<script>document.location='documents.php'</script>";  
	
?>
