<?php

var_dump(copy('file.txt', 'upload/file.txt'));

if (file_exists(__DIR__ . '/upload/file2.txt')) {
    echo 'OK';
} else {
    echo 'NO';
}

$file = file_get_contents('file.txt');
var_dump(file_put_contents('file1.txt', $file, FILE_APPEND));

file_put_contents('file.txt', '12345/n12345');

print_r(file('file1.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES));

move_uploaded_file('upload/file.txt', 'file.txt');

var_dump(rename(__DIR__ . '/file2.txt', __DIR__ . '/upload/file3.txt'));

var_dump(mkdir('test', 0644));
var_dump(rmdir('test'));
var_dump(@unlink(__DIR__ . '/upload/file3.txt'));









// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// $db = mysqli_connect('localhost', 'root', '', 'world') or die('Error connection');

// $res = mysqli_query($db, "SELECT Code, Name FROM country LIMIT 10");
// print_r(mysqli_fetch_all($res, MYSQLI_ASSOC));

// while ($row = mysqli_fetch_assoc($res)) {
//   echo "Код страны:{$row['Code']}/Страна:{$row['Name']}<br>";
// }

// $name = "И'ванов";
// $name = mysqli_real_escape_string($db, $name);
// var_dump($name);

// $db = mysqli_connect('localhost', 'root', '', 'users') or die('Error connection');


// $login = 'NewCountry';
// $pass = "29AdsivbliLI";

// $query = sprintf("INSERT INTO users(login, pass) VALUES ('%s',%s)", mysqli_real_escape_string($db, $login), (str) $pass);
// var_dump(mysqli_query($db, $query));

// $login2 = 'Петров';
// $pass2 = 'wkeigq25';

// $query = sprintf(
//   "UPDATE users SET login='%s', pass='%s' WHERE id=6",
//   mysqli_real_escape_string($db, $login2),
//   mysqli_real_escape_string($db, $pass2)
// );
// var_dump(mysqli_query($db, $query));

// var_dump(mysqli_query($db, "DELETE FROM users WHERE id=6"));