<?php
$link=mysqli_connect("localhost","root","","online_grocery_store");

/*$dbHost ="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="chitta";
//create database connection
//$d$dbCon = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
$dbCon = mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName);
//echo $dbCon;
//check connection
if ($dbCon->connection_error)
{
	die("Connection Failed: ".$dbCon->connect_error);
}*/
/*$link=mysqli_connect("localhost","root","","chitta");
if($link==false)
	{
		echo "can't connect";
		die("ERROR:can't connecty".mysqli_error()) ;
	}
if($link==true) {
	echo"connection established";
	$qrbby="select Author from BOOK where Edition='1'";
	$result= mysqli_query($link, $qrbby);
	$nol= mysqli_num_rows($result);
	echo $nol;
	print_r($result);
	echo $result['Author'];
	foreach($result as $row)
{
     echo $row;
}
}*/
?>