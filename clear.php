<?php
require("mysql.php");

//clear
$sql = "TRUNCATE TABLE `chat`";
$db->query($sql);