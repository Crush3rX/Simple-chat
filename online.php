<span>Online:</span></br>
<?php
require("mysql.php");

// variables
$origin = $db->clean($_SERVER["REMOTE_ADDR"]);
$exists = false;

// delete old
$sql = "DELETE FROM `online` WHERE timestamp < (NOW() - INTERVAL 5 SECOND)";
$db->query($sql);

// check for existing
$sql = "SELECT `origin` FROM `online` WHERE `origin`='$origin'";
$r = $db->query($sql);
if(mysqli_num_rows($r) > 0) {
	$exists = true;
}

// insert
if($exists == 0) {
	$sql = "INSERT INTO `online` (origin) VALUES ('$origin')";
	$db->query($sql);
}

// list users
$sql = "SELECT * FROM `online`";
$q = $db->query($sql);
while($list = mysqli_fetch_array($q, MYSQLI_ASSOC)) 
{
	print($list["origin"].", ");
}
