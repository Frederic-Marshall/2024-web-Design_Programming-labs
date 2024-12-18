<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Работа с сессиями - Страница 1</title>
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

    ob_start(); // Для красивого отображения в var_dump
    var_dump($_SESSION);
    $sessionInfo = ob_get_clean();

    $_SESSION['count'] = isset($_SESSION['count']) ? ++$_SESSION['count'] : 1;
    ?>

    <div class="messages">
        <h3>Отладочная информация:</h3>
        <pre><?= $sessionInfo ?></pre>
    </div>

    <div class="container">
        <a href="sessions2.php">На стр. 2</a>
        <a href="../index.html">К списку</a>
    </div>

</body>

</html>