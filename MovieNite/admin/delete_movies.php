<?php
session_start();
include 'config.php';





$movie_id = $_GET['id'];

$stmt = $conn->prepare("DELETE FROM movies WHERE movie_id = ?");
$stmt->bind_param("i", $movie_id);
$stmt->execute();
$stmt->close();

header("Location: Movies.php");
exit();
?>



