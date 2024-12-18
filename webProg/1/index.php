<!DOCTYPE html>
<html>

<head>
    <title>Установка веб-сервера. Основы синтаксиса</title>
</head>

<body>

    Проверка данных

    <?php

    echo "Запущен";

    /*
     * Это многострочный 
     * комментарий
     */

    //  Это однострочный комментарий
    ?>

    <?php $checkAccess = "Доступ разрешен"; ?>
    <h1><?php echo $checkAccess; ?></h1>

    <?php var_dump($checkAccess); ?>

</body>

</html>