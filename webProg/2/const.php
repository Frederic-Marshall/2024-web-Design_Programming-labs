<?php

echo "<h4>Объявление переменных</h4>";
define("CONST_1", "Значение CONST_1");
echo CONST_1;

const CONST_2 = "Значение CONST_2";
var_dump(CONST_2);

const NAME = "Олег";
echo "Привет, {NAME}";
echo "Привет, " . NAME;
