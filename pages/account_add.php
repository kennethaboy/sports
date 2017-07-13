<?php 

include('../dist/includes/dbcon.php');

	$id = $_POST['id'];
	$amount = $_POST['amount'];
	$type = $_POST['type'];
	$date = date("Y-m-d H:i:s");
	
	if ($type=="Payment")
	  {
	   	mysqli_query($con,"UPDATE customer SET balance=balance-'$amount' where cust_id='$id'") or die(mysqli_error()); 
	  }
	else if ($type=="Receivables")
	 {
		mysqli_query($con,"UPDATE customer SET balance=balance+'$amount' where cust_id='$id'") or die(mysqli_error()); 
	 }
	else if ($type=="Credit Memo")
	 {
		mysqli_query($con,"UPDATE customer SET balance=balance-'$amount' where cust_id='$id'") or die(mysqli_error()); 
	 }
			mysqli_query($con,"INSERT INTO account(cust_id,amount,type,date) VALUES('$id','$amount','$type','$date')")or die(mysqli_error($con));

		      echo "<script type='text/javascript'>alert('Successfully added new account!');</script>";
					  echo "<script>document.location='account_summary.php?cid=$id'</script>";  
	
?>