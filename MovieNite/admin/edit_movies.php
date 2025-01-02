<?php
session_start();
include 'config.php';





$movie_id = $_GET['id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $release_date = $_POST['release_date'];
    $rating = $_POST['rating'];

    $stmt = $conn->prepare("UPDATE movies SET title = ?, release_date = ?, rating = ? WHERE movie_id = ?");
    $stmt->bind_param("sssi", $title, $release_date, $rating, $movie_id);
    $stmt->execute();
    $stmt->close();
    
    header("Location: Movies.php");
    exit();
}

$movie = $conn->query("SELECT * FROM movies WHERE movie_id = $movie_id")->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Movie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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

        .form-container {
            background-color: rgba(0, 0, 0, 0.8);
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
        }

        .form-container h1 {
            color: #ffcc00;
            margin-bottom: 20px;
            text-align: center;
            font-size: 28px;
            font-weight: bold;
        }

        .form-control {
            background-color: #333333;
            border: 1px solid #555555;
            border-radius: 4px;
            padding: 10px;
            color: #ffffff;
        }

        .btn-primary {
            background-color: #ffcc00;
            border: none;
            padding: 10px 20px;
            width: 100%;
            border-radius: 4px;
            color: black;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #e6b800;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h1>Edit Movie</h1>
            <form method="POST" action="">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?php echo htmlspecialchars($movie['title']); ?>" required>
                </div>

                <div class="mb-3">
                    <label for="release_date" class="form-label">Release Date</label>
                    <input type="date" class="form-control" id="release_date" name="release_date" value="<?php echo htmlspecialchars($movie['release_date']); ?>" required>
                </div>
                <div class="mb-3">
                    <label for="rating" class="form-label">Rating</label>
                    <input type="text" class="form-control" id="rating" name="rating" value="<?php echo htmlspecialchars($movie['rating']); ?>" required>
                </div>
                <button type="submit" class="btn btn-primary">Update Movie</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-7Q2PypTh+1V9XyXqIImYZPevv9jGgfA3Qe63et4k2ZpksvhrquW+4Z8vG4vYYz7sB" crossorigin="anonymous"></script>
</body>
</html>
