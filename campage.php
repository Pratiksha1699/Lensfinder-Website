<?php 
	$name1 = $_POST['search_cam'];
	$loc = "location:".$name1.".html";
	header($loc);
?>