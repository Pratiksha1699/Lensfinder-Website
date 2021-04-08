<?php
	
	$quest1 = $_GET['quest_txt'];
	$timestamp = date('d-m-Y H:i:s');
	$host = "localhost";
	$dbUsrname = "root";
	$dbPass = "";
	$dbname = "LensFinder";
	$conn = new mysqli($host, $dbUsrname, $dbPass, $dbname);
	if (mysqli_connect_error()) {
		die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
	} else {
		
		$question="insert into questions (question, time) values(?, ?)";
		$stmt = $conn->prepare($question);
		$stmt->bind_param("ss", $quest1, $timestamp);
		$stmt->execute();
		header("location:feedback.html");

}
?>