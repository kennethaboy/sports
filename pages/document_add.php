<?php 

include('../dist/includes/dbcon.php');

	$sender = $_POST['sender'];
	$receiver = $_POST['receiver'];
	$title = $_POST['title'];
	$desc = $_POST['desc'];
	$cat = $_POST['category'];
	$type1 = $_POST['type'];
	$date = date("Y-m-d H:i:s");

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
	
			mysqli_query($con,"INSERT INTO document(sender,receiver,title,description,category,file,date_uploaded,type) VALUES('$sender','$receiver','$title','$desc','$cat','$pic','$date','$type1')")or die(mysqli_error($con));

			echo "<script type='text/javascript'>alert('Successfully added new document!');</script>";
			echo "<script>document.location='documents.php'</script>";  
	
?>