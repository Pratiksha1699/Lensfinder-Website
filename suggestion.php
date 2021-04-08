<?php
	
	$suggest1 = $_GET['s_txt'];
	$timestamp = date('d-m-Y H:i:s');
	$host = "localhost";
	$dbUsrname = "root";
	$dbPass = "";
	$dbname = "LensFinder";
	$conn = new mysqli($host, $dbUsrname, $dbPass, $dbname);
	if (mysqli_connect_error()) {
		die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
	} else {
		$squery="insert into suggestion (suggested, storetime) values(?, ?)";
		$stmt = $conn->prepare($squery);
		$stmt->bind_param("ss", $suggest1, $timestamp);
		$stmt->execute();
		header("location:feedback.html");
}
?>