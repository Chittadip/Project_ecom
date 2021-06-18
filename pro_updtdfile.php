<?php 

    include("config.php"); 

    if(isset($_POST['btn'])) 

    {  
        $pro_name=$_POST['name'];
        $pro_desc=$_POST['description'];
        $pro_price=$_POST['price'];
        $pro_create=$_POST['createdAt'];
        $pro_update=$_POST['UpdatedAt'];
        $pro_sts=$_POST['status'];
		$pro_id = $_GET['id']; 

        $q= "update products set Price= '$pro_price', UpdatedAt='$pro_update', Status='$pro_sts' where ID=$pro_id"; 

        $query=mysqli_query($dbcon,$q); 

        header('location:pro_viewfile.php'); 

    }  

    else if(isset($_GET['id']))  

    { 

        $q = "SELECT * FROM products WHERE ID='".$_GET['id']."'"; 

        $query=mysqli_query($dbcon,$q); 

        $res= mysqli_fetch_array($query); 

    } 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Updation</title>
</head>
<body>
	<div class="container">
	<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
		<h2 class="my-4">Update existing product</h2>
		<form method="post" enctype="multipart/form-data">
			<div class="form-group">
                <label>Name</label>
				<input type="text" class="form-control" name="name" value="<?php echo $res['Name'];?>" disabled/>
            </div> 
            <div class="form-group">
                <label>Description</label>
				<input type="text" class="form-control" name="description" value="<?php echo $res['Description'];?>" disabled/>
            </div> 
            <div class="form-group">
                <label>New Price</label>
				<input type="text" class="form-control" name="price" value="<?php echo $res['Price'];?>" required/>
                <!--<input type="radio" class="form-control" name="price" value="per kg">
                <label for="per kg">per kg</label>
                <input type="radio" class="form-control" name="price" value="per piece">
                <label for="per piece">per piece</label><br>-->

            </div> 
            <div class="form-group">
                <label>Image</label>
				<input type="file" class="file_input" name="image" value="<?php echo $res['Image'];?>" disabled/>
            </div> 
            <div class="form-group"> 
				<label>Creation Date</label> 
				<input type="date" class="form-control" placeholder=" Creation Date" name="createdAt" value="<?php echo $res['CreatedAt'];?>" disabled/> 
            </div> 
            <div class="form-group"> 
				<label>Updation Date</label> 
				<input type="date" class="form-control" placeholder="Updation Date" name="UpdatedAt" value="<?php echo $res['UpdatedAt'];?>" required/> 
			</div>
            <div class="form-group"> 
				<label>Item status</label> 
				<input type="radio" class="form-control" name="status" value="available">
				<label for="available">AVAILABLE</label>
				<input type="radio" class="form-control" name="status" value="unavailable">
                <label for="unavailable">UNAVAILABLE</label><br>
            </div> 
            <div class="form-group">
				<input type="submit" class="btn btn-danger" value="Update" name="btn">
			</div>
		</form>
	</div>
</body>
</html>