<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страница для авторизованных</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            background-color: #f9f9f9;
        }

        .message {
            margin: 20px auto;
            padding: 15px;
            max-width: 400px;
            border-radius: 10px;
            text-align: center;
            font-size: 18px;
            color: #333;
            background-color: #e0e0e0;
        }

        .content {
            text-align: center;
            margin-top: 40px;
        }

        .content h3 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        .nav-link {
            display: inline-block;
            margin: 10px 10px;
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .nav-link:hover {
            background-color: #0056b3;
        }

        .logout {
            background-color: #dc3545;
        }

        .logout:hover {
            background-color: #b21f2d;
        }
    </style>
</head>

<body>

    <?php
    session_start();
    error_reporting(-1);

    if (isset($_GET['do']) && $_GET['do'] == 'logout') {
        unset($_SESSION['auth']);
        $_SESSION['res'] = 'Вы вышли.';
        header("Location: passwordAdd.php");
        die;
    }

    if (isset($_SESSION['res'])) {
        echo "<div class='message'>" . htmlspecialchars($_SESSION['res']) . "</div>";
        unset($_SESSION['res']);
    }
    ?>

    <div class="content">
        <?php if (!empty($_SESSION['auth'])): ?>
            <h3>Эту страницу может видеть только авторизованный пользователь</h3>
            <a class="nav-link logout" href="?do=logout">Выйти</a>
        <?php else: ?>
            <h3>Вы не авторизованы</h3>
        <?php endif; ?>

        <a class="nav-link" href="passwordAdd.php">Перейти к форме авторизации</a>
    </div>
</body>

</html>