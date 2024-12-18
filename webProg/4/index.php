<head>
    <title>Функции PHP</title>
</head>

<?php

echo "<h2>Создание функции</h2>";
function createFunc()
{
    echo "<h4>Hello, friend!</h4>";
}
createFunc();


echo "<h2>Сохранение переменной в локальной области видимости</h2>";
function localVar()
{
    static $var = 0;
    echo $var;
    $var++;
}
localVar();
localVar();
localVar();
localVar();
localVar();


echo "<h2>Передача аргументов не по порядку</h2>";
function sum($arg1, $arg2, $arg3)
{
    return ($arg2 * $arg1) + $arg3;
}
echo sum(arg2: 3, arg3: 4, arg1: 2);



echo '<p>Напишите функцию get_count($arr), принимающую
параметром массив, которая будет возвращать кол-во
элементов, полученного массива</p>';
$arr = [1, 2, 3, 4, 5, 6, 10, 12];
function get_count($array)
{
    echo "<b>get_count function start</b><br>" . count($array);
}
get_count($arr);


echo "<p>Напишите функцию, принимающую 2 параметра,
которая выведет таблицу умножения по полученным множителям</p>";
function table($a, $b)
{
    echo '<table border="1" width="100%">';

    for ($tr = 1; $tr <= $b; $tr++) {
        echo "<tr>";

        for ($td = 1; $td <= $a; $td++) {
            echo "<td>" . $td . " * " . $tr . " = " . $td * $tr . "</td>";
        }

        echo "</tr>";
    }

    echo "</table>";
}

table(5, 8);


echo "<h2>Подключение файлов</h2>";

$data = require_once '../2/task.php';
echo $data;

$data = include_once '../2/task.php';
echo $data;

$nums = [
    "name" => "Высота",
    "value" => "13",
    "unit" => "см"
];

echo "<h2>Альтернативный синтаксис управляющих структур</h2>";
echo "<h3>Начинаю выводить цикл</h3>";
foreach ($nums as $num):
    echo "<p>$num</p>";
endforeach;
echo "<h3>Заканчиаю выводить цикл</h3>";

?>

<?php foreach ($nums as $num): ?>
    <?= "<p>$num</p>"; ?>
<?php endforeach; ?>


<?php

echo "<h3>Исходный массив</h3>";
$goods = [
    [
        'title' => 'Nokia',
        'price' => '100',
        'qty' => '10',
    ],
    [
        'title' => 'Sony',
        'price' => '120',
        'qty' => '7',
    ],
    [
        'title' => 'LG',
        'price' => '105',
        'qty' => '15',
    ],
];


echo "<h3>Функция count</h3>";
echo count($goods, 1);


echo "<h3>Функция array_count_values()</h3>";
$nums = [1, 2, 3, 4, 5, 6, 7, 8];
print_r(array_count_values($nums));


echo "<h3>Функция array_key_exists()</h3>";
$char = [
    'value' => '13',
    'name' => 'Высота',
    'unit' => 'Км',
];
echo 'Массив <b>$char</b> = <br>';
foreach ($char as $key => $value) {
    echo $key . " => " . $value . "<br>";
}
echo '<b>Ключ "ram" в массиве $char: </b>';
var_dump(array_key_exists('ram', $char));
echo '<b><br>Ключ "unit" в массиве $char: </b>';
var_dump(array_key_exists('unit', $char));


echo "<h3>Функция in_array()</h3>";
var_dump(in_array('13', $char));


echo "<h3>Функция array_search()</h3>";
var_dump(array_search('Км', $char));


echo "<h3>Функция array_keys()</h3>";
var_dump(array_keys($char));


echo "<h3>Функция array_values()</h3>";
var_dump(array_values($char));


echo "<h3>Функция array_unique()</h3>";
$pc = [
    "CPU" => "AMD",
    "Video" => "AMD",
    "Mem" => "12Gb"
];
var_dump(array_unique($pc));


echo "<h3>Самостоятельное задание</h3>";
echo "<p>Дан массив: Напишите свой вариант
функции count() - user_count() -
которая будет принимать
аргументом одномерный
массив и возвращать кол-во
элементов массива (длину
массива)
</p>";

$numbers = [
    1,
    2,
    3,
    1,
    4,
    5,
    3,
    2,
    6,
    7,
    7,
    8,
    8,
    9,
    2,
    5,
];
function user_count($nums)
{
    $k = 0;
    foreach ($nums as $num) {
        $k++;
    }
    echo $k;
}
user_count($numbers);


echo "<p>Дан массив:
Подсчитайте сумму значений
элементов массива.
Попробуйте написать 2
варианта решения: со
специальной функцией и без
нее</p>";


$numsForSecond = [
    1,
    2,
    3,
    1,
    4,
    5,
    3,
    2,
    6,
    7,
    7,
    8,
    8,
    9,
    2,
    5,
];
function summ($nums)
{
    $k = 0;
    foreach ($nums as $num) {
        $k += $num;
    }
    echo $k;
}
summ($numsForSecond);
echo "<br>" . array_sum($numsForSecond);

echo "<p>Создайте массив из чисел от 1
до 100. Попробуйте написать 2
варианта решения: со
специальной функцией и без
нее</p>";

$arrayTask = [];
for ($i = 1; $i <= 100; $i++) {
    $arrayTask[$i] = $i;
}
var_dump($arrayTask);
echo "<hr>";

$arrayTask2 = range(1, 100);
var_dump($arrayTask2);