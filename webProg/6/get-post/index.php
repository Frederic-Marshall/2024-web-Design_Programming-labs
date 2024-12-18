<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Работа с GET, POST, FILES</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        .container {
            max-width: 700px;
            margin: 30px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h3 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            color: #555;
        }

        input,
        textarea,
        select,
        button {
            font-size: 16px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
        }

        textarea {
            resize: vertical;
        }

        button {
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        .file-upload-container {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .custom-button {
            background-color: #007BFF;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .custom-button:hover {
            background-color: #0056b3;
        }

        .file {
            opacity: 0;
            position: absolute;
            z-index: -1;
        }

        .file-name {
            font-style: italic;
            color: #666;
        }

        .errorMessage {
            background-color: red;
            color: white;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .successMessage {
            background-color: green;
            color: white;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        pre {
            background-color: #f4f4f4;
            padding: 10px;
            border-radius: 5px;
            overflow-x: auto;
        }

        .back-link {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            text-decoration: none;
            color: white;
            background-color: #007BFF;
            border-radius: 5px;
        }

        .back-link:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php

        // Обработка основной формы
        $errorMessages = [];
        $successMessage = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['send_form'])) {
            foreach ($_POST as $key => $value) {
                if (empty($value) && $key != 'send_form') {
                    $errorMessages[] = ucfirst($key) . " cannot be empty.";
                }
            }

            if (empty($errorMessages)) {
                $successMessage = "Данные успешно отправлены!";
            }
        }

        // Обработка формы загрузки файла
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
            if (!empty($_FILES)) {
                $uploadDir = 'upload/';
                $uploadFile = $uploadDir . basename($_FILES['file']['name']);

                if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {
                    $successMessage = "Файл успешно загружен!";
                } else {
                    $errorMessages[] = "Ошибка при загрузке файла.";
                }
            }
        }
        ?>

        <!-- Основная форма -->
        <form action="" method="post">
            <h3>Форма ввода данных</h3>

            <label for="name">Введите имя</label>
            <input id="name" type="text" name="name" placeholder="Имя">

            <label for="email">Введите почту</label>
            <input id="email" type="email" name="email" placeholder="Еmail">

            <label for="message">Введите сообщение</label>
            <textarea id="message" name="message" placeholder="Сообщение"></textarea>

            <label for="vars">Выберите варианты</label>
            <select id="vars" name="vars[]" multiple>
                <option value="v1">Вариант 1</option>
                <option value="v2">Вариант 2</option>
                <option value="v3">Вариант 3</option>
            </select>

            <button type="submit" name="send_form">Отправить</button>
        </form>

        <!-- Сообщения об ошибках -->
        <?php if (!empty($errorMessages)): ?>
            <?php foreach ($errorMessages as $err): ?>
                <div class="errorMessage"><?= $err; ?></div>
            <?php endforeach; ?>
        <?php endif; ?>

        <h3>Данные</h3>
        <pre><?= htmlspecialchars(print_r($_POST, true)); ?></pre>

        <form action="" method="post" enctype="multipart/form-data">
            <h3>Форма загрузки файла</h3>
            <div class="file-upload-container">
                <label class="custom-button" for="file">Выберите файл</label>
                <input class="file" type="file" id="file" name="file">
                <span class="file-name">Файл не выбран</span>
            </div>
            <button type="submit">Загрузить</button>
        </form>

        <?php if (!empty($successMessage)): ?>
            <div class="successMessage"><?= $successMessage; ?></div>
        <?php endif; ?>

        <h3>Файлы</h3>
        <pre><?= htmlspecialchars(print_r($_FILES, true)); ?></pre>

        <a class="back-link" href="../index.html">К списку</a>
    </div>

    <script>
        // Отображение имени выбранного файла
        const fileInput = document.getElementById('file');
        const fileNameDisplay = document.querySelector('.file-name');

        fileInput.addEventListener('change', function () {
            fileNameDisplay.textContent = fileInput.files[0]?.name || 'Файл не выбран';
        });
    </script>
</body>

</html>