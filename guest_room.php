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
    <title>Guest Room - SKU CAHCET</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f4f8;
        }

        header {
            background-color: #003366;
            color: white;
            padding: 20px;
            text-align: center;
            position: relative;
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
            padding: 40px;
            max-width: 1200px;
            margin: auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 25px;
        }

        .room-button {
            background-color: #003366;
            color: white;
            padding: 30px;
            border: none;
            border-radius: 10px;
            font-size: 1.2em;
            cursor: pointer;
            text-align: center;
            transition: transform 0.3s ease, background-color 0.3s ease;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .room-button:hover {
            transform: translateY(-10px);
            background-color: #00509e;
        }

        footer {
            text-align: center;
            padding: 20px;
            color: #666;
            font-size: 0.9em;
            margin-top: 40px;
        }
    </style>
</head>
<body>

<header>
    <a class="logout" href="../logout.php">Logout</a>
    <h1>Welcome <?= htmlspecialchars($_SESSION['username']) ?> - Guest Room</h1>
    <p>Select a Room</p>
</header>

<div class="container">
    <button class="room-button">Room 1</button>
    <button class="room-button">Room 2</button>
    <button class="room-button">Room 3</button>
    <button class="room-button">Room 4</button>
    <button class="room-button">Room 5</button>
    <button class="room-button">Room 6</button>
</div>

<footer>
    &copy; <?= date('Y') ?> SKU CAHCET | Developed by CSE students
</footer>

</body>
</html>
