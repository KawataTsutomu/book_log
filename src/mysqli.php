<?php

$link = mysqli_connect('db', 'book_log', 'pass', 'book_log');

//接続できなかった場合にエラーメッセーを表示
if (!$link) {
    echo 'Error: データベースに接続できません' . PHP_EOL;
    echo 'Debugging error: ' . mysqli_connect_error() . PHP_EOL;
    exit;
}
echo 'データベースに接続できました' . PHP_EOL;

$sql = <<<EOT
INSERT INTO companies(
    name,

) VALUES (
    ’SmartHR inc’
)
EOT;

$link = mysqli_connect('db', 'book_log', 'pass', 'book_log');
mysqli_query($link, $sql);



mysqli_close($link);
echo 'データベースとの接続を切断しました' . PHP_EOL;
