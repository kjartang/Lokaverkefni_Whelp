<?php
$servername = "tsuts.tskoli.is";
$dbname = "0704973019_whelp";
$username = "0704973019";
$password = "mypassword";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>