<?php
session_start();
include 'config.php';
include('sidebar.php');



if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

// Fetch total number of movies
$totalMovies = $conn->query("SELECT COUNT(*) as count FROM movies")->fetch_assoc()['count'];

// Fetch total number of bookings
$totalBookings = $conn->query("SELECT COUNT(*) as count FROM bookings")->fetch_assoc()['count'];

// Fetch total number of users
$totalUsers = $conn->query("SELECT COUNT(*) as count FROM users")->fetch_assoc()['count'];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Movie Booking System</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Existing Styles */
        body {
            background-color: #121212;
            color: #e0e0e0;
            font-family: 'Arial', sans-serif;
        }

        .main-content {
            margin-left: 250px;
            padding: 20px;
        }

        .card {
            background-color: #1c1c1c;
            border: none;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);
            transition: transform 0.3s;
        }

        .card:hover {
            transform: scale(1.02);
        }

        .card-header {
            background-color: #4CAF50;
            border-radius: 10px 10px 0 0;
            padding: 15px;
            font-size: 20px;
            font-weight: bold;
            color: #fff;
        }

        .card-body {
            padding: 20px;
            color: #e0e0e0;
        }

        .overview-card {
            background-color: #2e2e2e;
            border: 1px solid #444;
        }

        .overview-card h3 {
            color: #4CAF50;
            font-weight: bold;
        }

        .search-bar {
            margin-bottom: 20px;
        }

        .recent-activities {
            background-color: #2e2e2e;
            border: 1px solid #444;
            padding: 15px;
        }

        .recent-activities h4 {
            margin-bottom: 15px;
            color: #4CAF50;
        }

        .alerts {
            background-color: #2e2e2e;
            border: 1px solid #444;
            padding: 15px;
            margin-bottom: 20px;
        }

        .alerts h4 {
            margin-bottom: 15px;
            color: #FFC107;
        }

        .activity-item,
        .alert-item {
            padding: 10px;
            border-bottom: 1px solid #444;
        }

        .activity-item:last-child,
        .alert-item:last-child {
            border-bottom: none;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
    </style>
</head>

<body>

<div class="main-content">
    <div class="container-fluid">
        <div class="row mb-4">
            <section id="dashboard" class="col-12">
                <h2 class="mb-4">Overview</h2>

                

                <div class="row">
                    <div class="col-md-4">
                        <div class="card overview-card">
                            <div class="card-body text-center">
                                <h3>Total Movies</h3>
                                <p><?php echo $totalMovies; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card overview-card">
                            <div class="card-body text-center">
                                <h3>Total Bookings</h3>
                                <p><?php echo $totalBookings; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card overview-card">
                            <div class="card-body text-center">
                                <h3>Total Users</h3>
                                <p><?php echo $totalUsers; ?></p>
                            </div>
                        </div>
                    </div>
                </div>

               

             
            </section>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
