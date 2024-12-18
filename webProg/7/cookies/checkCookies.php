<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Проверка Cookies</title>
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

        a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            margin-top: 20px;
        }

        a:hover {
            background-color: #0056b3;
        }

        p {
            font-size: 16px;
            color: #495057;
        }
    </style>
</head>

<body>
    <h3>Проверка cookies на существование</h3>

    <?php
    setcookie('test', 'FOR_TEST', path: '/');

    if (isset($_GET['do']) && $_GET['do'] == 'reset') {
        setcookie('count', '', time() - 3600, '/');
        header("Location: checkCookie.php");
        die;
    }
    ?>

    <p>Cookie "test" установлена. Вы можете сбросить cookie файлы.</p>
    <a href="checkCookies.php?do=reset">Сбросить cookie файлы</a>
</body>

</html>