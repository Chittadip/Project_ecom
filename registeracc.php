<?php
include("config.php");
?>
<?php
	$cus_name=$_REQUEST['name'];
	$cus_email=$_REQUEST['email'];
	$cus_password=$_REQUEST['password'];
	$cus_phnno=$_REQUEST['phnno'];
	
	$sql="INSERT INTO `customers`(ID,Name,Email_ID, Password,Phone_no,Status) VALUES				('','$cus_name','$cus_email','$cus_password','$cus_phnno','active')";
	if(mysqli_query($dbcon,$sql)){
	 echo "record Inserted";
	}else{
	echo "not inserted";
	}
?>