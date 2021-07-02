<html>
<head>
    <title>CART</title>
</head>
<body>
<h3 > BUY </h3>
<?php include("config.php"); ?>
<?php
#session_start();
$uid=$_REQUEST['upid'];
$qc="SELECT * FROM carts WHERE userId='".$uid."'";
$qcr=mysqli_query($dbcon,$qc);
    while($c = mysqli_fetch_array($qcr)) {
       # echo "in";
        #echo $c['userId'];
        #echo $c['productId'];
        $upt= "INSERT INTO userProduct (userId, productId,purchasedOn,status) VALUES ('".$c['userId']."','".$c['productId']."',CURRENT_DATE,'active')";
        mysqli_query($dbcon,$upt);
        $dc="DELETE FROM carts WHERE userId='".$c['userId']."' and productId='".$c['productId']."'";
        mysqli_query($dbcon,$dc);
    }
    echo "Order Placed Successfully";

?>
</body>
</html>