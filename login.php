<?php session_start();

include('dist/includes/dbcon.php');

if(isset($_POST['login']))
{

$user_unsafe=$_POST['username'];
$pass_unsafe=$_POST['password'];

$user = mysqli_real_escape_string($con,$user_unsafe);
$pass = mysqli_real_escape_string($con,$pass_unsafe);

$query=mysqli_query($con,"select * from user_table where username='$user' and password='$pass'")or die(mysqli_error($con));
	$row=mysqli_fetch_array($query);
           $id=$row['user_id'];
           $name=$row['name'];
         //  $pic=$row['user_pic'];
          // $type=$row['user_type'];
           $counter=mysqli_num_rows($query);
           
           $id=$row['user_id'];

  	if ($counter == 0) 
	  {	
	  echo "<script type='text/javascript'>alert('Invalid Username or Password!');
	  document.location='index.php'</script>";
	  } 
	  elseif ($counter > 0)
	  {
	  $_SESSION['id']=$id;	
	 
	    echo "<script type='text/javascript'>document.location='pages/home.php'</script>";
	  }
}	 
?>
	
