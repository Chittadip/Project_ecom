<?php
include('connection_s.php');

//$linemail=$_REQUEST['email'];
//$linpass=$_REQUEST['password'];

$lqy="select ID from suppliers where Email_ID = '".$_REQUEST['email']."' and Password= '".$_REQUEST['password']."'";


    $lq=mysqli_query($link,$lqy);
$nor= mysqli_num_rows($lq);

    if ($nor === 1) {
       session_start();
       $sup=mysqli_fetch_array($lq);
      $_SESSION['ID']=$sup['ID'];
       $msg="login successfully! welcome to your home page";
       header("location:sup_home_test.php?msg={$msg}");
    }
    else {
        header("location:sup_home_test.php");
    }
?>