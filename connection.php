<?php

$servername = 'localhost';
$username = "root";
$password = '1';
$dbname = 'Repair';

// create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// check connection
if ($conn -> connect_error){
	die("connection failed: " . $conn->connect_error);
}

?>