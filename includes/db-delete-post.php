<?php 
	$title = strip_tags( $_GET['title'] );
	$content = strip_tags( $_GET['content'] );
	$date = date('Y-m-d');

	require("connect.php");
	$insert = $mysqli->query("INSERT INTO blog VALUES ('$title', '$content', '$date', null)");

	header("Location: http://{$_SERVER['SERVER_NAME']}/blog");
?>
