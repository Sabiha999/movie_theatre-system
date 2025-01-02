<?php
session_start();
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];



        if ($conn) {
            $sql = "SELECT  username FROM admins WHERE username = ?";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            mysqli_stmt_bind_result($stmt, $username);

            if (mysqli_stmt_fetch($stmt)) {
                if ($password === "loginadmin") {
                    $_SESSION['user_id'] = $id;
                    $_SESSION['username'] = $username;

                    header("Location: dashboard.php");
                    exit;
                } else {
                    $error = "Invalid password.";
                }
            } else {
                $error = "No user found with that username.";
            }
            mysqli_stmt_close($stmt);
        } else {
            $error = "Database connection failed.";
        }
        mysqli_close($conn);
    } 
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="../libs/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../libs/font-awesome/css/font-awesome.min.css">
    <style>
        body {
            background-color: #2c2c2c;
            color: #ffffff;
            font-family: Arial, sans-serif;
        }

        .login-page {
            max-width: 600px;
            margin: 140px auto;
            padding: 30px;
            background-color: #000; /* Solid black background */
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.7);
        }

        .login-form h2.title {
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
            background-color: #000; /* Solid black background */
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
        <h2>Admin Login</h2>
        <p>Please log in with your admin credentials below.</p>
    </div>

    <div class="login-page">
        <div class="login-form form">
            <h2 class="title">ADMIN LOGIN</h2>
            <hr>

            <?php if (!empty($error)) echo '<div class="alert alert-danger">' . $error . '</div>'; ?>

            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <hr>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="../libs/jquery/jquery.js"></script>
<script src="../libs/bootstrap/js/bootstrap.js"></script>
</body>
</html>
