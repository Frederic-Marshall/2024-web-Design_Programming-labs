<?php
$checkAccess = "true";

if ($checkAccess == "true") {
    echo "Доступ разрешен!<br />";
} elseif ($checkAccess == "undefined") {
    echo "Неизвестная ошибка!";
} elseif ($checkAccess == "false") {
    echo "Доступ запрещен!<br />";
}
