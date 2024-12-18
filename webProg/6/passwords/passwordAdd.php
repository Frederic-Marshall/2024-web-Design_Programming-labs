<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Применение пароля</title>
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

        .form-container {
            display: flex;
            justify-content: center;
            margin-top: 40px;
        }

        form {
            display: flex;
            flex-direction: column;
            border: 2px solid #007BFF;
            border-radius: 10px;
            padding: 20px;
            background-color: white;
            width: 300px;
        }

        label {
            margin-bottom: 10px;
            font-weight: bold;
        }

        .input {
            margin-bottom: 20px;
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        .submit {
            background-color: #28a745;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }

        .submit:hover {
            background-color: #218838;
        }

        .nav-link {
            display: inline-block;
            margin: 20px;
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-size: 16px;
        }

        .nav-link:hover {
            background-color: #0056b3;
        }

        h2 {
            text-align: center;
            color: #333;
        }
    </style>
</head>

<body>

    <?php
    session_start();

    if (isset($_SESSION['res'])) {
        echo "<div class='message'>" . htmlspecialchars($_SESSION['res']) . "</div>";
        unset($_SESSION['res']);
    }
    ?>

    <h2>Эту страницу может видеть любой пользователь</h2>

    <div class="form-container">
        <form method="post">
            <label for="login">Введите логин:</label>
            <input class="input" type="text" name="login" id="login">

            <label for="password">Введите пароль:</label>
            <input class="input" type="password" name="password" id="password">

            <button class="submit" type="submit">Подтвердить</button>
        </form>
    </div>

    <div style="text-align: center;">
        <a class="nav-link" href="secret.php">Для авторизированных</a>
        <a class="nav-link" href="../index.html">К списку</a>
    </div>

    <?php
    $login = 'manager';
    $password = '123';

    if (!empty($_POST)) {
        if ($_POST['login'] === $login && $_POST['password'] === $password) {
            $_SESSION['auth'] = 1;
            $_SESSION['res'] = 'Успешно: Вы авторизованы!';
            header("Location: secret.php");
            exit;
        } else {
            $_SESSION['res'] = 'Ошибка: Неверный логин или пароль.';
            header("Location: passwordAdd.php");
            exit;
        }
    }
    ?>
</body>

</html>