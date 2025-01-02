<?php
session_start();
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $release_date = $_POST['release_date'];
    $rating = $_POST['rating'];

    $stmt = $conn->prepare("INSERT INTO movies (title, release_date, rating) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $title, $release_date, $rating);
    $stmt->execute();
    $stmt->close();
    
    header("Location: Movies.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Movie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../libs/font-awesome/css/font-awesome.min.css">
    <style>
        body {
            background-color: #555555;
            color: #ffffff;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 800px;
            margin-top: 50px;
        }

        .form-container {
            background: rgba(0, 0, 0, 0.8);
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
        }

        .form-container h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #ffcc00;
            text-align: center;
        }

        .form-container .form-label {
            font-weight: bold;
            color: #ffffff;
        }

        .form-container .form-control {
            background-color: #333333;
            border: 1px solid #555555;
            border-radius: 4px;
            padding: 10px;
            color: #ffffff;
        }

        .form-container .form-control:focus {
            border-color: #ffcc00;
            box-shadow: 0 0 0 0.2rem rgba(255, 204, 0, 0.25);
        }

        .form-container .btn-primary {
            background-color: #ffcc00;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            color: black;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-container .btn-primary:hover {
            background-color: #e6b800;
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

        #breadcrumb {
            background-color: rgba(0, 0, 0, 0.8);
            padding: 20px;
            color: #ffcc00;
            text-align: center;
            border-radius: 4px;
            margin-bottom: 30px;
        }

        #breadcrumb h2 {
            margin: 0;
            font-size: 24px;
            font-weight: 700;
        }

        #breadcrumb p {
            margin: 10px 0 0;
            font-size: 16px;
            font-weight: 400;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Breadcrumb -->
        <div id="breadcrumb">
            <h2>Hello Admin</h2>
            <p>Add a new movie to our collection providing the details below.</p>

        </div>

        <div class="form-container">
            <h1 class="text-center">Add Movie</h1>
            <form method="POST" action="">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                
                <div class="mb-3">
                    <label for="release_date" class="form-label">Release Date</label>
                    <input type="date" class="form-control" id="release_date" name="release_date" required>
                </div>
                
                <div class="mb-3">
                    <label for="rating" class="form-label">Rating</label>
                    <input type="text" class="form-control" id="rating" name="rating" required>
                </div>
                
                <button type="submit" class="btn btn-primary">Add Movie</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFOjS38QmLk0ptl5B2n9xF8jcVsYk0Sx3UABM/Rr2pr5G/6k6H/E8j" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-Yg7/7i5+WPSGSptnh3CEU1mEwNBxtnP8dkF5F8lU1uWmR7fdvnQo5x1I6EqxSzF3U" crossorigin="anonymous"></script>
</body>
</html>
