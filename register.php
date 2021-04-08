<?php
$name = $_POST['Name'];
$usrname = $_POST['Username'];
$pass = $_POST['Password'];
$email = $_POST['Email'];
$phone = $_POST['Phone'];

if (!empty($name) || !empty($usrname) ||!empty($pass) ||!empty($email) ||!empty($phone)) {
	$host = "localhost";
	$dbUsrname = "root";
	$dbPass = "";
	$dbname = "LensFinder";

	
	$conn = new mysqli($host, $dbUsrname, $dbPass, $dbname);
	if (mysqli_connect_error()) {
		die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
	} else {
		$select_query="select email from registration where email = ? Limit 1";
		$select_name="select username from registration where username = ? Limit 1";
		$insert_query="insert into registration (name, username, password, email, phone) values(?, ?, ?, ?, ?)";
		$stmt = $conn->prepare($select_query);
		$stmt->bind_param("s", $email);
		$stmt->execute();
		$stmt->store_result();
		$rnum = $stmt->num_rows;

		$stmt1 = $conn->prepare($select_name);
		$stmt1->bind_param("s", $usrname);
		$stmt1->execute();
		$stmt1->store_result();
		$rnumu = $stmt1->num_rows;

		if($rnum==0 && $rnumu==0) {
			$stmt->close();
			$stmt = $conn->prepare($insert_query);
			$pass = md5($pass);
			$stmt->bind_param("ssssi", $name, $usrname, $pass, $email, $phone);
			$stmt->execute();
			echo '<script type="text/javascript">alert("Registered sucessfully!Login Again");
			location="login.html";
</script>';
		} else {
			echo '<script type="text/javascript">alert("Account already registered!");location="login.html"</script>';
		}
		$stmt->close();
		$conn->close();
	}
} else {
	echo "Enter all fields!";
	die();
}
?>

