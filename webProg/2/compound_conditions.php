<?php

echo "<h4>Составне условия</h4>";
$a = (3 == 3) && (3 < 2);
var_dump($a);
$a = (3 == 3) and (3 < 2);
var_dump($a);
$a = (2 == 3) || (3 > 2);
var_dump($a);
$a = (2 == 3) or (3 > 2);
var_dump($a);
echo "<hr>";

