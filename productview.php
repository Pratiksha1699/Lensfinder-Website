<?php
	$p1 = $_GET['design'];
	$p2 = $_GET['content'];
	$p3 = $_GET['find'];
	$p4 = $_GET['overall'];
	$current = date('d-m-Y H:i:s');
	$host = "localhost";
	$dbUsrname = "root";
	$dbPass = "";
	$dbname = "LensFinder";
	$conn = new mysqli($host, $dbUsrname, $dbPass, $dbname);
	if (mysqli_connect_error()) {
		die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
	} else {
		
		$proresponse="insert into productresponse (description, content, availability, overall, storetime) values (?, ?, ?, ?, ?)";		
		$stmt = $conn->prepare($proresponse);
		$stmt->bind_param("sssss", $p1, $p2, $p3, $p4, $current);
		$stmt->execute();
		header("location:feedback.html");

}
?>