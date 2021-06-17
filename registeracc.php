<?php
include("config.php");
?>
<?php
	session_start();
	$cus_name=$_REQUEST['name'];
	$cus_email=$_REQUEST['email'];
	$cus_password=$_REQUEST['password'];
	$cus_phnno=$_REQUEST['phno'];
	$path="nil";
	
	$sql="INSERT INTO `customers`(Name,Email_ID, Password,Phone_no,Image,Status) VALUES ('$cus_name','$cus_email','$cus_password','$cus_phnno','$path','active')";
	echo $sql;
	if(mysqli_query($dbcon,$sql)){
	 echo "record Inserted";
	 $msg="welcome to your home page";
    	header("location:index.php?msg={$msg}");
	}else{
	echo "not inserted";
	}
?>
