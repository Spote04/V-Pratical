<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "test_db1";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);
global $mysqli;
if (!$conn) {
	echo "Connection failed!";
}