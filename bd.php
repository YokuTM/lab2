<html>
<head> <title> Сведения о прользователях сайта </title> </head>
<body>
<?php
 mysqli_connect("localhost/Tools/phpMyAdmin/index.php?db=users&token=da2353399f73c23341e733f0c3299e4c", "root") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
 mysqli_query('SET NAMES cp1251'); // тип кодировки
 // подключение к базе данных:
 mysqli_select_db("users") or die("Нет такой таблицы!");
?>
</body> </html>
