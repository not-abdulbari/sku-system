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
    <title>Blocks - SKU CAHCET</title>
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
        }

        .container {
            padding: 40px;
            max-width: 1200px;
            margin: auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 30px;
        }

        .block {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            padding: 30px;
            text-align: center;
            font-size: 1.2em;
            font-weight: bold;
            color: #003366;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }

        .block:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 20px rgba(0,0,0,0.15);
            background-color: #f0f8ff;
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
    </style>
</head>
<body>

<header>
    <a class="logout" href="../logout.php">Logout</a>
    <h1>Welcome <?= htmlspecialchars($_SESSION['username']) ?> - SKU CAHCET</h1>
    <p>Select a Block Below</p>
</header>

<div class="container">
    <?php for ($i = 1; $i <= 10; $i++): ?>
        <div class="block">Block <?= $i ?></div>
    <?php endfor; ?>
</div>

<footer>
    &copy; <?= date('Y') ?> SKU CAHCET | Developed by CSE students
</footer>

</body>
</html>

