<?php include("config.php"); ?>
<?php
	
	session_start();
	if (!isset($_SESSION['ID'])) {
		header('location:slogin.php');
	}
?>
<table width="80%" border="0" cellspacing="2" cellpadding="5" align="center">
	<tr>
		<td colspan="5" align="center">
		<h3>Welcome to your profile!</h3>
		</td>
	</tr>
	<tr>
		<td colspan="5" align="center">
		<h3><a href="index.php">Go to Home</a></h3>
		<br>
		<br>
		<br>
		<br>
		</td>
	</tr>
 </table>
 <table width="90%" border="1" cellspacing="2" cellpadding="5" align="center">
 	<tr>
 		<td align="center"><strong>Name</strong></td>
 		<td align="center"><strong>Email ID</strong></td>
 		<td align="center"><strong>Phone Number</strong></td>
 	</tr>
<?php	
	$qr = 	"SELECT 
				*
			FROM 
				`suppliers`
			WHERE 
				`ID` = ".$_SESSION['ID'];

	$q1 = mysqli_query($dbcon,$qr);
    if(mysqli_num_rows($q1) > 0)
 			{
				while($customer = mysqli_fetch_array($q1)) {
		// print_r($customer);
					echo  '<tr>
 							<td align="center">'.$customer["Name"].'</td>
 							<td align="center">'.$customer["Email_ID"].'</td>
 							<td align="center">'.$customer["Phone_no"].'</td>
 						</tr>';
 				}
			}



	// echo 'Welcome to your profile '.$customer['name'];
	// echo '<br>';

	// echo 'Email: '.$user['email'];

?>
</table>
<table width="80%" align="center">
	<tr>
		<td colspan="5" align="center">
			<br>
			<br>
			<br>
			<br>
		<h3><a href="logout.php">Logout</a></h3>
		</td>
	</tr>
</table>
