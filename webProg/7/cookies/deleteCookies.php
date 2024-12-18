<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Удаление Cookies</title>
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
    </style>
</head>

<body>
    <h3>Удаление cookies (с теми же параметрами, что и установка)</h3>

    <?php
    setcookie('test', 'FOR_TEST', path: '/');
    setcookie('test', '', ['expires' => time() - 3600, 'path' => '/']);
    ?>

    <p>Cookie успешно удалена. Проверьте изменения в инструментах разработчика.</p>
</body>

</html>
