<?php

if($_POST["text"] != "") {
	require("mysql.php");
	
	$origin = $db->clean($_SERVER["REMOTE_ADDR"]);
	$msg = $db->clean($_POST["text"]);

	$sql = "INSERT INTO chat (origin, message) VALUES ('$origin', '$msg')";
	$db->query($sql);
}
