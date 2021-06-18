<!DOCTYPE html>
<html>
<head>
	<title>Addition</title>
</head>
<body>
	<div class="container">
		<h2 class="my-4">Add New Product</h2>
		<form method="post" enctype="multipart/form-data">
			<div class="form-group">
                <label>Name</label>
				<input type="text" class="form-control" name="name" value="" required/>
            </div> 
            <div class="form-group">
                <label>Description</label>
				<input type="text" class="form-control" name="description" value="" required/>
            </div> 
            <div class="form-group">
                <label>Price</label>
				<input type="text" class="form-control" name="price" value="" required/>
                <!--<input type="radio" class="form-control" name="price" value="per kg">
                <label for="per kg">per kg</label>
                <input type="radio" class="form-control" name="price" value="per piece">
                <label for="per piece">per piece</label><br>-->

            </div> 
            <div class="image-box">
                <label>Image</label>
				<input type="file" class="file_input" name="image" required/>
            </div> 
            <div class="form-group"> 
                <label>Creation Date</label> 
                <input type="date" class="form-control" placeholder=" Creation Date" name="createdAt"> 
            </div> 
            <div class="form-group"> 
                <label>Updation Date</label> 
                <input type="date" class="form-control" placeholder="Updation Date" name="UpdatedAt"> 
            </div>
            <div class="form-group"> 
                <label>Item status</label> 
                <input type="radio" class="form-control" name="status" value="available">
                <label for="available">AVAILABLE</label>
                <input type="radio" class="form-control" name="status" value="unavailable">
                <label for="unavailable">UNAVAILABLE</label><br>
            </div> 

			<input type="submit" class="btn btn-primary" value="Add Product" name="btn" />
		</form>
	</div>

    <?php include("config.php"); ?>
    <?php
        if(isset($_POST["btn"])) {  
            $pro_name=$_REQUEST['name'];
            $pro_desc=$_REQUEST['description'];
            $pro_price=$_REQUEST['price'];
            $pro_create=$_REQUEST['createdAt'];
            $pro_update=$_REQUEST['UpdatedAt'];
            $pro_sts=$_REQUEST['status'];

            // store n upload image
            $temp_name=$_FILES["image"]["tmp_name"];
            $image_name ="Upload/".$_FILES["image"]["name"]; 
           

            $sql="INSERT INTO `products`(`ID`,`Cat_ID`,`Name`,`Description`,`Price`,`Image`,`Suppliers_ID`,`CreatedAt`,`UpdatedAt`,`Status`) VALUES ('','','$pro_name','$pro_desc','$pro_price','$image_name','','$pro_create','$pro_update','$pro_sts')";
             move_uploaded_file($temp_name,$image_name);
            if(mysqli_query($dbcon,$sql)){
            echo "Record Inserted Succesfully";

            }   

        } 
    ?>
            
        <h3><a href="index.php"><button type="button" class="btn btn-primary ml-4 pl-2">Go to home</button></a></h3>
        <h3><a href="pro_viewfile.php"><button type="button" class="btn btn-primary ml-4 pl-2">View Products</button></a></h3>

</body>
</html>