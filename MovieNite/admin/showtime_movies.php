<?php
session_start();
include 'config.php';
include 'sidebar.php'; 

// Pagination
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$perPage = 5;
$offset = ($page - 1) * $perPage;

// Fetch data with pagination
$showtimes = $conn->query("
    SELECT 
        s.showtime_id, 
        m.title as movie_name, 
        s.showtime
    FROM 
        showtimes s
    INNER JOIN 
        movies m ON s.movie_id = m.movie_id
    ORDER BY 
        s.showtime_id ASC
    LIMIT $perPage OFFSET $offset");

$totalShowtimes = $conn->query("SELECT COUNT(*) as count FROM showtimes")->fetch_assoc()['count'];
$totalPages = ceil($totalShowtimes / $perPage);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Showtimes Management</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
            background-color: #e53935; /* Update to match the theme color */
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

        .pagination {
            justify-content: center;
        }

        .pagination .page-item.active .page-link {
            background-color: #e53935;
            border-color: #e53935;
        }

        .pagination .page-link {
            color: #e53935;
        }

        .btn-info {
            background-color: #17a2b8;
            border-color: #17a2b8;
        }

        .btn-info:hover {
            background-color: #138496;
            border-color: #117a8b;
        }

        .btn-warning {
            background-color: #ffc107;
            border-color: #ffc107;
        }

        .btn-warning:hover {
            background-color: #e0a800;
            border-color: #d39e00;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }
    </style>
</head>
<body>
    <br>
    <div class="main-content">
        <div class="card shadow">
            <div class="card-header">
                <h4 class="mb-0">Showtimes</h4>
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Showtime ID</th>
                            <th>Movie</th>
                            <th>Showtime</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $showtimes->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['showtime_id']); ?></td>
                            <td><?php echo htmlspecialchars($row['movie_name']); ?></td>
                            <td><?php echo htmlspecialchars($row['showtime']); ?></td>
                            <td>
                                <a href="view_showtime.php?id=<?php echo $row['showtime_id']; ?>" class="btn btn-info btn-sm">View</a>
                                <a href="edit_showtime.php?id=<?php echo $row['showtime_id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href='delete_showtime.php?id=<?php echo htmlspecialchars($row["showtime_id"]); ?>' class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li class="page-item <?php echo $page <= 1 ? 'disabled' : ''; ?>">
                            <a class="page-link" href="?page=<?php echo max(1, $page - 1); ?>">Previous</a>
                        </li>
                        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                            <li class="page-item <?php echo $i == $page ? 'active' : ''; ?>">
                                <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                            </li>
                        <?php endfor; ?>
                        <li class="page-item <?php echo $page >= $totalPages ? 'disabled' : ''; ?>">
                            <a class="page-link" href="?page=<?php echo min($totalPages, $page + 1); ?>">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
