<?php
	$dbuser = "root";
	$dbpass = "";
	$dbhost = "localhost";
	$dbdata = "sql";

	$dbcon =  mysql_connect($dbhost,$dbuser,$dbpass);
	mysql_select_db($dbdata,$dbcon);
?>