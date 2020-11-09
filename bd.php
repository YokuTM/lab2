<html>
<head> <title> Сведения о прользователях сайта </title> </head>
<body>
<?php
$link = mysqli_connect("localhost", "root", "1234567", "users");

if (!$link) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Соединение с MySQL установлено!" . PHP_EOL;
?>
</body> </html>
