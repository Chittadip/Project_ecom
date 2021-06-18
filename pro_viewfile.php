<!DOCTYPE html>
<html>
<head>
  <title>DISPLAYING ALL PRODUCTS</title>
</head>
<body>
<?php include("config.php"); ?>

<table width="80%" border="0" cellspacing="2" cellpadding="5" align="center">
	<tr>
		<td colspan="5" align="center">
		<h1>PRODUCTS LIST</h1>
		</td>
	</tr>
	<tr>
		<td colspan="5" align="center">
		<h3><a href="index.php">Go to Home</a></h3>
		<br>
		<br>
		<div class="container-fluid my-4">
			<div class="row my-2">
				<a href="pro_addfile.php"><button type="button" class="btn btn-primary ml-4 pl-2">Add New Product</button></a>
			</div>
		</div>
		<br>
		<br>
		</td>
	</tr>

 </table>
 <table width="90%" border="2" cellspacing="2" cellpadding="10" align="center">
 	<tr>
 		<!--<td align="center"><strong>ID</strong></td>-->
 		<td align="center"><strong>Name</strong></td>
 		<td align="center"><strong>Description</strong></td>
 		<td align="center"><strong>Price</strong></td>
 		<td align="center"><strong>Image</strong></td>
 		<td align="center"><strong>Created At</strong></td>
 		<td align="center"><strong>Updated At</strong></td>
 		<td align="center"><strong>Status</strong></td>
 		
 		
 	</tr>
<?php	

	$qr = 	"SELECT 
				*
			FROM 
				`products`";

	$q1 = mysqli_query($dbcon,$qr);
    //if(mysqli_num_rows($q1) > 0)
 			//{
				while($r = mysqli_fetch_array($q1)) {
		// print_r($customer);
?>
					<tr>
						<!--<td><?php //echo $r['ID']; ?></th> -->
						<td><?php echo $r['Name']; ?></td>
						<td><?php echo $r['Description']; ?></td> 
						<td><?php echo $r['Price']; ?></td>
						<td>
							<div class="container main">
								<div class="img-block">
										<img class="img-responsive" src="<?php echo $r['Image'];?>" alt="Card Image Caption" width="50" height ="50" >
								</div>
							</div>
						</td>
						<td><?php echo $r['CreatedAt']; ?></td> 
						<td><?php echo $r['UpdatedAt']; ?></td>
						<td><?php echo $r['Status']; ?></td> 
						<td><a href="pro_updtdfile.php?id=<?php echo $r['ID']; ?>">Edit</a></td>
    					<td><a href="pro_delfile.php?id=<?php echo $r['ID']; ?>">Delete</a></td>
 					</tr>;
 <?php
 				}

?>
</table>
<!--<table width="80%" align="center">
	<tr>
		<td colspan="5" align="center">
			<br>
			<br>
			<br>
			<br>
		<h3><a href="logout.php">Logout</a></h3>
		</td>
	</tr>
</table>-->
</body>
</html>