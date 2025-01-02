<?php
session_start();
include 'config.php';
include 'sidebar.php';

$movies_booked = $conn->query("SELECT * FROM movie_book");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booked Movies</title>
    <link rel="stylesheet" href="../libs/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../libs/font-awesome/css/font-awesome.min.css">
    <style>
        body {
            background-color: #121212;
            color: #e0e0e0;
            font-family: Arial, sans-serif;
        }

        .main-content {
            margin-left: 250px; /* Adjust this value to match the sidebar's width */
            padding: 20px;
        }

        .card {
            background-color: #1c1c1c;
            border: none;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);
            margin-bottom: 20px;
            transition: transform 0.3s;
        }

        .card:hover {
            transform: scale(1.02);
        }

        .card-header {
            background-color: #e53935; /* Match the header color to the theme */
            color: #fff;
            font-weight: bold;
            font-size: 1.5rem;
            border-radius: 10px 10px 0 0;
            padding: 15px;
            text-align: center;
        }

        .card-header h4 {
            margin: 0;
        }

        .card-body {
            padding: 20px;
            color: #e0e0e0;
        }

        .table {
            color: #e0e0e0;
        }

        .table thead th {
            background-color: #1c1c1c;
            color: #e0e0e0;
            border-bottom: 2px solid #e53935;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #333;
        }

        .table-striped tbody tr:nth-of-type(even) {
            background-color: #444;
        }

        .table-hover tbody tr:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <div class="main-content">
        <div class="card shadow">
            <div class="card-header">
                <h4 class="mb-0">Recent Booking</h4>
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Seats</th>
                            <th>Show Date</th>
                            <th>Show Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $movies_booked->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['MovieName']); ?></td>
                            <td><?php echo htmlspecialchars($row['Seats']); ?></td>
                            <td><?php echo htmlspecialchars($row['ShowDate']); ?></td>
                            <td><?php echo htmlspecialchars($row['showTime']); ?></td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
