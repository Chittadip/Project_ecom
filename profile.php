<?php include("config.php"); ?>
<?php
	
	session_start();
	if (!isset($_SESSION['id'])) {
		header('location:login.php');
	}
?>
<form name="search_frm" method="post" action="#">
<table width="80%" border="0" cellspacing="2" cellpadding="5" align="center">
	<tr><td align="center"><h2>Search Page</h2></td></tr>
<?php
	
	$qr = 	"SELECT 
				*
			FROM 
				`customers`
			WHERE 
				`ID` = ".$_SESSION['id'];

	$q1 = mysqli_query($dbcon,$qr);

	while($customer = mysqli_fetch_array($q1)) {
		// print_r($customer);
		echo $customer['name'];
		echo $customer['email'];
		echo $customer['phone no'];
		echo $customer['status'];
		echo '<br>';
	}



	// echo 'Welcome to your profile '.$customer['name'];
	// echo '<br>';

	// echo 'Email: '.$user['email'];

?>


<br>
<br>
<br>
<br>
<a href="logout.php">Logout</a>