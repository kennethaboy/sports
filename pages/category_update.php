<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../dist/includes/dbcon.php');
	$id = $_POST['id'];
	$cat =$_POST['category'];
	
	mysqli_query($con,"update category set category_name='$cat' where category_id='$id'")or die(mysqli_error());
	
	echo "<script type='text/javascript'>alert('Successfully updated category details!');</script>";
	echo "<script>document.location='category.php'</script>";  
	
?>
