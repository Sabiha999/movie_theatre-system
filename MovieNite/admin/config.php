<?php
$servername = "localhost";
$username = "root"; // Update with your MySQL username
$password = "";     // Update with your MySQL password
$dbname = "movie_booking_system";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
