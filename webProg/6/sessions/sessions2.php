<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Работа с сессиями - Страница 2</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            flex-direction: column;
        }

        .messages {
            background-color: #e0e0e0;
            color: #333;
            width: 80%;
            max-width: 500px;
            margin: 20px auto;
            padding: 15px 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            font-size: 14px;
            word-wrap: break-word;
        }

        .container {
            text-align: center;
            background-color: white;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        .container h3 {
            color: #007BFF;
            margin-bottom: 20px;
            font-size: 20px;
        }

        .container a {
            display: block;
            margin: 15px 0;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 7px;
            font-size: 18px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .container a:hover {
            background-color: #4a148c;
            transform: translateY(-3px);
        }

        .container a:active {
            background-color: #38006b;
        }
    </style>
</head>

<body>

    <?php
    session_start();

    $visitCountMessage = !empty($_SESSION['count'])
        ? "Вы посетили страницу index {$_SESSION['count']} раз(а)"
        : "Нет данных о посещениях.";
    ?>

    <div class="messages">
        <h3>Информация о посещениях:</h3>
        <p><?= $visitCountMessage ?></p>
    </div>

    <div class="container">
        <a href="sessions.php">На главную</a>
    </div>

</body>

</html>