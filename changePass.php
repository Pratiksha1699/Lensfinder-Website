<?php
	session_start();
	$name =$_SESSION['username'];
	$oldpass = md5($_POST['pass']);
	$password = md5($_POST['newPass']);
	$host = "localhost";
	$dbUsrname = "root";
	$dbPass = "";
	$dbname = "LensFinder";
	$conn = new mysqli($host, $dbUsrname, $dbPass, $dbname);
	if (mysqli_connect_error()) {
		die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
	} else {
		$name1 = mysqli_real_escape_string($conn,$name1);
		$password = mysqli_real_escape_string($conn,$password);
		$select_name="select username,password from registration where password = ? Limit 1";
		$stmt = $conn->prepare($select_name);
		$stmt->bind_param("s", $oldpass);
		$stmt->execute();
		$stmt->store_result();
		$rnum = $stmt->num_rows;
		if($rnum==0){
			echo "<script type='text/javascript'>alert('Invalid Old Password!');
location='home.php'</script>";
			
		}
		else if($rnum==1){
			
			$update_pass="update registration set password = ? where username = ? Limit 1";
			$stmt1 = $conn->prepare($update_pass);
			$stmt1->bind_param("ss", $password, $name);
			$stmt1->execute();
			$stmt1->store_result();
			header("location:home.php");

		}
}
?>