<?php
session_start();
include 'config.php';
include 'sidebar.php';

// Pagination
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$perPage = 5;
$offset = ($page - 1) * $perPage;

// Fetch data with pagination
$movies = $conn->query("SELECT * FROM Movies LIMIT $perPage OFFSET $offset");
$totalMovies = $conn->query("SELECT COUNT(*) as count FROM Movies")->fetch_assoc()['count'];
$totalPages = ceil($totalMovies / $perPage);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Movie Booking System</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #121212;
            color: #e0e0e0;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            overflow-x: hidden; /* Prevent horizontal scrolling */
        }

        .main-content {
            margin-left: 250px; /* Adjust this value to match the sidebar's width */
            padding: 20px;
            background-color: #1e1e1e; /* Slightly lighter black */
            min-height: 100vh; /* Ensure full viewport height */
        }

        .card {
            background-color: #1c1c1c; /* Darker card background */
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
            background-color: #e53935; /* Red header */
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
            background-color: #1e1e1e; /* Darker table background */
            border-collapse: separate; /* Ensure borders are visible */
            border-radius: 10px; /* Rounded corners for table */
            overflow: hidden; /* Hide overflow to match rounded corners */
        }

        .table thead {
            background-color: #c8102e; /* Red background for header */
            color: #ffffff;
        }

        .table thead th {
            padding: 10px;
            border-bottom: 2px solid #ffffff; /* White border for header */
        }

        .table tbody tr:nth-of-type(odd) {
            background-color: #2a2a2a; /* Darker gray for odd rows */
        }

        .table tbody tr:nth-of-type(even) {
            background-color: #333; /* Slightly lighter gray for even rows */
        }

        .table tbody tr:hover {
            background-color: #555; /* Lighter gray on hover */
        }

        .table th, .table td {
            padding: 12px;
            text-align: center;
        }

        .pagination {
            justify-content: center;
            margin-top: 20px;
        }

        .pagination .page-item.active .page-link {
            background-color: #c8102e; /* Red for active page */
            border-color: #c8102e;
        }

        .pagination .page-link {
            color: #c8102e; /* Red for page links */
        }

        .btn-info {
            background-color: #c8102e; /* Red button */
            border-color: #c8102e;
        }

        .btn-info:hover {
            background-color: #a10c24; /* Darker red on hover */
            border-color: #a10c24;
        }

        .btn-warning {
            background-color: #ffc107; /* Yellow button */
            border-color: #ffc107;
        }

        .btn-warning:hover {
            background-color: #e0a800; /* Darker yellow on hover */
            border-color: #d39e00;
        }

        .btn-danger {
            background-color: #dc3545; /* Red button */
            border-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #c82333; /* Darker red on hover */
            border-color: #bd2130;
        }

        .btn-secondary {
            background-color: #6c757d; /* Grey button */
            border-color: #6c757d;
        }

        .btn-secondary:hover {
            background-color: #5a6268; /* Darker grey on hover */
            border-color: #545b62;
        }
    </style>
</head>
<body>
    <div class="main-content">
        <div class="card shadow">
            <div class="card-header">
                <h4 class="mb-0">Movies</h4>
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Release Date</th>
                            <th>Rating</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $movies->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['movie_id']); ?></td>
                            <td><?php echo htmlspecialchars($row['title']); ?></td>
                            <td><?php echo htmlspecialchars($row['release_date']); ?></td>
                            <td><?php echo htmlspecialchars($row['rating']); ?></td>
                            <td>
                                <a href="view_movies.php?id=<?php echo $row['movie_id']; ?>" class="btn btn-info btn-sm">View</a>
                                <a href="edit_movies.php?id=<?php echo $row['movie_id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href='delete_movies.php?id=<?php echo htmlspecialchars($row["movie_id"]); ?>' class="btn btn-danger btn-sm">Delete</a>
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
        <a href="add_movies.php" class="btn btn-secondary btn-lg">Add Movie</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

