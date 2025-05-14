<?php
session_start();

// Redirect to login if not authenticated
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Canteen Selection - SKU CAHCET</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f4f8;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        header {
            background-color: #003366;
            color: white;
            width: 100%;
            padding: 20px;
            text-align: center;
            position: relative;
        }

        .back-button {
            position: absolute;
            top: 20px;
            left: 30px;
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 0.9em;
            transition: background-color 0.3s ease;
        }

        .back-button:hover {
            background-color: #45a049;
        }

        .logout {
            position: absolute;
            top: 20px;
            right: 30px;
            background-color: #ff4d4d;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 0.9em;
            transition: background-color 0.3s ease;
        }

        .logout:hover {
            background-color: #cc0000;
        }

        .container {
            margin-top: 100px;
            display: flex;
            gap: 40px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .canteen-button {
            background-color: #003366;
            color: white;
            padding: 40px 60px;
            border: none;
            border-radius: 10px;
            font-size: 1.5em;
            cursor: pointer;
            transition: transform 0.3s ease, background-color 0.3s ease;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            min-width: 250px;
            text-align: center;
        }

        .canteen-button:hover {
            background-color: #0055AA;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
<header>
    <a href="blocks.php" class="back-button">Back</a>
    <h1>Welcome to the Canteen Selection</h1>
    <a href="logout.php" class="logout">Logout</a>
</header>

<div class="container">
    <button class="canteen-button" onclick="window.location.href='boys_canteen.php'">BOYS CANTEEN</button>
    <button class="canteen-button" onclick="window.location.href='girls_canteen.php'">GIRLS CANTEEN</button>
</div>
</body>
</html>
