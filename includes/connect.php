<?php
	$server = "localhost";
	$db_name = "local"; // Enter your database name
	$db_user = "chrsnchl"; // Enter your username
	$db_pass = "haunt"; // Enter your password
	
	$mysqli = new mysqli($server, $db_user, $db_pass, $db_name) or die("Could not connect to server! on connect.php");
	//mysql_select_db($db_name) or die("Could not connect to database!");


if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}
?>
