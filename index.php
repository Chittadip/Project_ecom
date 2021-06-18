<h2>Home Page</h2>

<h1>FOR CUSTOMERS</h1>
<a href="register.php">Register</a>&nbsp;||&nbsp;
<!--<a href="login.php">Login</a>&nbsp;||&nbsp;-->
<a href="profile.php">Account Details</a>&nbsp;||&nbsp;

<h1>FOR SUPPLIERS</h1>
<a href="sreg.php">Register Here</a>&nbsp;||&nbsp;
<!--<a href="slogin.php">Login</a>&nbsp;||&nbsp;-->
<a href="sprofile.php">Account Details</a>&nbsp;||&nbsp;
<?php

if(isset($_REQUEST['msg'])) {
    echo $_REQUEST['msg'];
}
?>