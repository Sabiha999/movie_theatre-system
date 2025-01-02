<?php
include('admin/config.php');
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate form inputs
    $movie_id = htmlspecialchars($_POST['movie']);
    $date = htmlspecialchars($_POST['date']);
    $time = htmlspecialchars($_POST['time']);
    $seats = htmlspecialchars($_POST['seats']);
    $username = $_SESSION['username_or_email']; // Assuming user is logged in and username is stored in session

    // Fetch movie name based on movie ID
    $movie_query = "SELECT title FROM movies WHERE movie_id = ?";
    if ($stmt = mysqli_prepare($conn, $movie_query)) {
        mysqli_stmt_bind_param($stmt, "i", $movie_id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $movie_name);
        mysqli_stmt_fetch($stmt);
        mysqli_stmt_close($stmt);
    } else {
        echo "<div class='alert-danger'>Error fetching movie name.</div>";
        exit();
    }

    // Insert into Movie_Book table
    $insert_book = "INSERT INTO Movie_Book (MovieName, Seats, ShowDate, showTime) VALUES (?, ?, ?, ?)";
    if ($stmt = mysqli_prepare($conn, $insert_book)) {
        mysqli_stmt_bind_param($stmt, "siss", $movie_name, $seats, $date, $time);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    } else {
        echo "<div class='alert-danger'>Error inserting into Movie_Book table.</div>";
        exit();
    }
}

// Fetch movies from the database
$movies_query = "SELECT movie_id, title FROM movies";
$movies_result = mysqli_query($conn, $movies_query);

$movies_options = '';
while ($movie = mysqli_fetch_assoc($movies_result)) {
    $movies_options .= "<option value='" . htmlspecialchars($movie['movie_id']) . "'>" . htmlspecialchars($movie['title']) . "</option>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Booking System</title>
    <link rel="stylesheet" href="../libs/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../libs/font-awesome/css/font-awesome.min.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #555555;
            color: #e0e0e0;
        }

        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.8);
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
        }

        header h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #ff0000; /* Red */
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #e0e0e0;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #555555;
            border-radius: 4px;
            background-color: #333333;
            color: #ffffff;
        }

        input[type="date"]::-webkit-calendar-picker-indicator {
            filter: invert(1);
        }

        .btn {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #ff0000; /* Red */
            color: #ffffff; /* White text */
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #cc0000; /* Darker red */
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

        .alert-danger {
            margin-top: 15px;
            color: #a94442;
            background-color: #f2dede;
            border-color: #ebccd1;
            border-radius: 4px;
            padding: 10px;
            text-align: center;
        }

        .header-container {
            background-color: #000000; /* Black */
            padding: 15px;
            border-radius: 10px;
            border: 2px solid #ff0000; /* Red */
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.2);
        }

        .welcome-text {
            font-size: 18px;
            color: #ffffff; /* White text color */
            font-family: 'Roboto', sans-serif; /* Modern font */
            font-weight: 500;
            margin: 0;
        }

        .username {
            color: #ff0000; /* Red for the username */
            font-weight: bold;
        }
    </style>
</head>
<body>
    <header>
        <div class="header-container">
            <p class="welcome-text">Hello, <span class="username"><?php echo htmlspecialchars($_SESSION['username_or_email']); ?></span> | Welcome to the Movie Booking System. Ready to book your tickets?</p>
        </div>
    </header>

    <div class="container">
        <form action="book.php" method="POST">
            <div class="form-group">
                <label for="movie">Select Movie:</label>
                <select name="movie" id="movie" required>
                    <?php echo $movies_options; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="date">Select Date:</label>
                <input type="date" name="date" id="date" required>
            </div>
            <div class="form-group">
                <label for="time">Select Time:</label>
                <select name="time" id="time" required>
                    <option value="10:00 AM">10:00 AM</option>
                    <option value="01:00 PM">01:00 PM</option>
                    <option value="04:00 PM">04:00 PM</option>
                    <option value="07:00 PM">07:00 PM</option>
                </select>
            </div>
            <div class="form-group">
                <label for="seats">Number of Seats:</label>
                <input type="number" name="seats" id="seats" min="1" max="10" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn">Book Now</button>
            </div>
        </form>
    </div>
</body>
</html>
