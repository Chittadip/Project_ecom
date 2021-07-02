<!DOCTYPE html>
<html>
<head>
  <title>VIEWING PRODUCT</title>
</head>
<body>
<?php include("config.php"); ?>
<?php
    #ID is need to be fetched from previos page(home page).For tseting purpose ID is set to static.
    #session_strat();
    $qry = "SELECT * FROM products WHERE ID=2 ";

    $qryr= mysqli_query($dbcon,$qry);

        while ($r = mysqli_fetch_array($qryr)) {
        $pto=$r['Image'];
          echo"Product Name: "; echo $r['Name']."<br><br><br>"."<img class='img-set' src= '$pto' width='190' height='190' >"."<br><br><br>"; 
          echo"Product Description: ";echo $r['Description']."<br>"; 
          echo"Product Price: ";echo $r['Price']."<br>"; 
            echo"Currently "; echo $r['Status']."<br>";
           $pid= $r['ID']; 
            

            


        }

?>
<!--<?php echo $pid;?>-->
<a href="cart.php?id=<?php echo $pid ;?>"><button>ADD TO CART</button></a>
</body>
</html>