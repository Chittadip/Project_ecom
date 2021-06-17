<?php 
include('config.php');

//$spassword=$_REQUEST['password'];
//$phash = password_hash($spassword,PASSWORD_DEFAULT);

$squery="INSERT INTO `suppliers` (Name, Email_ID, Password, Phone_no, Image, Status) VALUES ('".$_REQUEST['name']."','".$_REQUEST['email']."','".$_REQUEST['password']."', '".$_REQUEST['phno']."', '0', '1')";
/*
 // Verify the hash against the password entered
  $verify = password_verify($plaintext_password, $hash);
  //$hash->will retrive from database
  // Print the result depending if they match
  if ($verify) {
      echo 'Password Verified!';
  } else {
      echo 'Incorrect Password!';
  }
*/
echo $squery;
if(mysqli_query($dbcon,$squery)) {
    echo "registered succesfully";
    $msg="welcome to your home page";
    header("location:index.php?msg={$msg}");
}
else {
    echo "can't register";
}

?>
