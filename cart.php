<html>
<head>
    <title>CART</title>
</head>
<body>
<h3 > CART </h3>
<?php include("config.php"); ?>
<?php

$prid=3;
session_start();
$id= $_REQUEST['id'];
$uid= $_SESSION['ID'];

//$uid= session_id();
$qcart="INSERT INTO carts (userId, productId, quantity) VALUES ('".$uid."', '".$id."', '".$prid."')";
if(mysqli_query($dbcon,$qcart)) {
    echo "Your product added to cart";
}

?>
<?php
?>
<table width="90%" border="2" cellspacing="2" cellpadding="10" align="center">
<tr>
    <!--<td align="center"><strong>ID</strong></td>-->
    <td align="center"><strong>Name</strong></td>
    <td align="center"><strong>Description</strong></td>
    <td align="center"><strong>Price</strong></td>
    <td align="center"><strong>Qty</strong></td>
    <td align="center"><strong>Image</strong></td>
    <td align="center"><strong>Status</strong></td>
    
    
</tr>
<?php
        $qr = "SELECT * FROM products WHERE Id IN(SELECT productId FROM carts WHERE userId=".$uid.")";
        $q1 = mysqli_query($dbcon,$qr);
            while($r= mysqli_fetch_array($q1)) {
?>
                <tr>
						<!--<td><?php //echo $r['ID']; ?></th> -->
						<td><?php echo $r['Name']; ?></td>
						<td><?php echo $r['Description']; ?></td> 
						<td><?php echo $r['Price']; ?></td>
                        <td><?php echo $prid; ?></td>
						<td>
							<div class="container main">
								<div class="img-block">
										<img class="img-responsive" src="<?php echo $r['Image'];?>" alt="Card Image Caption" width="50" height ="50" >
								</div>
							</div>
						</td>
						<td><?php echo $r['Status']; ?></td> 
    					<td><a href="del_cart.php?id=<?php echo $r['ID']; ?>">Delete</a></td> 
 					</tr>
<?php
            }
?>

</table>
<a href="bnow.php?upid=<?php echo $uid ;?>"><button>BUY NOW</button></a>

</body>
</html>