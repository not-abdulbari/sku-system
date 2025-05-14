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
    <title>Boys Hostel - SKU CAHCET</title>
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

        .back-button {
            margin: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            transition: background-color 0.3s ease;
        }

        .back-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<header>
    <a class="logout" href="../logout.php">Logout</a>
    <h1>Welcome <?= htmlspecialchars($_SESSION['username']) ?> - Boys Hostel</h1>
    <p>Select a Room</p>
</header>

<!-- Back Button -->
<div>
    <a class="back-button" href="blocks.php">Back</a>
</div>

<div class="container">
    <button class="room-button">Room 1</button>
    <button class="room-button">Room 2</button>
    <button class="room-button">Room 3</button>
    <button class="room-button">Room 4</button>
    <button class="room-button">Room 5</button>
    <button class="room-button">Room 6</button>
    <button class="room-button">Room 7</button>
    <button class="room-button">Room 8</button>
    <button class="room-button">Room 9</button>
    <button class="room-button">Room 10</button>
    <button class="room-button">Room 11</button>
    <button class="room-button">Room 12</button>
    <button class="room-button">Room 13</button>
    <button class="room-button">Room 14</button>
    <button class="room-button">Room 15</button>
    <button class="room-button">Room 16</button>
    <button class="room-button">Room 17</button>
    <button class="room-button">Room 18</button>
    <button class="room-button">Room 19</button>
    <button class="room-button">Room 20</button>
</div>

<footer>
    &copy; <?= date('Y') ?> SKU CAHCET | Developed by CSE students
</footer>

</body>
</html>
