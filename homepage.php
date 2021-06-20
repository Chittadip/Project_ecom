<html>
<head>
<style>
input[type=submit] {
            background-color: #2eb935;
            color: white;
            align-content: center;
</style>
</head>
<form action="homepage.php" method="post">
	
	<input type="text" name="valueToSearch" placeholder="Search">
	<input type="submit" name="search" value="Search">

</form>
</body>
</html>
<?php
	include('config.php');
	if(isset($_POST['search']))
	{
	 $item=strtolower($_POST['valueToSearch']);

	 $sql = "SELECT `Name` FROM `products` WHERE `Name`='$item' ";
	 $result = mysqli_query($dbcon,$sql);

	 if (mysqli_num_rows($result)>0)
	 {
	 	while($row=mysqli_fetch_array($result))
		{
			echo $row["Name"];
		}
	 } 
	 else
		echo "No results to show";
   }
?>
<form name="homepage.php" method="post" action="homepage.php">
<table width="80%" border="0" cellspacing="2" cellpadding="5" align="center">
<tr>
       <td align="center"><h3><a href="index.php">Home</a></h3></td>
</tr>
<tr>
      <br><input type="submit" name="sub_btn" value="Vegetable"><br>
	  <br><input type="submit" name="sub_btn" value="Fruit"><br>
	  <br><input type="submit" name="sub_btn" value="Dairy"><br>
	  <br><input type="submit" name="sub_btn" value="Meat"><br>
      </td>
</tr>
</table>
</form>
<?php
include("config.php"); 
if(isset($_POST['sub_btn'])){
$p=$_POST['sub_btn'];
$sql="SELECT `products`.`Name` FROM `products`,`categories` WHERE `categories`.`Cat_ID`=`products`.`Cat_ID` AND `categories`.`Name`='$p'";
$result=mysqli_query($dbcon,$sql);
?>
<table width="80%" border="1" cellspacing="2" cellpadding="5" align="center">
<tr>
      <td><strong>Name</strong></td> 
</tr>
<?php
if(mysqli_num_rows($result)>0){
     $row=mysqli_fetch_assoc($result);
      ?>
<tr>
      <td><?php echo $row['Name'] ?></td>
</tr>

<?php  } 
           else{
 	     echo '<tr><td align="center" colspan="5" style="color:red;">No Record Found</td></tr>' ; }
}
?>
</table>
