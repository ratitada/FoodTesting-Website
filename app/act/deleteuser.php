<?php
	$servername = "localhost";
	$dbname = "tartecakec_food";
	$username = "root";
	$password = "";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if (!$conn) {
    	die("Connection failed: " . mysqli_connect_error());
	}	
    $query = "DELETE FROM testinuser WHERE uid = ".$_GET["uid"];
    $check1 = mysqli_query($conn, $query);
    $query = "DELETE FROM userintest WHERE uid = ".$_GET["uid"];
    $check2 = mysqli_query($conn, $query);
    $query = "DELETE FROM user WHERE uid = ".$_GET["uid"];
    $check3 = mysqli_query($conn, $query);
    if($check1 and $check2 and $check3)
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