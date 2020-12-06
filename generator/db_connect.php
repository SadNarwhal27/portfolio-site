<?php
// Remote mySQL servername: sql451.main-hosting.eu
// Always change back to localhost
$servername = "localhost";
$username = "u363076772_Maurice20";
$password = "t5K!Vyn?7Yz8";
$dbname = "u363076772_DnD_Generator";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>