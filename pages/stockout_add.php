<?php 

include('../dist/includes/dbcon.php');

	$name = $_POST['prod_name'];
	$qty = $_POST['qty'];
	$date = date("Y-m-d H:i:s");
	
			mysqli_query($con,"UPDATE product SET prod_qty=prod_qty-'$qty' where prod_id='$name'") or die(mysqli_error()); 
			
		$query=mysqli_query($con,"select prod_price from product where prod_id='$name'")or die(mysqli_error());
		$row=mysqli_fetch_array($query);
		$price=$row['prod_price'];
			mysqli_query($con,"INSERT INTO stockout(prod_id,qty,date,price) VALUES('$name','$qty','$date','$price')")or die(mysqli_error($con));

			echo "<script type='text/javascript'>alert('Successfully disposed stocks!');</script>";
					  echo "<script>document.location='stockout.php'</script>";  
	
?>