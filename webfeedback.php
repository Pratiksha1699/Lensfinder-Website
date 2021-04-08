<?php
	$webq1 = $_GET['design'];
	$webq2 = $_GET['content'];
	$webq3 = $_GET['find'];
	$webq4 = $_GET['overall'];
	$current = date('d-m-Y H:i:s');
	$host = "localhost";
	$dbUsrname = "root";
	$dbPass = "";
	$dbname = "LensFinder";
	$conn = new mysqli($host, $dbUsrname, $dbPass, $dbname);
	if (mysqli_connect_error()) {
		die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
	} else {
		
		$webresponse="insert into feedbackweb (design, usefulcontent, helpedfindlens, overall, storetime) values (?, ?, ?, ?, ?)";		
		$stmt = $conn->prepare($webresponse);
		$stmt->bind_param("sssss", $webq1, $webq2, $webq3, $webq4, $current);
		$stmt->execute();
		header("location:feedback.html");

}
?>