<?php 

include('../dist/includes/dbcon.php');

	$id = $_POST['id'];

	$pic = $_FILES["image"]["name"];
	if ($pic=="")
		{
			$pic="default.gif";
		}
	else
		{
			$pic = $_FILES["image"]["name"];
			$type = $_FILES["image"]["type"];
			$size = $_FILES["image"]["size"];
			$temp = $_FILES["image"]["tmp_name"];
			$error = $_FILES["image"]["error"];
			
			if ($error > 0){
				die("Error uploading file! Code $error.");
			}
			else{
				if($size > 100000000000) //conditions for the file
					{
					die("Format is not allowed or file size is too big!");
					}
				else
		 	      {
					move_uploaded_file($temp, "../dist/uploads/".$pic);
			      }
				}
			}	
	
			mysqli_query($con,"update document set file='$pic' where document_id='$id'")or die(mysqli_error($con));

			echo "<script type='text/javascript'>alert('Successfully uploaded new file!');</script>";
			echo "<script>document.location='documents.php'</script>";  
	
?>