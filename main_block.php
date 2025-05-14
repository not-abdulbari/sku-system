<?php
session_start();

// Redirect to login if user is not authenticated
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Main Block - SKU CAHCET</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f8f9fa;
        }

        header {
            background-color: #004080;
            color: white;
            padding: 20px;
            text-align: center;
            position: relative;
        }

        .container {
            padding: 40px;
            max-width: 1200px;
            margin: auto;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .button {
            background-color: #00509e;
            color: white;
            padding: 20px 30px;
            border-radius: 8px;
            font-size: 1.1em;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
            cursor: pointer;
            width: 150px;
        }

        .button:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            background-color: #003f7f;
        }

        footer {
            text-align: center;
            padding: 15px;
            color: #666;
            font-size: 0.9em;
            margin-top: 40px;
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

        .back-button {
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

        .back-button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

<header>
    <a class="back-button" href="block.php">Back</a>
    <a class="logout" href="../logout.php">Logout</a>
    <h1>Welcome <?= htmlspecialchars($_SESSION['username']) ?> - Main Block</h1>
    <p>Choose a Class Below</p>
</header>

<div class="container">
    <div class="button">Class 1</div>
    <div class="button">Class 2</div>
    <div class="button">Class 3</div>
    <div class="button">Class 4</div>
    <div class="button">Class 5</div>
    <div class="button">Class 6</div>
    <div class="button">Class 7</div>
    <div class="button">Class 8</div>
    <div class="button">Class 9</div>
    <div class="button">Class 10</div>
    <div class="button">Class 11</div>
    <div class="button">Class 12</div>
    <div class="button">Class 13</div>
    <div class="button">Class 14</div>
    <div class="button">Class 15</div>
    <div class="button">Class 16</div>
    <div class="button">Class 17</div>
    <div class="button">Class 18</div>
    <div class="button">Class 19</div>
    <div class="button">Class 20</div>
</div>

<footer>
    &copy; <?= date('Y') ?> SKU CAHCET | Developed by CSE students
</footer>

</body>
</html>
