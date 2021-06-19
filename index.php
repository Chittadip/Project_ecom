<h1>Home Page</h1>

<h1>FOR CUSTOMERS</h1>
<a href="register.php">Register</a>&nbsp;||&nbsp;
<!--<a href="login.php">Login</a>&nbsp;||&nbsp;-->
<a href="profile.php">Account Details</a>&nbsp;||&nbsp;
<a href="homepage.php">Home page</a>&nbsp;||&nbsp;

<h1>FOR SUPPLIERS</h1>
<a href="sreg.php">Register Here</a>&nbsp;||&nbsp;
<!--<a href="slogin.php">Login</a>&nbsp;||&nbsp;-->
<a href="sprofile.php">Account Details</a>&nbsp;||&nbsp;
<a href="pro_viewfile.php">View product</a>&nbsp;||&nbsp;
<?php

if(isset($_REQUEST['msg'])) {
    echo $_REQUEST['msg'];
}
?>