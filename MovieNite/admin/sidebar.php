<?php
include 'config.php';
session_start();


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
    background-color: #1e1e2f;
    color: #f0f0f5;
    font-family: 'Roboto', sans-serif;
    transition: background-color 0.3s, color 0.3s;
}

.sidebar {
    height: 100vh;
    position: fixed;
    top: 0;
    left: 0;
    width: 260px;
    background-color: #2c2c3e;
    color: white;
    padding-top: 20px;
    transition: background-color 0.3s, color 0.3s;
    box-shadow: 2px 0 10px rgba(0, 0, 0, 0.5);
}

.sidebar h4 {
    color: #03a9f4;
    padding-bottom: 20px;
    border-bottom: 1px solid #3e3e4e;
    margin-bottom: 20px;
    text-align: center;
}

.sidebar a {
    color: #b0bec5;
    padding: 12px 20px;
    text-decoration: none;
    display: block;
    font-size: 16px;
    transition: background-color 0.3s, color 0.3s;
}

.sidebar a:hover {
    background-color: #03a9f4;
    color: white;
    border-radius: 4px;
}

.content {
    margin-left: 260px;
    padding: 30px;
    transition: background-color 0.3s, color 0.3s;
}

.header-container {
    background-color: #03a9f4;
    color: white;
    padding: 10px 15px; /* Adjusted padding */
    text-align: center;
    position: fixed;
    top: 0;
    left: 250px;
    width: calc(100% - 260px);
    z-index: 1;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
    box-sizing: border-box; /* Ensure padding is included in width calculation */
}

.header-container h1 {
    font-size: 24px;
    font-weight: 500;
    margin: 0; /* Remove default margin */
    padding: 0;
      /* Remove default padding */
}

.header-container p {
    margin: 0; /* Remove margin to eliminate gap */
    font-size: 14px;
    line-height: 1.5;
    /* Adjust line height for better readability */
}

.header-container .btn {
    font-size: 14px;
    padding: 5px 10px;
    margin-top: 12px; /* Space between paragraph and button */
}


.toggle-btn {
    position: fixed;
    top: 20px;
    left: 20px;
    cursor: pointer;
    font-size: 24px;
    z-index: 2;
    color: #03a9f4;
}

.content p {
    margin-top: 80px;
    font-size: 16px;
}

    </style>
</head>

<body>
    <div class="sidebar">
        <h4>Admin Panel</h4>
        <a href="dashboard.php">Dashboard</a>
        <a href="recent_movies.php">Recent Movies Booked</a>

    <a href="Movies.php">Movies</a>
    <a href="booking_movies.php">Bookings</a>
    <a href="user_movies.php">Users</a>
    <a href="showtime_movies.php">Shows</a>
    </div>
    
    <div class="content">
        <div class="header-container">
<h1>Welcome to the Admin Panel</h1>
          <p>Hello, <?php echo htmlspecialchars($_SESSION['username']); ?>! | 
                Date: <?php echo date('Y-m-d'); ?> |
                Time: <?php echo date('H:i:s'); ?>
            </p>
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>

        <div class="mt-4">
            <p>This is where your main content will go. Add, Update, or Delete items using the navigation links.</p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>