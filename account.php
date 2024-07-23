<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.html');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #6f86d6, #48c6ef);
            font-family: Arial, sans-serif;
            overflow: hidden;
        }

        .container {
            width: 300px;
            padding: 20px;
            background: #fff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            text-align: center;
            position: relative;
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.9);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .container h2 {
            margin-bottom: 20px;
        }

        .container p {
            margin-bottom: 20px;
        }

        .container a {
            display: inline-block;
            padding: 10px 20px;
            background: #48c6ef;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s, transform 0.3s;
        }

        .container a:hover {
            background: #6f86d6;
            transform: scale(1.05);
        }

        .wave {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100px;
            background: url('wave.svg') repeat-x;
            animation: waveAnimation 5s infinite linear;
        }

        @keyframes waveAnimation {
            from {
                transform: translateX(0);
            }
            to {
                transform: translateX(-100%);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Your Account</h2>
        <p>Welcome, <?php echo $_SESSION['username']; ?>!</p>
        <a href="logout.php">Logout</a>
        <div class="wave"></div>
    </div>
    <script>
        // Add any additional interactive JavaScript here
    </script>
</body>
</html>
