<?php
session_start();
include 'config.php';







$id = isset($_GET['id']) ? intval($_GET['id']) : 0; // Sanitize and validate the ID

if ($id) {
    // Prepare and execute the SQL query securely
    $stmt = $conn->prepare("
        SELECT m.movie_id, m.title, m.release_date, m.rating, s.showtime
        FROM movies m
        INNER JOIN showtimes s ON m.movie_id = s.movie_id
        WHERE m.movie_id = ?
    ");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $stmt->close();

    if ($row) {
        // Fetch and use the movie data
        $movie_id = htmlspecialchars($row['movie_id']);
        $title = htmlspecialchars($row['title']);
        $release_date = htmlspecialchars($row['release_date']);
        $rating = htmlspecialchars($row['rating']);
        $showtime = htmlspecialchars($row['showtime']);
    } else {
        echo "Movie not found.";
        exit;
    }
} else {
    echo "Invalid movie ID.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Movie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #555555;
            color: #ffffff;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 600px;
            margin-top: 50px;
        }

        .details-container {
            background-color: rgba(0, 0, 0, 0.8);
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
        }

        .details-container h2 {
            color: #ffcc00;
            margin-bottom: 20px;
            text-align: center;
            font-size: 28px;
            font-weight: bold;
        }

        .table th {
            background-color: #333333;
            color: #ffffff;
        }

        .table td {
            background-color: #444444;
            color: #ffffff;
        }

        .btn {
            border-radius: 4px;
            font-size: 16px;
            font-weight: bold;
        }

        .btn-warning {
            background-color: #ffcc00;
            border: none;
            color: #000000;
            transition: background-color 0.3s ease;
        }

        .btn-warning:hover {
            background-color: #e6b800;
        }

        .btn-danger {
            background-color: #dc3545;
            border: none;
            color: #ffffff;
            transition: background-color 0.3s ease;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        .btn-secondary {
            background-color: #6c757d;
            border: none;
            color: #ffffff;
            transition: background-color 0.3s ease;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="details-container">
            <h2 class="mb-4">View Movie</h2>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <td><?php echo htmlspecialchars($movie_id); ?></td>
                </tr>
                <tr>
                    <th>Title</th>
                    <td><?php echo htmlspecialchars($title); ?></td>
                </tr>
                <tr>
                    <th>Release Date</th>
                    <td><?php echo htmlspecialchars($release_date); ?></td>
                </tr>
                <tr>
                    <th>Rating</th>
                    <td><?php echo htmlspecialchars($rating); ?></td>
                </tr>
                <tr>
                    <th>Show Date & Time</th>
                    <td><?php echo htmlspecialchars($showtime); ?></td>
                </tr>
            </table>
            <a href="edit_movies.php?id=<?php echo htmlspecialchars($movie_id); ?>" class="btn btn-warning">Edit</a>
            <a href="delete_movies.php?id=<?php echo htmlspecialchars($movie_id); ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this record?');">Delete</a>
            <a href="Movies.php" class="btn btn-secondary">Back to List</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
