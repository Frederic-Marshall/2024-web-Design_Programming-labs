<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Альтернативный синтаксис оператора</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            color: #343a40;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
        }

        h3 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        p {
            font-size: 16px;
            color: #495057;
        }

        .button-container {
            margin-top: 20px;
        }

        a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            margin: 5px;
            cursor: pointer;
        }

        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <h3>Альтернативный синтаксис оператора</h3>

    <?php
    isset($_COOKIE['count'])
        ? setcookie('count', ++$_COOKIE['count'], time() + 3600, '/')
        : setcookie('count', 1, time() + 3600, '/');

    echo "<p>Вы посещали эту страницу: " . ($_COOKIE['count'] ?? 1) . " раз(а).</p>";
    ?>

    <div class="button-container">
        <a href="alternative.php">Обновить страницу</a>
        <a href="../index.html">На главную</a>
    </div>
</body>

</html>