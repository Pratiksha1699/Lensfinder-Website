<?php
	session_start();
	$name1 = $_POST['Username'];
	$password = md5($_POST['Password']);

	$host = "localhost";
	$dbUsrname = "root";
	$dbPass = "";
	$dbname = "LensFinder";

	
	$conn = new mysqli($host, $dbUsrname, $dbPass, $dbname);
	if (mysqli_connect_error()) {
		die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
	} else {
		$select_name="select username,password from registration where username = ? AND password = ? Limit 1";
		$name1 = mysqli_real_escape_string($conn,$name1);
		$password = mysqli_real_escape_string($conn,$password);
		$stmt = $conn->prepare($select_name);
		$stmt->bind_param("ss", $name1, $password);
		$stmt->execute();
		$stmt->store_result();
		$rnum = $stmt->num_rows;
		if($rnum==0){
			echo "<script type='text/javascript'>alert('Invalid username or password!');
			location='login.html'</script>";
		}
		else if($rnum==1){
			$_SESSION['username']=$name1;
			header("location:home.php");

		}
}
?>