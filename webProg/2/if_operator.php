<?php
$checkAccess = true;

if ($checkAccess == true) {
    echo "Доступ разрешен<br />";
} else {
    echo "Доступ запрещен<br />";
}

echo 'Также можно использовать не 
      if ($checkAccess == true), 
      а if ($checkAccess)' . '<br />';

if ($checkAccess) {
    echo "Доступ разрешен<br />";
} else {
    echo "Доступ запрещен<br />";
}