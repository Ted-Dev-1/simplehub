<?php
$servername = "localhost"; // OR 127.0.0.1:3307 without $port
$username = "root";
$password = "";
$dbname = "prototypedb";
$port="3309";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>