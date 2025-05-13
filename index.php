<?php
session_start();
require_once 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // SHA-256 hash of entered password
    $hashedPassword = hash('sha256', $password);

    // Query user by username
    $stmt = $pdo->prepare("SELECT password FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && $hashedPassword === $user['password']) {
        $_SESSION['username'] = $username;
        header("Location: blocks/dashboard.php");
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SKU CAHECET Login</title>
    <style>
        body {
            background-color: #e6f0ff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background: #fff;
            padding: 40px 30px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            width: 320px;
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #003366;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px 10px;
            margin-bottom: 18px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #003366;
            color: white;
            border: none;
            width: 100%;
            padding: 12px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }

        input[type="submit"]:hover {
            background-color: #0059b3;
        }

        .error {
            color: red;
            margin-bottom: 15px;
            text-align: center;
        }

        .toggle-password {
            float: right;
            margin-top: -30px;
            margin-right: 10px;
            cursor: pointer;
            font-size: 0.9em;
            color: #0059b3;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>SKU CAHECET Login</h2>
        <?php if (isset($error)): ?>
            <div class="error"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>
        <form method="post" action="">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <span class="toggle-password" onclick="togglePassword()">Show</span>
            <input type="submit" value="Login">
        </form>
    </div>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const toggleText = document.querySelector('.toggle-password');
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                toggleText.textContent = "Hide";
            } else {
                passwordInput.type = "password";
                toggleText.textContent = "Show";
            }
        }
    </script>
</body>
</html>

