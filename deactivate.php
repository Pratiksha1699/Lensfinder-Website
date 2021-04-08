<?php
	session_start();
	$name =$_SESSION['username'];
	$host = "localhost";
	$dbUsrname = "root";
	$dbPass = "";
	$dbname = "LensFinder";

	$conn = new mysqli($host, $dbUsrname, $dbPass, $dbname);
	if (mysqli_connect_error()) {
		die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
	} else {
		$delete="delete from registration where username = ? Limit 1";
		$stmt = $conn->prepare($delete);
		$stmt->bind_param("s", $name);
		$stmt->execute();
		$stmt->store_result();
		}
	session_destroy();
	header("location:home.php");
?>