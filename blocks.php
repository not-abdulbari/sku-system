<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
echo $undefined_variable; // Intentional error to trigger a warning

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
    <div class="block"><a href="main_block.php" style="text-decoration:none; color: inherit;">MAIN BLOCK</a></div>    
    <div class="block">TECH TOWER</div>
    <div class="block">LIBRARY</div>
    <div class="block">ECE BLOCK</div>
    <div class="block">AUDITORIUM</div>
    <div class="block">EEE BLOCK</div>
    <div class="block">MBA BLOCK</div>
    <div class="block">MECH BLOCK</div>
    <div class="block">AERO BLOCK</div>
    <div class="block">ARCHITECT BLOCK</div>
    <div class="block"><a href="BOYS_HOSTEL.php" style="text-decoration:none; color: inherit;">BOYS HOSTEL</a></div>     
    <div class="block">GIRLS HOSTEL</div>
    <div class="block">MAIN CANTEEN</div>
    <div class="block">MINI CANTEEN</div>
    <div class="block">GUEST ROOM</div>





    
    <div class="block">HOSTEL</div>
</div>

<footer>
    &copy; <?= date('Y') ?> SKU CAHCET | Developed by CSE students
</footer>

</body>
</html>
