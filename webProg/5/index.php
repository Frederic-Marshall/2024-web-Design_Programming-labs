<head>
    <title>Функции для работы со строками</title>
</head>
<center>
    <h2>Функции для работы со строками</h2>
</center>
<div style="display:flex; background-color: aqua; justify-content: center; border-radius: 15px;">
    <ul style="list-style-type: '- ';">
        <li><b>strlen</b> — Возвращает длину строки</li>
        <li><b>explode</b> — Разбивает строку с помощью разделителя</li>
        <li><b>implode</b> — Объединяет элементы массива в строку</li>
        <li><b>htmlspecialchars</b> — Преобразует специальные символы в HTML-сущности</li>
        <li><b>htmlentities</b> — Преобразует все возможные символы в соответствующие HTML-сущности</li>
        <li><b>ltrim</b> — Удаляет пробелы (или другие символы) из начала строки</li>
        <li><b>rtrim</b> — Удаляет пробелы (или другие символы) из конца строки</li>
        <li><b>trim</b> — Удаляет пробелы (или другие символы) из начала и конца строки</li>
    </ul>

    <ul style="list-style-type: '- ';">
        <li><b>nl2br</b> — Вставляет HTML-код разрыва строки перед каждым переводом строки</li>
        <li><b>str_split</b> — Преобразует строку в массив</li>
        <li><b>strpos</b> — Возвращает позицию первого вхождения подстроки</li>
        <li><b>stripos</b> — Возвращает позицию первого вхождения подстроки без учёта регистра</li>
        <li><b>strtolower</b> — Преобразует строку в нижний регистр</li>
        <li><b>strtoupper</b> — Преобразует строку в верхний регистр</li>
        <li><b>substr</b> — Возвращает подстроку</li>
    </ul>
</div>
<?php

echo "<h2>Функция strlen</h2>";
$str = 'Hello!';
echo "Строка: '" . $str . "'. Количество строк: " . strlen($str);


echo "<h2>Функция explode</h2>";
$string = "Привет, друг!";
$arr = explode(',', $string);
echo "Строка: '" . $string . "'. Массив: ";
var_dump($arr);


echo "<h2>Функция implode</h2>";
echo "Строка: '" . $string . "'. Массив: ";
var_dump($arr);
echo "<br />Работа функции <b>implode</b>: " . implode($arr);


echo "<h2>Функция htmlspecialchars</h2>";
$stroke = "<h2>Здравствуй</h2>";
echo "Работа функции <b>htmlspecialchars</b>: " . htmlspecialchars($stroke);


echo "<h2>Функция htmlentities</h2>";
echo "Работа функции <b>htmlentities</b>: " . htmlentities($stroke);


echo "<h2>Функции ltrim / trim / rtrim</h2>";
$hiStr = " Привет ! ";
echo "Работа функции <b>ltrim</b>: '" . ltrim($hiStr) . "'";
echo "<br>Работа функции <b>trim</b>: '" . trim($hiStr) . "'";
echo "<br>Работа функции <b>rtrim</b>: '";
$var = rtrim($hiStr);
echo $var . "'";


echo "<h2>Функция nl2br</h2>";
$str1 = "Привет ! \n Скиталец!";
echo "Работа функции <b>nl2br</b>:<br>- " . nl2br($str1);


echo "<h2>Функция str_split</h2>";
echo "Работа функции <b>str_split</b>:<br>";
print_r(str_split($str));


echo "<h2>Функция strpos</h2>";
$strposStr = "Hello, John";
$strposSubStr = "o";
echo "Работа функции <b>strpos</b>: ";
echo strpos($strposStr, $strposSubStr);


echo "<h2>Функция stripos</h2>";
$striposStr = "Hello, John";
$striposSubStr = "O";
echo "Работа функции <b>stripos</b>: ";
echo stripos($striposStr, $striposSubStr);


echo "<h2>Функция strtolower</h2>";
$strToLower = "Мария Привет";
$strToLower = mb_strtolower($strToLower, 'UTF-8');
echo "Работа функции <b>strtolower</b>: " . $strToLower;


echo "<h2>Функция strtoupper</h2>";
$strToUpper = "Мария Привет";
$strToUpper = mb_strtoupper($strToUpper, 'UTF-8');
echo "Работа функции <b>strtoupper</b>: " . $strToUpper;


echo "<h2>Функция substr</h2>";
$str2 = "  Привет, друг!";
echo "Работа функции <b>substr</b>:<br>";
var_dump(substr($str2, 2, 12));

?>

<h2>Самостоятельные задания</h2>
<hr>
<ol>
    <li style="width: 500px;">
        Напишите функцию str_count($str, $substr), которая принимает 2 аргумента: строку и подстроку. Функция должна
        возвращать колво вхождений подстроки в строку. Пример: 'hello', ‘e' => 1
    </li>
</ol>
<p>Выполнение: </p>
<?php
function str_count($str, $substr)
{
    print_r(substr_count($str, $substr));
}
echo "Функция str_count получила аргументы 'hellohello heeello', 'el' соответственно: ";
str_count('hellohello heeello', 'el');
?>


<br><br>
<hr>
<ol start="2">
    <li style="width: 500px;">
        Напишите функцию no_space(string $str): string, которая
        принимает аргументом строку и возвращает строку с удаленными
        пробелами
    </li>
</ol>
<p>Выполнение: </p>
<?php
$stringNoSpace = "   Hello! My name is John   ";
function no_space(string $str): string
{
    return trim($str);
}
echo "Функция no_space получила аргумент '{$stringNoSpace}': ";
echo '"';
echo no_space($stringNoSpace);
echo '"';
?>


<br><br>
<hr>
<ol start="3">
    <li style="width: 500px;">
        Напишите функцию max_number(int $num): int, которая
        принимает аргументом число и возвращает максимальное число
        из цифр, полученного аргумента. Пример: 123 => 321
    </li>
</ol>
<p>Выполнение: </p>
<?php
$strMaxNumber = 169;

function max_count(int $num): int
{
    $splitStr = str_split((string) $num);
    rsort($splitStr);
    return (int) implode('', $splitStr);
}
echo "Функция max_count получила аргумент '{$strMaxNumber}': ";
echo max_count($strMaxNumber);
?>