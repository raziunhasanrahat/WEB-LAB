<?php
$host = "localhost";
$user = "root"; // change if needed
$pass = "";     // change if needed
$dbname = "bookdb";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
