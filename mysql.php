<?php

class db {
	private $con;
	
	function __construct()
	{
		require("config.php");
		$this->con = mysqli_connect($database["host"], $database["username"], $database["password"], $database["database"]);
		if (mysqli_connect_errno()) {
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
	}
	
	function __destruct()
	{
		mysqli_close($this->con);
	}
	
	function clean($str)
	{
		return mysqli_real_escape_string($this->con, $str);
	}
	
	function query($sql)
	{
		$q = mysqli_query($this->con, $sql) or die(mysqli_error($this->con));
		return $q;
	}
}

$db = new db();