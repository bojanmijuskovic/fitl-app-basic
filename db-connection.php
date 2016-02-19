<?php

// Database connection credentials
$servername = 'localhost';
$username = 'homestead';
$password = 'secret';

// Create connection
$connection = new mysqli($servername, $username, $password);

// Check for an error
if ($connection->connect_error) {
	echo 'Connection failed: '. $connection->connect_error;
	exit;
}

// Otherwise, connected successfully
// echo 'Connected successfully';

// Connect to the "fitl" database
$connection->select_db('fitl');

?>