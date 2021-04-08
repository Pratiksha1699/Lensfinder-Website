<?php
	
	$other = $_GET['other_txt'];
	$timestamp = date('d-m-Y H:i:s');
	$host = "localhost";
	$dbUsrname = "root";
	$dbPass = " ";
	$dbname = "LensFinder";
	$conn = new mysqli($host, $dbUsrname, $dbPass, $dbname);
	if (mysqli_connect_error()) {
		die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
	} else {
		$otherquery="insert into other (general, storetime) values(?, ?)";
		$stmt = $conn->prepare($otherquery);
		$stmt->bind_param("ss", $other, $timestamp);
		$stmt->execute();
		header("location:feedback.html");
}
?>