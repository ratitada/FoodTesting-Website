<?php
	$servername = "localhost";
	$dbname = "tartecakec_food";
	$username = "root";
	$password = "";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if (!$conn) {
    	die("Connection failed: " . mysqli_connect_error());
	}
	$query = "INSERT INTO testinuser (tid, uid, aid, cid, point) SELECT ".$_POST["newtid"].", uid, aid, cid, point FROM testinuser WHERE tid = ".$_GET["tid"];
    $check1 = mysqli_query($conn, $query);
   	$query = "INSERT INTO attributeintest (tid, aid) SELECT ".$_POST["newtid"].", aid FROM attributeintest WHERE tid = ".$_GET["tid"];
	$check2 = mysqli_query($conn, $query);
	$query = "INSERT INTO userintest (tid, uid) SELECT ".$_POST["newtid"].",uid FROM userintest WHERE tid = ".$_GET["tid"];
	$check3 = mysqli_query($conn, $query);
	$query = "INSERT INTO test (tid, detail, attribute_num) SELECT ".$_POST["newtid"].", detail, attribute_num FROM test WHERE tid = ".$_GET["tid"];
	$check4 = mysqli_query($conn, $query);
	if($check1 and $check2 and $check3 and $check4)
	{
		echo "Record copy successfully";
		mysqli_close($conn);
 		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}
	else
	{
		echo "Error copy record: " . mysqli_error($conn);
		mysqli_close($conn);
	}
 	exit(0);
?>