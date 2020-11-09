<html>
<head> <title> Сведения о прользователях сайта </title> </head>
<body>
<?php
 mysql_connect("localhost", "root") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
 mysql_query('SET NAMES cp1251'); // тип кодировки
 // подключение к базе данных:
 mysql_select_db("users") or die("Нет такой таблицы!");
?>
</body> </html>
