<?php
include('admin/config.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate form inputs
    $movie_id = htmlspecialchars($_POST['movie']);
    $date = htmlspecialchars($_POST['date']);
    $time = htmlspecialchars($_POST['time']);
    $seats = htmlspecialchars($_POST['seats']);
    $username = $_SESSION['username_or_email']; // Assuming user is logged in and username is stored in session

    // Fetch movie name
    $movie_query = "SELECT title FROM movies WHERE movie_id = ?";
    if ($stmt = mysqli_prepare($conn, $movie_query)) {
        mysqli_stmt_bind_param($stmt, "i", $movie_id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $movie_name);
        mysqli_stmt_fetch($stmt);
        mysqli_stmt_close($stmt);
    } else {
        echo "<div class='alert alert-danger'>Error fetching movie name.</div>";
        exit();
    }

    // Insert booking
    $insert_book = "INSERT INTO Movie_Book (MovieName, Seats, ShowDate, showTime) VALUES (?, ?, ?, ?)";
    if ($stmt = mysqli_prepare($conn, $insert_book)) {
        mysqli_stmt_bind_param($stmt, "siss", $movie_name, $seats, $date, $time);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    } else {
        echo "<div class='alert alert-danger'>Error inserting into Movie_Book table.</div>";
        exit();
    }

    // Display confirmation
    echo "<div class='confirmation'>";
    echo "<h1>Booking Confirmation</h1>";
    echo "<p><strong>Movie:</strong> $movie_name</p>";
    echo "<p><strong>Date:</strong> $date</p>";
    echo "<p><strong>Time:</strong> $time</p>";
    echo "<p><strong>Seats:</strong> $seats</p>";
    echo "<p>Your booking is confirmed!</p>";
    echo "<button class='done-button'><a href='index.php'>Done</a></button>";
    echo "</div>";
}
?>

<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background-color: #555555;
        color: #e0e0e0;
    }

    .confirmation {
        text-align: center;
        padding: 20px;
        background-color: #333333;
        border-radius: 10px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
    }

    .confirmation h1 {
        margin-bottom: 15px;
        color: #ff0000; /* Red */
    }

    .confirmation p {
        margin: 10px 0;
    }

    .done-button {
        background-color: #ff0000; /* Red */
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        color: #ffffff;
        font-size: 16px;
        cursor: pointer;
        text-transform: uppercase;
        margin-top: 20px;
    }

    .done-button a {
        color: #ffffff;
        text-decoration: none;
    }

    .done-button:hover {
        background-color: #cc0000; /* Darker Red */
    }
</style>
