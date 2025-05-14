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
    <title>Mini Canteen - SKU CAHCET</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }

        header {
            background-color: #333399;
            color: white;
            padding: 25px;
            text-align: center;
            position: relative;
        }

        .back-btn {
            position: absolute;
            top: 20px;
            left: 30px;
            background-color: #28a745;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 0.9em;
            transition: background-color 0.3s ease;
        }

        .back-btn:hover {
            background-color: #218838;
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
            padding: 60px 20px;
            max-width: 800px;
            margin: auto;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 30px;
        }

        .canteen-btn {
            background-color: #333399;
            color: white;
            padding: 40px 50px;
            border: none;
            border-radius: 12px;
            font-size: 1.4em;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .canteen-btn:hover {
            background-color: #4b4bd4;
            transform: scale(1.05);
        }

        footer {
            text-align: center;
            padding: 20px;
            font-size: 0.9em;
            color: #666;
            margin-top: 40px;
        }
    </style>
</head>
<body>

<header>
    <a class="back-btn" href="blocks.php">← Back</a>
    <a class="logout" href="../logout.php">Logout</a>
    <h1>Welcome <?= htmlspecialchars($_SESSION['username']) ?> - Mini Canteen</h1>
    <p>Select a Canteen</p>
</header>

<div class="container">
    <button class="canteen-btn">Boys Canteen</button>
    <button class="canteen-btn">Girls Canteen</button>
</div>

<footer>
    &copy; <?= date('Y') ?> SKU CAHCET | Developed by CSE students
</footer>

</body>
</html>
