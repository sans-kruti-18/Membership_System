<?php
$servername = "localhost"; // Port is usually not needed here
$username = "root";
$password = ""; // Check if a password is set for your root user
$dbname = "membershiphp";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error . ".<br> Please create a database and import the SQL file");
}

// Start Session
session_start();
