<?php
	
	$comp = $_GET['comp_txt'];
	$timestamp = date('d-m-Y H:i:s');
	$host = "localhost";
	$dbUsrname = "root";
	$dbPass = "";
	$dbname = "LensFinder";
	$conn = new mysqli($host, $dbUsrname, $dbPass, $dbname);
	if (mysqli_connect_error()) {
		die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
	} else {
		$compquery="insert into compliment (compliment, storetime) values(?, ?)";
		$stmt = $conn->prepare($compquery);
		$stmt->bind_param("ss", $comp, $timestamp);
		$stmt->execute();
		header("location:feedback.html");
}
?>