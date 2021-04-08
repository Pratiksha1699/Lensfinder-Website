<?php 
	$name1 = $_POST['search_lens'];
	$loc = "location:".$name1.".html";
	header($loc);
?>