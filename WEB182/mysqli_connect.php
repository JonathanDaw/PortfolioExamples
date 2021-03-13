<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Connect to MySQL</title>
</head>
<body>
<?php // Script 13.1 - mysqli_connect.php
/*
Filename: mysqli_connect.php
Student Name: Jonathan Daw
Date: November 30, 2020

This script connects to the MySQL database and established the character set for communications.
*/

// Connect:
$dbc = @mysqli_connect('localhost', 'jonathan', 'daw', 'myquotes');

// Set the character set:
mysqli_set_charset($dbc, "utf8");

?>
</body>
</html>