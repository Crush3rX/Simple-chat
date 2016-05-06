<?php
SESSION_START();
require("mysql.php");

//for new users
if(!isset($_SESSION["last"]))
{
	$_SESSION["last"] = 0;
}

//list chats
$sql = "SELECT * FROM chat WHERE `id` > ".$_SESSION["last"]." ORDER BY `id` ASC";
$q = $db->query($sql);

while($list = mysqli_fetch_array($q, MYSQLI_ASSOC)) 
{
	print("<small><b>".$list["origin"].":</b></small><br/>");
	print("<span class='message'>".strip_tags($list["message"])."</span>");
	$_SESSION["last"] = $list["id"];
}
