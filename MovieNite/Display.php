

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MovieNite</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('https://i.pinimg.com/564x/e9/7c/37/e97c37166e06e49c0d1239ca17b32720.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: 0;
            text-align: center;
            color: #ffffff; /* White text for contrast */
            text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.7); /* Enhanced text shadow for better readability */
            overflow: hidden; /* Prevent horizontal scroll */
        }
        .profile-pic {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            border: 2px solid #ffffff;
            overflow: hidden;
        }
        .profile-pic img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .admin-login {
            position: absolute;
            top: 20px;
            right: 100px;
            background-color: #dc3545; /* Red button for admin */
            padding: 10px 20px;
            border-radius: 8px; /* Rounded corners */
            color: #ffffff; /* White text color */
            text-decoration: none;
            font-size: 18px;
            box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.3); /* Button shadow */
        }
        .admin-login:hover {
            opacity: 0.9; /* Slight transparency on hover */
            transform: scale(1.1); /* Enlarge on hover */
            box-shadow: 4px 4px 12px rgba(0, 0, 0, 0.4); /* Enhance shadow on hover */
        }
        h1 {
            margin-bottom: 20px;
            font-weight: 700;
            font-size: 3rem; /* Increased font size for better impact */
            white-space: nowrap; /* Prevent wrapping */
            overflow: hidden; /* Hide overflow */
            box-sizing: border-box; /* Include padding in width calculation */
           
            letter-spacing: 2px; /* Add spacing between letters for a modern look */
        }
       
        p.lead {
            font-size: 1.5rem; /* Increased font size for better readability */
            font-weight: 600;
            margin-bottom: 30px;
            letter-spacing: 1px; /* Slight spacing between letters */
        }
        .btn-custom {
            width: 220px; /* Slightly larger button width */
            padding: 12px;
            font-size: 18px; /* Larger font size */
            margin: 10px 0;
            color: #ffffff; /* Button text color */
            border: none;
            border-radius: 8px; /* Rounded corners */
            box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.3); /* More pronounced button shadow */
            transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth scale and shadow transition */
        }
        .btn-primary {
            background-color: #007bff; /* Blue button */
        }
        .btn-secondary {
            background-color: #6c757d; /* Gray button */
        }
        .btn-primary:hover, .btn-secondary:hover {
            opacity: 0.9; /* Slight transparency on hover */
            transform: scale(1.1); /* Enlarge on hover */
            box-shadow: 4px 4px 12px rgba(0, 0, 0, 0.4); /* Enhance shadow on hover */
        }
    </style>
</head>
<body>


    <a href="./admin/login.php" class="admin-login">Admin Login</a>
    <h1>Welcome to MovieNite</h1>
        <p class="lead"><strong>Your ultimate destination for booking movie tickets!</strong></p>

    <a href="./admin/user_login.php" class="btn btn-primary btn-custom">Sign In</a>
    <a href="./admin/userreg.php" class="btn btn-secondary btn-custom">Sign Up</a>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
