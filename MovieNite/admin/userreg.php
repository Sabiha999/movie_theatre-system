<?php
session_start();
include 'config.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!preg_match("/^[a-zA-Z0-9_ ]{5,}$/", $username)) {
        $error = "Username must contain at least five characters and only letters, numbers, and underscores.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email address";
    } elseif (strlen($password) < 6) {
        $error = "Password must be at least six characters long";
    } else {
        $conn = mysqli_connect('localhost', 'root', '', 'movie_booking_system');

        $sql = "SELECT user_id FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);

        if (mysqli_stmt_num_rows($stmt) > 0) {
            $error = "Username is already taken";
        } else {
            $sql2 = "SELECT user_id FROM users WHERE email = ?";
            $stmt = mysqli_prepare($conn, $sql2);
            mysqli_stmt_bind_param($stmt, 's', $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);

            if (mysqli_stmt_num_rows($stmt) > 0) {
                $error = "Email address already exists";
            } else {
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                $sql3 = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
                $stmt = mysqli_prepare($conn, $sql3);
                mysqli_stmt_bind_param($stmt, 'sss', $username, $email, $hashed_password);

                if (mysqli_stmt_execute($stmt)) {
                    header("Location: user_login.php");
                    exit;
                } else {
                    $error = "Registration failed. Please try again.";
                }
            }
        }
        mysqli_close($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="../libs/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../libs/font-awesome/css/font-awesome.min.css">
    <style>
        body {
            background-color: #2c2c2c;
            color: #ffffff;
            font-family: Arial, sans-serif;
        }

        .register-page {
            max-width: 400px;
            margin: 100px auto;
            padding: 40px;
            background-color: rgba(0, 0, 0, 0.85);
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.7);
        }

        .register-form h2.title {
            color: #ff4d4d;
            margin-bottom: 20px;
            text-align: center;
            font-size: 28px;
            font-weight: bold;
            text-shadow: 0 0 10px rgba(255, 77, 77, 0.7), 0 0 20px rgba(255, 77, 77, 0.5);
        }

        .form-control {
            background-color: #333333;
            border: 1px solid #555555;
            border-radius: 4px;
            padding: 10px;
            color: #ffffff;
        }

        .form-control::placeholder {
            color: #cccccc;
            opacity: 0.7;
        }

        .btn-primary {
            background-color: #ff4d4d;
            border: none;
            padding: 10px 20px;
            width: 100%;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            box-shadow: 0 0 10px rgba(255, 77, 77, 0.7), 0 0 20px rgba(255, 77, 77, 0.5);
        }

        .btn-primary:hover {
            background-color: #e64545;
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
            background-color: rgba(0, 0, 0, 0.85);
            padding: 20px;
            color: #ff4d4d;
            text-align: center;
            border-radius: 4px;
            margin-bottom: 30px;
            text-shadow: 0 0 10px rgba(255, 77, 77, 0.7), 0 0 20px rgba(255, 77, 77, 0.5);
            box-shadow: 0 0 10px rgba(255, 77, 77, 0.7), 0 0 20px rgba(255, 77, 77, 0.5);
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

        .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .form-group label {
            flex: 1;
            font-weight: bold;
            margin-right: 10px;
        }

        .form-group input {
            flex: 2;
            padding: 10px;
            background-color: #333333;
            border: 1px solid #555555;
            border-radius: 4px;
            color: #ffffff;
        }

        .form-group input:focus {
            border-color: #ff4d4d;
            box-shadow: 0 0 10px rgba(255, 77, 77, 0.7), 0 0 20px rgba(255, 77, 77, 0.5);
        }
    </style>
</head>
<body>
<div class="container">
    <!-- Breadcrumb -->
    <div id="breadcrumb">
        <h2>Welcome!</h2>
        <p>Create your account by filling in the details below.</p>
    </div>

    <div class="register-page">
        <div class="register-form form">
            <h2 class="title">USER REGISTRATION</h2>
            <hr>

            <?php if (!empty($error)) echo '<div class="alert alert-danger">' . $error . '</div>'; ?>

            <form action="userreg.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="Enter your username" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required>
                </div>
                
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="../libs/jquery/jquery.js"></script>
<script src="../libs/bootstrap/js/bootstrap.js"></script>
</body>
</html>
