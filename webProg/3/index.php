<head>
    <title>Условные операторы, циклы, массивы в PHP</title>
</head>
<?php

echo "<h2>Цикл while</h2>";
$i = 1;

while ($i <= 10) {
    echo "Пункт " . $i . "<br />";
    $i++;
}


echo "<h2>Пример с таблицей</h2>";

echo "<table border='1' width='300'>";

$tr = 1;
while ($tr <= 10) {
    echo "<tr>";
    $td = 1;
    while ($td <= 20) {
        echo "<td>" . $td * $tr . "</td>";
        $td++; // $td = $td + 1;
    }

    echo "</tr>";
    $tr++;
}

echo "</table>";


echo "<h2>Цикл do-while</h2>";

$i = 1;
do {
    echo "Пункт " . $i . "<br />";
    $i++;
} while ($i <= 20);


echo "<h2>Задание с select</h2>";

echo "<form>";

$ye = 1900;
echo "<select style='width: 100px'>";
while ($ye <= 2021) {
    echo "<option>" . $ye . "</option>";
    $ye++;
}
echo "</select>";

echo "</form>";


echo "<h2>Задание с table</h2>";
echo "<table border='2' width='1000'>";

$tr = 1;
while ($tr <= 10) {
    echo "<tr>";
    $td = 1;
    while ($td <= 10) {
        echo "<td> $tr * $td = " . $td * $tr . "</td>";
        $td++;
    }
    echo "</tr>";
    $tr++;
}

echo "</table>";


echo "<h2>Цикл for</h2>";
echo '<table border="1" width="1000">';
for ($tr = 1; $tr < 10; $tr++) {
    echo "<tr>";
    for ($td = 1; $td < 10; $td++) {
        echo "<td>$td * $tr = " . $td * $tr . "</td>";
    }
    echo "</tr>";
}
echo '</table>';


echo "<h2>Оператор switch</h2>";
$var = 5;
switch ($var) {
    case 1:
        echo $var;
        break;

    case 2:
        echo $var;
        break;

    case 3:
        echo $var;
        break;

    case 4:
        echo $var;
        break;

    default:
        echo "Не угадал :(";
}


echo "<h2>Оператор continue</h2>";
echo "<ul>";
for ($i = 1; $i <= 15; $i++) {
    if (!($i % 5)) {
        continue;
    }

    echo "<li>" . $i . "</li>";
}
echo "</ul>";


echo "<h2>Оператор break</h2>";
$i = 1;
while (true) {
    echo "$i<br>";
    while (true) {
        echo "$i<br>";
        if ($i == 20) {
            echo 'Число найдено!';
            break 2;

        }
        $i++;
    }
}


echo "<h2>Оператор match</h2>";
$d = 2;
$res = match ($d) {
    1 => "One",
    2 => "Two",
    3 => "Three",
    4 => "Four",
    5 => "Fife",
    default => "None",
};
echo $res;
$s = 12;
$res2 = match ($s) {
    1 => "One",
    2 => "Two",
    3 => "Three",
    4 => "Four",
    5 => "Fife",
    default => "None",
};
echo $res2;

echo "<h2>Массивы</h2>";
$arrTest = [
    1 => 'Kravtsov',
    3 => 'Demin',
];
var_dump($arrTest);
echo "<h3>Добавление элемента в массив</h3>";
$arrTest[2] = "Novikov";
var_dump($arrTest);


echo "<h2>Многомерный массив</h2>";
$products = [
    [
        "id" => "1",
        "name" => "Notebook b15",
        "price" => "150000",
        "qty" => "100"
    ],
    [
        "id" => "2",
        "name" => "Vivobook s25",
        "price" => "110100",
        "qty" => "100"
    ]
];
print_r($products);


echo "<h2>Цикл foreach</h2>";
$goods = [1, 2, 12, 114, 121];
foreach ($goods as $good) {
    echo "Номер товара: " . $good . "<br>";
}


echo "<h2>Самостоятельное задание 1</h2>";
$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
echo "<h3>Без continue</h3>";
for ($t = 1; $t <= 10; $t += 2) {
    echo $nums[$t] . "<br>";
}
echo "<h3>С continue</h3>";
for ($t = 1; $t <= 10; $t += 2) {
    if ($nums[$t] % 2 != 0) {
        continue;
    }
    echo $nums[$t] . "<br>";
}


echo "<h2>Самостоятельное задание 2</h2>";
$productsArray = [
    [
        "id" => "1",
        "name" => "Notebook b15",
        "price" => "150000",
        "qty" => "100"
    ],
    [
        "id" => "2",
        "name" => "Vivobook s25",
        "price" => "100",
        "qty" => "100"
    ]
];
echo "<h2>С for</h2>";
for ($i = 0; $i < count($productsArray); $i++) {
    if ($productsArray[$i]["price"] < 120) {
        $productsArray[$i]["price"] += 15;
    }
}
// echo "<h2>С foreach</h2>";
// foreach ($productsArray as &$array) {
//     $array['price'] < 120 ? $array['price'] += 15 : $array['price'];
// }
echo "<pre>" . print_r($productsArray, 1) . "</pre>";