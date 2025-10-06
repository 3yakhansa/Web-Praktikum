<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - ReHabit</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fff7ec;
            margin: 0;
            padding: 2rem;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
        }
        .welcome {
            font-size: 1.25rem;
            margin-bottom: 1.5rem;
        }
        .logout-btn {
            display: inline-block;
            padding: 0.5rem 1rem;
            background-color: #f6d8e0;
            color: #5c4b43;
            text-decoration: none;
            border-radius: 6px;
        }
        .logout-btn:hover {
            background-color: #f6d8e0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Dashboard ReHabit</h1>
        <p class="welcome">Halo, <strong><?= htmlspecialchars($username) ?></strong>! Selamat datang di Dashboard!</p>
        <p>Di sini nanti Anda bisa mengelola kebiasaan harian Anda.</p>
        <a href="logout.php" class="logout-btn">Logout</a>
    </div>
</body>
</html>