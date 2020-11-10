<?php
$server = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'users';
 
$mysql = new mysqli($server, $db_user, $db_pass, $db_name);
if ($mysql->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysql->connect_errno . ") " . $mysql->connect_error;
}
if (!$mysql->set_charset("utf8")) {
    printf("Ошибка при загрузке набора символов utf8: %s\n", $mysql->error);
}
?>
