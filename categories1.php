<!DOCTYPE html>
<html>
<head>
	<title>MERCEARIA</title>
	<link rel="stylesheet" type="text/css" href="style2.css">

</head>
<body>
<header>
	<div><a href="profile.php" class="btn" style="font-size: 20px;
			text-decoration: none;
			color: #000;
			padding: 10px 10px;
			border: 2px solid #91BF81;
			transition: 0.6s ease;
			position: absolute;
			background: #BAF381;			
			top:5%;
			left: 75%;
			float: right;">CUSTOMER'S PROFILE</a></div>
	<div><a href="sprofile.php" class="btn" style="font-size: 20px;
			text-decoration: none;
			color: #000;
			padding: 10px 10px;
			border: 2px solid #91BF81;
			transition: 0.6s ease;
			position: absolute;
			background:#BAF381;
			top:5%;
			left: 87%;
			float: right;">SUPPLIER'S PROFILE</a></div>
	<div><a href="productview.php" class="btn" style="font-size: 24px;
			text-decoration: none;
			color: #000;
			padding: 10px 10px;
			border: 2px solid #91BF81;
			transition: 0.6s ease;
			position: absolute;
			background: #9FF381;
			top:5%;
			left: 2%;
			float: right;">SHOW ALL PRODUCTS</a></div>
	<form class="search-box" action="categories1.php" method="post">
 		<input class="search-txt" type="text" name="valueToSearch" placeholder="Search Products">
		<input class="search-btn" type="submit" id="SearchProductName" name="search" value="Search">
	</form>
<?php
	include('config.php');
	if(isset($_POST['search']))
	{
	 $item=strtolower($_POST['valueToSearch']);

	 $sql="SELECT `products`.* FROM `products` WHERE `products`.`Name`='$item'";
$result=mysqli_query($dbcon,$sql);
?>


<table width="80%" border="1" cellspacing="2" cellpadding="5" align="center">
<tr>
 		<td align="center" style="color:blue;"><strong><u>Name</strong></td>
 		<td align="center" style="color:blue;"><strong><u>Description</strong></td>
 		<td align="center" style="color:blue;"><strong><u>Price</strong></td>
 		<td align="center" style="color:blue;"><strong><u>Image</strong></td>
 		<td align="center" style="color:blue;"><strong><u>Status</strong></td>
</tr>

<?php
session_start();

if (mysqli_num_rows($result)>0)
	 {
	 	while($row=mysqli_fetch_array($result))
		{
?>			<tr>
						<!--<td><?php //echo $r['ID']; ?></th> -->
						<td><?php echo $row['Name']; ?></td>
						<td><?php echo $row['Description']; ?></td> 
						<td><?php echo $row['Price']; ?></td>
						<td>
							<div class="container main">
								<div class="img-block">
										<img class="img-responsive" src="<?php echo $row['Image'];?>" alt="Card Image Caption" width="50" height ="50" >
								</div>
							</div>
						</td>
						<td><?php echo $row['Status']; ?></td> 
<?php		}
	 } 
	 else
		echo '<tr><td align="center" colspan="5" style="color:red;">No Record Found</td></tr>' ;
   }
 ?> 
<br>
<br>
<br>
<br>
<section id ="categories">
	<div class = "title-text">
	<p>CATEGORIES</p>
	</div>
	<form name="categories1.php" method="post" action="productview.php">
	<div class="categories-box">
		<div class="single-categories">
			<img src="vegetable1.jpg">
			<div class="overlay"></div>
			<div class="categories-desc">
				<input type="submit" name="sub_btn" style="width: 50%;
					position: absolute;
					bottom: 40%;
					left:50%;
					transform: translateX(-50%);
					font-size: 36px;
					color: #000;" value="VEGETABLES">			
			</div>
		</div>
		<div class="single-categories">
			<img src="fruits1.jpg">
			<div class="overlay"></div>
			<div class="categories-desc">
				<input type="submit" name="sub_btn" style="width: 50%;
					position: absolute;
					bottom: 40%;
					left:50%;
					transform: translateX(-50%);
					font-size: 36px;
					color: #000;" value="FRUITS	">
			</div>
		</div>
		<div class="single-categories">
			<img src="dairy1.jpg">
			<div class="overlay"></div>
			<div class="categories-desc">
				<input type="submit" name="sub_btn" style="width: 50%;
					position: absolute;
					bottom: 40%;
					left:50%;
					transform: translateX(-50%);
					font-size: 36px;
					color: #000;" value="DAIRY PRODUCTS">
			</div>
		</div>
		<div class="single-categories">
			<img src="pulses1.jpg">
			<div class="overlay"></div>
			<div class="categories-desc">
				<input type="submit" name="sub_btn" style="width: 50%;
					position: absolute;
					bottom: 40%;
					left:50%;
					transform: translateX(-50%);
					font-size: 36px;
					color: #000;" value="PULSES">
			</div>
		</div>
		<div class="single-categories">
			<img src="oils1.jpg">
			<div class="overlay"></div>
			<div class="categories-desc">
				<input type="submit" name="sub_btn" style="width: 50%;
					position: absolute;
					bottom: 40%;
					left:50%;
					transform: translateX(-50%);
					font-size: 36px;
					color: #000;" value="COOKING OILS">
			</div>
		</div>
		<div class="single-categories">
			<img src="riceandflour1.jpg">
			<div class="overlay"></div>
			<div class="categories-desc">
				<input type="submit" name="sub_btn" style="width: 50%;
					position: absolute;
					bottom: 40%;
					left:50%;
					transform: translateX(-50%);
					font-size: 36px;
					color: #000;" value="RICE AND FLOURS">
			</div>
		</div>
	</div>
</table>
</form>
<?php
include("config.php"); 
if(isset($_POST['sub_btn'])){
$p=$_POST['sub_btn'];
$sql="SELECT `products`.* FROM `products`,`categories` WHERE `categories`.`Cat_ID`=`products`.`Cat_ID` AND `categories`.`Name`='$p'";
$result=mysqli_query($dbcon,$sql);
?>


<table width="80%" border="1" cellspacing="2" cellpadding="5" align="center">
<tr>
 		<td align="center" style="color:blue;"><strong><u>Name</strong></td>
 		<td align="center" style="color:blue;"><strong><u>Description</strong></td>
 		<td align="center" style="color:blue;"><strong><u>Price</strong></td>
 		<td align="center" style="color:blue;"><strong><u>Image</strong></td>
 		<td align="center" style="color:blue;"><strong><u>Status</strong></td>
</tr>

<?php
if (mysqli_num_rows($result)>0)
	 {
	 	while($row=mysqli_fetch_array($result))
		{
?>			<tr>
						<!--<td><?php //echo $r['ID']; ?></th> -->
						<td><?php echo $row['Name']; ?></td>
						<td><?php echo $row['Description']; ?></td> 
						<td><?php echo $row['Price']; ?></td>
						<td>
							<div class="container main">
								<div class="img-block">
										<img class="img-responsive" src="<?php echo $row['Image'];?>" alt="Card Image Caption" width="50" height ="50" >
								</div>
							</div>
						</td>
						<td><?php echo $row['Status']; ?></td> 
<?php		}
	 } 
	 else
		echo '<tr><td align="center" colspan="5" style="color:red;">No Record Found</td></tr>' ;
   }
 ?> 
</table>
<br>
<?php
$sql="SELECT `products`.* FROM `products` WHERE `products`.`status`='Available'";
$result=mysqli_query($dbcon,$sql);
?>

</section>
</header>
</body>
</html>