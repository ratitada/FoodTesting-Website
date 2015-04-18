<?php
	$servername = "localhost";
	$dbname = "tartecakec_food";
	$username = "root";
	$password = "";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if (!$conn) {
    	die("Connection failed: " . mysqli_connect_error());
	}	
    $query = "DELETE FROM testinuser WHERE tid = ".$_GET["tid"];
    mysqli_query($conn, $query);
    $query = "DELETE FROM attributeintest WHERE tid = ".$_GET["tid"];
    mysqli_query($conn, $query);
    $query = "DELETE FROM userintest WHERE tid = ".$_GET["tid"];
    mysqli_query($conn, $query);
    $query = "DELETE FROM test WHERE tid = ".$_GET["tid"];
    mysqli_query($conn, $query);
	mysqli_close($conn);
 	header('Location: ' . $_SERVER['HTTP_REFERER']);
 	exit(0);
?>