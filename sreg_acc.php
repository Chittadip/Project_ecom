<?php 
include('connection_s.php');

$spassword=$_REQUEST['password'];
$phash = password_hash($spassword,PASSWORD_DEFAULT);
$squery="INSERT INTO suppliers (Name, Email_ID, Password, Phone_no, Image, Status) VALUES ('".$_REQUEST['name']."','".$_REQUEST['email']."','".$phash."', '".$_REQUEST['phno']."', '".$path."', '1')";
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
if(mysqli_query($link, $squery)) {
    echo "registered succesfully";
    $msg="welcome to your home page";
    header("location:sup_home_test.php?msg={$msg}");
}
else {
    echo "can't register";
}

?>